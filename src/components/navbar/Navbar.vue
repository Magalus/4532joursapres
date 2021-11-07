<template> 
    <nav class="navbar" :style="this.pageName == 'Home' ? 'height:auto' : 'height:380px' ">
        <img v-if="this.pageName != 'Home'" class="navImage" :src="require(`@/assets/images/${this.pageName}.jpeg`)" alt="">
        <div class="nav" :class="{landing : this.pageName == 'Home'}">
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Home' }"
                to="/">
                Accueil
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Calendrier' }"
                to="/calendrier">
                Calendrier
            </router-link>
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Hebergements' }"
                to="/hebergements">
                Hébergements
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Plan' }"
                to="/plan-dacces">
                Plan d'accès
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'ConfirmerPresence' }"
                to="/confirme-ma-presence">
                Confirmer ma présence
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'ListeMariage' }"
                to="/liste-de-mariage">
                Liste de mariage
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Contact' }"
                to="/contact">
                Contact
            </router-link> 
        </div>
            <div v-if="this.pageName == 'Home'" class="videoPlayer">
                <YouTube
                    class="video-container"
                    src="https://www.youtube.com/embed/r8nRuzq1nck" 
                    @ready="onReady"
                    ref="youtube"
                    :vars="this.paramsVideo"
                />
                <img 
                    v-if="this.sound == true" 
                    @click="this.sound = !this.sound; muteVideo()" 
                    class="soundIcon" 
                    src="../../assets/icons/volume.png" 
                    alt=""
                >
                <img 
                    v-if="this.sound == false" 
                    @click="this.sound = !this.sound; unMuteVideo()" 
                    class="soundIcon" 
                    src="../../assets/icons/mute.png" 
                    alt=""
                >
            </div>
        <div v-if="this.pageName != 'Home'" class="pageName">
            <h1>{{this.title}}</h1>
        </div>
        <div class="button-responsive" @click="this.isResponsiveNav = !this.isResponsiveNav">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="nav-responsive" :style="this.isResponsiveNav ? 'width: 320px;' : 'width: 0px;' ">
            <div class="close" @click="this.isResponsiveNav = !this.isResponsiveNav"></div>
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'Home' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/">
                Accueil
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'Calendrier' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/calendrier">
                Calendrier
            </router-link>
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'Hebergements' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/hebergements">
                Hébergements
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'Plan' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/plan-dacces">
                Plan d'accès
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'ConfirmerPresence' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/confirme-ma-presence">
                Confirmer ma présence
            </router-link> 
            <router-link 
                class="nav-links-responsive"
                :class="{ selectedResponsive : this.pageName == 'ListeMariage' }" 
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/liste-de-mariage">
                Liste de mariage
            </router-link> 
            <router-link 
                class="nav-links-responsive" 
                :class="{ selectedResponsive : this.pageName == 'Contact' }"
                @click="this.isResponsiveNav = !this.isResponsiveNav"
                to="/contact">
                Contact
            </router-link> 
        </div>
    </nav>
    <div v-if="this.pageName != 'Home'" class="underNav">
        <div class="underNavText">
            <span>Accueil </span>
            <span>
                <svg 
                    class="svg-inline--fa fa-angle-right fa-w-8" 
                    aria-hidden="true" data-prefix="fa" 
                    data-icon="angle-right" role="img" 
                    xmlns="http://www.w3.org/2000/svg" 
                    viewBox="0 0 256 512" 
                    data-fa-i2svg="">
                    <path 
                    fill="currentColor" 
                    d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
                    </path>
                </svg>
            </span>
            <span>{{ this.pageName }}</span>
        </div>
    </div>
</template>

<script>

import YouTube from 'vue3-youtube'

export default {

name: 'Navbar',
    data() {
        return {
            isResponsiveNav: false,
            sound: false,
            pageName: 'Home',
            titles: {
                'Calendrier': 'Calendrier',
                'Hebergements': 'Hébergements',
                'Plan': "Plan d'accès",
                'ConfirmerPresence': 'Confirmer ma présence',
                'ListeMariage': 'Liste de mariage',
                'Contact': 'Contact'
            },
            title: undefined,
            paramsVideo: {mute: 1, controls: 0, playlist: 'r8nRuzq1nck', loop: 1, showinfo: 0}
        }
    },
    components: { 
        YouTube 
    },
    methods: {
        changeTitle(title) {
            this.title = title
        },
        onReady() {
            this.$refs.youtube.playVideo()
        },
        muteVideo() {
            this.$refs.youtube.mute()
        },
        unMuteVideo() {
            this.$refs.youtube.unMute()
        },
    },
    watch: {
        $route (to) {
            this.pageName = to.name;
            this.title = this.titles[to.name];
        },
    },
}

</script>

<style lang="scss">

.navbar {

    .videoPlayer {
        height: 100%;
        width: 100%;
        pointer-events: none;

        .video-container {

            position: relative;
            padding-top: 56.25%;
            width: 100% !important;
            height: 100% !important;

            iframe {
                position: absolute !important;
                top: 0 !important;
                left: 0 !important;
                width: 100% !important;
                height: 100% !important;
            }

        }

        .soundIcon {
            position: relative;
            left: 15px;
            bottom: 45px;
            height: 32px;
            width: 32px;
            pointer-events: auto;

            &:hover {
                cursor: pointer;
            }

            @media screen and (max-width: 1086px) {
                height: 25px;
                width: 25px;
                bottom: 39px;
            }  

            @media screen and (max-width: 768px) {
                height: 18px;
                width: 18px;
                bottom: 30px;
            }  
        }
    }

    .navVideo {
        top: 0;
        left: 0;
        width: 100%;
        z-index: -1;
    }

    .navImage {
        position: absolute;
        object-fit: cover;
        object-position: top;
        width: 100%;
        height: 380px;
        z-index: -1;
    }

    .nav {
        display: flex;
        justify-content: center;
        padding: 40px 25px;

        @media screen and (max-width: 1086px) {
            display: none;
        }
    }

    .landing {
        position: absolute;
        z-index: 5;
        width: 100%;
    }

    .nav-responsive {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        position: fixed;
        top: 0;
        left: 0;
        width: 320px;
        height: 100%;
        z-index: 99;
        background: #fff;
        box-shadow: 0 0 10px rgb(0 0 0 / 20%);
        overflow-y: auto;
        overflow-x: hidden;
        padding: 60px 0 40px 0;
        transition: ease-in-out 0.5s;
        

        .close {
            position: absolute;
            right: 15px;
            top: 17px;
            width: 32px;
            height: 32px;
            opacity: 0.5;

            &:hover {
                opacity: 1;
                cursor: pointer;
            }

            &:after, &::before {
                position: absolute;
                left: 15px;
                top: 5px;
                content: ' ';
                height: 20px;
                width: 2px;
                background-color: #333;
            }

            &:after {
                transform: rotate(45deg);
            }
            
            &:before {
                transform: rotate(-45deg);
            }
        }

        .nav-links-responsive {
            color: #333;
            width: 100%;
            padding: 0px;
            cursor: pointer;
            padding: 10px 15px;
            font-weight: bolder;
            white-space: nowrap;
            overflow: hidden;
            transition: all ease 0.35s;

            &:nth-child(2) {
                padding-top: 20px;
                border-top: 1px solid #E7EAF5;
            }

            &:last-child {
                padding-bottom: 20px;
                border-bottom: 1px solid #E7EAF5;
            }

            &:hover {
                color:#d18f7f;
            }
        }

        .selectedResponsive {
            color:#d18f7f;
        }

        @media screen and (min-width: 1086px) {
            width: 0px !important;
        }
    }

    .button-responsive {
        position: absolute;
        top: 10px;
        right: 18px;
        width: 35px;
        height: 35px;
        cursor: pointer;
        display: none;

        span {
            width: 20px;
            height: 2px;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0px;
            margin: auto;
            background: #fff;

            &:first-child {
                top: -12px;
            }

            &:last-child {
                top: 13px;
            }
        }

        @media screen and (max-width: 1086px) {
            display: inline;
        }
    }

    a {
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 1px;
        padding: 15px 20px 20px 20px;
        color: white;
    }

    .selected {
        border-bottom: 2px solid #f0ddc5;
    }

    .pageName {
        color: white;
        text-align: center;
        font-size: 40px;
        padding: 80px 0px;

        @media screen and (max-width: 768px) {
            font-size: 30px;
            line-height: 1.8em;
        }
    }

    @media screen and (max-width: 1086px) {
         display: flex;
         justify-content: center;
         align-items: center;
    }
}

.underNav {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #FBF7F1;
    height: 50px;
    font-size: 15px;

    .underNavText {
        display: flex;
        justify-content: flex-start;
        width: 90%;
        max-width: 1170px;
    }

    span:nth-child(2) {
        display: flex;
        width: 7px;
        margin: 0px 8px 0px 11px;
    }
}

</style>