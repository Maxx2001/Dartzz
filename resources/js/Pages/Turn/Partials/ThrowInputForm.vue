<template>
    <div>
        <form @submit.prevent="submit">
            <BaseNumberInput
                :model-value="roundOne"
                @update:modelValue="val => roundOne = val"
                name="roundOne"
                :required="true"
                input-title="Throw one"
            />
            <BaseNumberInput
                :model-value="roundTwo"
                @update:modelValue="val => roundTwo = val"
                name="roundOne"
                :required="true"
                input-title="Throw two"
            />
            <BaseNumberInput
                :model-value="roundThree"
                @update:modelValue="val => roundThree = val"
                name="roundOne"
                :required="true"
                input-title="Throw three"
            />
            <BaseButton
                :isLoading="formIsSubmitting"
                title="Submit round one"
                class="mt-4"
            />
        </form>
    </div>
</template>
<script setup>
import { inject, reactive, ref } from "vue";
import BaseNumberInput from "@/Components/Forms/BaseNumberInput.vue";
import BaseButton from "@/Components/Forms/BaseButton.vue";
import { router } from "@inertiajs/vue3";

const game = inject('game');
const roundOne = ref(0);
const roundTwo = ref(0);
const roundThree = ref(0);
const formIsSubmitting = ref(false);

const form = reactive({
    round_one: roundOne.value,
    round_two: roundTwo.value,
    roundThree: roundThree.value,
    game_id: game.data.id,
    player_id: game.data.player_one.id,
})


const submit = () => {
    router.post(
        route('turn.store'),
        form,
        {
            onStart: () => formIsSubmitting.value = true,
            onFinish: () => formIsSubmitting.value = false,
        }
    );
}

</script>
