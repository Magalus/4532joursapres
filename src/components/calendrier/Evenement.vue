<template>
    <div class="event">
        <img class="calendarIcon" src="../../assets/icons/calendar.png" alt="">
        <div class="date">{{ this.date }}</div>
        <div class="eventName">{{ this.event }}</div>
        <div v-if="this.localisation == 'Domaine de Pécarrère, Buzet-sur-Baïse'">
            <router-link to="/plan d'acces" class="planLink">
                <img class="localIcon" src="../../assets/icons/localisation.png" alt="">
                {{ this.localisation }}
            </router-link>
        </div>
        <div v-else>
            <img class="localIcon" src="../../assets/icons/localisation.png" alt="">
            {{ this.localisation }}
        </div>
        <div v-if="this.time" class="time">
            <img class="clockIcon" src="../../assets/icons/clock.png" alt="">
            {{ this.time }}
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

    width: 85%;
    max-width: 1170px;
    margin: auto;
    margin-top: 15px;

    .calendarIcon {
      width: 91px;  
    }

    .date {
        font-size: 22px;
        font-weight: bolder;
        margin: 20px 0px;
    }

    .eventName {
        margin-bottom: 20px;
    }

    .planLink {
        text-decoration: none;
        color: #2c3e50;
        transition: all ease 0.35s;

        &:hover {
            color: #f0ddc5;
        }
    }

    .localIcon, .clockIcon {
        width: 20px;
        vertical-align: top;
    }

    .time {
        margin-top: 20px;
    }
}


</style>