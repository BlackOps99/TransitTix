<script setup>
import { ref, watch } from "vue";
import Dropdown from 'primevue/dropdown';
import Calendar from 'primevue/calendar';
import {Head} from '@inertiajs/vue3';
import Header from '@/Components/shared/Header.vue'
import Footer from "@/Components/shared/Footer.vue";
import AboutUsSection from "@/Components/AboutUsSection.vue";
import BusSection from "@/Components/BusSection.vue";

const ScrollIntoView = (elem) => {
    let ele = document.querySelector(elem);
    ele.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

const fromCity = ref();
const toCity = ref();
const date = ref();

const cities = ref([
    { name: 'Cairo', code: 'cairo' },
    { name: 'Alexandria', code: 'alexandria' },
    { name: 'Luxor', code: 'luxor' },
    { name: 'Hurghada', code: 'hurghada' },
    { name: 'Qena', code: 'qena' },
    { name: 'Assiut', code: 'assiut' }
]);

const originalCities = [...cities.value];
const citiesTo = ref([...originalCities]);

watch(fromCity, (newCity) => {
    if (newCity) {
        citiesTo.value = originalCities.filter(city => city.code !== newCity.code);
    } else {
        citiesTo.value = [...originalCities];
    }
});
</script>

<template>
    <Head title="Home"/>
    <Header />
    <section class="py-36 lg:py-72 lg:pb-0 md:pb-8 w-full table relative bg-center bg-cover"
             :style="{ backgroundImage: `url(/images/home/bg.jpg)` }" id="home">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container relative">
            <div class="grid lg:grid-cols-12 mt-10 md:grid-cols-2 gap-2">
                <div class="lg:col-span-7">
                    <h4
                        class="text-white lg:text-5xl text-4xl lg:leading-normal leading-normal font-medium mb-7 position-relative">
                        Book Your Bus Now!</h4>

                    <p class="text-white opacity-50 mb-0 max-w-2xl text-lg">Book your bus with cash or your credit card in less than two minutes.</p>
                </div>

                <div class="lg:col-span-5 mt-8 md:mt-0">
                    <div class="bg-white dark:bg-slate-900 rounded-xl shadow md:p-10 p-6 lg:ms-10 z-10 relative">
                        <h4 class="mb-5 font-medium text-2xl dark:text-white">Book Bus</h4>

                        <form>
                            <div class="grid grid-cols-1">
                                <div class="mb-5">
                                    <div class="flex flex-col">
                                        <label class="dark:text-white mb-2">From</label>
                                        <Dropdown v-model="fromCity" :pt="{
                                            root: { class: 'cursor-pointer text-black p-3 border border-[#ea580c] rounded-md' },
                                        }" :options="cities" optionLabel="name" placeholder="Select a City" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="flex flex-col">
                                        <label class="dark:text-white mb-2">To</label>
                                        <Dropdown v-model="toCity" :pt="{
                                            root: { class: 'cursor-pointer text-black p-3 border border-[#ea580c] rounded-md' },
                                        }" :options="citiesTo" optionLabel="name" placeholder="Select a City" class="mt-2" />
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="flex flex-col">
                                        <label class="dark:text-white mb-2">Date</label>
                                        <Calendar v-model="date" :pt="{
                                            input: { class: 'cursor-pointer text-black p-3 border border-[#ea580c] rounded-md' },
                                        }" dateFormat="dd/mm/yy" showButtonBar/>
                                    </div>
                                </div>
                                <a href="javascript:void (0)"
                                   class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Show Trips</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="relative">
        <div class="shape overflow-hidden text-gray-50 dark:text-slate-800 rtl:-scale-x-[1]">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <AboutUsSection />
    <BusSection />
    <a href="javascript:void(0);" @click="ScrollIntoView('#home')" id="back-to-top"
       class="back-to-top fixed text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-orange-600 text-white leading-9"><i
        class="uil uil-arrow-up"></i></a>
    <Footer />
</template>
