<template>
  <div>
    <!-- First level start -->
    <div v-show="firstLevel">
      <div class="text-center my-5">
        <h1 class="text-joie_text header-text">find your stroller</h1>
        <h2 class="header-subtitle text-joie_text-light">
          stroll about with a perfect match
        </h2>
      </div>
      <div
        class="banner-image bg-scroll"
        style="background-image: url('http://localhost:3000/banner.jpg')"
      ></div>
      <div class="container mx-auto">
        <h1 class="text-joie_text header-text text-center my-5 mx-5">
          what kind of stroller are you looking for?
        </h1>
        <h2 class="header-subtitle text-joie_text-light italic text-center">
          please choose one
        </h2>
      </div>
      <div class="reversible-section">
        <div class="container mx-auto">
          <div
            class="grid md:grid-flow-col sm:grid-flow-row gap-12 md:mx-56 sm:mx-10 mx-10 my-10"
          >
            <label
              @click="changeLevel('next', stroller)"
              v-for="stroller in strollers"
              :key="stroller.id"
              class="flex cursor-pointer w-full space-x-10 md:space-x-0 justify-between flex-row-reverse md:flex-col md:justify-items-center items-center md:py-20 border-2 border-joie_text_light hover:border-joie_text_dark"
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
                :value="stroller"
                name="stroller"
                class="hidden"
                type="radio"
              />
            </label>
          </div>
        </div>

        <div class="container mx-auto">
          <p class="mx-10 description">
            Für dein Neugeborenes bietet sich ein Kombikinderwagen mit Babywanne
            an, den du später zum Sportwagen umbauen kannst. Der robuste, aber
            trotzdem wendige Sportwagen kommt zum Einsatz, sobald dein Nachwuchs
            sitzen kann und begleitet dich tagein tagaus und oft jahrelang. Ein
            leichter Buggy hingegen ist kleiner und wird meist eher sporadisch
            genutzt, auch als Zweitwagen oder für den Urlaub. Geschwisterwagen
            können zwei Kinder – egal ob gleichen oder unterschiedlichen Alters
            – gleichzeitig transportieren.
          </p>
        </div>
      </div>
    </div>
    <!-- First level end -->

    <!-- Next level start -->
    <div v-if="nextLevel">
      <a @click="changeLevel('first')" class="text-joie_text" href="#"
        >start a new search</a
      >
      <Level
        @nextlevel="nextLevelCount"
        @parentevent="showGG"
        :data="nextLevelData"
      ></Level>
    </div>
    <!-- Next level end -->

    <ul v-if="finalData">
      <li v-for="r in finalData" :key="r.id">{{ r.name }}</li>
    </ul>
    <!-- <h1>result : {{ finalData }}</h1> -->
    <div></div>
  </div>
</template>

<script>
import Level from "./Level.vue";

export default {
  components: {
    Level,
  },
  data() {
    return {
      finalData: [],
      levelID: 1,
      isActive: false,
      firstLevel: true,
      nextLevel: false,
      picked: null,
      pickedNext: [],
      nextLevelData: null,
      strollers: [
        {
          id: 1,
          name: "param",
          image: "/pram_sky.png",
          data: [
            {
              id: 1,
              name: "air wheels",
              description: "short explanation of where to use these wheels",
              image: "/pram_sky.png",
              data: [
                {
                  id: 1,
                  name: "air wheels",
                  description: "short explanation of where to use these wheels",
                  image: "/pram_sky.png",
                },
                {
                  id: 1,
                  name: "air wheels new",
                  description: "short explanation of where to use these wheels",
                  image: "/pram_sky.png",
                  data: [
                    {
                      id: 1,
                      name: "air wheels new",
                      description: "short explanation of where to use these wheels",
                      image: "/pram_sky.png",
                    },
                  ],
                },
              ],
            },
            {
              id: 1,
              name: "EVA sheels",
              description: "short explanation of where to use these wheels",
              image: "/pram_sky.png",
            },
            {
              id: 1,
              name: "Test",
              description: "short explanation of where to use these wheels",
              image: "/pram_sky.png",
            },
          ],
        },
        {
          id: 2,
          name: "stroller",
          image: "/pram_sky.png",
          data: null,
        },
        {
          id: 3,
          name: "double",
          image: "/pram_sky.png",
          data: null,
        },
      ],
    };
  },

  methods: {
    showGG: function (event) {
      console.log("Found event : " + event);
      // this.pickedNext.push(this.picked);
      console.log(this.finalData.length);
      if (this.finalData.length > 1) {
        // this.finalData.pop();
      }
      this.finalData.push(event);
    },

    nextLevelCount: function (event) {
      this.levelID += 1;
      console.log("Level : " + this.levelID);
    },
    changeLevel: function (level, data = null) {
      if (level == "next") {
        this.nextLevelData = data.data;
        // console.log(data);
        this.firstLevel = false;
        this.nextLevel = true;
      }

      if (level == "first") {
        this.firstLevel = true;
        this.nextLevel = false;
        this.picked = null;
        this.finalData = [];
      }
    },
  },

  created() {
    // $event('event_parent',function(received_data){
    //   this.picked = received_data;
    // })
  },

  watch: {
    picked: function (newVal, oldVal) {
      if (newVal != null) {
        this.finalData.push(newVal);
      }
    },
  },
};
</script>