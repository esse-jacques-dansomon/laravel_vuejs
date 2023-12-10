<template>
    <figure class="fir-image-figure">

        <a class="fir-imageover" rel="noopener" target="_blank" href="https://twitter.com/_davideast">
            <img class="fir-author-image fir-clickcircle" src="https://fir-rollup.firebaseapp.com/de-sm.jpg" alt="David East - Author">
            <div class="fir-imageover-color"></div>
            <img class="fir-imageover-image fir-clickcircle" src="https://fir-rollup.firebaseapp.com/twitter-logo.png" />
        </a>

        <figcaption>
            <div class="fig-author-figure-title">ID :</div>
            <div class="fig-author-figure-title">{{student.name}} , {{student.sex}} </div>
            <div class="fig-author-figure-title">{{student.email}} {{student.phone}}</div>
            <div class="fig-author-figure-title">{{student.birth_date}} &#8212; {{student.birth_city}} </div>
        </figcaption>
    </figure>
</template>

<script setup>
import { defineProps } from 'vue'

const props = defineProps({
    student: Object
})

</script>

<style scoped>
:root {
    --fir-font-article: "adobe-garamond-pro", "Times New Roman", Times;
    --fir-font-header: "foco", Helvetica;
    --fir-blue-twitter-alpha: rgba(85,172,238, 0.6);
    --fir-color-grey: rgba(0,0,0, 0.40);
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
}

.fir-clickcircle {
    height: 80px;
    width: 80px;
    border-radius: 100px;
    cursor: pointer;
}

.fir-image-figure {
    margin: 0;
    display: flex;
    align-items: center;
    margin-bottom: 40px;
    position: relative;
    text-decoration: none;
}

.fir-image-figure .caption, .fir-image-figure figcaption {
    padding-left: 15px;
}

html.wf-active .fir-image-figure .fig-author-figure-title {
    font-family: var(--fir-font-header);
    font-size: 16px;
}

.fir-image-figure .fig-author-figure-title {
    color: var(--fir-color-grey);
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    font-weight: 400;
    font-size: 15px;
    margin-top: 2px;
}

.fir-imageover {
    position: relative;
    display: flex;
}

.fir-imageover-color {
    height: 80px;
    width: 80px;
    position: absolute;
    background: var(--fir-blue-twitter-alpha);
    background-image: none;
    border-radius: 100px;
    cursor: pointer;
    transition: background .3s ease-in-out;
    animation: fadeInFadeOut 2s infinite;
    top: 0;
    left: 0;
}

.fir-imageover-image {
    position: absolute;
    top: 0;
    left: 0;
    animation: fadeInFadeOut 2s infinite;
}

@keyframes fadeInFadeOut {
    0%   { opacity:1; }
    50%  { opacity:0; }
    100% { opacity:1; }
}

</style>
