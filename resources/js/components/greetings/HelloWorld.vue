<script setup>
import { ref } from "vue";

const euro = ref(1);
const fr = ref(6.55957);

function round(num) {
    var m = Number((Math.abs(num) * 100).toPrecision(15));
    return (Math.round(m) / 100) * Math.sign(num);
}

function setEuro(e, v = +e.target.value) {
    euro.value = v;
    fr.value = round(v * 6.55957, 2);
}

function setFr(e, v = +e.target.value) {
    fr.value = v;
    euro.value = round(v / 6.55957, 2);
}
</script>

<template>
    <form>
        <div class="row">
            <div class="col">
                <label for="euro">€uros</label>
                <input
                    type="number"
                    class="form-control"
                    :value="euro"
                    @change="setEuro"
                />
            </div>
            <div class="col">
                <label for="fr">Francs</label>
                <input
                    type="number"
                    class="form-control"
                    :value="fr"
                    @change="setFr"
                />
            </div>
        </div>
    </form>
</template>
