<template>
    <DefaultLayout class="h-screen">
        <div class="flex justify-center items-center h-full flex-col ">
            <h1 class="font-bold text-3xl">
                Welcome to Dartzz!
            </h1>

            <div>
                <SignInForm/>
            </div>
        </div>
    </DefaultLayout>
</template>
<script setup>
import DefaultLayout from "../../../Layouts/DefaultLayout.vue";
import SignInForm from "@/Pages/SignIn/Partials/SignInForm.vue";
</script>
