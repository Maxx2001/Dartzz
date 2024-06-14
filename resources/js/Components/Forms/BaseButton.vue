<template>
    <button
        :disabled="disabled"
        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        type="submit"
    >
        <span  v-if="!isLoading">
            {{ title }}
        </span>
        <span v-else>
            Submittingg...
        </span>

    </button>
</template>

<script setup>
defineProps({
    disabled: {
        type: Boolean,
        default: false,
    },
    title: {
        type: String,
        required: true,
    },
    isLoading: {
        type: Boolean,
        default: false,
    },
});
</script>
