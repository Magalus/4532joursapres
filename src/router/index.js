import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Calendrier from '../views/Calendrier.vue'
import Hebergements from '../views/Hebergements.vue'
import Plan from '../views/Plan.vue'
import ConfirmerPresence from '../views/ConfirmerPresence.vue'
import ListeMariage from '../views/ListeMariage.vue'
import Contact from '../views/Contact.vue'


const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },  
  {
    path: '/calendrier',
    name: 'Calendrier',
    component: Calendrier
  },
  {
    path: '/hebergements',
    name: 'Hebergements',
    component: Hebergements
  },
  {
    path: "/plan-dacces",
    name: 'Plan',
    component: Plan
  },
  {
    path: '/confirme-ma-presence',
    name: 'ConfirmerPresence',
    component: ConfirmerPresence
  },
  {
    path: '/liste-de-mariage',
    name: 'ListeMariage',
    component: ListeMariage
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact
  },
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
