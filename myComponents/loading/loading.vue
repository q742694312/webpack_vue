<template>
    <div>
        <h1>{{loadingMsg}}</h1>
        <button v-on:click="getMsg();">获取loading组件的值</button>
    </div>
</template>
<script type="text/javascript">
    export default{
        data : function(){
            return {
                loadingMsg : 'loading...'
            }
        },
        methods : {
            getMsg : function(){
                Event.$emit('data-loadingMsg', this.loadingMsg);
            }
        }
    }
</script>