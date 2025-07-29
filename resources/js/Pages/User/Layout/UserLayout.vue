<script setup>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Navbar from './Navbar.vue';
import Hero from './Hero.vue';
import Footer from './Footer.vue';

onMounted(() => {
    initFlowbite();
})
</script>

<template>
    <!-- navbar -->
    <Navbar />
    <!-- end -->

    <!-- hero -->
    <Hero />
    <!-- end -->

    <!-- main -->
    <main class="p-4 md:ml-64 h-auto pt-20">
        <slot />
    </main>


    <!-- footer -->
    <Footer />
    <!-- end -->

</template>
