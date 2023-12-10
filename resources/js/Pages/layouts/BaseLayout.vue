<template>
    <Link href="show">Show</Link> &nbsp;
    <Link href="/">Home</Link> <br>
    {{ x }}
    <slot></slot>

</template>
<script setup>
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";
const x  = ref(0);
setInterval(() => {
    x.value++;
}, 1000);


</script>
