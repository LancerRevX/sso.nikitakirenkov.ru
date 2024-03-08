<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';

import TitleLogo from '@/Components/TitleLogo.vue';
import LogInJoinButtons from '@/Components/LogInJoinButtons.vue';

defineProps({ user: Object });

let form = useForm({
    name: '',
    password: '',
});
</script>

<template>
    <Head :title="$t('logIn.title')" />

    <div class="container-fluid vh-100 d-flex flex-column justify-content-center">
        <div class="row justify-content-center flex-fill flex-sm-grow-0">
            <div class="col-12 col-sm-auto shadow p-5 rounded">
                <TitleLogo class="mb-5"></TitleLogo>
                <LogInJoinButtons></LogInJoinButtons>
                <p>{{ $t('logIn.prompt') }}</p>
                <form
                    @submit.prevent="form.post('log-in')"
                    class=""
                >
                    <div class="mb-3">
                        <label class="form-label">{{ $t('username') }}</label>
                        <input
                            type="text"
                            v-model="form.name"
                            class="form-control"
                        >
                    </div>
                    <div class="mb-4">
                        <label class="form-label">{{ $t('password') }}</label>
                        <input
                            type="password"
                            v-model="form.password"
                            class="form-control"
                        >
                    </div>
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="btn btn-primary col-12 col-sm-auto px-auto"
                    >
                        {{ $t('logIn.submit') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>