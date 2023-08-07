<template>
    <section class="contact-page">
        <h2>This is our contact form</h2>
        <div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Subject">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    name: "ContactPage",
}
</script>
