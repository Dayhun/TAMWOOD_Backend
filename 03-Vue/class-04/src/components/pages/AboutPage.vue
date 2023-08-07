<template>
    <figure class="about-figure">
        <img src="../../assets/img/logo.png">
        <figcaption>
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla in et dolore odio distinctio porro repudiandae dicta voluptatibus labore ipsam eveniet maiores veritatis incidunt, doloribus id, fuga quod reprehenderit laboriosam! Inventore eveniet quaerat nulla aliquid, sunt distinctio veritatis molestias labore.</p>
        </figcaption>
    </figure>
</template>

<script>
export default {
    name: "AboutPage",
}
</script>

<style>
.about-figure{
    display: flex;
    widows: 100%;
    text-align: center;
    line-height: 1.5;
    color: dimgray;
    justify-content: center;
    column-gap: 15vw;
    font-size: 20px;
}
.about-figure img {
    width: 20vh;
    height: 20vh;
    border-radius: 50%;
}
</style>