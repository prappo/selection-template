<template>
  <div v-if="show" @click="defaultAction" class="container mx-auto my-10">
    <div class="" role="region" aria-labelledby="caption" tabindex="0">
      <!-- <lottie-player v-if="swipe" src="https://assets10.lottiefiles.com/temp/lf20_isMAFS.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px; position:absolute;z-index:100;right:20px"  loop  autoplay></lottie-player> -->
      <table class="text-joie_text">
        <thead>
          <tr style="font-family: 'Gotham Rounded Medium', sans-serif">
            <th></th>
            <th>{{ columns.description }}</th>
            <th>{{ columns.colors }}</th>
            <th>{{ columns.retailers }}</th>
            <th>{{ columns.weight }}</th>
            <th>{{ columns.dimensions }}</th>
            <th>{{ columns.wheelSize }}</th>
            <th class="nowrap">{{ columns.maxChildWeight }}</th>
            <th>
              <div class="flex flex-col">
                <div class="nowrap">{{ columns.infantSeats }}</div>
                <div
                  style="font-family: 'Gotham Rounded', sans-serif"
                  class="text-sm font-thin"
                >
                  {{ columns.compatible }}
                </div>
              </div>
            </th>
            <th>
              <div>
                <div>{{ columns.carryCots }}</div>
                <div
                  style="font-family: 'Gotham Rounded', sans-serif"
                  class="font-thin"
                >
                   {{ columns.compatible }}
                </div>
              </div>
            </th>
            <th>{{ columns.flexComfortSeat }}</th>
            <th>{{ columns.heightAdjustSeat }}</th>
            <th>{{ columns.reversibleSeat }}</th>
            <th>{{ columns.oneHandFold }}</th>
            <th>{{ columns.armbar }}</th>
            <th>{{ columns.reclinePositions }}</th>
          </tr>

          <TableRow
            v-for="product in data"
            :key="product.id"
            :product="product"
          ></TableRow>
        </thead>
        <tbody></tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>
table {
  /* font-family: "GothamRounded-Medium"; */
  font-family: "Gotham Rounded", sans-serif;
  font-weight: 100;
  font-size: 100%;
  /* white-space: nowrap; */
  margin: 0;
  border: none;
  border-collapse: separate;
  border-spacing: 0;
  table-layout: fixed;
}
table td {
  border: 2px solid #f5f5f6;
}

.nowrap {
  white-space: nowrap;
}

table th {
  border: 2px solid white;
  border-bottom: none;
  background-color: #f5f5f6 !important;
  padding: 10px !important;
  color: #1b3d6f !important;
  white-space: nowrap;
}

table thead th {
  padding: 3px;
  position: sticky;
  top: 0;
  z-index: 1;
  width: 25vw;
  background: white;
  vertical-align: middle;
}
table td {
  background: #fff;
  padding: 4px 5px;
  text-align: center;
  vertical-align: middle;
}

table tbody th {
  font-weight: 100;
  font-style: italic;
  text-align: left;
  position: relative;
}
table thead th:first-child {
  position: sticky;
  left: 0;
  z-index: 2;
  -webkit-box-shadow: 2px 4px 17px -1px rgba(0, 0, 0, 0.45);
  box-shadow: 2px 4px 17px -1px rgba(0, 0, 0, 0.45);
}
table tbody th {
  position: sticky;
  left: 0;
  background: white;
  z-index: 1;
}
caption {
  text-align: left;
  padding: 0.25rem;
  position: sticky;
  left: 0;
}

[role="region"][aria-labelledby][tabindex] {
  width: 100%;
  max-height: 98vh;
  overflow: auto;
}
[role="region"][aria-labelledby][tabindex]:focus {
  /* box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.5); */
  outline: 0;
}
</style>

<script>
import TableRow from "./TableRow.vue";
export default {
  props: ["data"],
  components: {
    TableRow,
  },
  data() {
    return {
      swipe: true,
      show: false,
      yesIcon: `<svg
                  style="color: #cbdb29"
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
                </svg>`,
      noIcon: `<svg
                  style="color: #e16d69"
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-10 w-10"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                    clip-rule="evenodd"
                  />
                </svg>`,
      columns: {
        description: document
          .getElementById("app")
          .getAttribute("data-col-description"),
        colors: document.getElementById("app").getAttribute("data-col-colors"),
        retailers: document
          .getElementById("app")
          .getAttribute("data-col-retailers"),
        weight: document.getElementById("app").getAttribute("data-col-weight"),
        dimensions: document
          .getElementById("app")
          .getAttribute("data-col-dimensions"),
        wheelSize: document
          .getElementById("app")
          .getAttribute("data-col-wheel-size"),
        maxChildWeight: document
          .getElementById("app")
          .getAttribute("data-col-max-child-weight"),
        infantSeats: document
          .getElementById("app")
          .getAttribute("data-col-infant-seats"),
        compatible: document
          .getElementById("app")
          .getAttribute("data-col-compatible"),
        carryCots: document
          .getElementById("app")
          .getAttribute("data-col-carry-cots"),
        flexComfortSeat: document
          .getElementById("app")
          .getAttribute("data-col-flex-comfort-seat"),
        heightAdjustSeat: document
          .getElementById("app")
          .getAttribute("data-col-height-adjust-seat"),
        reversibleSeat: document
          .getElementById("app")
          .getAttribute("data-col-reversible-seat"),
        oneHandFold: document
          .getElementById("app")
          .getAttribute("data-col-one-hand-fold"),
        armbar: document.getElementById("app").getAttribute("data-col-armbar"),
        reclinePositions: document
          .getElementById("app")
          .getAttribute("data-col-recline-positions"),
      },
    };
  },
  mounted() {
    if (this.data) {
      this.show = true;
    }
    // console.log(this.data.length);
    // console.log(this.data);
  },
  methods: {
    defaultAction: function () {
      this.swipe = false;
    },
    handleScroll: function (event) {
      this.swipe = false;
    },
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
};
</script>