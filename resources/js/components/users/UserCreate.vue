<template>
    <form>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input
                v-model="formData.name"
                type="text"
                class="form-control"
                id="name"
                placeholder="Entrez votre nom"
                required
            />
            <template v-if="errors.name"
                ><span style="color: red" v-text="errors.name[0]" />
            </template>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input
                v-model="formData.email"
                type="email"
                class="form-control"
                id="email"
                placeholder="Entrez votre e-mail"
                required
            />
            <template v-if="errors.email"
                ><span style="color: red" v-text="errors.email[0]" />
            </template>
        </div>

        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input
                v-model="formData.password"
                type="password"
                class="form-control"
                id="password"
                placeholder="Entrez votre mot de passe"
                required
            />
            <template v-if="errors.password"
                ><span style="color: red" v-text="errors.password[0]" />
            </template>
        </div>

        <div class="form-group">
            <label for="password_confirmation"
                >Confirmer le mot de passe:</label
            >
            <input
                v-model="formData.password_confirmation"
                type="password"
                class="form-control"
                id="password_confirmation"
                placeholder="Re-entrez votre mot de passe"
                required
            />
        </div>

        <button type="button" class="btn btn-primary mt-3" @click="createUser">
            Envoyer
        </button>
    </form>
</template>

<script setup>
import { ref } from "vue";
import axios from "axios";

const errors = ref({});

const formData = ref({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const createUser = () => {
    axios
        .post("/api/users", formData.value)
        .then((res) => {
            errors.value = {};
            console.log(res);
            window.location.href='/users';
        })
        .catch((err) => (errors.value = err.response.data.errors));
};
</script>
