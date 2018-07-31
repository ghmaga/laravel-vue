<template>
<div class="col-lg-3 col-md-3 main-bar">
    <div class="bar menu">
    <h3>产品中心</h3>
    <ul>
        <li v-for="category in productTree" :key="category.id">
            <a :href="'/'+[category.module+'/'+category.id]">{{ category.title }}</a>
        </li>
    </ul>
    </div>
    <div class="bar contact">
        <h3>联系我们</h3>
        <p>地址：{{ config.address }}</p>
        <p>联系电话： {{ config.phone }}</p>
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
                'productTree',
                'config'
            ]),
        }
    }
</script>
