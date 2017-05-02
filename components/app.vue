<style type="text/css">
    @import '../src/css/main.css';
</style>
<template>
    <div>
        <!--header-->
        <div class="header clearfix">
            <div class="header-wrap">
                <!--logo-->
                <div class="logo">
                    <img src="../src/images/logo.png" alt="logo" />
                </div>
                <!--nav-->
                <div class="header-nav">
                    <router-link :to="{ name: 'CourseFile', params: { math: math }}">课程资料</router-link>
                    <router-link :to="{name : 'makePaper'}">在线组卷</router-link>
                    <router-link to="/knowledge">知识点管理</router-link>
                    <router-link to="/group">群组管理</router-link>
                    <router-link to="/timeTable">课程表</router-link>
                    {{math}}
                </div>
                <!--options-->
                <div class="options" v-on:click="checkOptions">
                    <div class="header-img">
                        <img src="../src/images/teacher.jpg" alt="头像" width="40" height="40" />
                        <span>我是老师</span>
                    </div>
                    <div class="personal-choose" id="personalChoose">
                        <ul>
                            <li>个人中心</li>
                            <li>退出</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <router-view></router-view>
        </div>
        <loading></loading>
    </div>
</template>
<script type="text/javascript">
    export default {
        data : function(){
            return {
                optionsMark : false,
                math : Math.random()
            }
        },
        methods : {
            //右上角选项操作
            checkOptions :  function(){
                var $personalChoose = $('#personalChoose');
                this.optionsMark = !this.optionsMark;
                if(this.optionsMark){
                    $personalChoose.slideDown();
                }else{
                    $personalChoose.slideUp();
                }
            }
        }

    };
</script>