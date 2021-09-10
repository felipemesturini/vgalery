<template>
    <div>
        <h2>Galeria de images</h2>
        <ul>
            <li v-for="(bird, index) in birds">
                <galery-item :titulo="bird.name"></galery-item>
            </li>
        </ul>
    </div>
</template>

<script>

    import GaleryItem from "./GaleryItem";

    export default {
        name: "GaleryComponent.vue",

        components: {
            GaleryItem,
        },
        data() {
            return {
                birds: [
                    {
                        name: "Bird 1",
                        image: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bbc.com%2Fnews%2Fscience-environment-49744435&psig=AOvVaw2cVhpBq0Jl0NOTQK-p-YyF&ust=1631364718450000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPjjt6e59PICFQAAAAAdAAAAABAD",
                        image_alt: "Bird Image Alt",
                        size: 22
                    },
                    {
                        name: "Bird 1",
                        image: "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bbc.com%2Fnews%2Fscience-environment-49744435&psig=AOvVaw2cVhpBq0Jl0NOTQK-p-YyF&ust=1631364718450000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPjjt6e59PICFQAAAAAdAAAAABAD",
                        image_alt: "Bird Image Alt",
                        size: 22
                    }
                ]
            }
        },
        computed: {
            firstPerson: function () {
                let person = this.birds.first;
                console.log(person);
                return this.birds[0].name;
            },
            lastPersion: function () {
                let person = this.birds[this.birds.length - 1];
                return person.name;
            }
        },
        methods: {
            personToString: function (index) {
                return this.birds[index].name + ' - ' + this.birds[index].age
            }
        },
        watch: {

        }
    }
</script>

<style scoped>

</style>
