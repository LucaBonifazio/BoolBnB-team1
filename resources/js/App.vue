<template>
    <div>
        <header>
            <Navbar/>
        </header>

        <main>
            <router-view></router-view>
        </main>

        <footer>
            <Footer/>
        </footer>
    </div>
</template>

<script>
// import Navbar from './components/Navbar';
// import Footer from './components/Footer';

export default {
  name: 'App',
//   components: {
//     Navbar,
//     Footer,
//   },
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';

</style>

