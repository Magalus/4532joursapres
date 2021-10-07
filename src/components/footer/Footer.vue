<template>
    <div class="logo_jl">
        <img src="../../assets/icons/jl_logo.png" alt="logo_jl">
    </div>
    <footer>
        <div>
            <span>Je ne sais pas quoi mettre comme </span> 
            <span>contenu </span> 
            <span>dans le </span> 
            <span>footer </span>
            <span>de ce super site </span>
        </div>
    </footer>
</template>

<style lang="scss">

.logo_jl {
    margin: 80px 0px;
    text-align: center;
}

footer {
    background-color: black;
    padding: 25px 0px;
    text-align: center;

    span {
        color: white;
        font-size: 17px;
        line-height: 1.65em;
    }

    span:nth-child(2), span:nth-child(4) {
        color: #E4BFB6;
    }
}

</style>