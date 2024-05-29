<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="bg-[#eee] border-transparent hover:border-black focus:border-transparent focus:ring-black rounded-md shadow-sm transition ease-in-out duration-200"
        v-model="model"
        ref="input"
    />
</template>
