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
  /* font-family: "GothamRounded-Medium"; */
  font-family: 'Gotham Rounded', sans-serif;
}
.bold{
  font-weight: 500;
}
.header-text {
  font-size: 49px;
  font-family: 'Gotham Rounded', sans-serif;
}
.header-subtitle {
  font-size: 27px;
  font-family: 'Gotham Rounded', sans-serif;
  font-weight: thin;
}

.banner-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 18%;
  height: 460px;
}

.stroller-image{
  filter: opacity(0.6);
}

.stroller-image:hover{
  filter: opacity(1);
}

.description {
  font-size: 23px;
  font-family: 'Gotham Rounded', sans-serif;
  font-weight: 100;
}

.stroller-box{
  width:300px;
  height: 430px;
}

@media (min-width: 320px) and (max-width: 480px) {
  /* mobile */
  .header-text {
    font-size: 30px;
    font-family: 'Gotham Rounded', sans-serif;
  }

  .stroller-box{
    width: 100%;
  }

  .stroller-holder{
    flex-direction: column;
  }

  .grid{
    padding-left: 20px;
    padding-right: 20px;;
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