<template>
    <div>
        <div class ="col-sm-12">
            <div class="float-left">
                <ul class="list-group width-500 ml-50">
                    <li class="list-group-item active" id="skills" @click="activate('skills')">
                        Umiejętności
                    </li>
                    <li class="list-group-item" id="experience" @click="activate('experience')">
                        Doświadczenie zawodowe
                    </li>
                    <li v-if="this.experienceChosen"  @click="chooseExperience('teaching')" class="list-group-item" id="teaching">
                        Szkolenia
                    </li>
                    <li v-if="this.experienceChosen"  @click="chooseExperience('programming')" class="list-group-item" id="programming">
                        Programowanie
                    </li>

                    <li class="list-group-item" id="education" @click="activate('education')">Wykształcenie</li>
                    <li v-if="this.educationChosen"  @click="chooseDegree('bachelor')" class="list-group-item" id="bachelor">
                        Studia Licencjackie
                    </li>
                    <li v-if="this.educationChosen"  @click="chooseDegree('master')" class="list-group-item" id="master">
                        Studia Magisterskie
                    </li>
                    <li class="list-group-item" id="contact" @click="activate('contact')">Kontakt</li>
                </ul>
            </div>

            <div class = "float-left ml-50px">
                <div v-if="this.skillsChosen" class ="float-left">
                    <skills></skills>
                </div>
                <div v-if ="this.educationChosen && this.educationDegree !== null">
                    <education v-bind:degree="educationDegree"></education>
                </div>
                <div v-if ="this.experienceChosen && experienceType!== null" class ="float-left">
                    <experience v-bind:type="experienceType"></experience>
                </div>
                <div v-if ="this.contactChosen" class ="float-left">
                    <contact></contact>
                </div>

            </div>
        </div>

    </div>


</template>

<style scoped>
.list-group {
    border-radius: 5px;
}
.width-500 {
    width: 300px;
}
.float-left {
    float: left;
}
.ml-50px {
    margin-left: 50px;
}
.lightBlue {
    background-color: #0dcaf0;
}
ul li {
    cursor: default;
}

</style>

<script>
import skills from "./components/skills";
import education from "./components/education"
import experience from "./components/experience";
import contact from "./components/contact";

export default {
    data() {
        return {
            skillsChosen: false,
            experienceChosen: false,
            educationChosen: false,
            contactChosen: false,
            educationDegree: null,
            experienceType: null,

        }
    },
    components: {
        experience,
        education,
        skills,
        contact
    },
    methods: {
        activate(elementId) {
            this.resetElements(elementId);
            let activeLi = document.getElementById(elementId);
            console.log('aktywne');
            console.log(activeLi);
            activeLi.classList.add('active');
            switch (activeLi.id) {
                case 'skills':
                    this.skillsChosen = true;
                    this.experienceChosen = false;
                    this.educationChosen = false;
                    this.contactChosen = false;
                    break;
                case 'education':
                    this.skillsChosen = false;
                    this.experienceChosen = false;
                    this.educationChosen = true;
                    this.contactChosen = false;
                    break;
                case 'experience':
                    this.skillsChosen = false;
                    this.experienceChosen = true;
                    this.educationChosen = false;
                    this.contactChosen = false;
                    break;
                case 'contact' :
                    this.skillsChosen = false;
                    this.experienceChosen = false;
                    this.educationChosen = false;
                    this.contactChosen = true;
                    break;
            }
        },
        chooseDegree(elementId) {
            this.resetElements(elementId);
            let activeLi = document.getElementById(elementId);
            console.log(activeLi);
            activeLi.classList.add('active','lightBlue');
            this.educationDegree = elementId;
            let educationLi = document.getElementById('education');
            educationLi.classList.add('active');
        },
        chooseExperience(elementId) {
            this.resetElements(elementId);
            let activeLi = document.getElementById(elementId);
            activeLi.classList.add('active','lightBlue');
            let experienceLi = document.getElementById('experience');
            experienceLi.classList.add('active');
            this.experienceType = elementId;
        },
        resetElements(elementId) {
            let elements = document.getElementsByClassName('list-group-item');
            console.log('elementy');
            console.log(elements);
            for (let i =0; i < elements.length; i++) {
                if (elements[i].id !== elementId) {
                    elements[i].classList.remove('active', 'lightBlue');
                }
            }
        }
    },

    computed: {
        skillsChosen: {
            get() {
                return this.skillsChosen;
            },
            set(value) {
                this.skillsChosen = value;
            }
        },
        experienceChosen: {
            get() {
                return this.experienceChosen;
            },
            set(value) {
                this.experienceChosen = value;
            }
            ,
            educationChosen: {
                get() {
                    return this.educationChosen;
                },
                set(value) {
                    this.educationChosen = value;
                }
            }
        }
    }
}
</script>
