<script setup>
import InputError from '@/Components/form-elements/InputError.vue';
import InputLabel from '@/Components/form-elements/InputLabel.vue';
import TextInput from '@/Components/form-elements/TextInput.vue';
import {Link, useForm} from '@inertiajs/vue3';
import BlackButton from "@/Components/form-elements/BlackButton.vue";
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        preserveScroll: true,
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <MainLayout page-title="Login">
        <section class="flex justify-center my-20">
            <div>
                <img src="/images/home/u4b-square.png" alt="ride-with-use"/>
            </div>
            <div class="flex flex-col gap-5 justify-center p-[80px]">
                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>
                <div class="mb-5 flex flex-col">
                    <span class="font-bold text-lg">Login With you Email and Password you dont have one ?</span>
                    <Link
                        class="underline focus:outline-none font-normal text-base hover:text-black/50 transition ease-in-out duration-200"
                        :href="route('register')">Go to register
                    </Link>
                </div>
                <form @submit.prevent="submit">
                    <div>
                        <div class="relative">
                            <input v-model="form.email" type="email" id="email"
                                   class="block px-2.5 pb-2.5 pt-4 w-80 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white focus:outline-none focus:ring-0 focus:border-black peer"
                                   placeholder=" " required/>
                            <label for="email"
                                   class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-hover:border-black peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Email</label>
                        </div>
                        <InputError class="mt-2" :message="form.errors.email"/>
                    </div>

                    <div class="mt-4">
                        <div class="relative">
                            <input v-model="form.password" type="password" id="email"
                                   class="block px-2.5 pb-2.5 pt-4 w-80 text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white focus:outline-none focus:ring-0 focus:border-black peer"
                                   placeholder=" " required/>
                            <label for="password"
                                   class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-hover:border-black peer-focus:px-2 peer-focus:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Password</label>
                        </div>
                        <InputError class="mt-2" :message="form.errors.password"/>
                    </div>

                    <!--                <div class="block mt-4">-->
                    <!--                    <label class="flex items-center">-->
                    <!--                        <Checkbox name="remember" v-model:checked="form.remember" />-->
                    <!--                        <span class="ms-2 text-sm text-gray-600">Remember me</span>-->
                    <!--                    </label>-->
                    <!--                </div>-->

                    <div class="flex items-center justify-end mt-4 w-80">
                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Forgot your password?
                        </Link>

                        <BlackButton class="ms-4" :class="{ 'opacity-25': form.processing }"
                                     :disabled="form.processing">Log in
                        </BlackButton>
                    </div>
                </form>
            </div>
        </section>
    </MainLayout>
</template>
