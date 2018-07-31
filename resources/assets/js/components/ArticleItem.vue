<template>
    <ul>
        <li v-for="article in articles" :key="article.id" class="row" >
            <div class="col-sm-3 img">
                <a href="#"><img :src="'../uploads/'+article.image" /></a>
            </div>
            <div class="col-sm-9 info">
                <a href="#">{{ article.title }}</a>
                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
       props: ['articles']
    }
</script>
