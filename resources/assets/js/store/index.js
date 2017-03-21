import Vue from 'vue'
import Vuex from 'vuex'
import * as types from './mutation-types'
import * as getters from './getters'
import * as actions from './actions'
import * as mutations from './mutations'
import createLogger from 'vuex/dist/logger.js'

// root state object.
// each Vuex instance is just a single state tree.
const state = {
  errors: {},
  get_user_edit: {},
  tokens: [],
  clients: [],
  users: [],
  auth_user: {},
}

const debug = process.env.NODE_ENV !== 'production'
// A Vuex instance is created by combining the state, mutations, actions,
// and getters.
export default new Vuex.Store({
  state,
  getters,
  actions,
  mutations,
  strict: debug,
  plugins: debug ? [createLogger()] : []
})
