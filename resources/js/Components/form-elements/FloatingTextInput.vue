<script setup>
const props = defineProps({
    label: {
        type: String,
        required: true
    }
})
const model = defineModel({
    type: String,
    required: true,
});
</script>

<template>
    <div class="relative">
        <input v-model="model" type="text" :id="props.label" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-black border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
        <label :for="props.label" class="absolute text-sm text-black dark:text-black duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-black peer-focus:dark:text-black peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">{{ props.label }}</label>
    </div>
</template>
