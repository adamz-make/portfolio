<template>
<div>
    <div>
        <div id="contact">
            <div id="title">
                <label for="mailTitle"> Tytuł maila</label>
                <input id ="mailTitle" v-model ="mailTitle">
            </div>
            <div id="content">
                <label for="contentMail">Treść maila</label>
                <textarea id="contentMail" v-model="contentMail"></textarea>
            </div>
            <div id="send_mail">
                <button @click="sendMail()">Wyślij mail</button>
            </div>

        </div>
    </div>
</div>

</template>

<script>
import axios from "axios";
export default {
    name: "contact",
    data () {
        return {
            mailTitle: null,
            contentMail: null,
        }
    },
    methods: {
        sendMail() {
            let data = {title: this.mailTitle, content: this.contentMail}
            console.log(data);
            axios
            .post('contact', data, {
                headers: {
                    'Content-Type': 'application/json'
                }
            })
                .then(response => {
                });
        }
    }
}
</script>

<style scoped>
#title {
    margin-bottom: 15px;
}
#contact {
    width: 500px;
}
#mailTitle {
    width: 400px;
}

#contentMail {
    width: 400px;
    height: 200px;
}
label {
    display: block;
}
button {
    background-color: #ff3228;
    border-radius: 10px;
    border: none;
    color:white;
    margin-left: 220px;
    width: 150px;
    margin-top: 15px;
}
</style>