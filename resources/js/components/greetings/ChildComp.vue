<script setup>
const props = defineProps({
    msgp: String,
});

const emit = defineEmits(["response"]);

emit("response", "Hello à partir de l'enfant");
</script>

<template>
    <h2>{{ msgp || "Aucune prop passée pour le moment" }}</h2>
    <hr />
    <slot>Contenu de secours</slot>
<!--
    <slot/>
-->
</template>
