import stockMarketURLRedirect from './components/views/api.vue'
import index from './App.vue'
const routes = [{
  path: '/stocks',
  component: stockMarketURLRedirect
},
{
  // not found handler
  path: '*',
  component: index
}
]

export default routes
