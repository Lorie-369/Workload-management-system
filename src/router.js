import App from './app';
import student from './student.vue';
import student2 from './student2.vue';

const routers = [
  {
    path: '/',
    name: App,
    meta: {
      title: ''
    },
    component: resolve => require(['./views/index.vue'], resolve),
    children: [
      {
        path: '/student2',
        component: student2,
        name: '/student2'
      }
    ]
  },
  {
    path: '/student',
    name: 'student',
    component: student
  },
  ,
  {
    path: 'student2',
    component: student2,
    name: 'student2'
  }
];
export default routers;
