<template>
    <div>
        <h2>Galeria de images</h2>
        <ul>
            <li v-for="(bird, index) in birds">
                <galery-item :name="bird.name" :url="bird.image" :alt="bird.alt"></galery-item>
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
                birds: []
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

        },
        created() {
            this.$http.get('api/photo')
                .then(res => res.json())
                .then(dados => this.birds = dados, err => console.log(err));
        }
    }
</script>

<style scoped>

</style>
