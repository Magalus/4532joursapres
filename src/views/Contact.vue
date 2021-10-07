<template>
    <div class="contacts">
        <p>Vous avez besoin d’en savoir plus ? Vous souhaitez organiser une surprise pour les mariés ?</p>
        <p>N’hésitez pas à nous contacter :</p>
        <ul>
            <li>Les mariés :</li>
        </ul>
        <div class="contact">
            <p>Léa Belluau et Jean Perruisseau-Carrier</p>
            <p>19 cous Dupré Saint-Maur, appt B32, 33300 Bordeaux</p>
            <p>06 25 75 65 14 ou 06 37 48 89 41</p>
            <p>Contact@4532joursapres.fr</p>
        </div>
        <ul>
            <li>Les témoins :</li>
        </ul>
        <div class="contact">
            <p>Manon Blandeau</p>
            <p>06 31 04 00 61</p>
            <p>manon.blandeau@gmail.com</p>
        </div>
        <div class="contact">
            <p>Maël Vidament</p>
            <p>06 80 46 68 91</p>
            <p>mael.vidament@gmail.com</p>
        </div>
        <ul>
            <li>Les officiants :</li>
        </ul>
        <div class="contact">
            <p>Rémi Tremblain</p>
            <p>06 20 41 19 90</p>
            <p>r.tremblain@gmail.com</p>
        </div>
        <div class="contact">
            <p>Marc Perruisseau-Carrier</p>
            <p>06 23 19 08 25</p>
            <p>marc.perruisseaucarrier@gmail.com</p>
        </div>
    </div>
</template>

<style lang="scss">

.contacts {
    width: 85%;
    max-width: 1170px;
    margin: auto;
    margin-top: 80px;

    p:nth-child(1) {
        text-align: center;
        margin-bottom: 20px;
    }

    p:nth-child(2) {
        margin-bottom: 20px;
    }

    ul {
        padding-left: 40px;
    }

    .contact {
        text-align: center;
        margin-bottom: 20px;

        p {
            margin-bottom: 0px;

            &:first-child {
                margin-top: 20px;
                font-weight: bolder;
            }

            &:last-child {
                font-style: italic;
            }
        }

        &:last-of-type {
            margin-bottom: 0px;
        }
    }
}

</style>