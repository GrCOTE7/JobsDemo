<script setup>
const props = defineProps({
  msg: String
})
</script>

<template>
  <h2>{{ msg || 'Aucune prop passée pour le moment' }}</h2>
</template>
