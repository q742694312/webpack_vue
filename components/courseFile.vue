<template>
    <div>
        <div class="mLeft">
            <ul class="courseList" id="courseList">
                <li v-for="(v1, k1) in courseList" class="level1">
                    <span class="level">{{v1.courseName}}</span>
                    <ul>
                        <li v-for="(v2, k2) in v1.child" class="level2">
                            <span class="level">{{v2.courseName}}</span>
                            <ul>
                                <li v-for="(v3, k3) in v2.child" class="level3">
                                    <span>
                                        <router-link to="/fileDetail">{{v3.courseName}}</router-link>
                                    </span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="mRight">
            <div class="condition">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
            <router-view></router-view>
        </div>
    </div>
</template>
<script type="text/javascript">
    //引入相关模块
    var $ = require('jquery');

    //vue相关
    export default {
        data : function(){
            return {
                courseList : []
            }
        },
        mounted : function(){
            //获取左侧课程数据
            this.$http.post('./model/courseList.php').then(function(result){
                this.courseList = result.data;
            });
        }
    };

    //动画效果
    (function(){
        var courseList = {
            //初始化
            init : function(){
                this.courseCheck();
                this.currentCourse();
            },
            //三级联动
            courseCheck : function(){
                $('body').on('click', '.level', function(){
                    $(this).siblings('ul').slideDown();
                    $(this).parent('li').siblings('li').find('ul').slideUp();
                });
            },
            //当前课程选中状态
            currentCourse : function(){
                $('body').on('click', '.router-link-active', function(){
                    $('.router-link-active').removeClass('active');
                    $(this).addClass('active').removeClass('default');
                });
            }
        };
        courseList.init();
        window.courseList = courseList;
    })();
</script>