import VueRouter from 'vue-router';
import Home from './components/Home';
import Conocenos from './components/About';
import News from './components/News';
import Newshow from './components/Newshow';
import Posters from './components/Posters';
import Bank from './components/Bank';
import Activity from './components/Activity';
 

let routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/conocenos',
        name: 'about',
        component: Conocenos,
    },
    {
        path: '/noticias',
        name: 'news',
        component: News,
    },
    {
        path: '/noticias/show/:id',
        name: 'newshow',
        component: Newshow,
    },
    {
        path: '/convocatorias',
        name: 'posters',
        component: Posters,
    },
    {
        path: '/galeria',
        name: 'imagebank',
        component: Bank,
    },
    {
        path: '/actividades',
        name: 'activities',
        component: Activity,
    },
];
 
 
export default new VueRouter({
    mode: 'history',
    routes
});
