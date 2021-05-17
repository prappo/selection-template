<template>
  <div>
    <div class="text-center my-5">
      <h1 class="text-joie_text header-text">find your stroller</h1>
      <h2 class="header-subtitle text-joie_text-light">
        stroll about with a perfect match
      </h2>
    </div>
    <div
      class="banner-image bg-scroll"
      style="background-image: url('http://localhost:3000/banner.jpg')"
    >
      <div style="height: 34rem"></div>
    </div>
    <div class="container mx-auto">
      <h1 class="text-joie_text header-text text-center my-5">
        what kind of stroller are you looking for?
      </h1>
      <h2 class="header-subtitle text-joie_text-light italic text-center">
        please choose one
      </h2>
    </div>
    <div class="container mx-auto">
      <div class="grid md:grid-flow-col sm:grid-flow-row gap-12 mx-10 my-10">
        <label
          
          v-for="stroller in strollers"
          :key="stroller.id"
          class="flex cursor-pointer w-full space-x-10 md:space-x-0 justify-between flex-row-reverse md:flex-col md:justify-items-center items-center md:py-20 border-2 border-joie_text_light"
        >
          <img class="w-40" :src="stroller.image" />
          <div
            style="
              font-size: 19px;
              font-weight: 600;
              font-family: 'GothamRounded-Medium';
            "
            class="text-joie_text_dark"
          >
            {{ stroller.name }}
          </div>
          <input
            v-model="picked"
            :value="stroller.name"
            name="stroller"
            class="hidden"
            type="radio"
          />
        </label>
      </div>
    </div>

    <div class="container mx-auto">
      <p style="font-size: 23px; font-family: 'GothamRounded-Medium';">
        Für dein Neugeborenes bietet sich ein Kombikinderwagen mit Babywanne an,
        den du später zum Sportwagen umbauen kannst. Der robuste, aber trotzdem
        wendige Sportwagen kommt zum Einsatz, sobald dein Nachwuchs sitzen kann
        und begleitet dich tagein tagaus und oft jahrelang. Ein leichter Buggy
        hingegen ist kleiner und wird meist eher sporadisch genutzt, auch als
        Zweitwagen oder für den Urlaub. Geschwisterwagen können zwei Kinder –
        egal ob gleichen oder unterschiedlichen Alters – gleichzeitig
        transportieren.
      </p>
    </div>

    <h1>result : {{ picked }}</h1>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isActive: false,
      picked: null,
      strollers: [
        {
          id: 1,
          name: "param",
          image: "/pram_sky.png",
        },
        {
          id: 2,
          name: "stroller",
          image: "/pram_sky.png",
        },
        {
          id: 3,
          name: "double",
          image: "/pram_sky.png",
        },
      ],
    };
  },

  methods: {
    
  },
};
</script>