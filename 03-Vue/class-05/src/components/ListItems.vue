<template>
    <div class="item-list">
        <input
            type="text"
            v-model="newItemList"
            @keypress.enter="addItem"
            placeholder="Add a new item"
        />
        <div v-if="list.length">
            <ul>
                <li
                    v-for="item in list"
                    :key="item.id"
                    @click="deleteItem(item.id)"
                >
                    {{ item.description }}
                </li>
            </ul>
        </div>
        <div v-else>List Empty!</div>
    </div>
</template>

<script>
import { ref } from "vue";
export default {
    setup(props, { emit }) {
        const list = ref([{ id: 1, description: "study for the exam!" }]);
        const newItem = ref("");
        const addItem = function () {
            if (newItem.value) {
                const newId = Math.random();
                this.value.push({ id: newId, description: newItem.value });
                newItem.value = "";
            } else {
                emit("badValue");
            }
        };
        return {list, addItem, newItem}
    },
};
</script>

<style>
.item-list ul {
    display: flex;
    flex-direction: column;
    row-gap: 2vh;
}
</style>