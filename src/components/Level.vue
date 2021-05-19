<template>
  <div class="container mx-auto">
    <div v-if="finalData == null">sorry no data available</div>

    <div class="mx-20" v-if="finalData">
      <div class="container mx-auto">
        <div
          class="grid md:grid-flow-col sm:grid-flow-row gap-12 grid-cols-3  mx-10 my-10"
        >
          <label
            @click="goNext(stroller)"
            v-for="stroller in finalData"
            :key="stroller.id"
            class="flex cursor-pointer w-full space-x-10 md:space-x-0 justify-between flex-row-reverse md:flex-col md:justify-items-center items-center md:py-20 border-2 border-joie_text_light hover:border-joie_text_dark"
          >
            <img class="w-40" :src="stroller.image" />
            <div
              style="
                font-size: 19px;
                font-weight: 600;
                font-family: 'GothamRounded-Medium';
                padding:20px;
              "
              class="text-joie_text_dark mx-10"
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
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      finalData: null,
      levelID: null,
      picked: null,
    };
  },
  mounted: function () {
    // console.log(this.data)
    this.finalData = this.data;
  
  },
  methods: {
    goNext: function (stroller) {
      //   console.log(data.name);
    //   this.$emit("nextlevel");
      if (stroller.data != undefined) {
        
        console.log("Found more data");
        console.log(stroller.data);
        this.finalData = stroller.data;
        this.picked = stroller.data;
      } 
    },
  },
  watch: {
    picked(newData, oldData) {
      this.$emit("parentevent", newData);
    //   console.log(newData);
    },

    // finalData(newData, oldData) {
    //   console.log("final data changed");
    // //   this.$emit("parentevent", newData);
    //   console.log(newData);
    // },
  },
};
</script>