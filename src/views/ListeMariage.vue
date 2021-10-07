<template>
    <div class="list">
        <p class="first" >Vous avez été nombreux à nous demander ce que nous aimerions comme cadeau de mariage. Nous sommes très touchés par votre générosité et nous vous remercions de tout coeur pour l’attention que vous nous portez. </p>
        <p>Nous aimerions beaucoup partir en voyage de noces afin d’enrichir notre histoire de nouveaux souvenirs et immortaliser nos premiers instants en tant que jeunes mariés. La destination n’est pas encore définie mais nous avons des idées plein la tête ! … Un road trip en Islande, une découverte du Canada, une escapade en Grèce, en Italie ou bien un second voyage en Laponie avec notre Onni d’amour … Dans tout les cas ce sera le plus beaux des voyages grâce à vous !</p>
        <p>Nous avons donc décidé d’ouvrir une cagnotte en ligne pour vous permettre d’y déposer le montant de votre choix. Une urne sera également à votre disposition le jour du mariage.</p>
        <div class="pot">
            <a href="https://www.lyf.eu/webapps/cagnotte/pot/9e541257-d89a-4c06-aa31-3954fa31a576" target="_blank">
                Cagnotte en ligne
            </a>
        </div>
        <p>Nous vous aimons tous très fort et avons hâte de tous vous retrouver le 18 juin 2022.</p>
        <p>Une idée de voyage à nous conseiller ? Laissez nous un commentaire !</p>
        <div class="separator"></div>
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
    width: 85%;
    max-width: 1170px;
    margin: auto;
    margin-top: 80px;

    p {
        margin-bottom: 20px;
    }

    p.first::first-letter {
        float: left;
        font-size: 8.4em;
        line-height: .68;
        font-weight: 100;
        margin: .05em .1em 0 0;
        text-transform: uppercase;
        font-style: normal;
    }

    .pot {
        text-align: center;
        margin-bottom: 40px;
        margin-top: 35px;

        a {
            text-decoration: none;
            color: white;
            background: linear-gradient(135deg,rgb(232,220,202) 0%,rgb(196,88,36) 100%);
            border-radius: 9999px;
            padding: 17px 24px;
            transition: all 0.35s ease;

            &:hover {
                color: #f0ddc5;
            }
        }
    }

    .separator {
        border-top: 1px solid #E7EAF5;
        margin: 60px 0px;
    }
}

</style>