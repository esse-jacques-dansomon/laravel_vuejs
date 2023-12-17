<template>
    <div>
        <h1>Students</h1>
        <form  @submit.prevent="submitForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" v-model="student.name">
                <div class="error">
                    {{student.errors.name}}
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" v-model="student.email">
                <div class="error">
                    {{student.errors.email}}
                </div>
            </div>


            <div class="form-group">
                <label for="sex">Sex:</label>
                <select id="sex" v-model="student.sex">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <div class="error">
                    {{student.errors.sex}}
                </div>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" v-model="student.phone">
                <div class="error">
                    {{student.errors.phone}}
                </div>
            </div>


            <div class="form-group">
                <label for="birth_date">Birth Date:</label>
                <input type="date" id="birth_date" v-model="student.birth_date">
                <div class="error">
                    {{student.errors.birth_date}}
                </div>
            </div>


            <div class="form-group">
                <label for="birth_city">Birth City:</label>
                <input type="text" id="birth_city" v-model="student.birth_city">
                <div class="error">
                    {{student.errors.birth_city}}
                </div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script setup>
import { router, useForm } from '@inertiajs/vue3'

const props = defineProps({
    student: Object
})

//2ème méthode
const student = useForm({
    name: props.student.name,
    email: props.student.email,
    sex: props.student.sex,
    phone: props.student.phone,
    birth_date: props.student.birth_date,
    birth_city: props.student.birth_city,
})

const submitForm = () => {
  return student.put(`/students${props.student.id}`)
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
