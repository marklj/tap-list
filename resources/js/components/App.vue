<template>
<div class="">
    <h2 class="ml-5 font-light text-4xl mb-5">Tap List</h2>

    <div v-for="beer in beers">
        <div class="rounded-full bg-gray-700 flex justify-between items-center my-4 mx-4">
            <div class="rounded-full flex justify-center items-center w-24 h-24 m-2 text-gray-800 bg-white text-5xl font-bold">
                {{ beer.tap }}
            </div>
            <div class="w-1/3 ml-6 my-2">
                <div class="font-medium -mb-1" v-show="beer.brewery">
                    {{ beer.brewery }}
                </div>
                <div v-bind:class="{ 'text-4xl': !beer.brewery, 'text-3xl': beer.brewery, }" class="text-green-100 font-bold text-4xl">
                    {{ beer.name }}
                </div>
                <div class="flex gap-3 text-xl">
                    <div>{{ beer.style }}</div>
                    <div class="text-gray-400">{{ beer.abv }}%</div>
                </div>
            </div>
            <div class="w-64 text-xl font-light text-orange-100 hidden lg:block">
                <div class="grid grid-cols-2">
                    <div>{{ beer.ibu }} IBU</div>
                    <div>{{ beer.srm }} SRM</div>
                    <div>{{ beer.og }} OG</div>
                    <div>{{ beer.fg }} FG</div>
                </div>
            </div>
            <div class="w-72 xl:flex-1 mr-16 my-2 text-sm">
                {{ beer.notes }}
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            beers: [],
        }
    },
    async created() {
        const { data } = await axios.get('/api/current-taplist')
        this.beers = data;
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>

