<template>
    <users-select
        v-if="pathName === '/test' && users.length !== 0"
        :users = "users"
        class = "mb-3"
    />
    <template v-for="user in users">
        <p>
            <span v-text="user.id" /> -
            <span v-text="user.name" class="font-bold" />
        </p>
    </template>
</template>

<script setup lang="ts">
import { ref } from "vue";
const users = ref([]);
const loadFromServer = async () => {
    await axios
        .get("/api/users")
        .then((res) => (users.value = res.data.data))
        .catch((err) => console.log(err));
};
loadFromServer();
const pathName = window.location.pathname;
</script>
