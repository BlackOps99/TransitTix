<script setup>
import { Link } from '@inertiajs/vue3';
import ApplicationLogo from "@/Components/shared/ApplicationLogo.vue";
</script>

<template>
    <header class="bg-black flex justify-between px-20">
        <nav class="my-3 p-2 ml-[80px] text-white">
            <ApplicationLogo />
            <ul class="inline-flex gap-7">
                <li>
                    <Link class="p-3 text-[15px] font-semibold hover:bg-zinc-800 rounded-full transition ease-in-out duration-200" href="/">Home</Link>
                </li>
                <li>
                    <Link class="p-3 text-[15px] font-semibold hover:bg-zinc-800 rounded-full transition ease-in-out duration-200" href="/">About</Link>
                </li>
                <li>
                    <Link class="p-3 text-[15px] font-semibold hover:bg-zinc-800 rounded-full transition ease-in-out duration-200" href="/t">Help</Link>
                </li>
            </ul>
        </nav>
        <nav class="my-3 mt-4 p-2 mr-[90px] text-white">
            <ul class="inline-flex gap-4">
                <li :class="{'hidden': route().current('login')}" class="w-20">
                    <Link :class="{'': true}" class="p-3 text-[15px] font-semibold transition ease-in-out duration-200" :href="route('login')">Login</Link>
                </li>
                <li :class="{'hidden': route().current('register')}">
                    <Link :class="{'': true}" class="p-3 text-[15px] font-semibold text-black bg-white hover:bg-zinc-300 rounded-full transition ease-in-out duration-200" :href="route('register')">Register</Link>
                </li>
            </ul>
        </nav>
    </header>
</template>