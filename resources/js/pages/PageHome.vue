<template>
    <div>
    <h1>Homepage from Vue</h1>
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
