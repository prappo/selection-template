<template>
  <div class="container mx-auto">
    
    <div class="" v-if="finalData">
      <div class="">
        <div
          class="flex py-10 stroller-holder justify-center gap-10"
        >
          <div style="padding-left:10px; padding-right:10px" v-for="stroller in finalData" :key="stroller.id">
            <label
              
              class="flex px-5 stroller-box text-center cursor-pointer  md:space-x-0  flex-row-reverse md:flex-col md:justify-items-center items-center  border-2 border-joie_text_light hover:border-joie_text_dark"
            >
              <img style="margin-top:15px" class="w-40 stroller-image" :src="stroller.image" />
              <div class="stroller-text-section">
              <div
                style="
                  font-size: 19px;
                  font-weight: 600;
                  font-family: 'Gotham Rounded Medium';
                  
                "
                class="text-joie_text_dark mx-10 stroller-name joie-font"
              >
                {{ stroller.name }}
              </div>
              <div v-if="stroller.description" style="font-family: 'Gotham Rounded', sans-serif; font-weight:200; font-size:15px" class="stroller-description joie-font">{{ stroller.description }}</div>
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
      window.scrollTo(0, 0);
      //   console.log(data.name);
      //   this.$emit("nextlevel");
      // this.pickedItem = stroller;

      // this.steps++;
      // console.log(this.levelID);
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