<template>
<!--    <div>-->
<!--        <h1>Students</h1>-->
<!--        <table>-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>id</th>-->
<!--                <th>Name</th>-->
<!--                <th>Email</th>-->
<!--                <th>Sex</th>-->
<!--                <th>Phone</th>-->
<!--                <th>Birth Date</th>-->
<!--                <th>Birth City</th>-->
<!--                <th>Actions</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="student in students" :key="student.id">-->
<!--                <td>{{ student.id }}</td>-->
<!--                <td>{{ student.name }}</td>-->
<!--                <td>{{ student.email }}</td>-->
<!--                <td>{{ student.sex }}</td>-->
<!--                <td>{{ student.phone }}</td>-->
<!--                <td>{{ student.birth_date }}</td>-->
<!--                <td>{{ student.birth_city }}</td>-->
<!--                <td>-->
<!--                    <button class="edit" href="#">Edit</button>-->
<!--                    <button class="delete" href="#">Delete</button>-->
<!--                </td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->

    <div>
        <h1>Students</h1>
        <div class="students">
            <StudentCard v-for="student in students.data" :key="student.id" :student="student" />
        </div>
        <div>
            <Pagination :links="students.links" />
        </div>
    </div>
</template>

<script setup>
import StudentCard from "../Components/StudentCard.vue";
import Pagination from "../Components/Pagination.vue";

const props = defineProps({
   students: Array
})
</script>

<!--<style scoped>-->
<!--    table {-->
<!--        border-collapse: collapse;-->
<!--        width: 100%;-->
<!--    }-->
<!--    th, td {-->
<!--        text-align: left;-->
<!--        padding: 8px;-->
<!--    }-->
<!--    tr:nth-child(even) {-->
<!--        background-color: #f2f2f2;-->
<!--    }-->

<!--    th {-->
<!--        background-color: #4CAF50;-->
<!--        color: white;-->
<!--    }-->

<!--    .edit {-->
<!--      background-color: #4CAF50;-->
<!--        color: white;-->
<!--    }-->

<!--    .delete {-->
<!--        background-color: #f44336;-->
<!--            color: white;-->

<!--    }-->

<!--</style>-->

<style scoped>
    .students {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
</style>
