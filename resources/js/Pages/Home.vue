<script setup>
import {Head, Link} from '@inertiajs/vue3';
import FloatingTextInput from '@/Components/FloatingTextInput.vue';
import BlackButton from '@/Components/BlackButton.vue';
import WhiteButton from "@/Components/WhiteButton.vue"
</script>

<template>
    <Head title="Home"/>
    <div class="bg-black text-white/50 mb-10 rounded-b-md">
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
            <div class="my-3 p-2 mr-[90px] text-white">
                <ul class="inline-flex gap-4">
                    <li>
                        <Link class="p-3 text-[15px] font-semibold hover:bg-zinc-800 rounded-full transition ease-in-out duration-200" href="/">Login</Link>
                    </li>
                    <li>
                        <Link class="p-3 text-[15px] text-black bg-white font-semibold hover:bg-zinc-300 rounded-full transition ease-in-out duration-200" href="/t">Register</Link>
                    </li>
                </ul>
            </div>
        </div>
        <section class="bg-black h-4/5 flex justify-center rounded-b-md">
            <div class="container flex gap-4 justify-center items-center">
                <div class="w-3/4 h-[85vh] flex justify-center items-center mx-auto">
                    <div class="flex flex-col justify-center items-start">
                        <div class="flex flex-col p-4">
                            <span class="text-white font-bold text-4xl mb-5">Book your Ride Now</span>
                            <span class="text-white">Request a ride, hop in, and go.</span>
                        </div>
                        <div class="flex flex-col gap-2 p-4 w-full">
                            <form>
                                <FloatingTextInput class="mb-2" label="Select from Location"></FloatingTextInput>
                                <FloatingTextInput class="mb-2" label="Select to Location"></FloatingTextInput>
                                <FloatingTextInput class="mb-2" label="Enter You value"></FloatingTextInput>
                                <white-button type="button" class="w-40 mt-3">Book a trip</white-button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-3/4 h-[85svh] flex justify-center items-center">
                    <img src="/images/home/Ride-with-Uber.webp" alt="ride-with-use"/>
                </div>
            </div>
        </section>
    </div>
    <section class="grid grid-cols-2 gap-x-9 gap-y-9 p-4 justify-items-center content-center mb-10">
        <div>
            <img src="/images/home/u4b-square.png" alt="ride-with-use"/>
        </div>
        <div class="flex flex-col gap-5 justify-center p-[80px]">
            <span class="m-3 text-black text-5xl font-bold">Go any place as you want, make what you need</span>
            <span class="m-3">Make money on your schedule with deliveries or rides—or both. You can use your own car or choose a rental through Uber.</span>
            <div class="flex gap-4 m-3 items-center">
                <BlackButton>Get started</BlackButton>
                <Link class="text-base font-normal underline underline-offset-8" href="/">Already have an account? Sign in</Link>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-2 gap-x-9 gap-y-9 p-4 justify-items-center content-center mb-10">
        <div class="flex flex-col gap-5 justify-center p-[80px]">
            <span class="m-3 text-black text-5xl font-bold">Go any place as you want, make what you need</span>
            <span class="m-3">Make money on your schedule with deliveries or rides—or both. You can use your own car or choose a rental through Uber.</span>
            <div class="flex gap-4 m-3 items-center">
                <BlackButton>Get started</BlackButton>
                <Link class="text-base font-normal underline underline-offset-8" href="/">Already have an account? Sign in</Link>
            </div>
        </div>
        <div>
            <img src="/images/home/u4b-square.png" alt="ride-with-use"/>
        </div>
    </section>
    <footer class="grid grid-cols-4 gap-x-9 gap-y-9 p-4 rounded-t-md bg-black justify-items-center content-center text-white h-40">
        <span class="mr-20 text-[20px] font-semibold">TransitTix</span>
    </footer>
</template>
