<template>
    <ul>
        <li v-for="product in products" :key="product.id">
            <a href="#">
                <img :src="'../uploads/'+product.image" />
                <p>{{ product.title }}</p>
            </a>
        </li>
    </ul>
</template>

<script>
    export default {
       props: ['products']
    }
</script>
