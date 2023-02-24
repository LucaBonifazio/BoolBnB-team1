<template>
    <section class="container">
        <h1>Apartments</h1>
        <div class="form-outline">
            <input type="text" id="form12" class="form-control" placeholder="Search apartments" v-model="searchTerm"/>
            <label class="form-label" for="form12"></label>
        </div>
        <div class="row g-3" v-if="results">
            <div
                v-for="item in filteredItems"
                :key="item.id"
                class="col-sm-6 col-md-4"
            >
                <div class="card h-100">
                    <img
                        :src="item.picture"
                        class="card-img-top"
                        :alt="item.title"
                    />
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ item.title }}</h5>
                        <!-- <p class="card-text flex-grow-1">{{ item.excerpt }}</p> -->
                        <router-link :to="{ name: 'item', params: {slug: item.slug}}" class="btn btn-primary">Details</router-link>
                    </div>
                </div>
            </div>
            <nav class="mt-3">
                <ul class="pagination">
                    <li
                        class="page-item"
                        :class="{disabled: results.current_page == 1}"
                        @click="changePage(results.current_page - 1)"
                    >
                        <span class="page-link">Previous</span>
                    </li>
                    <li
                        v-for="page in results.last_page"
                        :key="page"
                        class="page-item"
                        :class="{active: results.current_page == page}"
                        @click="changePage(page)"
                    >
                        <span class="page-link" href="">{{ page }}</span>
                    </li>
                    <li
                        class="page-item"
                        :class="{disabled: results.current_page == results.last_page}"
                        @click="changePage(results.current_page + 1)"
                    >
                        <span class="page-link">Next</span>
                    </li>
                </ul>
            </nav>
        </div>
        <div v-else>
            <img class="d-flex m-auto" src="https://media.tenor.com/OTzJy4d4xGMAAAAC/computer-stick-man.gif" alt="gif">
        </div>
    </section>
</template>

<script>

export default {
    data() {
        return {
            results: null,
            searchTerm: ""
        };
    },
    methods: {
        changePage(page) {
        axios.get('/api/apartments?page=' + page)
                .then(response => this.results = response.data.results);
        }
    },
    created() {
        this.changePage(1);
    },

    computed: {
        filteredItems() {
            return this.results.data.filter(apartment => {
                return apartment.title.toLowerCase().includes(this.searchTerm.toLowerCase());
            });
        }
    }
};
</script>

<style lang="scss" scoped>

    .pagination{
        cursor: pointer,
    };

</style>
