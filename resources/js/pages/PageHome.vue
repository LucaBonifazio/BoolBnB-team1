<template>
    <div class="p-1">
        <h1>Welcome on BoolBnB</h1>
        <div class="grid h-100">
            <div v-for="apartment in arrRandom" :key="apartment.id" class="tile">
                <router-link :to="{ name: 'apartment', params: {slug: apartment.slug}}">
                    <img :src="apartment.picture" :alt="apartment.title"/>
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
    }
    .tile img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
