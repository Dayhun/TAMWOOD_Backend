<template>
    <div class="contact-form">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"
                >Email address</label
            >
            <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
            />
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"
                >Example textarea</label
            >
            <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
            ></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">
                Send Message
            </button>
        </div>
    </div>
</template>

<script>
export default {
    name: "ContactForm",
};
</script>
