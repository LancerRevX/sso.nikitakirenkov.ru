<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
<div class="btn-group mb-3 d-flex">
    <Link 
        href="log-in"
        class="btn w-100"
        :class="$page.component == 'LogIn' ? 'btn-primary' : 'btn-outline-primary'"
    >
        {{ $t('logIn.title') }}
    </Link>
    <Link 
        href="join"
        class="btn w-100"
        :class="$page.component == 'Join' ? 'btn-primary' : 'btn-outline-primary'"
    >
        {{ $t('join.title') }}
    </Link>
</div>
</template>