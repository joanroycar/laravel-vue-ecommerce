
<template>
    <div class="w-[200px] transition-all bg-indigo-700 text-gray-50 py-4 px-2">


        <router-link :to="{ name: 'app.dashboard' }" 
        
        
        class="flex items-center py-1 px-3 
         rounded hover:bg-black/30 transition-colors mb-2">

            <span class="mr-2">
                <HomeIcon class="w-5" />


            </span>

            <span>Dashboard</span>
        </router-link>
        <router-link :to="{ name: 'app.products' }" class="flex items-center py-1 px-3 
         rounded hover:bg-black/30 transition-colors mb-2">

            <span class="mr-2">
                <ListBulletIcon class="w-5" />


            </span>

            <span>Products</span>
        </router-link>
        <router-link :to="{ name: 'app.users' }" class="flex items-center py-1 px-3 
         rounded hover:bg-black/30 transition-colors mb-2">

            <span class="mr-2">
                <UserIcon class="w-5" />


            </span>

            <span>Users</span>
        </router-link>
        <router-link :to="{ name: 'app.reports' }" class="flex items-center py-1 px-3 
         rounded hover:bg-black/30 transition-colors mb-2">

            <span class="mr-2">
                <ChartBarIcon class="w-5" />


            </span>

            <span>Reports</span>
        </router-link>
    </div>
</template>


<script setup>

import { HomeIcon, UserIcon, ListBulletIcon, ChartBarIcon} from '@heroicons/vue/24/outline'


</script>

<style scoped></style>