<script setup>
import {Head} from '@inertiajs/vue3';
import Header from "@/Components/shared/header.vue";
import Footer from "@/Components/shared/footer.vue";

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
    <section class="container">
        <slot/>
    </section>
    <Footer/>
</template>

