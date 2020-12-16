import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import Home from "./components/home"
import ventas from "./components/ventas";
import compras from "./components/compras";
import cierreCaja from "./components/cierreCaja";
import totalDia from "./components/totalDia";
import buscarProducto from "./components/buscarProducto";
//import ingresoProducto from "./components/ingresoProducto";
import ingresoProducto from "./components/crearProducto";

Vue.config.productionTip = false

Vue.use(VueRouter);
const routes = [
  { path: '/ventas',          component: ventas  },
  { path: '/compras',         component: compras },
  { path: '/ingresoProducto', component: ingresoProducto },
  { path: '/cierreCaja',      component: cierreCaja },
  { path: '/totalDia',        component: totalDia },
  { path: '/buscarProducto',  component: buscarProducto },
  //{ path: '*', component: ErrorComponent }, //pantalla de error
  { path: '/',                component: Home }, //Ruta Base
  { path: '/home', name:Home, component: Home }
  //{ path: '/login', component: Login:id? }, //el ? es opcional
]

//Se crea el nuevo objeto vuerouter
const router = new VueRouter({
  routes, //Se pasa el array de rutas
  mode: 'history' //Para que no reargue la pantalla al cambiar de ruta
})
new Vue({
  router, //se agrega el objeto router a la instancia de vue para que sea global
  render: h => h(App),
}).$mount('#app')


