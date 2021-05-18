<template>
  <div class="flex flex-col h-screen">
    <Finder></Finder>
  </div>
</template>

<script setup>
import Header from "./components/Header.vue";
import Hero from "./components/Hero.vue";
import Finder from "./components/Finder.vue";
import Footer from "./components/Footer.vue";

</script>

<style>
body {
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

.banner-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 18%;
  height: 550px;
}

.description {
  font-size: 23px;
  font-family: "GothamRounded-Medium";
  font-weight: 100;
}

@media (min-width: 320px) and (max-width: 480px) {
  /* mobile */
  .header-text {
    font-size: 30px;
    font-family: "GothamRounded-Medium";
  }

  .header-subtitle {
    display: none;
  }

  .reversible-section {
    display: flex;
    flex-direction: column-reverse;
  }

  .description {
    font-size: 15px;
    font-weight: 100 !important;
  }

  .banner-image {
    /* background-repeat: no-repeat;
    background-size: cover; */
    /* background-position: 50% 18%; */
    height: 120px;
  }

  .w-40{
    width: 8rem;
  }
}
</style>