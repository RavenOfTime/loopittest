<template>
  <div>
    <router-view></router-view>
    <md-snackbar
      md-position="center"
      :md-duration="1200"
      :md-active.sync="showSnackbar"
      md-persistent
    >
      <span>{{ message }}</span>
    </md-snackbar>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      showSnackbar: false,
      message: "",
    };
  },
  methods: {
    handleToggleSidebar(message) {
      this.showSnackbar = true;
      this.message = message;
    },
  },
  mounted() {
    this.$eventHub.$on("show-notification", this.handleToggleSidebar);
  },
};
</script>