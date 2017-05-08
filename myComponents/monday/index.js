/**
 * Created by t on 2017/5/8.
 */

import mondayComponent from './monday.vue'

var monday = {
    install : function(Vue){
        Vue.component('monday', mondayComponent);
    }
}

export default monday;