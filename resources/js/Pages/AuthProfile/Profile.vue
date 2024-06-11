<script setup>
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import MainLayout from "@/Layouts/MainLayout.vue";
import {usePage} from "@inertiajs/vue3";
import Card from 'primevue/card';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';

const user = usePage().props.auth.user;

function capitalizeFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}
</script>

<template>
    <MainLayout page-title="Profile">
        <section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h6 class="text-orange-600 text-base font-medium uppercase mb-2">Profile</h6>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 md:grid-cols-2 mt-8 items-center gap-6">
                    <div class="lg:col-span-8">
                        <div class="p-6 rounded-md shadow bg-white dark:bg-slate-900">
                            <TabView>
                                <TabPanel header="Coming Trips">
                                    <DataTable :value="user.coming_trips">
                                        <Column field="trip.from" header="From"></Column>
                                        <Column field="trip.to" header="To"></Column>
                                        <Column field="trip.trip_time" header="Time"></Column>
                                        <Column field="trip.trip_date" header="Date"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="Old Trips">
                                    <DataTable :value="user.booked_trips">
                                        <Column field="trip.from" header="From"></Column>
                                        <Column field="trip.to" header="To"></Column>
                                        <Column field="trip.trip_time" header="Time"></Column>
                                        <Column field="trip.trip_date" header="Date"></Column>
                                    </DataTable>
                                </TabPanel>
                            </TabView>
                        </div>
                    </div>

                    <Card class="lg:col-span-4">
                        <template #title>Profile Details</template>
                        <template #content>
                            <div class="flex">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-user block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white font-medium">Name</h5>
                                    <span class="text-slate-400">{{ user.full_name }}</span>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-phone block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white font-medium">Phone</h5>
                                    <span class="text-slate-400">{{ user.phone }}</span>
                                </div>
                            </div>

                            <div class="flex mt-4">
                                <div class="icons text-center mx-auto">
                                    <i class="uil uil-envelope block rounded text-2xl dark:text-white mb-0"></i>
                                </div>

                                <div class="flex-1 ms-6">
                                    <h5 class="text-lg dark:text-white font-medium">Email</h5>
                                    <span class="text-slate-400">{{ user.email }}</span>
                                </div>
                            </div>
                        </template>
                    </Card>
                </div>
            </div>
        </section>
        <div class="bg-gray-50 dark:bg-slate-800">
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>
            <div class="grid grid-cols-1 pb-8 text-center bg-gray-50 dark:bg-slate-800">
                <h6 class="text-orange-600 text-base font-medium uppercase mb-2"></h6>
            </div>

        </div>
    </MainLayout>
</template>
