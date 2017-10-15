import Vue from 'vue'
import VueRouter from 'vue-router'

import routes from './routes'
import App from './App.vue'
import AppView from './components/app.vue'

Vue.use(VueRouter)

var router = new VueRouter({
  routes // short for `routes: routes`
})
Vue.router = router

new Vue({
  el: '#root',
  router: router,
  render: h => h(AppView)
})
