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
            class="grid md:px-40 md:grid-flow-col sm:grid-flow-row gap-12 my-10"
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
    <div class="">
      <div class="flex flex-col h-screen" v-if="nextLevel">
        <div class="container mx-auto my-10 flex gap-2 items-start">
          <div class="text-joie_text header-subtitle">&#60;</div>
          <a
            @click="changeLevel('first')"
            class="text-joie_text header-subtitle underline"
            href="#"
            >start a new search</a
          >
        </div>
        <div class="text-center my-5">
          <h1 class="text-joie_text header-text">{{ currentTitle }}</h1>
          <h2 class="header-subtitle text-joie_text-light">
            {{ currentSubtitle }}
          </h2>
        </div>
        <Level
          class="flex-grow"
          @nextlevel="nextLevelCount"
          @parentevent="dataReceiver"
          @title="changeTitle"
          @subtitle="changeSubtitle"
          @finish="finishTask"
          @steps="changeSteps"
          :data="nextLevelData"
          v-if="!resultPage"
        ></Level>

        <Result class="flex-grow" v-if="resultPage"></Result>

        <div
          style="background-color: #f5f5f6"
          class="py-10 grid grid-cols-3 items-center gap-10 px-20"
          v-if="finalData"
        >
          <div
            class="flex items-center gap-2"
            v-for="r in finalData"
            :key="r.id"
          >
            <svg
              style="color: #cbdb2a"
              xmlns="http://www.w3.org/2000/svg"
              class="h-10 w-10"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                clip-rule="evenodd"
              />
            </svg>
            <div
              style="
                font-size: 19px;
                font-weight: 600;
                font-family: 'GothamRounded-Medium';
              "
              class="text-joie_text_dark"
            >
              {{ r.name }}
            </div>
            <img class="w-20" :src="r.image" />
          </div>
        </div>
      </div>
    </div>
    <!-- Next level end -->

    <!-- <h1>result : {{ finalData }}</h1> -->
    <div></div>
  </div>
</template>

<script>
import Level from "./Level.vue";
import Result from "./Result.vue"

export default {
  components: {
    Level, Result
  },
  data() {
    return {
      finalData: [],
      resultPage: false,
      levelID: 1,
      currentTitle: "",
      currentSubtitle: "",
      isActive: false,
      firstLevel: true,
      nextLevel: false,
      picked: null,
      pickedNext: [],
      nextLevelData: null,
      steps: 0 ,
      strollers: [
        {
          id: 1,
          name: "param",
          image: "/pram_sky.png",
        },
        {
          id: 2,
          name: "stroller",
          image: "/stoller_sky.png",
          title: "choose your preferred buggy",
          subtitle: "please choose one",
          data: [
            {
              id: 34,
              name: "sporty, all around stroller",
              image: "/sporty_sky.png",
              title: "Sporty",
              subtitle: "please choose one",
            },
            {
              id: 34,
              name: "lightweight stroller",
              image: "/lightweight_sky.png",
              title: "choose your preferred fold",
              subtitle: "please choose one",
              data: [
                {
                  id: 34,
                  name: "schirmbuggy (umbrella fold)",
                  image: "/umbrella_fold_sky.png",
                },
                {
                  id: 34,
                  name: "kompaktbuggy (compact fold)",
                  image: "/compact_fold_sky.png",
                  data: [
                    {
                      id: 314,
                      name: "lightweight ww stroller",
                      image: "/lightweight_sky.png",
                      title: "choose your preferred fold",
                      subtitle: "please choose one",
                    },
                  ],
                },
              ],
            },
          ],
        },
        {
          id: 3,
          name: "double",
          image: "/double_sky.png",
          data: null,
        },
      ],
    };
  },

  methods: {
    finishTask: function (event) {
      console.log("Finish task triggered");
      console.log(event);
      // alert("Now result will show")
      this.resultPage = true;
      this.currentTitle = "we have 2 perfect strollers!"
      this.currentSubtitle = "";
      
    },
    changeTitle: function (event) {
      this.currentTitle = event;
    },
    changeSubtitle: function (event) {
      this.currentSubtitle = event;
    },
    dataReceiver: function (event) {
      console.log(this.steps);
      console.log('items ' + this.finalData.length + ' and steps ' + this.steps)
      if (this.finalData.length > this.steps) {
        this.finalData.pop();
      }

      this.finalData.push(event);

      if (event.title) {
        this.currentTitle = event.title;
        this.currentSubtitle = event.subtitle;
      }
    },

    changeSteps:function(data){
      this.steps = data;
    },

    nextLevelCount: function (event) {
      this.levelID += 1;
      // console.log("Level : " + this.levelID);
    },
    changeLevel: function (level, data = null) {
      if (level == "next") {
        this.nextLevelData = data.data;
        // console.log(data);
        this.firstLevel = false;
        this.nextLevel = true;
        this.currentTitle = data.title;
        this.currentSubtitle = data.subtitle;
      }

      if (level == "first") {
        this.firstLevel = true;
        this.nextLevel = false;
        this.picked = null;
        this.resultPage = false;
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