<template>
  <div class="login">
    <div class="card">
      <div class="imgholder">
        <img src="/img/logo.png" />
      </div>
      <div class="mx-8">
        <md-field>
          <label for="first-name">Email Address</label>
          <md-input v-model="form.email" type="email" :disabled="sending" />
        </md-field>
      </div>
      <div class="mx-8">
        <md-field>
          <label for="first-name">Password</label>
          <md-input
            v-model="form.password"
            type="password"
            :disabled="sending"
          />
        </md-field>
      </div>
      <div class="flex items-center justify-center mb-8">
        <md-button class="md-raised md-primary" @click="login">Login</md-button>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data: function () {
    return {
      form: {
        email: "",
        password: "",
      },
      sending: false,
    };
  },
  methods: {
    async login() {
      this.sending = true;
      await this.$axios
        .post("/api/login", this.form)
        .then((response) => {
          if (response.data.loggedin) {
            this.$eventHub.$emit("show-notification", "Login Sucess");
            this.$router.push("/dashboard");
          } else {
            this.$eventHub.$emit(
              "show-notification",
              "Email/Password not found"
            );
          }
        })
        .catch((error) => {
          this.$eventHub.$emit(
            "show-notification",
            "Something went Terribly wrong"
          );
        });
    },
  },
};
</script>
<style lang="scss" scoped>
.login {
  min-height: 100vh;
  min-width: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  .card {
    border-radius: 10px;
    box-shadow: 0px 0px 20px 1px #88888894;
    min-width: 450px;
    .imgholder {
      display: flex;
      justify-content: center;
      margin: 30px;
      img {
        max-width: 150px;
      }
    }
  }
}
</style>