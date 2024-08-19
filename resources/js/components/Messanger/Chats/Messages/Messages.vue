<template>
    <div>
        <div class="overflow-y-auto overflow-x-hidden">
            <MessageCard v-for="message in messages"></MessageCard>
        </div>
        <div>
            <form>
                <textarea>
                </textarea>
                <button type="submit">send</button>
            </form>
        </div>
    </div>
</template>

<script>
import MessageCard from './MessageCard.vue';

export default {
    data: {
        messages: [],
        isFetching: false,
        error: ""
    },

    // methods: {
    //     async fetchMessages() {
    //         try {
    //             this.isFetching = true;
    //             const response = await fetch('https://jsonplaceholder.typicode.com/posts');
    //             if (!response.ok) {
    //                 throw new Error(`HTTP error! status: ${response.status}`);
    //             }
    //             const data = await response.json();
    //             this.messages = data;
    //         } catch (error) {
    //             this.error = error.message;
    //         } finally {
    //             this.isFetching = false;
    //         }
    //     }
    // },
}
</script>