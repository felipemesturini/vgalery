<template>
    <div>
        <h3>Titulo do Card</h3>
        <img v-bind:src="this.link" :alt="this.alt"/>
        <p></p>
        <h4>Detalhes do passaro</h4>
        <p>30 centimentros de invergadura.......</p>
    </div>
</template>

<script>
    export default {
        name: "GaleryItem.Vue",
        data() {
            return {
                alt: "Image de teste",
                link: "imgs/bird1.jpg"
            }
        },
        props: {
            foto_url: String,
            foto_alt: String
        }
    }
</script>

<style scoped>

</style>
