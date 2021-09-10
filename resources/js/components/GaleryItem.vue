<template>
    <div>
        <h3>{{ titulo }}</h3>
        <img v-bind:src="this.link" :alt="this.alt"/>
        <p></p>
        <h4>Detalhes do passaro</h4>
        <p>30 centimentros de invergadura.......</p>
        <p>{{ titulo }}</p>
    </div>
</template>

<script>
    export default {
        name: "GaleryItem.Vue",
        data() {
            return {
                titulo: "Galeria de Imagens"
            }
        },
        props: {
            foto_url: String,
            foto_alt: String,
            foto_name: String,
            foto_size: Number,
        }
    }
</script>

<style scoped>

</style>
