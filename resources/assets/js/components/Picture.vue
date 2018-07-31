<template>
    <div class="container main">
        <div class="row">
            <sidebar></sidebar>
            <div class="col-lg-9 col-md-9 main-content">
                <contentMenu></contentMenu>
                <div class="cases-list">
                    <ul>
                        <li>
                            <a href="#">
                                <figure class="case-img cover"><img src="" /></figure>
                                <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                                <p>教你选择大理石</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <figure class="case-img cover"><img src="" /></figure>
                                <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                                <p>教你选择大理石</p>
                            </a>
                        </li>
                        
                    </ul>
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
     export default {
        mounted() {
            console.log('Component mounted.')
        },
        components : {
            'sidebar': sidebar,
            'contentMenu': contentMenu,
            'pagination': pagination
        }
    }
</script>
