<template>
    <section class="container">
        <div v-if="results">
            <h1>{{ slug }}</h1>
            <img
                :src="results.picture"
                class="card-img-top"
                :alt="results.title"
            >
            <h5>{{ results.title }}</h5>
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

</style>
