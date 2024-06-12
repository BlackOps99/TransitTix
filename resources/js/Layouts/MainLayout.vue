<script setup>
import {Head} from '@inertiajs/vue3';
import Header from "@/Components/shared/Header.vue";
import Footer from "@/Components/shared/Footer.vue";

defineProps({
    pageTitle: {
        type: String,
        required: true,
        default: 'Home'
    }
})
</script>
<template>
    <Head :title="pageTitle"/>
    <Header/>
    <slot/>
    <Footer/>
</template>
