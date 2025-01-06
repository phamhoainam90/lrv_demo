import './bootstrap';
import { createApp } from "vue";
import router from "./router/index.js";
import 'bootstrap/dist/css/bootstrap-grid.min.css';
import 'bootstrap/dist/css/bootstrap-utilities.min.css';
import  'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'bootstrap/dist/js/bootstrap.bundle';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

import Loading from "vue-loading-overlay";
import {LoadingPlugin} from "vue-loading-overlay";
import 'vue-loading-overlay/dist/css/index.css';

import Antd from "ant-design-vue";

import App from './App.vue';

const app = createApp(App);
app.component('font-awesome-icon', FontAwesomeIcon);
app.use(router);
app.use(LoadingPlugin);
app.use(Antd);
app.component('Loading', Loading);
app.mount("#app");
