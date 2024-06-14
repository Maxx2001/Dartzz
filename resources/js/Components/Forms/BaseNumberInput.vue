<template>
    <div class="flex flex-col">
        <label :for="name" class="text-gray-500">
            {{ inputTitle }}
        </label>
        <input
            type="number"
            :id="name"
            :required="required"
            :value="modelValue"
            @input="$emit('update:modelValue', Number($event.target.value))"
            class="mt-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
        >
    </div>

</template>
<script setup>
defineProps({
    required: {
        type: Boolean,
        default: false,
    },
    name: {
        type: String,
        required: true,
    },
    inputTitle : {
        type: String,
        required: true,
    },
    modelValue: {
        type: Number,
        default: 0,
    },

});
</script>
