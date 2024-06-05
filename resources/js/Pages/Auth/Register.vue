<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import InputError from '@/Components/form-elements/InputError.vue';
import InputLabel from '@/Components/form-elements/InputLabel.vue';
import TextInput from '@/Components/form-elements/TextInput.vue';
import { Link, useForm } from '@inertiajs/vue3';
import BlackButton from "@/Components/form-elements/BlackButton.vue";

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <MainLayout page-title="Register">
        <section class="flex justify-center my-20">
            <div class="flex flex-col justify-center p-[80px]">
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="first_name" value="First Name" />

                        <TextInput
                            id="first_name"
                            type="text"
                            class="mt-1 block w-80"
                            v-model="form.first_name"
                            required
                            placeholder="Enter your first name"
                        />

                        <InputError class="mt-2" :message="form.errors.first_name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="last_name" value="Last Name" />

                        <TextInput
                            id="last_name"
                            type="text"
                            class="mt-1 block w-80"
                            v-model="form.last_name"
                            required
                            placeholder="Enter your last name"
                        />

                        <InputError class="mt-2" :message="form.errors.last_name" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-80"
                            v-model="form.email"
                            required
                            placeholder="Enter your username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="phone" value="Phone" />

                        <TextInput
                            id="phone"
                            type="number"
                            class="mt-1 block w-80"
                            v-model="form.phone"
                            required
                            placeholder="Enter your phone number"
                        />

                        <InputError class="mt-2" :message="form.errors.phone" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" value="Password" />

                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-80"
                            v-model="form.password"
                            required
                            placeholder="Enter your password"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" />

                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-80"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                            placeholder="Enter your password confirmation"
                        />

                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link
                            :href="route('login')"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Already registered?
                        </Link>

                        <BlackButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Register
                        </BlackButton>
                    </div>
                </form>
            </div>
            <div>
                <img src="/images/home/u4b-square.png" alt="ride-with-use"/>
            </div>
        </section>
    </MainLayout>
</template>
