import Vue from "vue";
import axios from "axios";

const state = {
    user: {},
    loggedin: false
};
const getters = {
    getUser(state) {
        return state.user;
    },
    loggedin: state => state.loggedin
};

const mutations = {
    setloggedin(state, data) {
        state.loggedin = data;
    },
    setuserdata(state, data) {
        state.user = data;
    }
};
const actions = {
    async LoadProfile(context) {
        await axios
            .post("/api/user/profile")
            .then(response => {
                if (response.data.loggein == true) {
                    context.commit("setloggedin", response.data.loggein);
                    context.commit("setuserdata", response.data.userdata);
                }
            })
            .catch(error => {
                context.commit("setloggedin", false);
            });
    },
};
export default {
    state,
    getters,
    mutations,
    actions,
    namespaced: true
};