<template>
  <div class="flex flex-col h-full">
    <Finder></Finder>
  </div>
</template>

<script setup>
import Finder from "./components/Finder.vue";
</script>

<style>
/* *{
  font-family: "Gotham Rounded Italic", sans-serif;
} */
#app {
  padding-top: 80px;
}

.border-2 {
  border: 2px solid #a5c8e1;
}
.border-2:hover {
  border: 2px solid #1b3d6f;
}
.joie-font {
  /* font-family: "GothamRounded-Medium"; */
  font-family: "Gotham Rounded Medium", sans-serif;
}
/* p,a{
  font-weight: 400;
} */
.bold {
  font-weight: 500;
}
.header-text {
  font-size: 49px;
  font-family: "Gotham Rounded Medium", sans-serif;
}
.header-subtitle {
  font-size: 27px;
  color: #808285;
  font-family: "Gotham Rounded", sans-serif;
  
  font-weight: thin;
}

.banner-image {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 18%;
  height: 460px;
}

.stroller-image {
  filter: opacity(0.4);
}

.stroller-image:hover {
  filter: opacity(1);
}

.description {
  font-size: 18px;
  font-family: "Gotham Rounded", sans-serif;
  font-weight: 100;
  color: #808285
}

.stroller-box {
  width: 300px;
  height: 300px;
}

.selected-item > div {

}

.hs {
  font-size: 20px;
  font-family: "Gotham Rounded Light", sans-serif;
  font-weight: lighter;
  color: #808285;
}
@media (min-width: 320px) and (max-width: 480px) {
  /* mobile */
  .selected-item{
    display: flex !important;
  }
  .selected-item > svg {
    margin-right: 10px;
  }
  #newSearch {
    display: flex;
    justify-content: center;
  }
  .selected-item-name {
    flex-grow: 1;
  }
  .selected-items {
    /* background-color: white !important; */
    padding: 10px !important;
  }
  .header-text {
    font-size: 30px;
    font-family: "Gotham Rounded", sans-serif;
  }

  .stroller-box {
    width: 100%;
    height: auto;
  }

  .stroller-name {
    padding: 0px !important;
    margin: 0px !important;
    text-align: left !important;
  }

  .stroller-description {
    text-align: left !important;
  }

  .stroller-text-section {
    display: flex;
    flex-direction: column;
  }

  .stroller-holder {
    flex-direction: column;
  }

  .grid {
    padding: 0px;
    margin: 0px;
    gap: 0px !important;
    /* padding-left: 20px;
    padding-right: 20px; */
  }

  .grid > label {
    transform: scale(0.85) !important
  }

  .header-subtitle {
    /* display: none; */
  }

  .reversible-section {
    /* display: flex;
    flex-direction: column-reverse; */
  }

  .reversible-row {
    display: flex;
    flex-direction:column-reverse !important;
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

  .w-40 {
    width: 8rem;
  }
}
</style>