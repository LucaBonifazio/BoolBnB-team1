<template>
    <div>
        <h1 class="text-center title">Welcome on BoolBnB</h1>
        <div class="grid h-100 container">
            <div v-for="apartment in arrRandom" :key="apartment.id" class="tile">
                <router-link :to="{ name: 'apartment', params: {slug: apartment.slug}}">
                    <img :src="apartment.uploaded_image ? '/storage/' + apartment.uploaded_image : apartment.picture" :alt="apartment.title" />
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            arrRandom: null,
        }
    },
    created() {
        axios.get('/api/apartments/random')
            .then(response => this.arrRandom = response.data.results);
    }
}
</script>

<style lang="scss" scoped>
    .grid {
        display: flex;
        flex-wrap: wrap;
    }
    .tile {
        flex: 0 0 calc(100% / 3);
        height: calc(100% / 3);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        transition: transform 1.5s;
    }

    .tile:hover{
        transform: scale(1.1);
    }
    .tile img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .title{
        font-size: 3rem;
        font-weight: 100;
        color: #ff0000;
        margin-bottom: 30px;
    }
</style>
