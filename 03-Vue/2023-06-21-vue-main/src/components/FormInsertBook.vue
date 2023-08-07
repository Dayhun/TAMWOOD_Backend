<template>
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" v-model="title" name="title" class="form-control" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" v-model="isbn" class="form-control" id="isbn" name="isbn">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Book Author</label>
            <input type="text" v-model="author" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="edition" class="form-label">Book Edition</label>
            <input type="text" v-model="edition" class="form-control" id="edition" name="edition">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Book Price</label>
            <input type="text" v-model="price" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</template>

<script>
export default {
    name: FormInsertBook
}
</script>
