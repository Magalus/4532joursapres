<template>
    <div class="addComment">
        <h3><span>LAISSER UN COMMENTAIRE</span></h3>
        <form @submit.prevent="">
            <textarea name="" id="" cols="30" rows="10" placeholder="Commentaire"></textarea>
            <input type="text" placeholder="Nom*" required>
            <input type="text" placeholder="E-mail*" required>
            <input type="text" placeholder="Site web">
            <div class="saveName">
                <input type="checkbox" :checked="this.check">
                <label @click="this.check = !this.check" for="">Enregistrer mon nom, mon e-mail et mon site dans le navigateur pour mon prochain commentaire.</label>
            </div>
            <input type="submit" value="Laisser un commentaire">
        </form>
    </div>
</template>

<script>

export default {
    data() {
        return {
            check: false
        }
    }
}

</script>


<style lang="scss">

.addComment {

    h3 {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        display: inline-block;
        margin-bottom: 30px;

        span::after {
            content: "";
            background: #111;
            width: 35px;
            height: 2px;
            position: absolute;
            bottom: 10px;
            margin-left: 5px;
        }
    }

    form {
        display: flex;
        flex-direction: column;

        textarea {
            border: 1px solid #E7EAF5;
            height: 150px;
            padding: 10px 15px;
            margin-bottom: 20px;
            font-family: Montserrat;
            font-size: 14px;
        }

        input {
            border: 1px solid #E7EAF5;
            height: 50px;
            padding: 10px 15px;
            margin-bottom: 20px;
            font-family: Montserrat;
            font-size: 14px;

            &[type="submit"] {
                background-color: #f0ddc5;
                padding: 15px 35px;
                margin-bottom: 0px;
                text-transform: uppercase;
                letter-spacing: 1px;
                border: none;
                height: fit-content;
                min-height: 50px;
                width: fit-content;
                max-width: 85%;
                white-space: normal;
                word-wrap: break-word;
                transition: all ease 0.35s;

                &:hover {
                    background-color: #d18f7f;
                    cursor: pointer;
                }
            }
        }

        .saveName {
            margin-top: 10px;
            margin-bottom: 30px;

            input {
                position: absolute;
                top: 11px;
                left: 1px;
                opacity: 0;
                visibility: hidden;
            }

            label {
                color: #262525;
                padding-left: 30px;
                position: relative;
                cursor: pointer;
                display: block;

                &:before {
                    content: "";
                    width: 16px;
                    height: 16px;
                    border: 1px solid rgba(0,0,0,0.1);
                    background-image: url('data:image/svg+xml; utf-8, <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="%23fff" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>');
                    background-repeat: no-repeat;
                    background-size: 0;
                    background-position: center;
                    position: absolute;
                    top: 5px;
                    left: 0;
                    border-radius: 0;
                    font-weight: normal;
                    text-align: center;
                    line-height: 14px;
                    font-size: 0;
                    transition: all ease 0.35s;
                }
            }

            input:checked + label, label:hover {
                text-decoration: underline;
            }

            input:checked + label:before {
                content: "";
                border-color: #d18f7f;
                background-color: #d18f7f;
                background-size: 10px;
            }
        }
    }
}

</style>