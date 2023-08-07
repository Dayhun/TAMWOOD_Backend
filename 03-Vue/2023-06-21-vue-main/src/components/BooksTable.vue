<template>
    <table class="table table-info table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">ISBN</th>
                <th scope="col">Price</th>
                <th scope="col">Edition</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="book in books" :key="book.id">
                <th scope="row">{{ book.id }}</th>
                <td>{{ book.title }}</td>
                <td>{{ book.author }}</td>
                <td>{{ book.isbn }} </td>
                <td> ${{ book.price }} </td>
                <td>{{book.edition}}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "BooksTable",
    props: {
        books:[]
    }
}
</script>
