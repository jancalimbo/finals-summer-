<template>
  <h1>Details</h1>
  <hr>
  <ul>
    <li v-for="cocktail in cocktails" :key="cocktail.id">
    {{ cocktail.name }}
    <hr>
    <p> &nbsp;&nbsp; &nbsp;&nbsp;
      {{ cocktail.strength }}
    </p>
    <p>
       {{ cocktail.preparation }}
    </p>
    <p>
      {{ cocktail.tips }}
    </p>
   

    
    </li>
  </ul>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>



<script>
export default {
  layout: Layout,
  props: {
    cocktails: Array
  }
}
</script>