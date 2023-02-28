<template>
    <section class="container">


        <div v-if="results">
            <div class="row">
                <div class="col-6 card_apt">
                    <img
                        :src="results.picture"
                        class="card-img-top"
                        :alt="results.title"
                    >
                </div>
                <div class="col-5 card_apt">
                    <h1>{{ slug }}</h1>
                    <div>Rooms: {{ results.n_rooms }}</div>
                    <div> Beds: {{ results.n_beds }}</div>
                    <font-awesome-icon icon="fa-solid fa-house" />
                    <div>Bathrooms: {{ results.n_bathrooms }}</div>
                    <div>Square Meters: {{ results.square_meters }}</div>
                    <div>City: {{ results.city }}</div>
                    <div>Address: {{ results.address }} N. {{ results.apartment_number }}</div>
                </div>
            </div>

        </div>


        <!-- <div v-else-if="!results">
            <Page404/>
        </div> -->
        <div v-else>
            <img class="d-flex m-auto" src="https://media.tenor.com/OTzJy4d4xGMAAAAC/computer-stick-man.gif" alt="gif">
        </div>
    </section>
</template>

<script>
// import Page404 from './Page404.vue';

export default ({
    data() {
        return {
            results: null,
            urlApi: ('http://localhost:8000/api/apartments/' + this.slug),
        };
    },

    components: {
        // Page404,
    },

    created() {
        axios.get(this.urlApi).then((axiosResponse) => {
            if (axiosResponse.data.success) {
                this.results = axiosResponse.data.results;
            }
        });
    },

    props: [
        'slug',
    ]

})
</script>

<style lang="scss" scoped>

    .card_apt{
        font-weight: 500;
        font-size: 17px;
    }

    .card-img-top{
        border-radius: 5px;
    }

    .row > *{
        padding-left: 0;
        padding-right: 0;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .row{
        display: flex;
        justify-content: center;
        gap: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        background-color:white;
        border-radius: 17px;
    }

    h1{
        color: red;
        font-size: 40px;
    }

</style>
