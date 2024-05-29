<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="bg-black flex justify-between px-20">
        <div class="my-3 p-2 ml-[80px] text-white">
            <span class="mr-20 text-[20px] font-bold">TransitTix</span>
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
        </div>
        <div class="my-3 mt-4 p-2 mr-[90px] text-white">
            <ul class="inline-flex gap-4">
                <li class="w-20">
                    <Link class="p-3 text-[15px] font-semibold hover:bg-zinc-800 rounded-full transition ease-in-out duration-200" href="/">Login</Link>
                </li>
                <li>
                    <Link class="p-3 text-[15px] text-black bg-white font-semibold hover:bg-zinc-300 rounded-full transition ease-in-out duration-200" href="/t">Register</Link>
                </li>
            </ul>
        </div>
    </div>
</template>
