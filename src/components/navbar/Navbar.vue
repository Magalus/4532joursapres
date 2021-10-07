<template> 
    <nav class="navbar" :style="backgroundImageProps">
        <div>
            <router-link 
                class="nav-links" 
                :class="{ selected : !this.pageName }"
                @click="changeNav(undefined, `url(${require('@/assets/images/jl_calendrier.jpeg')})`)" 
                to="/">
                Accueil
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Calendrier' }"
                @click="changeNav('Calendrier', `url(${require('@/assets/images/jl_calendrier.jpeg')})`)" 
                to="/calendrier">
                Calendrier
            </router-link>
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Hébergements' }"
                @click="changeNav('Hébergements', `url(${require('@/assets/images/jl_hebergement.jpeg')})`)" 
                to="/hebergements">
                Hébergements
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Plan d\'accès' }"
                @click="changeNav('Plan d\'accès', `url(${require('@/assets/images/jl_plan.jpeg')})`)" 
                to="/plan d'acces">
                Plan d'accès
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Confirmer ma présence' }"
                @click="changeNav('Confirmer ma présence', `url(${require('@/assets/images/jl_confirmer.jpeg')})`)" 
                to="/confirme ma presence">
                Confirmer ma présence
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Liste de mariage' }"
                @click="changeNav('Liste de mariage', `url(${require('@/assets/images/jl_liste.jpeg')})`)" 
                to="/liste de mariage">
                Liste de mariage
            </router-link> 
            <router-link 
                class="nav-links" 
                :class="{ selected : this.pageName == 'Contact' }"
                @click="changeNav('Contact', `url(${require('@/assets/images/jl_contact.jpeg')})`)" 
                to="/contact">
                Contact
            </router-link> 
        </div>
        <div><h1>{{ this.pageName }}</h1></div>
    </nav>
    <div class="underNav">
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

export default {
  name: 'Navbar',
  data() {
      return {
          pageName: undefined,
          backgroundImageProps: {
              backgroundImage: `url(${require('@/assets/images/jl_calendrier.jpeg')})`
          }
      }
  },
  methods: {
      changeNav(pageName, urlImage) {
          this.pageName = pageName;
          this.backgroundImageProps = {backgroundImage: urlImage};
      }
  }
}

</script>

<style lang="scss">

.navbar {
    background-size: cover;
    background-repeat: no-repeat;
    height: 370px;

    div:first-child {
        display: flex;
        justify-content: center;
        padding: 40px 25px;
    }

    div:last-child {
        padding: 80px 0px;
        margin: auto;
        font-size: 2.8em;
        font-weight: 700;
        color: white;
        text-align: center;
    }

    a {
        text-decoration: none;
        font-size: 1em;;
        padding: 20px 20px;
        margin: 0px 2px;
        color: white;
        letter-spacing: 1px;        
    }

    .selected {
        border-bottom: 2px solid #f0ddc5;
    }
}

.underNav {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #FBF7F1;
    height: 50px;

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