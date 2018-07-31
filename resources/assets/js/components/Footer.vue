<template>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                <p><span>地址：{{ config.address }}</span> <span>联系电话： {{ config.phone }}</span></p>
                <p><span>备案：粤2541214</span> <span>版权：某某公司</span></p>
            </div>
        </div>
    </footer>
</template>

<script>
    import { mapState } from 'vuex'
    export default {
        mounted () {
            this.$store.dispatch('loadInit')
        },
        computed: {
            ...mapState([
                'config'
            ]),
        }
    }
</script>
