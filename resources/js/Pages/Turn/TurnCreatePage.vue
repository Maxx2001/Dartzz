<template>
    <DefaultLayout class="h-screen">
        <div class="flex justify-center items-center h-full flex-row">
            <PlayerScoreCard/>
            <PlayerScoreCard/>
       </div>
    </DefaultLayout>
</template>
<script setup>
import DefaultLayout from "../../../Layouts/DefaultLayout.vue";
import PlayerScoreCard from "@/Pages/SignIn/Partials/PlayerScoreCard.vue";
import { provide, toRefs } from "vue";

const props = defineProps({
    game: {
        type: Object,
        required: true
    },
})

const { game } = toRefs(props);

provide('game', game.value);

</script>
