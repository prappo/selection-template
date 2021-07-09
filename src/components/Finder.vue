<template>
  <div>
    <!-- First level start -->
    <div v-show="firstLevel">
      <div class="text-center my-5">
        <h1 class="text-joie_text header-text">{{ pageTitle }}</h1>
        <h1 v-if="!pageTitle" class="text-joie_text header-text">
          Please Wait..
        </h1>
        <h2 class="text-joie_text-light hs">
          {{ pageSubtitle }}
        </h2>
      </div>
      <div
        class="banner-image bg-scroll"
        :style="{ backgroundImage: 'url(' + bannerUrl + ')' }"
      ></div>
      <div class="container mx-auto">
        <h1 class="text-joie_text header-text text-center mt-5 mx-5">
          {{ underBannerTitle }}
        </h1>
        <h2 class="hs header-subtitle text-joie_text-light italic text-center">
          {{ underBannerSubtitle }}
        </h2>
      </div>
      <div class="reversible-section">
        <div class="container mx-auto">
          <h1
            v-if="strollers == null"
            class="text-joie_text header-text text-center my-5 mx-5"
          >
            {{ waitMessage }}
          </h1>
          <div
            v-if="strollers"
            class="grid md:px-40 md:grid-flow-col sm:grid-flow-row gap-12 my-10"
          >
            <label
              @click="changeLevel('next', stroller)"
              v-for="stroller in strollers"
              :key="stroller.id"
              style="transform: scale(0.75)"
              class="
                flex
                joie-font
                cursor-pointer
                w-full
                space-x-10
                md:space-x-0
                justify-between
                flex-row-reverse
                md:flex-col
                md:justify-items-center
                items-center
                md:py-20
                border-2
                border-joie_text_light
                hover:border-joie_text_dark
              "
            >
              <img class="w-40 stroller-image" :src="stroller.image" />
              <div
                style="
                  font-size: 19px;
                  font-weight: 600;
                  font-family: 'GothamRounded-Medium';
                "
                class="text-joie_text_dark joie-font"
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
          <p class="mx-10 my-16 description">
            {{ pageDescription }}
          </p>
        </div>
      </div>
    </div>
    <!-- First level end -->

    <!-- Next level start -->
    <div class="">
      <div class="flex flex-col h-full reversible-row" v-if="nextLevel">
        <div id="newSearch" class="container mx-auto my-10 flex gap-2 items-start">
          <div class="text-joie_text header-subtitle">&#60;</div>
          <a
            @click="changeLevel('first')"
            class="text-joie_text header-subtitle underline"
            href="#"
            >{{ startNewSearchText }}</a
          >
        </div>
        <div class="">
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

        <Result
          :data="searachResults"
          class="flex-grow"
          v-if="searachResults"
        ></Result>

        <div
          style="background-color: #f5f5f6"
          class="
            py-10
            grid
            md:grid-cols-3
            sm:grid-flow-row
            items-center
            gap-10
            px-20
            selected-items
          "
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
              class="text-joie_text_dark selected-item-name"
            >
              {{ r.name }}
            </div>
            <img class="w-20" :src="r.image" />
          </div>
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
import Result from "./Result.vue";
import axios from "axios";

export default {
  components: {
    Level,
    Result,
  },
  data() {
    return {
      finalData: [],
      searachResults: null,
      resultPage: false,
      waitMessage: document
        .getElementById("app")
        .getAttribute("data-wait-message"),
      startNewSearchText: document
        .getElementById("app")
        .getAttribute("data-start-new-search-text"),
      pageTitle: document.getElementById("app").getAttribute("data-page-title"),
      pageSubtitle: document
        .getElementById("app")
        .getAttribute("data-page-subtitle"),
      pageDescription: document
        .getElementById("app")
        .getAttribute("data-page-description"),
      underBannerTitle: document
        .getElementById("app")
        .getAttribute("data-under-banner-title"),
      underBannerSubtitle: document
        .getElementById("app")
        .getAttribute("data-under-banner-subtitle"),
      bannerUrl: document.getElementById("app").getAttribute("data-banner-url"),
      restURL: document.getElementById("app").getAttribute("data-url"),
      settingsURL: document
        .getElementById("app")
        .getAttribute("data-settings-url"),
      levelID: 1,
      currentTitle: "",
      currentSubtitle: "",
      isActive: false,
      firstLevel: true,
      nextLevel: false,
      picked: null,
      pickedNext: [],
      nextLevelData: null,
      steps: 0,
      strollers: null,
      searchURL: document.getElementById("app").getAttribute("data-search-url"),
    };
  },

  methods: {
    scrollToTop: function () {
      window.scrollTo(0, 0);
    },
    finishTask: function (event) {
      let term_id = null;

      console.log("Finish task triggered");
      if (event != "yes") {
        // console.log(event.term_id)
        term_id = event.term_id;
      }

      if (event == "yes") {
        console.log("Yes it is");
        let t_id = null;
        for (let a in this.finalData) {
          t_id = this.finalData[a].term_id;
        }

        term_id = t_id;
      }

      console.log(`term id ${term_id}`);

      // alert("Now result will show")

      this.currentTitle = "we have 2 perfect strollers!";
      this.currentTitle = "Please Wait...";
      this.currentSubtitle = "";
      this.resultPage = true;

      

      this.fetchResults({
        param: term_id,
      });

      console.log("Finished searching");
    },
    changeTitle: function (event) {
      this.currentTitle = event;
    },
    changeSubtitle: function (event) {
      this.currentSubtitle = event;
    },
    dataReceiver: function (event) {
      // console.log(this.steps);
      // console.log(
      //   "items " + this.finalData.length + " and steps " + this.steps
      // );
      if (this.finalData.length > this.steps) {
        this.finalData.pop();
      }

      this.finalData.push(event);

      if (event.title) {
        this.currentTitle = event.title;
        this.currentSubtitle = event.subtitle;
      }
    },

    changeSteps: function (data) {
      this.steps = data;
    },

    nextLevelCount: function (event) {
      this.levelID += 1;
      // console.log("Level : " + this.levelID);
    },
    changeLevel: function (level, data = null) {
      this.scrollToTop();
      if (level == "next") {
        this.nextLevelData = data.data;
        // console.log(data);
        this.firstLevel = false;
        this.nextLevel = true;
        this.currentTitle = data.title;
        this.currentSubtitle = data.subtitle;
        if (data.data == undefined) {
          this.finishTask(data);
          // this.resultPage = true;
          return;
        }

        return;
      }

      if (level == "first") {
        this.firstLevel = true;
        this.nextLevel = false;
        this.picked = null;
        this.resultPage = false;
        this.searachResults = null;
        this.finalData = [];
      }
    },
    async fetchData() {
      try {
        const url = this.restURL;
        const response = await axios.get(url);
        const results = response.data;
        this.strollers = results;
        // console.log(this.strollers);
      } catch (err) {
        if (err.response) {
          // client received an error response (5xx, 4xx)
          this.waitMessage = "Something went wrong";
          console.log("Server Error:", err);
        } else if (err.request) {
          // client never received a response, or request never left
          this.waitMessage = "Something went wrong";
          console.log("Network Error:", err);
        } else {
          console.log("Client Error:", err);
        }
      }
    },

    async fetchResults(config = null) {
      try {
        const url = this.searchURL + "/?cat=" + config.param;
        console.log(url);
        const response = await axios.get(url);
        const results = response.data;
        this.searachResults = results;
        let plural = "s";

        if (results.length == 0) {
          this.currentTitle = "Sorry We did not find any stroller";
          this.searachResults = null;
          return;
        }

        if (results.length <= 1) {
          plural = "";
        }
        this.currentTitle = `we have ${results.length} perfect stroller${plural}!`;
        // console.log(this.strollers);
      } catch (err) {
        if (err.response) {
          // client received an error response (5xx, 4xx)
          this.waitMessage = "Something went wrong";
          console.log("Server Error:", err);
        } else if (err.request) {
          // client never received a response, or request never left
          this.waitMessage = "Something went wrong";
          console.log("Network Error:", err);
        } else {
          console.log("Client Error:", err);
        }
      }
    },
  },

  mounted() {
    this.fetchData();
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