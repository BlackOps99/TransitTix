<script setup>
import { computed } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    filters: Object,
    triosCount: Number,
    trips: Object,
});

const gridClass = computed(() => {
    return `grid grid-cols-${props.triosCount * 2} gap-[30px]`;
})

function capitalizeFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

const form = useForm({
    tripID: 0,
});

const onClick = (tripId) => {
    form.tripID = tripId;
    console.log(tripId)
    form.submit('post', route('book_trip.store'), {
        preserveScroll: true,
    });
};
</script>

<template>
    <MainLayout page-title="Trips">
        <section class="py-28 w-full table relative bg-top bg-no-repeat">
            <div class="absolute inset-0 bg-slate-950/80"></div>
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="mb-3 text-3xl leading-normal font-medium text-white">{{ capitalizeFirstLetter(filters.fromCity) }} to {{ capitalizeFirstLetter(filters.toCity) }}</h3>
                    <ul class="list-none">
                        <li class="inline text-white/60"> <span class="text-white">Date :</span> {{filters.date}}</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="col-span-full">
                        <div :class="gridClass">
                            <template v-if="triosCount > 0" v-for="trip in trips.data" :key="trip.id">
                                    <div class="col-span-2">
                                        <img src="/images/home/bg.jpg" class="rounded-md" alt="">
                                    </div>
                                    <div class="col-span-2">
                                        <p class="text-lg font-bold">From: {{ trip.from }}</p>
                                        <p class="text-lg font-bold">To: {{ trip.to }}</p>
                                        <p class="text-lg font-bold">Trip Price: {{ trip.trip_price }}</p>
                                        <p class="text-lg font-bold mb-20">Trip Time: {{ trip.trip_time }}</p>
                                        <button type="button" @click="onClick(trip.id)"
                                              class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">Book trip</button>
                                    </div>
                            </template>
                            <div v-else>
                                <div class="col-span-2"></div>
                                <div class="col-span-2">no found trips for this time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>
