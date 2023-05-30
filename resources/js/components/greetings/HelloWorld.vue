<script setup>
import { ref } from "vue";
import ChildComp from "./ChildComp.vue";

const greeting = ref("Hello du parent (transmis à l'enfant)");

const childMsg = ref("Pas encore de message de l'enfant");
</script>

<template>
    <ChildComp :msgp="greeting" @response="(msg) => (childMsg = msg)">
        Il y a un slot
    </ChildComp>
    <hr />
    {{ childMsg }}
</template>

<style scoped></style>
