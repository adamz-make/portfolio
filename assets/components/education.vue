<template>
<div>
        <div class ="degree" v-if="degree==='bachelor'">
            <div>
                <span>Uniwersytet Gdański</span>
            </div>
            <div>
                <span>Informatyka i Ekonometria</span>
            </div>
            <div>
                <span>Specjalność Statystyka Ubezpieczeniowa</span>
            </div>
            2009-2012
        </div>

        <div class ="degree"  v-if="degree==='master'">
            <div>
                <span>Uniwersytet Gdański</span>
            </div>
            <div>
                <span>Informatyka i Ekonometria</span>
            </div>
            <div>
                <span>Specjalność Statystyka Ubezpieczeniowa</span>
            </div>
            2012-2014
        </div>
    </div>


</div>
</template>

<script>
export default {
    name: "education",
    data() {
        return {
            showBachelor: false,
            showMaster: false
        }
    },
    props: {
        degree: String
    },
    methods: {
        changeBachelor() {
            this.showBachelor = !this.showBachelor;
        },
        changeMaster() {
            this.showMaster = !this.showMaster;
        }
    },
   created() {
        console.log(this.degree);
    }
}
</script>

<style scoped>

.degree {
    border-color: #0a58ca;
    color: #0a58ca;
    border: solid;
    border-radius: 10px;
    padding: 15px;
    font-size: 30px;
}
@media(max-width: 1025px) {
    .degree {
        width: 500px;
    }
}

</style>