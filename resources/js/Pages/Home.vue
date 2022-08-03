

<template>
  <h1>Home</h1>
  <p>{{ message }}</p>
</template>

<script setup>
import Layout from '../Shared/Layout.vue';
const message="Hi love you";
</script>

<script>
export default {
  layout: Layout
}
</script>

<style scoped>
body {
  background-image: url('colorful-home');
}
</style>