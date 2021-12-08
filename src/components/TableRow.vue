<template>
  <tr>
    <th style="background: white !important">
      <img :src="product.product_image" />
      <div class="w-32 spacer"></div>
      <div style="font-family: 'Gotham Rounded Medium', sans-serif" class="py-5 product-name" v-html="product.product_name"></div>
    </th>
    <td>
      <div class="w-40 px-2 py-2" v-html="product.product_description">
      
      </div>
    </td>
    <!-- Swatch start -->
    <td>
      <div v-for="(swatch , key) in product.colors" :key="key" class="px-5">
        <a
          href="javascript:void(0)"
          @click="changeHatchCode(swatch.hatch_code , key)"
        >
          <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
            <div class="h-6 w-6" v-if="swatch.swatch_image">
              <img style="padding:2px" class="h-6 w-6 rounded-full" :class="{highlight: key == selected}" :src="swatch.swatch_image" />
            </div>
            <div
              v-if="!swatch.swatch_image"
              :style="{ background: swatch.swatch_color }"
              class="w-6 h-6 rounded-full"
            ></div>
            <div class="">{{ swatch.swatch_name }}</div>
          </div>
        </a>
      </div>
    </td>
    <!-- Swatch end -->
    <!-- Retailers start -->
    <td>
      <div
        v-if="product.retailers.length != 0"
        class="flex flex-col justify-center items-center px-10"
      >
        <div style="white-space: nowrap">click to view</div>
        <a
          href="javascript:void(0)"
          @click="getRetailLocation(hatch_code)"
          style="white-space: nowrap; text-decoration: underline"
          >retail locations</a
        >
        
        <div
          style="display: none"
          v-for="(r, index) in product.retailers"
          :key="index"
          :id="r.retailer.hatch_code"
        >
          <div :id="r.hatch_code">
            <a
            target="__blank"
              :href="(retailer.stock_info ) ? retailer.purchase_link : 'javascript:void(0)'"
              class="w-full flex items-center border-b-2 border-gray-100 py-2"
              v-for="(retailer, i) in r.retailer"
              :key="i"
            >
              <div style="width: 25%"><img :src="retailer.logo" /></div>
              <div style="width: 25%;" class="flex justify-items-center pl-5">
                <div class="flex" v-if="retailer.stock_info">
                  <svg style="color: #cbdb29" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg> <div class="text-joie_text">In stock</div>
                </div>
              </div>
              <div class="text-joie_text" style="width: 25%">{{ retailer.price_local }}</div>
              <div style="width: 25%; float:right"><svg v-if="retailer.stock_info" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg></div>
            </a>
          </div>
        </div>
      </div>
    </td>
    <!-- Retailers end -->
    <td style="white-space: nowrap">
      <div class="px-10">{{ product.weight }}</div>
    </td>
    <td>
      <div class="px-5 text-left" v-if="product.dimensions">
        <div class="nowrap mt-2 bold">{{strOpen}}</div>
        <div class="nowrap">{{strHeight}}: {{ product.dimensions.open.height}}</div>
        <div class="nowrap">{{strWidth}}: {{ product.dimensions.open.width}}</div>
        <div class="nowrap">{{strLength}}: {{ product.dimensions.open.length}}</div>
        <div class="nowrap mt-2 bold">{{strFolded}}:</div>
        <div class="nowrap">{{strHeight}}: {{ product.dimensions.folded.height}}</div>
        <div class="nowrap">{{strWidth}}: {{ product.dimensions.folded.width}}</div>
        <div class="nowrap">{{strLength}}: {{ product.dimensions.folded.length}}</div>
      </div>
    </td>
    <td>
      <div class="nowrap px-10">{{ product.wheel_size }}</div>
    </td>
    <td>
      <div class="nowrap px=10">{{ product.max_child_weight }}</div>
    </td>
    <td>
      <div class="px-5 text-left">
        <div
          v-for="(inse, obKey) in product.infant_seats"
          :key="inse.ID"
          class="nowrap"
        >
          {{ obKey + 1 }} .
          <a target="__blank" :href="inse.guid" v-html="inse.post_title"></a>
        </div>
      </div>
    </td>
    <td>
      <div class="px-5 text-left">
        <div
          v-for="(inse, obKey) in product.carry_cots"
          :key="inse.ID"
          class="nowrap"
        >
          {{ obKey + 1 }} .
          <a target="__blank" :href="inse.guid" v-html="inse.post_title"></a>
        </div>
      </div>
    </td>
    <td>
      <div class="flex justify-center items-center">
        <div v-if="product.flex_comfort_seat == 'yes'" v-html="yesIcon"></div>
        <div v-else v-html="noIcon"></div>
      </div>
    </td>
    <td>
      <div class="flex justify-center items-center">
        <div v-if="product.height_adjust_seat == 'yes'" v-html="yesIcon"></div>
        <div v-else v-html="noIcon"></div>
      </div>
    </td>
    <td>
      <div class="flex justify-center items-center">
        <div v-if="product.reversible_seat == 'yes'" v-html="yesIcon"></div>
        <div v-else v-html="noIcon"></div>
      </div>
    </td>
    <td>
      <div class="flex justify-center items-center">
        <div v-if="product.one_hand_fold == 'yes'" v-html="yesIcon"></div>
        <div v-else v-html="noIcon"></div>
      </div>
    </td>
    <td>
      <div class="flex justify-center items-center">
        <div v-if="product.armbar == 'yes'" v-html="yesIcon"></div>
        <div v-else v-html="noIcon"></div>
      </div>
    </td>

    <td>{{ product.recline_positions }}</td>
  </tr>
</template>
<style scoped>

.highlight{
    border: 2px solid #1b3d6f;
}
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
export default {
  props: ["product"],
  data() {
    return {
      swipe: true,
      show: false,
      selected: undefined,
      retailers: null,
      hatch_code: null,
      strOpen: document.getElementById("app").getAttribute("data-row-open"),
      strHeight: document.getElementById("app").getAttribute("data-row-height"),
      strWidth: document.getElementById("app").getAttribute("data-row-width"),
      strLength: document.getElementById("app").getAttribute("data-row-length"),
      strFolded: document.getElementById("app").getAttribute("data-row-folded"),
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
    };
  },

  methods: {
    changeHatchCode: function (code , key) {
      this.hatch_code = code;
        this.selected = key;
    },
    getRetailLocation: function (code) {
      if (code == null) {
        return alert("Please select a color");
      }

      if (code == "") {
        return alert("Retailers are not available for the selected color");
      }

      Swal.fire({
        title: "Select a retailer",
        //   icon: 'info',
        html: document.getElementById(code).innerHTML,
        showCloseButton: true,

        showConfirmButton: false,
        //   showCancelButton: true,
        focusConfirm: false,
      });
    },
  },
};
</script>
