<template>
    <div class="list">
        <p class="first" >Vous avez été nombreux à nous demander ce que nous aimerions comme cadeau de mariage. Nous sommes très touchés par votre générosité et nous vous remercions de tout coeur pour l’attention que vous nous portez. </p>
        <p>Nous aimerions beaucoup partir en voyage de noces afin d’enrichir notre histoire de nouveaux souvenirs et immortaliser nos premiers instants en tant que jeunes mariés. La destination n’est pas encore définie mais nous avons des idées plein la tête ! … Un road trip en Islande, une découverte du Canada, une escapade en Grèce, en Italie ou bien un second voyage en Laponie avec notre Onni d’amour … Dans tout les cas ce sera le plus beaux des voyages grâce à vous !</p>
        <p>Nous avons donc décidé d’ouvrir une cagnotte en ligne pour vous permettre d’y déposer le montant de votre choix. Une urne sera également à votre disposition le jour du mariage.</p>
        <a href="https://www.lyf.eu/webapps/cagnotte/pot/9e541257-d89a-4c06-aa31-3954fa31a576" target="_blank">
            <button>Cagnotte en ligne</button>
        </a>
        <p>Nous vous aimons tous très fort et avons hâte de tous vous retrouver le 18 juin 2022.</p>
        <p>Une idée de voyage à nous conseiller ? Laissez nous un commentaire !</p><hr>
        <AjoutCommentaire/>
    </div>
</template>

<script>

import AjoutCommentaire from '@/components/ListeMariage/AjoutCommentaire.vue'

export default {
    name: 'ListeMariage',
    components: {
        AjoutCommentaire,
    }
}

</script>

<style lang="scss">

.list {
    max-width: 1170px;
    margin: auto;

    p.first::first-letter {
        float: left;
        font-size: 8.4em;
        line-height: .68;
        font-weight: 100;
        margin: .05em .1em 0 0;
        text-transform: uppercase;
        font-style: normal;
    }
}

</style>