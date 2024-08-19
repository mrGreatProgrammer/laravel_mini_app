<template>
    <article>
        <h3>
            <router-link :to="{ name: 'product', params: { productId: id } }">
                {{ title }}
            </router-link>
        </h3>
        <p>{{ description }}</p>
        <!-- <time datetime=""></time> -->
        <p>{{ updatedAt }}</p>
        <button>cart</button>
    </article>
</template>

<script>
export default {
    // name: 'App'
    props: {
        id: {
            type: Number,
            required: true
        },
        title: {
            type: String,
            required: true
        },
        description: {
            type: String,
            required: true
        },
        updatedAt: {
            type: String,
            required: true
        }
    },

}
</script>