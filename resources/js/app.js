import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import UsersList from './components/users/UsersList.vue';
import UsersSelect from './components/users/UsersSelect.vue';
import UsersListWithSelect from './components/users/UsersListWithSelect.vue';
import UserCreate from './components/users/UserCreate.vue';

const app = createApp({});

app.component('usersList', UsersList);
app.component('usersSelect', UsersSelect);
app.component('UsersListWithSelect', UsersListWithSelect);
app.component('userCreate', UserCreate);

app.mount('#app');
