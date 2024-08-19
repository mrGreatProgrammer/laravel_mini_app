<template>
    <div>

    </div>
</template>

<script>
import axios from 'axios';

export default {
    // name: 'HomePage',
    data() { return { products: [], isFetchingProducts: false, error: '' } }, mounted() {
        this.isFetchingProducts = true; axios.get('/api/products').then(response => {
            console.log("response: " + response);
        }).catch((err) => {
            console.log("error: ", err);
        }).finally(() => { this.isFetchingProducts = false })
    }
}
</script>