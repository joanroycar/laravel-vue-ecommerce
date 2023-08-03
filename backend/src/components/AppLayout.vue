
<template>
    <div v-if="currentUser.id" class="min-h-full bg-gray-100 flex">

        <!-- sidebar -->

        <Sidebar :class="{ '-ml-[200px]': !sidebarOpened }" />



        <!-- end sidebar -->

        <div class="flex-1">

            <!-- Header -->
            <Navbar @toggle-sidebar="toggleSidebar" />
            <!-- End Header -->

            <!-- content -->
            <main class="p-6">
                <!-- <router-view></router-view> -->
                <!-- <div class="p-4 rounded bg-white"> -->
                <router-view></router-view>
                <!-- </div> -->

            </main>
            <!-- end content -->

        </div>




    </div>
    <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">
       <Spinner/>
    </div>
</template>


<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import Sidebar from './SidebarLayout.vue'
import Navbar from './Navbar.vue';
import { computed } from 'vue';
import TopHeader from './TopHeader.vue';
import store from '../store';
import Spinner from './core/Spinner.vue'
const { title } = defineProps({
    title: String
})

const currentUser = computed(() => store.state.user.data)

const sidebarOpened = ref(true);
// const emit = defineEmits(['submit']);
function toggleSidebar() {
    console.log('aaaaaaaaaaaaa')

    sidebarOpened.value = !sidebarOpened.value
}

onMounted(() => {
    store.dispatch('getUser')
    handleSidebarOpened()
    window.addEventListener('resize', handleSidebarOpened)
})


onUnmounted(() => {
    window.removeEventListener('resize', handleSidebarOpened)

})

function handleSidebarOpened() {

    sidebarOpened.value = window.outerWidth > 768;

    // if(window.outerWidth < 768){
    //     sidebarOpened.value = false;
    // } else{
    //     sidebarOpened.value = true;

    // }
}
</script>

<style scoped></style>