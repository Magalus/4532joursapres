<template>
    <div class="addComment">
        <h3><span>LAISSER UN COMMENTAIRE</span></h3>
        <form @submit.prevent="onSubmit()" ref="commentForm">
            <textarea v-model="this.form.comment" name="" id="" cols="30" rows="10" placeholder="Commentaire"></textarea>
            <input v-model="this.form.name" type="text" placeholder="Nom*" required>
            <input v-model="this.form.mail" type="text" placeholder="E-mail*" required>
            <div class="success" v-if="this.confirmation == 'success'">Commentaire envoyé</div>
            <div class="fail" v-if="this.confirmation == 'fail'">Echec de l'envoi</div>
            <input type="submit" value="Laisser un commentaire">
        </form>
    </div>
</template>

<script>

import axios from 'axios';

export default {
    data() {
        return {
            form: {
                comment: "",
                name: "",
                mail: "",
            },
            confirmation: '',
        }
    },
    methods: {
        onSubmit() {
            axios
            .post('mail.php', this.form)
            .then(response => {
                this.confirmation = 'success';
                return response;
            })
            .catch(error => {
                this.confirmation = 'fail';
                return error;
            });
            this.resetForm()
        },
        resetForm() {
            this.form.comment = "";
            this.form.name = "";
            this.form.mail = ""
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

        .success {
            margin-bottom: 20px;
            padding: 10px 0px 10px 15px;
            background-color:#d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .fail {
            margin-bottom: 20px;
            padding: 10px 0px 10px 15px;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    }
}

</style>