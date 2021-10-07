<template>
    <div class="event">
        <img class="calendarIcon" src="../../assets/icons/calendar.png" alt="">
        <div>{{ this.date }}</div>
        <div>{{ this.event }}</div>
        <div>
            <img class="calendarIcon" src="../../assets/icons/localisation.png" alt="">
            <router-link v-if="this.localisation == 'Domaine de Pécarrère, Buzet-sur-Baïse'" to="/plan d'acces">{{ this.localisation }}</router-link> 
            <span v-else>{{ this.localisation }}</span>
        </div>
        <div v-if="this.time">
            <img class="calendarIcon" src="../../assets/icons/clock.png" alt="">
            <span>{{ this.time }}</span>
        </div>
    </div>
</template>

<script>

export default {
    props: [
        'date',
        'event',
        'localisation',
        'time'
    ]
}

</script>

<style lang="scss">

.event{

    margin: 60px 0px;

    .calendarIcon {
      width: 91px;  
    }
}


</style>