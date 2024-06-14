<template>
    <div class="flex justify-center ">
        <div class="flex flex-col">
             <span class="text-3xl font-bold">
                {{ playerName }}
            </span>
            <span class="text-3xl mt-4 border py-2 px-4">
            {{ currentScore }}
            </span>
        </div>
    </div>
</template>
<script setup>
defineProps({
    currentScore: {
        type: Number,
        default: 0
    },
    playerName: {
        type: String,
        required: true
    }
})
</script>
