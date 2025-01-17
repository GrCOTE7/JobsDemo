<!--
https://eugenkiss.github.io/7guis/tasks/#flight
-->

<script setup>
import { ref, computed } from 'vue'

const flightType = ref('one-way flight')
const departureDate = ref(dateToString(new Date()))
const returnDate = ref(departureDate.value)

const isReturn = computed(() => flightType.value === 'return flight')

const canBook = computed(
  () =>
    !isReturn.value ||
    stringToDate(returnDate.value) > stringToDate(departureDate.value)
)

function book() {
  alert(
    isReturn.value
      ? `Vous avez réservé un vol aller-retour, avec un départ le ${departureDate.value} et un retour le ${returnDate.value}.`
      : `Vous avez réservé un vol simple partant le ${departureDate.value}.`
  )
}

function stringToDate(str) {
  const [y, m, d] = str.split('-')
  return new Date(+y, m - 1, +d)
}

function dateToString(date) {
  return (
    date.getFullYear() +
    '-' +
    pad(date.getMonth() + 1) +
    '-' +
    pad(date.getDate())
  )
}

function pad(n, s = String(n)) {
  return s.length < 2 ? `0${s}` : s
}
</script>

<template>
  <select v-model="flightType">
    <option value="one-way flight">Vol simple</option>
    <option value="return flight">Vol aller-retour</option>
  </select>

  <input type="date" v-model="departureDate">
  <input type="date" v-model="returnDate" :disabled="!isReturn">

  <button :disabled="!canBook" @click="book">Réserver</button>

  <p>{{ canBook ? '' : 'La date de retour doit être supérieure à la date de départ.' }}</p>
</template>

<style>
select,
input,
button {
  display: block;
  margin: 0.5em 0;
  font-size: 15px;
}

input[disabled] {
  color: #999;
}

p {
  color: red;
}
</style>
