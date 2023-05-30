<!--
Voici le composant le plus simple possible, qui accepte une prop et la rend.
Pour en savoir plus sur les composants, consultez le guide !
-->

<script setup>
import { ref } from 'vue'
import TodoItem from './TodoItem.vue'

const groceryList = ref([
  { id: 0, text: 'Légumes' },
  { id: 1, text: 'Fromage' },
  { id: 2, text: 'Toute autre chose comestible pour les humains' }
])
</script>

<template>
  <ol>
    <!--
      Nous fournissons à chaque todo-item l'objet todo
      qu'il représente, afin que son contenu soit dynamique.
      Nous devons également fournir à chaque composant une "key",
      qui est abordée dans la section dédiée du guide sur v-for.
    -->
    <TodoItem
      v-for="item in groceryList"
      :todo="item"
      :key="item.id"
    ></TodoItem>
  </ol>
</template>
