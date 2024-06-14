<template>
    <div class="w-screen flex justify-center">
        <div class="w-1/3">
            <ScoreCard player-name="test"/>
            <ThrowInputForm/>
        </div>

    </div>
</template>
<script setup>
import ThrowInputForm from "@/Pages/Turn/Partials/ThrowInputForm.vue";
import ScoreCard from "@/Pages/Turn/Partials/ScoreCard.vue";
</script>
