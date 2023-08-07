<template>
    <header class="class-04-header">
        <section class="header-left">
            <div>
                <h2>Webservice provider</h2>
                <p>Please, contact us to check our services</p>
                <a href="#">Contact Us</a>
            </div>
        </section>
        <section class="header-right">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Search"
                            aria-label="Search"
                        />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </nav>
        </section>
    </header>
</template>

<script>
export default {
    name: "HeaderComponent",
};
</script>

<style scoped>
    .class-04-header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("../assets/img/logo.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 60vh;
    }
    .header-left,
    .header-right {
        height: 100%;
        width: 50%;
        background-color: rgba(240, 240, 240, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .header-left{
        color: dimgray;
    }
</style>