<!--
Ici, nous lions de manière réactive les attributs / propriétés de l'élément à l'état.
La syntaxe :title est un raccourci de v-bind:title.
-->

<script setup>
import { ref } from "vue";

const message = ref("Hello World !");
const isRed = ref(true);

const colors = ref([
    { id: 0, color: "blue" },
    { id: 1, color: "red" },
]);
const color = ref("blue");

const id = ref(1);
function toggleRed() {
    isRed.value ^= 1;
}

function toggleColor() {
    id.value ^= 1;
    color.value = colors.value[id.value].color;
    console.log(color.value);
}
</script>

<template>
    <p>
        <span :title="message">
            Passez votre souris sur moi pendant quelques secondes pour voir mon
            titre lié de manière dynamique !
        </span>
    </p>

    <!--
  les liaisons de classes ont une prise en charge spéciale pour les objets et les tableaux
  en plus des chaînes de caractères simples
  -->
    <p :class="{ red: isRed }" @click="toggleRed">
        Ceci devrait être rouge... mais cliquez sur moi pour le changer.
    </p>

    <!-- les liaisons de style prennent également en charge les objets et les tableaux
    -->
    <p :style="{ color }" @click="toggleColor">
        Cela doit être bleu et alterner entre le rouge et le bleu lorsque l'on
        clique dessus.
    </p>
</template>

<style>
.red {
    color: red;
}
.blue {
    color: blue;
}
</style>
