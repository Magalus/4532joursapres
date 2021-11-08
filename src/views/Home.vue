<template>
  <div class="home">
    <blockquote class="quote">
      <p>Je t’aime dans le temps. Je t’aimerai jusqu’au bout du temps. Et quand le temps sera écoulé, alors, je t’aurai aimée. Et rien de cet amour, comme rien de ce qui a été, ne pourra jamais être effacé.</p>
      <cite>Jean d’Ormesson</cite>
    </blockquote>
    <div class="announcement">
      <p>4532 jours après, nous allons enfin nous dire oui !</p>
      <p>C’est avec une immense joie que nous vous annonçons notre mariage qui sera célébré le 18 juin 2022 à Buzet-sur-Baïse. Nous serons très heureux de tous vous retrouver à cette occasion pour partager ensemble ce moment si précieux à nos yeux.</p>
      <p>Vous trouverez sur ce site toutes les informations essentielles du mariage ainsi que quelques ressources afin de préparer au mieux votre venue. N’hésitez pas à le consulter régulièrement, il sera mis à jour au fur et à mesure de nos préparatifs et sera notre lien privilégié pour communiquer avec vous en cette période de mesures sanitaires incertaines (coronavirusvatensilteplait!).</p>
      <p>
        A très vite
        <img class="heart" src="../assets/icons/heart.png" alt="heart">
      </p>
      <p>Léa et Jean</p>
      <div class="jl">
        <img src="../assets/images/jl_accueil.jpeg" alt="">
      </div>
    </div>
  </div>
</template>

<style lang="scss">

.home {
  width: 85%;
  max-width: 1170px;
  margin: auto;
  margin-top: 80px;

  @media screen and (max-width: 1086px) {
      margin-top: 60px;
  }  

  @media screen and (max-width: 768px) {
      margin-top: 40px;
  } 

  .quote {
    display: flex;
    flex-direction: column;
    background-image: url( 'data:image/svg+xml; utf-8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74 74"><path fill="%23f0ddc5" d="M68.871,47.073A12.886,12.886,0,0,0,56.71,36.191c1.494-5.547,5.121-7.752,9.53-9.032a.515.515,0,0,0,.356-.569l-.711-4.409s-.071-.356-.64-.284C50.024,23.6,39.712,35.2,41.632,49.277,43.41,59.021,51.02,62.79,58.061,61.794a12.968,12.968,0,0,0,10.81-14.722ZM20.3,36.191c1.422-5.547,5.192-7.752,9.53-9.032a.515.515,0,0,0,.356-.569l-.64-4.409s-.071-.356-.64-.284C13.682,23.532,3.441,35.124,5.219,49.206c1.849,9.815,9.53,13.584,16.5,12.588A12.865,12.865,0,0,0,32.458,47.073,12.693,12.693,0,0,0,20.3,36.191Z"></path></svg>');
    background-repeat: no-repeat;
    background-position: 0px -12px;
    background-size: 60px;
    padding-left: 80px;
    font-weight: 600;
    font-style: italic;
    font-size: 18px;
    line-height: 1.75em;
    text-align: right;

    p {
      margin-bottom: 20px;
    }
  }

  .announcement {

    p {
      
      &:first-child {
        text-align: center;
        font-weight: bolder;
        margin: 60px 0px 45px 0px;
      }

      &:nth-child(2), &:nth-child(3), &:nth-child(4), &:nth-child(5)  {
        margin-bottom: 20px;
      }

      &:nth-child(4) img {
        width: 20px;
      }

      &:nth-child(5) {
        text-align: right;
      }
    }

    .jl {
      margin-top: 60px;
      text-align: center;

      img {
        width: 100%;
        max-width: 1024px;
      }
    }
  }
}

</style>
