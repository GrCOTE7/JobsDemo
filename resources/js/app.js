import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';

import HelloWorld from './components/greetings/HelloWorld.vue';

// import UsersList from './components/users/UsersList.vue';
// import UsersSelect from './components/users/UsersSelect.vue';
// import UserCreate from './components/users/UserCreate.vue';

const app = createApp({});

app.component('helloWorld', HelloWorld);

// app.component('usersList', UsersList);
// app.component('usersSelect', UsersSelect);
// app.component('userCreate', UserCreate);

app.mount('#app');
