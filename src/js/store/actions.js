/**
 * Created by t on 2017/5/8.
 */
import mutations from './mutations.js'

export default {
    increment : function({commit}){
        commit('increment');
    },
    decrement : function({commit}){
        commit('decrement');
    },
    addEvent : function({commit}){
        commit('addEvent');
    }
}