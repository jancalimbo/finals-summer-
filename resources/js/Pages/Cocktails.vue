<template>
<h1>Cocktails</h1>  
<hr>

<ul>
  <li v-for="cocktail in cocktails" :key="cocktail.id">
    <Link class="cocktail-link" href="/details">{{ cocktail.name }}</Link>
    
  </li>
</ul>
</template>


<script setup>
import Layout from '../Shared/Layout.vue'
import { Link } from '@inertiajs/inertia-vue3'
</script>


<script>
export default {

  layout: Layout,
  props: {
    cocktails: Array
  }
}
</script>

<style scoped>
.cocktail-link{
  color: black;
}
</style>