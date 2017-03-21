//https://vuejs.org/v2/guide/routing.html
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    base: '/admin',
    mode: 'history',
    linkActiveClass: 'tab-active',
    routes: [
        {path: '/example', 'name': 'example',  component: require('./components/Example.vue')},
        {path: '/dashboard', 'name': 'dashboard', component: require('./components/home.vue')},
        {path: '/users', component: require('./components/user.vue'),
          children: [
            {
              path: '',
              component: require('./components/usersList.vue'),
            },
            {
              path: 'addNewUser',
              component: require('./components/addNewUser.vue'),
            },
          ]
        },
    ]
})


export default router
