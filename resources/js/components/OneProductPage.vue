<template>
    <div>

    </div>
</template>

<script>
export default {
    // name: 'App'
    props: ["productId"],
    data() {
        return {
            error: "",
            isFetching: true,
            product: null
        }
    },
    mounted() {
        axios.get(`/api/product/${this.productId}`).then((response) => {
            this.product = response.data;
        }).catch((error) => {
            console.log("err", error);
        }).finally(() => { this.isFetching = false; });
    }
}
</script>