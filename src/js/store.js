/**
 * Created by t on 2017/5/3.
 */

import Vue from 'Vue'
import VueX from 'VueX'

Vue.use(VueX);

export default new VueX.Store({
    state : {
        count : 0
    },
    getters : {
        count : function(state){
            return state.count;
        }
    },
    mutations : {
        increment : function(state){
            state.count += 1;
        },
        decrement : function(state){
            state.count -= 1;
        },
        addEvent : function(state){
            if( state.count % 2 == 0 ){
                state.count += 1;
            }
        }
    },
    actions : {
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
});