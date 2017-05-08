<template>
    <div>
        <h1>this is timeTable.vue</h1>
        <h1>{{count}}</h1>
    </div>
</template>
<script type="text/javascript">
    import store from '../src/js/store.js'

    export default {
        computed : {
            count : function(){
                return store.state.count;
            }
        }
    }
</script>