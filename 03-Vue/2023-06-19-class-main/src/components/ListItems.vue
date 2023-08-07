<template>
    <div class="item-list">
        <input type="text" v-model="newItem" @keypress.enter="addItem" placeholder="Add a new Item"/>
        <div v-if="list.length">
            <ul>
                <li v-for="item in list" :key="item.id" @click="crossItem(item)" :class="{ done: item.done }">
                    <span>
                        {{ item.id }} - {{ item.description }}
                    </span>
                    <button type="button" @click="deleteItem(item.id)" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </li>
            </ul>
        </div>
        <div v-else>
            List Empty!
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    setup( props, { emit }) {
        const list = ref([
            { id: 1, description: "Study for the exam!", done: false}
        ]);
        let counter = 2;
        const newItem = ref('');

        const addItem = () => {
            if (newItem.value) {
                const newId = counter;
                list.value.push({id: newId, description: newItem.value, done: false });
                newItem.value = "";
                counter++;
            } else {
                emit("badValue");
            }
        }

        const crossItem = function(item) {
            item.done = !item.done;
        }

        const deleteItem = function(id) {
            list.value = list.value.filter( item => item.id != id );
        }
        return { list, addItem, newItem, crossItem, deleteItem }
    }
}

</script>

<style>
    .item-list ul {
        display: flex;
        flex-direction: column;
        row-gap: 2vh;
        width: 50%;
    }

    .item-list li {
        font-size: 24px;
        display: flex;
        width: 100%;
        height: 10vh;
        align-items: center;
        justify-content: space-between;
        padding: 5vh;
        border-radius: 25px;
        background-color: goldenrod;
        box-shadow: 1px 3px 5px rgba(0,0,0,.6);
        transition: .6s;
    }

    .item-list li:hover {
        cursor: pointer;
        background-color: lightgoldenrodyellow;
    }

    .item-list .done {
        background-color: lightgreen;
        text-decoration: line-through;
    }
</style>