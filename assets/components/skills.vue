<template>

    <div class="component">
        <ul class="list-group width-300 float-left col-sm-12">
            <li class ="list-group-item" id ="backend" @click="showSkill('backend')">
                PROGRAMOWANIE BACKEND
            </li>
            <li class ="list-group-item" id ="sql_databases" @click="showSkill('sql_databases')">
                BAZY DANYCH SQL
            </li>
            <li class ="list-group-item" id ="front" @click="showSkill('front')">
                PROGRAMOWANIE FRONTED
            </li>
            <li class ="list-group-item" id ="other" @click="showSkill('other')">
                INNE
            </li>
        </ul>

        <!--BACKEND SKILLS !-->
        <div v-if="chosenSkill==='backend'">
            <div class ="width-700">
                <div class="row">
                    <div class="backendTitle">
                        PHP
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill"  disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill"  disabled>
                        <input type="radio" class="unMarkedSkill"  disabled>
                    </div>
                </div>
            </div>

            <div class ="width-700">
                <div class="row">
                    <div class="backendTitle">
                        C#
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>
        </div>

        <!-- SQL SKills !-->
        <div v-if ="chosenSkill==='sql_databases'">
            <div class ="width-700">
                <div class="row">
                    <div class ="database_title">
                        Mysql
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>
            <div class ="width-700">
                <div class="row">
                    <div class ="database_title">
                        Sybase
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>

            <div class ="width-700">
                <div class="row">
                    <div class ="database_title">
                        Oracle
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>
        </div>

        <!-- FRONT !-->
        <div v-if ="chosenSkill==='front'">
            <div class ="width-700">
                <div class="row">
                    <div class ="front_title">
                        Javascript
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill"  disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill"  disabled>
                        <input type="radio" class="unMarkedSkill"  disabled>
                        <input type="radio" class="unMarkedSkill"  disabled>
                    </div>
                </div>
            </div>

            <div class ="width-700">
                <div class="row">
                    <div class ="front_title">
                        HTML/CSS
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>
        </div>
        <div v-if ="chosenSkill==='other'">
            <div class ="width-700">
                <div class="row">
                    <div class="other_title">
                        VBA
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>

            <div class ="width-700">
                <div class="row">
                    <div class="other_title">
                        Excel
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                    </div>
                </div>
            </div>
            <div class ="width-700">
                <div class="row">
                    <div class="other_title">
                        Język Angielski
                    </div>
                    <div class="float-left width-120">
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="markedSkill" disabled>
                        <input type="radio" class="unMarkedSkill" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "skills",
    data() {
        return {
            chosenSkill: null,
        }
    },
    methods: {
        showSkill(skill) {
            this.chosenSkill = skill;
            this.changeClass(skill);
        },
        changeClass(skill) {
          let elements = document.getElementsByClassName('list-group-item');
          for (let i = 0; i < elements.length; i++) {
              elements[i].classList.remove('selected-green');
          }
            let element = document.getElementById(skill);
            element.classList.add('selected-green');
        }
    }
}
</script>

<style scoped>
.selected-green {
    background-color: limegreen;
    color:white;
}
.width-700 {
    width: 700px;
}
.width-120 {
    width: 120px;
}
.width-300 {
    width: 300px;
}
.other_title, .backendTitle, .database_title, .front_title {
    margin-left: 30px;
    width: 50px;
    font-size: 25px;
    color: #0a58ca;
    margin-right: 80px;
}
.backendTitle {
    margin-right: 15px;
}
.database_title {
    margin-right: 45px;
}
.other_title {
    width: 190px;
    margin-right: 0px;
}
.markedSkill, .unMarkedSkill {
    margin-top: 5px;
    height: 30px;
    border:0px;
    width: 15%;
}
.markedSkill {
    filter: invert(100%);
}
.width-500 {
    width:500px;
}
.float-left{
    float:left;
}
@media (max-width: 1150px) {
    .component {
        width: 500px;
    }
}

</style>