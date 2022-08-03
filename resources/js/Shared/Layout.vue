<template>

<nav id="navbar-things" class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">Jan's Almanac of Random Things</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <Link class="nav-link" :class="{'selected' : $page.component=='Home'}" href="/">Home</Link>
      </li>

      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"  data-bs-toggle="dropdown" aria-expanded="false">
              Random Things
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='Cocktails'}" href="/cocktails">Cocktails</Link>
              </li>
              <li class="nav-item">
                <Link class="nav-link" :class="{'selected' : $page.component=='Beers'}" href="/beers">Beer</Link>
              </li>
            </ul>
          </li>
        </ul>
      </div>
   
     
    </ul>
    
  </div>
  
</nav>
  
<slot/>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
#navbar-things {

}

.selected {
  color: black;
  font-weight: bold;
}

#navbarSupportedContent{
  margin-left: 40%;
}

</style>