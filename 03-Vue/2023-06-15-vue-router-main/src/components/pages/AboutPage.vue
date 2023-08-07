<template>
    <figure class="about-figure">
        <img src="../../assets/img/about.jpg" alt="About Us">
        <figcaption>
            <h2>
                About Us
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam corporis magnam iusto quidem impedit, recusandae blanditiis tempore quia odit libero, alias, tenetur adipisci molestias ducimus? Ratione voluptates rerum odio, dicta inventore beatae? Ea tempora ipsa beatae tempore alias, doloribus atque aut quam? Dolores, facilis amet.
            </p>
        </figcaption>
    </figure>
</template>

<script>

export default {
    name: "AboutPage",
}
</script>

<style>
    .about-figure {
        display: flex;
        width: 100%;
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