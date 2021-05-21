<template>
  <div @click="defaultAction" class="container mx-auto my-10">

    

    <div class="" role="region" aria-labelledby="caption" tabindex="0">
      <!-- <lottie-player v-if="swipe" src="https://assets10.lottiefiles.com/temp/lf20_isMAFS.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px; position:absolute;z-index:100;right:20px"  loop  autoplay></lottie-player> -->
      <table class="text-joie_text">
        
        <thead>
          <tr>
            <th></th>
            <th>description</th>
            <th>colors</th>
            <th>retailers</th>
            <th>weight</th>
            <th>dimensions</th>
            <th>wheel size</th>
            <th class="nowrap">max child weight</th>
            <th>
              <div class="flex flex-col">
                <div class="nowrap">infant seats</div>
                <div class="text-sm font-thin">compatible</div>
              </div>
            </th>
            <th>
              <div>
                <div>carry cots</div>
                <div class="font-thin">compatible</div>
              </div>
            </th>
            <th>flex comfort seat</th>
            <th>height adjust seat</th>
            <th>reversible seat</th>
            <th>one-hand fold</th>
            <th>armbar</th>
            <th>recline positions</th>
          </tr>

          <tr>
            <th style="background: white !important">
              <img src="https://via.placeholder.com/150" />
              <div class="w-32 spacer"></div>
              <div class="py-5 product-name">Product Name</div>
            </th>
            <td>
              <div class="w-40 px-2 py-2">
                Lorem ipsum dolor sit amet, ectetuer adipiscing elit, sed diam
                Lorem ipsum dolor sit amet, tetuer adipiscing elit,
              </div>
            </td>
            <td>
              <div class="px-5">
                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>
                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>
              </div>
            </td>
            <td>
              <div class="flex flex-col justify-center items-center px-10">
                <div style="white-space: nowrap">click to view</div>
                <a
                  href="#"
                  style="white-space: nowrap; text-decoration: underline"
                  >retail locations</a
                >
              </div>
            </td>
            <td style="white-space: nowrap">
              <div class="px-10">00.00 kg</div>
            </td>
            <td>
              <div class="px-5 text-left">
                <div class="nowrap mt-2 bold">Open</div>
                <div class="nowrap">height: 00 cm</div>
                <div class="nowrap">width: 00 cm</div>
                <div class="nowrap">length: 00 cm</div>
                <div class="nowrap mt-2 bold">Folded:</div>
                <div class="nowrap">height: 00 cm</div>
                <div class="nowrap">width: 00 cm</div>
                <div class="nowrap">length: 00 cm</div>
              </div>
            </td>
            <td>
              <div class="nowrap px-10">00.00 mm</div>
            </td>
            <td><div class="nowrap px=10">00.00 kg</div></td>
            <td>
              <div class="px-5">
                <div class="nowrap">1. Product name</div>

                <div class="nowrap">2. Product name</div>

                <div class="nowrap">3. Product name</div>

                <div class="nowrap">4. Product name</div>
              </div>
            </td>
            <td>
              <div class="px-5">
                <div class="nowrap">1. Product name</div>

                <div class="nowrap">2. Product name</div>

                <div class="nowrap">3. Product name</div>

                <div class="nowrap">4. Product name</div>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>3</td>
          </tr>

          <tr>
            <th style="background: white !important">
              <img src="https://via.placeholder.com/150" />
              <div class="w-32"></div>
              <div class="py-5">Product Name</div>
            </th>
            <td>
              <div class="w-40 px-2 py-2">
                Lorem ipsum dolor sit amet, ectetuer adipiscing elit, sed diam
                Lorem ipsum dolor sit amet, tetuer adipiscing elit,
              </div>
            </td>
            <td>
              <div class="px-5">
                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>
                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>

                <div style="white-space: nowrap" class="flex gap-2 px-2 py-2">
                  <div
                    style="background: red"
                    class="w-5 h-5 rounded-full"
                  ></div>
                  <div class="">swatch</div>
                </div>
              </div>
            </td>
            <td>
              <div class="flex flex-col justify-center items-center px-10">
                <div style="white-space: nowrap">click to view</div>
                <a
                  href="#"
                  style="white-space: nowrap; text-decoration: underline"
                  >retail locations</a
                >
              </div>
            </td>
            <td style="white-space: nowrap">
              <div class="px-10">00.00 kg</div>
            </td>
            <td>
              <div class="px-5 text-left">
                <div class="nowrap mt-2 bold">Open</div>
                <div class="nowrap">height: 00 cm</div>
                <div class="nowrap">width: 00 cm</div>
                <div class="nowrap">length: 00 cm</div>
                <div class="nowrap mt-2 bold">Folded:</div>
                <div class="nowrap">height: 00 cm</div>
                <div class="nowrap">width: 00 cm</div>
                <div class="nowrap">length: 00 cm</div>
              </div>
            </td>
            <td>
              <div class="nowrap px-10">00.00 mm</div>
            </td>
            <td><div class="nowrap px=10">00.00 kg</div></td>
            <td>
              <div class="px-5">
                <div class="nowrap">1. Product name</div>

                <div class="nowrap">2. Product name</div>

                <div class="nowrap">3. Product name</div>

                <div class="nowrap">4. Product name</div>
              </div>
            </td>
            <td>
              <div class="px-5">
                <div class="nowrap">1. Product name</div>

                <div class="nowrap">2. Product name</div>

                <div class="nowrap">3. Product name</div>

                <div class="nowrap">4. Product name</div>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>
              <div class="flex justify-center items-center">
                <svg
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
                </svg>
              </div>
            </td>
            <td>3</td>
          </tr>
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
}
table td {
  background: #fff;
  padding: 4px 5px;
  text-align: center;
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
  data(){
    return {
      swipe: true,
    }
  },
  methods:{
    defaultAction: function(){
      this.swipe = false;
    },
    handleScroll: function (event) {
     this.swipe = false;
    }
  },
  created () {
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll);
  },
}
</script>