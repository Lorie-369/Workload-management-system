import Vue from 'vue';
import iView from 'iview';
import VueRouter from 'vue-router';
// import Routers from './router';
import Util from './libs/util';
import access from './access.vue';
import student from './student.vue';
import student2 from './student2.vue';
import student3 from './student3.vue';
import student4 from './student4.vue';
import student5 from './student5.vue';
import teacher from './teacher.vue';
import teacher2 from './teacher2.vue';
import teacher3 from './teacher3.vue';
import teacher4 from './teacher4.vue';
import teacher5 from './teacher5.vue';
import administration from './administration.vue';
import administration2 from './administration2.vue';
import administration3 from './administration3.vue';
import administration4 from './administration4.vue';
import administration5 from './administration5.vue';
import homepage from './homepage.vue';
import 'iview/dist/styles/iview.css';

Vue.use(VueRouter);
Vue.use(iView);
// 路由配置
let RouterConfig;
RouterConfig = {
  // mode: 'history',
  routes: [
    {
      path: '/',
      name: 'homepage',
      component: homepage
      // children: [
      //     {
      //         path: '/student',
      //         component: student
      //     },
      //     {
      //         path: '/homepage',
      //         component: homepage
      //     },
      //     {
      //         path: '/student2',
      //         component: student2,
      //         name: 'student2',
      //     }
      //
    },
    {
      path: '/student',
      name: 'student',
      component: student
    },
    {
      path: '/student2',
      name: 'student2',
      component: student2
    },
    {
      path: '/student3',
      name: 'student3',
      component: student3
    },
    {
      path: '/student4',
      name: 'student4',
      component: student4
    },
    {
      path: '/student5',
      name: 'student5',
      component: student5
    },
    {
      path: '/teacher',
      name: 'teacher',
      component: teacher
    },
    {
      path: '/teacher2',
      name: 'teacher2',
      component: teacher2
    },
    {
      path: '/teacher3',
      name: 'teacher3',
      component: teacher3
    },
    {
      path: '/teacher4',
      name: 'teacher4',
      component: teacher4
    },
    {
      path: '/teacher5',
      name: 'teacher5',
      component: teacher5
    },
    {
      path: '/administration',
      name: 'administration',
      component: administration
    },
    {
      path: '/administration2',
      name: 'administration2',
      component: administration2
    },
    {
      path: '/administration3',
      name: 'administration3',
      component: administration3
    },
    {
      path: '/administration4',
      name: 'administration4',
      component: administration4
    },
    {
      path: '/administration5',
      name: 'administration5',
      component: administration5
    }
  ]
};
const router = new VueRouter(RouterConfig);

router.beforeEach((to, from, next) => {
  iView.LoadingBar.start();
  Util.title(to.meta.title);
  next();
});

router.afterEach((to, from, next) => {
  iView.LoadingBar.finish();
  window.scrollTo(0, 0);
});

new Vue({
  el: '#app',
  router: router,
  render: h => h(access)
});

/*new Vue({
    el: '#student2',
    router: router,
    render: h => h(student2)
});*/

/*let push = this.$route.push({
    name: 'homepage',
    query: {
        queryId:'000',
        queryName:'homepage',
    }
});*/

/*export default RouterConfig;*/
