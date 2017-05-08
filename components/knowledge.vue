<template>
    <div>
        <h1>{{person.work}}</h1>
        <hr />
        <monday v-bind:p="person"></monday>
    </div>
</template>
<script type="text/javascript">
    export default {
        data : function(){
            return {
                person : {
                    name : '赵一鸣',
                    work : 'WEB前端开发'
                }
            }
        }
    }
</script>