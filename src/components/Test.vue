<template>
  <div>
    Test data here
    <div>
      <label v-for="s in finalData" :key="s.id">
        <input  @click="change(s)" type="radio" v-model="picked" name="stroller" />
        {{ s.name }}
      </label>
    </div>
  </div>
</template>

<script>
export default {
  data() {
      
    return {
      picked: null,
      finalData: null,
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
                      id: 34,
                      name: "lightweight stroller",
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

  methods:{
      change: function(s){
          console.log(s)
          if(s.data){
              this.finalData = s.data
          }
      }
  },
  mounted(){
      this.finalData = this.strollers;
  }
};
</script>