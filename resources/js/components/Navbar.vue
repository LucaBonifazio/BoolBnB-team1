<template>
    <section>
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <router-link :to="{ name: 'homepage' }" class="navbar-brand logo">BoolBnB</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- <li>
                            <a href="http://localhost:8000/admin" class="nav-link">{{ user.name }}</a>
                        </li> -->
                        <li class="nav-item">
                            <router-link :to="{ name: 'apartments' }" class="nav-link">Apartments</router-link>
                        </li>
                        <li>
                            <a href="http://localhost:8000/admin" class="nav-link">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

    .logo{
        font-size: 2rem;
        font-weight: 700;
        color: red;
        text-decoration: none;
    }

    .navbar{
        box-shadow: rgb(148 148 148 / 35%) 0px 5px 15px;
        margin-bottom: 30px;
        background-color: white;
    }

</style>
