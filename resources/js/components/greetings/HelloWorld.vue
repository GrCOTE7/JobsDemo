<!--
Les directives v-if et v-for permettent d'effectuer un rendu conditionnel ou dans une boucle.
-->

<script setup>
import { ref } from 'vue'

const show = ref(true)
const list = ref([1, 2, 3])
</script>

<template>
  <button class="d-block btn btn-primary mb-2" @click="show = !show">Afficher / cacher la liste</button>
  <button class="d-block btn btn-primary mb-2" @click="list.push(list.length + 1)">Ajouter un nombre à la fin</button>
  <button class="d-block btn btn-primary mb-2" @click="list.pop()">Retirer le dernier nombre</button>
  <button class="d-block btn btn-primary mb-2" @click="list.reverse()">Inverser la liste</button>

  <ul v-if="show && list.length">
    <li v-for="item of list">{{ item }}</li>
  </ul>
  <p v-else-if="list.length">La liste n'est pas vide, mais cachée.</p>
  <p v-else>La liste est vide.</p>
</template>
