<template>
<div class="">
    <h2 class="font-light text-7xl mb-16 text-center">Tap List</h2>

    <div v-for="beer in beers">
        <div class="rounded-full bg-gray-700 flex justify-between items-center my-4 mx-4">
            <div class="rounded-full flex justify-center items-center w-36 h-36 m-3 text-gray-800 bg-white text-6xl font-bold">
                {{ beer.tap }}
            </div>
            <div class="w-1/3 ml-6 my-2">
                <div class="font-medium text-lg" v-show="beer.brewery">
                    {{ beer.brewery }}
                </div>
                <div v-bind:class="{ 'text-5xl': !beer.brewery, 'text-4xl': beer.brewery, }" class="text-green-100 font-bold text-4xl">
                    {{ beer.name }}
                </div>
                <div class="flex gap-3 text-2xl mt-2">
                    <div>{{ beer.style }}</div>
                    <div class="text-gray-400" v-show="beer.abv">{{ beer.abv }}%</div>
                </div>
            </div>
            <div class="w-64 text-2xl font-light text-orange-100 hidden lg:block">
                <div class="grid grid-cols-2">
                    <div v-show="beer.ibu">{{ beer.ibu }} IBU</div>
                    <div v-show="beer.srm">{{ beer.srm }} SRM</div>
                    <div v-show="beer.og">{{ beer.og }} OG</div>
                    <div v-show="beer.fg">{{ beer.fg }} FG</div>
                </div>
            </div>
            <div class="w-72 xl:flex-1 ml-6 mr-16 my-2 text-lg">
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
        Echo.channel('app')
            .listen('TapListUpdated', (e) => {
                console.log(e);
    });
    },
};
</script>

