<script setup>
import {Head, Link} from '@inertiajs/vue3';
import FloatingTextInput from '@/Components/form-elements/FloatingTextInput.vue';
import BlackButton from '@/Components/form-elements/BlackButton.vue';
import WhiteButton from "@/Components/form-elements/WhiteButton.vue";
import Header from '@/Components/shared/Header.vue'
import Footer from "@/Components/shared/Footer.vue";
</script>

<template>
    <Head title="Home"/>
    <Header />
    <div class="bg-black text-white/50 mb-10 rounded-b-md">
        <section class="bg-black flex justify-center rounded-b-md">
            <div class="container flex gap-4 justify-center items-center">
                <div class="w-3/4 flex justify-center items-center mx-auto">
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
                <div class="w-3/4 my-10 flex justify-center items-center">
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
    <Footer />
</template>
