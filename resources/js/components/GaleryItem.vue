<template>
    <div>
        <h3>{{ titulo }}</h3>
        <img v-bind:src="this.url" :alt="this.alt"/>
        <p></p>
        <h4>Detalhes do passaro</h4>
        <p>Nome: {{ name }}</p>
        <p>Tamanho: {{ size }}</p>
    </div>
</template>

<script>
    export default {
        name: "GaleryItem.Vue",
        data() {
            return {
                titulo: "Passaro"
            }
        },
        props: {
            url: String,
            alt: String,
            name: String,
            size: Number,
        }
    }
</script>

<style scoped>

</style>
