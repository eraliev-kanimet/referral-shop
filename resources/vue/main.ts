import {createApp} from "vue";
import {createPinia} from "pinia";

import App from "./App.vue";
import router from "./router";
import i18n from "./plugins/i18n"

import 'bootstrap'
import './assets/scss/app.scss'

createApp(App)
    .use(createPinia())
    .use(router)
    .use(i18n)
    .mount('#app')
