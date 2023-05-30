<script setup>
import { ref } from "vue";
import { Switch } from "@headlessui/vue";

const reverseByWords = ref(false);

const msg = ref("Hello World !");

function reverseMessage(reverseWords) {
    let separator = reverseByWords ? true : false;
    msg.value = msg.value.split("").reverse().join("");
    console.log(reverseByWords.value);
}

function otherMode() {
    reverseByWords.value = !reverseByWords.value;
}

function notify() {
    alert("la navigation a été empêchée.");
}
</script>

<template>
    <h1 class="font-bold text-blue-500 text-3xl">{{ msg }}</h1>

    <div class="d-flex justify-content-start align-items-center">
        <button class="btn btn-primary font-semibold" @click="reverseMessage">
            Inverser le message
        </button>

        <div class="ml-3 grow-2 d-flex align-items-center">
            <span :class="{ bold: !reverseByWords }" class="w-20"
                >Par lettres</span
            >
            <Switch
                @click="otherMode"
                v-model="reverseByWords"
                :class="reverseByWords ? 'bg-blue-900' : 'bg-blue-600'"
                class="mx-2 relative inline-flex h-[38px] w-[74px] shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75"
            >
                <span class="sr-only">Use setting</span>
                <span
                    aria-hidden="true"
                    :class="reverseByWords ? 'translate-x-9' : 'translate-x-0'"
                    class="pointer-events-none inline-block h-[34px] w-[34px] transform rounded-full bg-white shadow-lg ring-0 transition duration-200 ease-in-out"
                />
            </Switch>
            <span :class="{ bold: !reverseByWords }">Par mots</span>
        </div>
    </div>

    <a href="https://vuejs.org" @click.prevent="notify" class="underline">
        Un lien avec e.preventDefault()
    </a>
</template>

<style scoped>
.bold {
    font-weight: bold;
}
</style>
