<template>
    <div>
        <div v-if ="type=='teaching'" class ="experience">
            Od 2016 roku prowadziłem liczne szkolenia z Excela na różnych poziomach zaawansowania - od poziomu podstawowego
            do programowania w VBA.
        </div>
        <div v-if="type=='programming'" class ="experience">
            Przygodę z programowaniem zacząłem na studiach. Poznałem SQL oraz podstawy języka C#. W swojej pierwszej pracy
            rozwijałem się programując w VBA. W kolejnych latach pracowałem z bazami danych - ORACLE, MYSQL, SYBASE. Od roku
            jestem programistą PHP + technologii frontowych.
        </div>
    </div>


</template>

<script>
export default {
    name: "experience",
    props: {
        type: null,
    }
}
</script>

<style scoped>
.experience {
    border-color: #0a58ca;
    color: #0a58ca;
    border: solid;
    border-radius: 10px;
    padding: 15px;
    font-size: 30px;
    width: 1000px;
}
@media(max-width: 1250px) {
    .experience {
        width:500px;
    }
}
@media (min-width: 1251px) {
    .experience {
        width: 800px;
    }
}
@media(min-width: 1451px) {
    .experience {
        width: 1000px;
    }
}
</style>