<template>
    <div class="container main">
        <div class="row">
            <sidebar></sidebar>
            <div class="col-lg-9 col-md-9 main-content">
                <contentMenu></contentMenu>
                <div class="products-list">
                    <productItem :products="results"></productItem>
                </div>
                <pagination></pagination>
            </div>
        </div>
   </div>
</template>

<script>
    import sidebar from './Sidebar'
    import contentMenu from './ContentMenu'
    import pagination from './Pagination'
    import productItem from './ProductItem'
     export default {
        name: 'articles',  
        data () {  
            return {  
                results: ''
            }  
        }, 
        mounted() {
            var that = this
            axios.get('/api/products/5')
            .then(r => r.data)
            .then(response => {
                that.results = response.data
            })
        },
        components : {
            'sidebar': sidebar,
            'contentMenu': contentMenu,
            'pagination': pagination,
            'productItem': productItem
        }
    }
</script>
