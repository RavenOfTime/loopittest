<template>
  <div>
    <div class="navbar flex justify-between">
      <div class="flex logoplaceholder mx-12">
        <img src="/img/logo.png" />
      </div>
      <div
        class="flex logoplaceholder mx-12 cursor-pointer"
        @click="openemnu = true"
      >
        <img src="/img/menu.png" style="width: 40px" />
      </div>
    </div>
    <md-drawer :md-active.sync="openemnu" md-swipeable md-right>
      <md-toolbar class="md-transparent" md-elevation="0">
        <span class="md-title">Loop It Test</span>
      </md-toolbar>

      <md-list>
        <md-list-item>
          <a
            href="/logout"
            class="flex flex-row gap-x-8 items-center cursor-pointer"
            style="text-decoration: none"
          >
            <md-icon>move_to_inbox</md-icon>
            <span class="md-list-item-text">Logout</span>
          </a>
        </md-list-item>
      </md-list>
    </md-drawer>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      openemnu: false,
    };
  },
};
</script>
<style lang="scss" scoped>
.navbar {
  width: 100vw;
  max-width: 100vw;
  overflow: hidden;
  height: 70px;
  background: black;
  .logoplaceholder {
    display: flex;
    align-items: center;
    height: 100%;
    img {
      max-width: 100px;
    }
  }
}
</style>