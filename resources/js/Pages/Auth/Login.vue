<script setup>
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import {Link, useForm} from '@inertiajs/vue3';
import BlackButton from "@/Components/BlackButton.vue";
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
        <section class="grid grid-cols-2 gap-x-9 gap-y-9 p-4 justify-items-center content-center my-10">
            <div>
                <img src="/images/home/u4b-square.png" alt="ride-with-use"/>
            </div>
            <div class="flex flex-col gap-5 justify-center w-full p-[80px]">
                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>
                <div class="mb-5 flex flex-col">
                    <span class="font-bold text-lg">Login With you Email and Password you dont have one ?</span>
                    <Link class="underline focus:outline-none font-normal text-base hover:text-black/50 transition ease-in-out duration-200"
                          :href="route('register')">Go to register
                    </Link>
                </div>
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="email">Email</InputLabel>
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-80"
                            placeholder="Enter Your Email"
                            v-model="form.email"
                            required
                        />
                        <InputError class="mt-2" :message="form.errors.email"/>
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password">Password</InputLabel>
                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-80"
                            placeholder="Enter Your Password"
                            v-model="form.password"
                            required
                        />
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
