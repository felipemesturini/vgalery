<template>
    <panel-component :titulo="name">
        <div>
            <img class="thumbnail" v-bind:src="this.url" :alt="this.alt"/>
            <h4>Detalhes do passaro</h4>
            <p>Nome: {{ name }}</p>
        </div>
        <div slot="footer">
            <h5>Alt: {{ this.alt }}</h5>
        </div>
    </panel-component>
</template>

<script>
    export default {
        name: "GaleryItem.Vue",

        data() {
            return {}
        },
        props: {
            url: String,
            alt: String,
            name: String,
        }
    }
</script>

<style scoped>
    .thumbnail {
        width: 95%;
        height: 95%;
        aspect-ratio: auto;
    }

    .painel {
        padding: 0 auto;
        border: solid 2px grey;
        display: inline-block;
        margin: 5px;
        box-shadow: 5px 5px 10px grey;
        width: 200px;
        height: 100%;
        vertical-align: top;
        text-align: center;
    }

    .painel .painel-titulo {
        text-align: center;
        border: solid 2px;
        background: lightblue;
        margin: 0 0 15px 0;
        padding: 10px;
        text-transform: uppercase;
    }
</style>
