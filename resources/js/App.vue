<template>
    <div class="container">
        <h1>Subida POS</h1>

        <p>
            <router-link :to="{ path: '/' }">Login</router-link> 
            <router-link :to="{ path: '/inventory' }">Inventory</router-link> 
            <router-link :to="{ path: '/pos' }">POS</router-link>
        </p>

        <div class="container">
             <router-view></router-view>
        </div>
    </div>
</template>
<style>
  /*  .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }*/
</style>
<script>
    export default {}
</script>