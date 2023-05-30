<script>
export default {
    data() {
        return {
            compteur: 0,
        };
    },
};
</script>

<template>
    <button
        @click="
            compteur++;
            console.log(compteur);
        "
    >
        Le compteur est à {{ compteur }}
    </button>
</template>

<style scoped>
button {
    font-weight: bold;
}
</style>
