
<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <Link class="navbar-brand" :href="route('students.index')">Crud Students</Link>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page"
                              :href="route('students.index')"><i class="fas fa-home"></i> Students</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" :href="route('students.create')"><i class="fas fa-edit"></i> Create Student</Link>
                    </li>
                </ul>
            </div>
            <br>
            <div  class="alert alert-success" role="alert" v-if="message">
                {{ message}}
                </div>

        </div>
    </nav>
    <slot></slot>
</template>

<script setup>
import {Link, usePage} from '@inertiajs/vue3';
import {computed} from "vue";
const page = usePage();
let message = computed(() => page.props.flash.success);
setTimeout(() => {
    if (message.value) {
        page.props.flash.success= null;
        message = null;
        console.log(message);
    }
}, 1000);
</script>

<style>
/* Add your global styles here */

/* Navbar styles */
.navbar {
    background-color: #fff; /* Set your desired background color */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add a box shadow for a subtle elevation */
}

.navbar-brand {
    font-size: 1.5rem; /* Adjust the font size as needed */
    font-weight: bold;
    color: #333; /* Set your desired text color */
}

.navbar-toggler-icon {
    /* You can customize the navbar toggler icon if needed */
}

.navbar-nav {
    margin-left: auto; /* Push the nav items to the right */
}

.nav-item {
    margin-right: 15px; /* Adjust the spacing between nav items */
}

.nav-link {
    color: #555; /* Set your desired text color for the nav links */
}

.nav-link:hover {
    color: #007bff; /* Set your desired text color for the nav links on hover */
}

/* Optional: Customize the active link styles */
.nav-link[aria-current="page"] {
    color: #007bff; /* Set your desired text color for the active link */
}

/* Optional: Add styles for the slot content */
slot {
    /* Add your custom styles for the slot content if needed */
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 20px;
    display: flex;
    margin-left: auto;
}

.alert {
    padding: 0;
    display: flex;
    margin: 0 auto;
    width: 50%;
    text-align: center;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

</style>


