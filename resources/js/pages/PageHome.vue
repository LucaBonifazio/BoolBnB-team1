<template>
    <!-- <div>
        <h1 class="text-center title">Welcome on BoolBnB</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button v-for="(apartment, index) in arrRandom" :key="apartment.id" type="button"
                    :data-bs-target="'#carouselExampleSlidesOnly'" :data-bs-slide-to="index"
                    :class="{ active: index === 0 }" :aria-label="'Slide ' + (index + 1)">
                </button>
            </div>
            <div class="carousel-inner">
                <div v-for="(apartment, index) in arrRandom" :key="apartment.id" class="carousel-item"
                    :class="{ active: index === 0 }">
                    <router-link :to="{ name: 'apartment', params: { slug: apartment.slug } }">
                        <img :src="apartment.uploaded_image ? '/storage/' + apartment.uploaded_image : apartment.picture"
                            :alt="apartment.title" class="d-block w-100" />
                    </router-link>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ apartment.title }}</h5>
                        <p>{{ apartment.description }}</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> -->
    <div class="container">
                <h1 class="text-center title fontperintro" style="font-family: 'Caveat', cursive; color: #0087CA;">Welcome on BoolBnB</h1>
        <div class="container">

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                style="width: 600px; margin: 0 auto;">
                <div class="carousel-indicators">
                    <button v-for="(apartment, index) in arrRandom" :key="apartment.id" type="button"
                        :data-bs-target="'#carouselExampleSlidesOnly'" :data-bs-slide-to="index"
                        :class="{ active: index === 0 }" :aria-label="'Slide ' + (index + 1)">
                    </button>
                </div>
                <div class="carousel-inner">
                    <div v-for="(apartment, index) in arrRandom" :key="apartment.id" class="carousel-item"
                        :class="{ active: index === 0 }">
                        <router-link :to="{ name: 'apartment', params: { slug: apartment.slug } }">
                            <img :src="apartment.uploaded_image ? '/storage/' + apartment.uploaded_image : apartment.picture"
                                :alt="apartment.title" class="d-block w-100" />
                        </router-link>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ apartment.title }}</h5>
                            <p>{{ apartment.description }}</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- <div class="bugcontainer">
                <img src="../img/07619f8c085bb00de12478c5a31f1c8b.jpg" alt="">
            </div> -->
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
// .bugcontainer {
//     border: 2px solid green;
//     display: flex;
//     align-items: center;
//     justify-content: center;
// }


.container {
    max-width: 960px;
    margin: 0 auto;
}
.unodue {
    margin-top: 200px;
}

/* adjust the width of the carousel-inner class to match the width of the carousel */
.carousel-inner {
    width: 600px;
}

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

.tile:hover {
    transform: scale(1.1);
}

.tile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.title {
    font-size: 3rem;
    font-weight: 100;
    color: #ff0000;
    margin-bottom: 30px;
}
