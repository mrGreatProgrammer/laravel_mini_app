<template>
    <div class="grid" style="grid-template-columns: 25% 75%;">
        <div>
            <h2>Chats</h2>
            <div class="overflow-x-hidden overflow-y-auto">

            </div>
        </div>
        <div class="h-screen flex flex-col">
            <div>
                <h1>
                    currentUserName
                </h1>
                <div v-if="messages.length > 0" class="overflow-x-hidden overflow-y-auto">
                    <div v-for="message in messages" :key="message.id">
                        <p>{{ message.id }}</p>
                        <p>{{ message.content }}</p>
                        <date>{{ message.updated_at }}</date>
                    </div>
                </div>
            </div>
            <div class="flex ">
                <textarea class="rounded resize-none" v-model="content" name="content" id="content" placeholder="your message..."></textarea>
                <!-- <input v-model="newMessage" type="text" placeholder="Type a message..."> -->
                <button class=" bg-green-500 hover:bg-green-600 duration-200 text-white rounded" :disabled="isLoadingSendMessage" @click="sendMessage">Send</button>
            </div>
        </div>
    </div>
    <!-- <messanger-layout></messanger-layout> -->
</template>

<script>
import axios from 'axios';

export default {
    props: [
        'messages',
    ],
    data() {
        return {
            content: '',
            isLoadingSendMessage: false,
            error: null
        }
    },
    methods: {
        sendMessage() {
            this.isLoadingSendMessage = true;
            if (this.content.trim()) {
                axios.post('/api/messages', { content: this.content }, {
                    // headers: { "Content-Type": "application/json" }
                }).then((res) => { console.log(res); this.messages.push(res.data) }).catch((err) => {
                    this.error = "error"
                }).finally(() => {
                    this.isLoadingSendMessage = false
                });
                // this.$emit('send-message', this.newMessage);
                this.content = '';
            }
        }
    }
}
</script>