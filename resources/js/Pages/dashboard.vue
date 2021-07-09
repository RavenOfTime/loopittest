<template>
  <div>
    <navbar />
    <div style="margin-top: 70px">
      <div class="flex justify-center">
        <div style="min-width: 400px">
          <md-field>
            <label for="first-name">Search Vehicles</label>
            <md-input v-model="search" :disabled="sending" />
          </md-field>
        </div>
      </div>
    </div>
    <div class="list">
      <div class="card flex flex-row" v-for="x in vehicles" :key="x.id">
        <div class="imageholder flex-1">
          <img :src="x.image" />
        </div>
        <div class="flex-1">
          <div>Vehicle Name:</div>
          <div class="name mb-4">{{ x.name }}</div>
          <div>Vehicle Price:</div>
          <div class="prise">{{ x.price }} AUD</div>
        </div>
      </div>
      <div class="flex justify-center pb-8">
        <md-button class="md-raised" :disabled="!moreleft" @click="loadermore"
          >Load More</md-button
        >
      </div>
    </div>
  </div>
</template>
<script>
import navbar from "../Components/navbar";
import _ from "lodash";
export default {
  components: {
    navbar,
  },
  data: function () {
    return { search: "", vehicles: [], i: 1, sending: false, moreleft: true };
  },
  methods: {
    loadermore() {
      this.i++;
      this.loaddata();
    },
    async loaddata() {
      var url = "/api/getvehicles?page=" + this.i;
      if (this.search != "") {
        url = url + "&search=" + this.search;
      }
      this.sending = true;
      await this.$axios.get(url).then((response) => {
        response.data.data.forEach((element) => {
          this.vehicles.push(element);
        });
        if (response.data.last_page == this.i) {
          this.moreleft = false;
        } else {
          this.moreleft = true;
        }
        console.log(this.vehicles);
        this.sending = false;
      });
    },
    checkSearchStr: _.debounce(function (string) {
      this.vehicles = [];
      this.i = 1;
      this.loaddata();
    }, 500),
  },
  watch: {
    search(newVal) {
      this.checkSearchStr(newVal);
    },
  },
  mounted() {
    this.loaddata();
  },
};
</script>
<style lang="scss" scoped>
.list {
  max-width: 800px;
  margin: auto;
  .card {
    border-radius: 10px;
    box-shadow: 0px 0px 20px 1px #88888894;
    padding: 10px;
    margin: 20px;
    .imageholder {
      max-height: 200px;
      overflow: hidden;
      img {
        max-width: 300px;
      }
    }
  }
}
.prise {
  font-weight: 700;
  font-size: 20px;
}
.name {
  font-family: cursive;
  font-weight: 700;
  font-size: 20px;
}
</style>