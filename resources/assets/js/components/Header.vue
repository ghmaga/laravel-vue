<template>
    <div class="header">
        <div class="container">
            <div class="row header-bar">
                <div class="col-3 logo"><img src="/images/logo-200.png" /></div>
                <div class="col-9 text-right phone"><i class="fa fa-volume-control-phone"></i> {{ config.phone }}</div>
                <div class="col-9 text-right menu"><i class="fa fa-align-justify"></i></div>
            </div>
            <nav class="header-nav">
                <ul>
                    <li>
                        <a href="">首页</a>
                    </li>
                    <li v-for="category in categories" :key="category.id">
                        
                        <router-link :to="{path: '/' + category.module + '/' + category.id}">{{category.title}}</router-link>
                    </li>
                </ul>
            </nav>
        </div> 
    </div>
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        mounted () {
            this.$store.dispatch('loadInit')
        },
        computed: {
            ...mapState([
                'categories',
                'config'
            ]),
        }
    }
</script>
