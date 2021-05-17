<template>
  <div class="flex flex-col h-screen">
    <Finder class="flex-grow"></Finder>
  </div>
</template>

<script setup>
import Header from "./components/Header.vue";
import Hero from "./components/Hero.vue";
import Finder from "./components/Finder.vue";
import Footer from "./components/Footer.vue";
</script>

<style>
body{
  font-family: "GothamRounded-Medium";
}
.header-text {
  font-size: 49px;
  font-family: "GothamRounded-Medium";
}
.header-subtitle {
  font-size: 27px;
  font-family: "GothamRounded-Medium";
  font-weight: thin;

}

.banner-image{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 18%;
}
</style>