<template>
    <div class="calendar">
        <Evenement 
            :date="'Date à définir'" 
            :event="'Mariage civil'" 
            :localisation="'Mairie de Bordeaux'" 
            :time="undefined"
        />
        <hr class="dots">
        <Evenement 
        :date="'Samedi 18 juin 2022'" 
        :event="'Cérémonie laïque, vin d’honneur, dîner et soirée dansante'" 
        :localisation="'Domaine de Pécarrère, Buzet-sur-Baïse'" 
        :time="'Programme détaillé et horaires à venir…'"
        />
        <hr class="dots">
        <Evenement 
            :date="'Dimanche 19 juin 2022'" 
            :event="'Brunch du lendemain et pool party'" 
            :localisation="'Domaine de Pécarrère, Buzet-sur-Baïse'" 
            :time="'Programme détaillé et horaires à venir…'"
        />
    </div>
</template>

<script>

import Evenement from '@/components/calendrier/Evenement.vue'

export default {
  name: 'Calendrier',
  components: {
    Evenement,
  }
}

</script>

<style lang="scss">

.calendar {
    max-width: 1170px;
    margin: auto;
    margin-top: 65px;
    display: flex;
    flex-direction: column;
    text-align: center;
}

hr.dots {

    border: none;
    line-height: 1;
    margin: 50px 0px;

    &:before {
        content: '...';
        font-size: 1.5em;
        letter-spacing: 2em;
        padding-left: 2em;
    }
}


</style>