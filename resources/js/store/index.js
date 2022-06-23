import vue from 'vue'
import vuex from 'vuex'
import axios from 'axios'

const store = new vuex.Store({
  state: {
    menu: []
  },
  getters: {
    MENU(state) {
      return state.menu.menu
    }
  },
  mutations: {
    SET_MENU: (state,menu) => {
      state.menu = menu
    }
  },
  actions: {
    GET_MENU({commit}) {
      return axios.get("/api/get_menu")
        .then((response) => {
          commit('SET_MENU', response.data)
          return response
        })
        .catch((error) => {
          console.log(error)
          return error
        })
    },
  },

})

export default store;
