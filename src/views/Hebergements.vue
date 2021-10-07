<template>
    <div class="hebergements">
        <p>Pour faciliter votre venue, vous trouverez ci-dessous une sélection d’hébergements environnants :</p>
        <div>
            <ul>
                <li>Hôtels :</li>
            </ul>
            <div class="hebergementList">
                <Hebergement 
                    :name="'Hôtel de la Confluence ***'"
                    :localisation="'Situé à Damazan (7km) &#8211; 48 chambres à 60-70€/nuit'"
                    :tel="'Tel : 05 53 20 38 28'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/NewBrand-4706-FR-damazan-hotel-4049_1-e1629910455379.jpg'"
                    :link="'https://hotel-damazan-agen.com/'"
                />
                <Hebergement 
                    :name="'Avenir Hôtel **'"
                    :localisation="'Situé à Aiguillon (10 km) &#8211; 28 chambres à 40-70€/nuit'"
                    :tel="'Tel : 05 53 79 60 02'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/parc10-605x465-1-e1629911112777.jpg'"
                    :link="'https://avenir-hotel-aiguillon.fr/'"
                />
            </div>
        </div>
        <div>
            <ul>
                <li>Chambres d’hôtes :</li>
            </ul>
            <div class="hebergementList">
                <Hebergement 
                    :name="'Domaine de Michelet'"
                    :localisation="'Situé à Buzet-sur-Baïse (1km) &#8211; 5 chambres à 70-110€/nuit'"
                    :tel="'Tel : 09 87 88 15 02'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/bandeau_gite_michelet-e1630005929767.jpg'"
                    :link="'http://www.domainedemichelet.com/'"
                />
                <Hebergement 
                    :name="'Bois du Loup'"
                    :localisation="'Situé à Buzet-sur-Baïse (1km) &#8211; 2 chambres à 70-80€/nuit'"
                    :tel="'Tel : 05 53 93 57 13'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/22141152-1536x1152.jpeg'"
                    :link="'https://ar.trivago.com/en/buzet-sur-baise-161271/hotel/bois-du-loup-6828630'"
                />
                <Hebergement 
                    :name="'Bois de Cadène'"
                    :localisation="'Situé à Saint-Pierre de Buzet (3km) &#8211; 2 chambres à 55-150€/nuit'"
                    :tel="'Tel : 07 68 44 77 19'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/45901_459430_38.jpg'"
                    :link="'https://www.chambres-hotes.fr/chambres-hotes_bois-de-cadene---chambre-familiale_saint-pierre-de-buzet_45901.htm'"
                />
                <Hebergement 
                    :name="'Le domaine de Baïse'"
                    :localisation="'Situé à Feugarolles (3km) &#8211; 4 chambres à 65-70€/nuit'"
                    :tel="'Tel : 05 53 47 56 40'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/le-domaine-de-la-baise.jpg'"
                    :link="'https://albret-tourisme.com/preparer-votre-sejour/se-loger/les-chambres-d-hotes/offre/1056-chambres-du-domaine-de-baise.html'"
                />
                <Hebergement 
                    :name="'Les Tilleuls de la voie verte'"
                    :localisation="'Situé à Feugarolles (3km) &#8211; 4 chambres à 65€/nuit'"
                    :tel="'Tel : 05 53 95 30 27'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/domaine-face-300x200-1.jpg'"
                    :link="'http://www.lestilleulsdelavoieverte.fr/'"
                />
                <Hebergement 
                    :name="'Lencouet'"
                    :localisation="'Situé à Feugarolles (3km) &#8211; 2 chambres et 1 studio à 80-100€/nuit'"
                    :tel="'Tel : 06 01 85 93 50'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/Lencouet-chambre-dhotes-bed-and-breakfast-3.jpg'"
                    :link="'https://lencouet.eu/fr/chambre-dhotes-bed-and-breakfast/'"
                />
                <Hebergement 
                    :name="'Château de Grenier'"
                    :localisation="'Situé à Saint-Léger (7km) &#8211; 5 chambres à 100-190€/nuit'"
                    :tel="'Tel : 05 53 79 59 06'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/12028140.jpg'"
                    :link="'https://www.booking.com/hotel/fr/chateau-du-grenier.fr.html?aid=311089;label=chateau-du-grenier-3YAh1ZeS*EcuXUC2FvACdgS390140605811:pl:ta:p1:p2:ac:ap:neg:fi:tiaud-297601666555:kwd-13713868028:lp9055289:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YVujEjbMrKBV7ahOy8HtCLg;ws=&gclid=CjwKCAjw95yJBhAgEiwAmRrutKhj9g4087-eupBIPkNt_LFlXNqxl6dL45rA0s_5kNLVSxecu5FLoBoCVq8QAvD_BwE'"
                />
                <Hebergement 
                    :name="'Clos Muneau'"
                    :localisation="'Situé à Aiguillon (10km) &#8211; 5 chambres à 70-120€/nuit'"
                    :tel="'Tel : 05 53 83 29 35'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/0.jpg'"
                    :link="'http://www.closmuneau.fr/'"
                />
            </div>
        </div>
        <div>
            <ul>
                <li>Camping :</li>
            </ul>
            <div class="hebergementList">
                <Hebergement 
                    :name="'Aire de camping-cars'"
                    :localisation="'Situé à Port de Buzet (2km) &#8211; 6 emplacements à 7,40€/nuit'"
                    :tel="'Tel : 05 53 84 72 50'"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/image-aires-800-450.jpeg'"
                    :link="'https://aquitaine-navigation.com/services-du-port/aire-de-camping-car-et-pique-nique'"
                />
                <Hebergement 
                    :name="'Domaine de Pécarrère'"
                    :localisation="'Le camping est autorisé gratuitement dans une zone du parc du domaine. Une salle de bain est mise à disposition des campeurs. '"
                    :tel="undefined"
                    :imageUrl="'https://4532joursapres.fr/wp-content/uploads/2021/08/cypres-1.jpg'"
                    :link="'https://4532joursapres.fr/hebergements/#'"
                />
            </div>
        </div>

    </div>
    
</template>

<script>

import Hebergement from '@/components/hebergements/Hebergement.vue'

export default {
    name: 'Hebergements',
    components: {
        Hebergement,
    }
}

</script>

<style lang="scss">

.hebergements {
    max-width: 1170px;
    margin: auto;

    .hebergementList {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
}

</style>