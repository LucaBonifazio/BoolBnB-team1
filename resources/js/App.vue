<template>
    <div>
        <header>
            <Navbar/>
        </header>

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import Navbar from './components/Navbar';

export default {
  name: 'App',
  components: {
    Navbar,
  },
}
</script>

<style lang="scss">
    @import '~bootstrap/scss/bootstrap';

</style>

<!-- LBnYIIJKuwBHbW3xyrFE1uXJSVAINMJW    API KEY TOM TOM-->
