<template>
  <div class="container mx-auto">
    <div
      class="w-full text-center header-text text-joie_text"
      v-if="finalData == null"
    >
      sorry no data available
    </div>

    <div class="mx-20" v-if="finalData">
      <div class="container mx-auto">
        <div
          class="grid align-middle md:grid-flow-col sm:grid-flow-row gap-12 grid-cols-3 mx-10 my-10"
        >
          <div v-for="stroller in finalData" :key="stroller.id">
            <label
              class="flex text-center cursor-pointer w-full space-x-10 md:space-x-0 justify-between flex-row-reverse md:flex-col md:justify-items-center items-center md:py-20 border-2 border-joie_text_light hover:border-joie_text_dark"
            >
              <img class="w-40" :src="stroller.image" />
              <div
                style="
                  font-size: 19px;
                  font-weight: 600;
                  font-family: 'GothamRounded-Medium';
                  padding: 20px;
                "
                class="text-joie_text_dark mx-10"
              >
                {{ stroller.name }}
              </div>
              <input
                :value="stroller"
                name="stroller"
                @click="goNextLevel(stroller)"
                class="hidden"
                type="radio"
              />
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      finalData: null,
      levelID: 1,
      pickedItem: null,
      steps: 1,
    };
  },
  mounted: function () {
    // console.log(this.data)
    this.finalData = this.data;
  },
  methods: {
    goNextLevel: function (stroller) {
      //   console.log(data.name);
      //   this.$emit("nextlevel");
      // this.pickedItem = stroller;

      // this.steps++;
      console.log(this.levelID);
      this.$emit('steps',this.levelID);
      if (stroller.data != undefined) {
        // console.log("Found more data");
        // console.log(stroller.title);
        this.$emit("title", stroller.title);
        this.$emit("subtitle", stroller.subtitle);
        this.$emit("parentevent", stroller);
        this.finalData = stroller.data;
        this.levelID++;
        return;
      }

      this.$emit("parentevent", stroller);
      this.$emit("finish","yes");
    },
  },
  watch: {
    pickedItem(newData, oldData) {
      // this.$emit("parentevent", newData);
      // console.log('Picked' );
      // console.log(newData)
    },

    // finalData(newData, oldData) {
    //   console.log("final data changed");
    // //   this.$emit("parentevent", newData);
    //   console.log(newData);
    // },
  },
};
</script>