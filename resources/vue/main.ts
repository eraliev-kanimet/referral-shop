import {createApp} from "vue";
import {createPinia} from "pinia";

import App from "./App.vue";
import router from "./router";
import i18n from "./plugins/i18n"

import 'bootstrap'
import './assets/scss/app.scss'

import showError from "./directives/show-error";

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.use(i18n)

app.directive('show-error', showError)

app.mount('#app')
