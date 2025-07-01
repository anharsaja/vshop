<template>
    <div>Admin Dashboard</div>

    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <!-- navbar start -->
        <Navbar/>        
        <!-- end -->

        <!-- Sidebar -->
        <Sidebar/>

        <!-- sidebar start -->

        <!-- end -->

        <slot/>
    </div>
</template>


<script setup>
import { onMounted } from "vue";
import { initFlowbite } from "flowbite";
import Navbar from './Navbar.vue'
import Sidebar from './Sidebar.vue'

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
