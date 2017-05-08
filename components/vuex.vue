<template>
    <div>
        <button v-on:click="increment();">增加</button>
        <button v-on:click="decrement();">减少</button>
        <button v-on:click="addEvent();">偶数加1</button>
        <h1>{{count}}</h1>
    </div>
</template>
<script type="text/javascript">
    import {mapActions, mapGetters} from 'vuex'

    export default {
        computed : mapGetters([
                'count'
        ]),
        methods : mapActions([
                'increment',
                'decrement',
                'addEvent'
        ])
    }
</script>