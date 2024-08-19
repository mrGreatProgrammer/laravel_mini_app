<template>
    <article class="max-h-40 border border-1">
        <div class="flex flex-row">
            <img width="20px" height="20px" class="rounded-lg" :src="avatar" :alt="userName">
            <h3>{{ userName }}</h3>
        </div>
        <div>
            <date v-if="lastseen">{{ lastseen }}</date>
            <p v-if="messages">{{ messages }} new messages</p>
        </div>
    </article>
</template>

<script>
export default {
    props: {
        avatar: {
            type: String,
            required: true
        },
        userName: {
            type: String,
            required: true
        },
        lastseen: {
            type: Date,
            required: false
        },
        messages: {
            type: Number,
            required: false
        },
    },
}

</script>