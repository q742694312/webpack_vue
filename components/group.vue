<template>
    <div>
        <h1>this is group.vue</h1>
        <button v-on:click="post();">post前后端数据传输</button>
        <button v-on:click="get();">get前后端数据传输</button>
        <hr>
        <input type="text" v-model="text" />
        <button v-on:click="show();">获取jsonp数据</button>
    </div>
</template>
<script type="text/javascript">
    export default {
        data : function(){
            return {
                a : 100,
                b : 200,
                text : ''
            }
        },
        methods : {
            get : function(){
               this.$http.get('./model/computeData.php?a='+this.a+'&b='+this.b).then(function(result){
                   //以下两点对于get和post传参都是一样的：
                   //如果后端返回的是字符串，就用result.bodyText来接收；
                   //如果后端返回的是json，就用result.data来接收。
                    console.log(result.bodyText);
               }, function(result){
                   console.log(result);
               });
            },
            post : function(){
                //通过post传参，需要加第三个参数{emulateJSON:true}
                this.$http.post('./model/computeData.php', {a:this.a, b:this.b}, {emulateJSON:true}).then(function(result){
                    console.log(result.bodyText);
                }, function(result){
                    console.log(result);
                });
            },
            show : function(){
                this.$http.jsonp('https://sp0.baidu.com/5a1Fazu8AA54nxGko9WTAnF6hhy/su', {params:{wd:this.text}, jsonp:'cb'}).then(function(result){
                    console.log(result.data.s);
                }, function(result){
                    console.log(result);
                });
            }
        }

    }
</script>