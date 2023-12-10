<template>
    <div>
       <BaseLayout>
           <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Quisquam, voluptatum. Quisquam,
           </p>
       </BaseLayout>
        <div class="">
            <p>Message : {{ message }}</p>
            <p>Name : {{ name }}</p>
            <p>Age : {{ age }}</p>
            <p>Job : {{ job }}</p>
            <div>
                hobbies : <br>
                <ul>
                    <li v-for="hobby in hobbies" :key="hobby">
                        {{ hobby }}
                    </li>
                </ul>

            </div>
        </div>
        <br>
        <button @click="age += 1">Change message</button>
        <br>

    </div>
</template>

<script setup>
    import { defineProps } from 'vue'
    import BaseLayout from "../layouts/BaseLayout.vue";

    const props = defineProps({
        message: String,
        name: String,
        age: Number,
        job: {
            type: String,
            required: true,
            default: 'Développeur'
        },
        hobbies: Array
    })

</script>
