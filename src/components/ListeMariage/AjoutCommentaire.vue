<template>
    <div class="addComment">
        <p>LAISSER UN COMMENTAIRE</p>
        <form action="">
            <textarea name="" id="" cols="30" rows="10" placeholder="Commentaire"></textarea>
            <input type="text" placeholder="Nom*">
            <input type="text" placeholder="E-mail*">
            <input type="text" placeholder="Site web">
            <div>
                <input type="checkbox">
                <label for="">Enregistrer mon nom, mon e-mail et mon site dans le navigateur pour mon prochain commentaire.</label>
            </div>
            <input type="submit" value="Laisser un commentaire">
        </form>
    </div>
</template>

<style lang="scss">

.addComment {

    // p {

    //     &::after {
    //         content: "";
    //         background: #111;
    //         width: 35px;
    //         height: 2px;
    //         position: absolute;
    //         bottom: 5px;
    //         right: -40px;
    //     }
    // }

    form {
        display: flex;
        flex-direction: column;
    }
}

</style>