<template>
    <div class="flex justify-center items-center min-h-full min-w-full w-full">

        <div class="flex">
            <div class="text-indigo-600 self-start text-5xl px-8 font-bold border-r pb-8 leading-10">
                404
            </div>

            <div class="px-8">
                <h1 class="text-5xl font-bold mb-2">
                    Page Not Found
                </h1>

                <p class="text-gray-500  mb-10">Please check the url in address bar and try again</p>

                <div>

                    <!-- <button
                        class="flex  justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go
                        back home</button> -->


                    <router-link :to="{ name: 'login' }" 
                    class=" rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    
                    Go to back home
                    </router-link>
                </div>
            </div>
        </div>

    </div>
</template>


<script>
export default {
    name: "Dashboard"
}
</script>

<style scoped></style>