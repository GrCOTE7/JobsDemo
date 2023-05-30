<script setup>
import {ref} from 'vue'
import ChildComp from './ChildComp.vue'

const greeting = ref('Hello du parent (transmis à l\'enfant)')
</script>

<template>
<ChildComp :msg = "greeting"/>
</template>

<style scoped>

</style>
