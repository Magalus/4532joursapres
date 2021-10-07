<template>
    <a 
        :href="this.link"
        target="_blank"
        class="hebergement" 
        :style="{backgroundImage: 'url(' + this.imageUrl + ')'}">

    </a>
</template>

<script>

export default {
    props: [
        'name',
        'localisation',
        'tel',
        'imageUrl',
        'link'
    ]
}

</script>

<style lang="scss">

.hebergement {
    background-size: cover;
    background-position: center;
    width: 570px;
    height: 300px;
    margin-bottom: 30px;
    transition: all .35s ease;

    &:hover {
        transform: scale(0.95);
    }

    &:before {
        content: '';
        background-color: #ff6900;
        opacity: .1;
        width: 570px;
        height: 300px;
        display: block;
    }
}

</style>