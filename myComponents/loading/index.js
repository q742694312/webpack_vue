/**
 * Created by t on 2017/5/2.
 * 自定义组件loading
 */

import loadingComponent from './loading.vue'

var loading = {
    install : function(Vue){
        Vue.component('loading', loadingComponent);
    }
};

export default loading;
