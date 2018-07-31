<template>
    <div class="container main">
        <div class="row">
            <sidebar></sidebar>
            <div class="col-lg-9 col-md-9 main-content">
                <contentMenu></contentMenu>
                <div class="articles-list">
                    <articleItem :articles="results"></articleItem>
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
    import articleItem from './ArticleItem'
    export default {
        name: 'articles',  
        data () {  
            return {  
                results: ''
            }  
        }, 
        mounted() {
            var that = this
            axios.get('/api/articles')
            .then(r => r.data)
            .then(response => {
                that.results = response.data
            })
        },
        components : {
            'sidebar': sidebar,
            'contentMenu': contentMenu,
            'pagination': pagination,
            'articleItem': articleItem
        }
    }
</script>
