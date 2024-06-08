<script setup>
import InputError from '@/Components/form-elements/InputError.vue';
import {Link, useForm} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <MainLayout page-title="Forgot Password">
        <section class="position-relative bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-90"></div>
            <div class="container-fluid relative">
                <div class="grid grid-cols-1">
                    <div class="lg:col-span-4">
                        <div class="flex flex-col min-h-screen md:px-12 py-12 px-3">
                            <!-- Start Content -->
                            <div class="text-center my-auto">
                                <div
                                    class="w-full max-w-sm m-auto px-6 py-8 bg-white dark:bg-slate-900 rounded-md shadow-lg shadow-slate-500 dark:shadow-slate-800">
                                    <div class="grid grid-cols-1">
                                        <h5 class="mb-8 text-xl dark:text-white font-semibold">Reset Your Password</h5>
                                        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                                            {{ status }}
                                        </div>
                                        <p class="text-slate-400 dark:text-slate-300 mb-6"> Forgot your password? No
                                            problem. Just let us know your email address and we will email you a
                                            password reset
                                            link that will allow you to choose a new one.</p>
                                        <form @submit.prevent="submit" class="ltr:text-left rtl:text-right">
                                            <div class="grid grid-cols-1">

                                                <div class="mb-4">
                                                    <div class="relative">
                                                        <input v-model="form.email" type="text" id="email"
                                                               class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white focus:outline-none focus:ring-0 focus:border-orange-600 peer"
                                                               placeholder=" " required/>
                                                        <label for="email"
                                                               class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-hover:border-orange-600 peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Your
                                                            Email</label>
                                                    </div>
                                                    <InputError class="mt-2" :message="form.errors.email"/>
                                                </div>

                                                <div class="mb-4">
                                                    <button
                                                        :class="{ 'opacity-25': form.processing }"
                                                        :disabled="form.processing"
                                                        class="btn bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-md w-full">
                                                        Send
                                                    </button>
                                                </div>

                                                <div class="text-center">
                                                    <span class="text-slate-400 dark:text-slate-300 me-2">Remember your
                                                        password ? </span>
                                                    <Link :href="route('login')" class="text-dark fw-bold">Sign in</Link>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>
