require('../bootstrap')

window.Vue = require('vue')
import VueRouter from 'vue-router'
import Vuex from 'vuex'
Vue.use(VueRouter)
Vue.use(Vuex)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 import products from '../components/Product'
 import articles from '../components/Article'
 import pictures from '../components/Picture'

 // 路由
const router = new VueRouter({
    mode: 'history',
    routes: [
      { path: '/' },
      { path: '/pages/:category?', name: "pages" },
      { path: '/products/:category?', name: 'products', component: products },
      { path: '/product/:id', name: 'product' },
      { path: '/articles/:category?', name: 'articles', component: articles },
      { path: '/article/:id', name: 'article' },
      { path: '/pictures/:category?', name: 'pictures', component: pictures },
      { path: '/pictrue/:id', name: 'case' }
    ]
})

const state = {
    categories: '',
    productTree: '',
    config: ''
}

const mutations = {
    SET_CATEGORIES(state, categories){
       state.categories = categories
    },
    SET_CONFIG(state, config){
        state.config = config
    },
    SET_PRODUCT_TREE(state, productTree){
        state.productTree = productTree
    }
}
  
const actions = {
    loadInit ({ commit }) {
        axios.get('/api/initweb')
            .then(r => r.data)
            .then(coins => {
                commit('SET_CONFIG', coins.data.config)
                commit('SET_CATEGORIES', coins.data.categories)
                commit('SET_PRODUCT_TREE', coins.data.product_tree)
            })
    }
}

Vue.component('header-box', require('../components/Header.vue'))
Vue.component('footer-box', require('../components/Footer.vue'))

const store = new Vuex.Store({
    state: state,
    mutations: mutations,
    actions: actions
})

new Vue({
    router,
    store
}).$mount('#app')