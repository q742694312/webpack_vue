<template>
    <div>
        <h1>{{mondayMsg}}</h1>
        <button v-on:click="change();">修改父组件的值</button>
    </div>
</template>
<script type="text/javascript">
    export default {
        props : ['p'],
        data : function(){
            return {
                mondayMsg : 'this is mondayMsg'
            }
        },
        mounted : function(){
            Event.$on('data-loadingMsg', function(msg){
                this.mondayMsg = msg;
            }.bind(this));
        },
        methods : {
            change : function(){
                this.p.work = 'WEB全栈开发';
            }
        }
    }
</script>