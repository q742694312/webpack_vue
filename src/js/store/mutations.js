/**
 * Created by t on 2017/5/8.
 */

import getters from './getters.js'

export default {
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
}