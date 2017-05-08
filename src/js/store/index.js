/**
 * Created by t on 2017/5/8.
 */

import Vue  from 'Vue'
import VueX from 'VueX'

Vue.use(VueX);

import  state      from  './state.js'
import  getters    from  './getters.js'
import  mutations  from  './mutations.js'
import  actions    from  './actions.js'

export default new VueX.Store({
    state,
    getters,
    mutations,
    actions
});