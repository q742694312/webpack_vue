<template>
    <div>
        <h1>this is list.vue</h1>
        <div class="allTable">
            <table cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>用户名</td>
                    <td>邮箱</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(v, k) in userList">
                    <td>{{v.id}}</td>
                    <td>{{v.uname}}</td>
                    <td>{{v.email}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script type="text/javascript">
    export default {
        data : function(){
            return {
                userList : []
            }
        },
        mounted : function(){
            this.$http.post('./model/data.php').then(function(result){
                console.log(result);
                this.userList = result.data;
            });
        }
    }
</script>