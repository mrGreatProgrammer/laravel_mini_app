<template>
    <chatcard v-for="chat in chats" ></chatcard>
</template>

<script>
export default {
    props: {
        // Define the chats prop as an array of objects, where each object represents a chat
        chats: {
            type: Array,
            required: true
        },
    }
}

</script>