/**
 * Created by t on 2017/4/10.
 */

import Vue from 'Vue'
import VueRouter from "vue-router"
import VueResource from 'vue-resource'
import app from '../../components/app.vue'
import courseFile from '../../components/courseFile.vue'
import makePaper from '../../components/makePaper.vue'
import knowledge from '../../components/knowledge.vue'
import group from '../../components/group.vue'
import timeTable from '../../components/timeTable.vue'
import fileDetail from '../../components/fileDetail.vue'

window.$ = require('jquery');

//通过全局方法 Vue.use() 使用插件:
Vue.use(VueRouter);
Vue.use(VueResource);

var router = new VueRouter({
    routes : [
        {
            path : '/',
            component : courseFile
        },
        {
            name : 'CourseFile',
            path : '/courseFile/:math',
            component : courseFile,
            children : [
                {
                    path : '/fileDetail',
                    component : fileDetail
                }
            ]
        },
        {
            name : 'makePaper',
            path : '/makePaper',
            component : makePaper
        },
        {
            path : '/knowledge',
            component : knowledge
        },
        {
            path : '/group',
            component : group
        },
        {
            path : '/timeTable',
            component : timeTable
        }
    ]
});

new Vue({
    el : '#wrap',
    render : function(createElement){
        return createElement(app);
    },
    router : router
});