<template>
    <div class="hebergement" :style="{backgroundImage: 'url(' + this.imageUrl + ')'}">
        <a 
            :href="this.link"
            target="_blank"
            class="hebergementLink">
        </a>
        <div class="infos">
            <p>{{ this.name }}</p>
            <p>{{ this.localisation }}</p>
            <p>{{ this.tel }}</p>
        </div>
    </div>
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
    position: relative;
    width: 48.5%;
    height: 300px;
    margin-bottom: 30px;
    background-size: cover;
    background-position: center;
    transition: all .35s ease;

    &:hover {
        transform: scale(0.95);
        cursor: pointer;
    }

    &:before {
        content: '';
        background-color: #ff6900;
        opacity: .1;
        width: 100%;
        height: 300px;
        display: block;
    }

    @media screen and (max-width: 768px) {
        width: 100%;
    }

    .hebergementLink {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
    }

    .infos {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 50%;
        color: white;
        padding-left: 15px;
        padding-right: 15px;

        p:first-child {
            margin: 10px 0px 20px 0px;
            font-weight: bolder;
        }

        p {
            margin-bottom: 20px;
        }

        @media screen and (max-width: 1315px) {
            top: 45%;
        }
    }
}

</style>