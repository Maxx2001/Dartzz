<template>
    <form @submit.prevent="submit" class="flex flex-col">
        <div class="flex justify-center">
            <BaseTextInput
                :model-value="form.player_one"
                @update:modelValue="val => form.player_one = val"
                name="playerOne"
                :required="true"
                input-title="Player one"
                class="mx-2"
            />
            <BaseTextInput
                :model-value="form.player_two"
                @update:modelValue="val => form.player_two = val"
                name="playerOne"
                :required="true"
                input-title="Player two"
                class="mx-2"
            />
        </div>
        <i class="mt-2 underline text-gray-600">
            The player who will go first is not determined by the order of the players entered.
        </i>
        <BaseButton title="Submit" class="mt-4" :is-loading="formIsSubmitting"/>
    </form>
</template>

<script setup>
import BaseTextInput from "@/Components/Forms/BaseTextInput.vue";
import BaseButton from "@/Components/Forms/BaseButton.vue";
import { reactive, ref } from "vue";
import { router } from "@inertiajs/vue3";

const formIsSubmitting = ref(false);

const playerOne = ref(null)
const playerTwo = ref(null)

const form = reactive({
    player_one: playerOne.value,
    player_two: playerTwo.value,
})

const submit = () => {
    router.post(
        route('game.store'),
        form,
        {
            onStart: () => formIsSubmitting.value = true,
            onFinish: () => formIsSubmitting.value = false,
        }
    );
}
</script>
