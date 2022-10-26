import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import { library } from "@fortawesome/fontawesome-svg-core";
import { faBell,faCartShopping,faStore,faGraduationCap,faCalendarCheck,faPeopleGroup,faTrash,faCirclePlus,faCircleMinus,faClock,faRotate,faVanShuttle,faLocationDot,faCaretDown,faCircleArrowRight} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

library.add(faBell,faCartShopping,faStore,faGraduationCap,faCalendarCheck,faPeopleGroup,faTrash,faCirclePlus,faCircleMinus,faClock,faRotate,faVanShuttle,faLocationDot,faCaretDown,faCircleArrowRight);

import 'flowbite';
import './assets/main.css'

const app = createApp(App);

app.component("font-awesome-icon", FontAwesomeIcon);
app.use(router);
app.mount('#app');


