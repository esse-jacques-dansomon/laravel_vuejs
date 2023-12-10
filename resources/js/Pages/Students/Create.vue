<template>
    <div>
        <h1>Students</h1>
        <form  @submit.prevent="submitForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" v-model="student.name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="student.email">
            </div>


            <div class="form-group">
                <label for="sex">Sex:</label>
                <select id="sex" v-model="student.sex">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" v-model="student.phone">
            </div>


            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" id="birth_date" v-model="student.birth_date">
            </div>


            <div class="form-group">
                <label for="birth_city">Birth City:</label>
                <input type="text" id="birth_city" v-model="student.birth_city">
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script setup>
import { reactive } from 'vue'
import { router, useForm } from '@inertiajs/vue3'

//1er méthode
// const student = reactive({
//     name: '',
//     email: '',
//     sex: '',
//     phone: '',
//     birth_date: '',
//     birth_city: ''
// })
//
//
// const submitForm = () => {
//    router.post('/students', student)
// }

//2ème méthode
const student = useForm({
    name: '',
    email: '',
    sex: '',
    phone: '',
    birth_date: '',
    birth_city: ''
})

const submitForm = () => {
  return student.post('/students')
}

</script>

<style scoped>
    form {
        display: flex;
        flex-direction: column;
        width: 50%;
    }
    label {
        margin-bottom: 0.5rem;
    }
    input, select {
        margin-bottom: 1rem;
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .form-group input, .form-group select {
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
    }

    button {
        width: 50%;
        margin: 0 auto;
    }



</style>
