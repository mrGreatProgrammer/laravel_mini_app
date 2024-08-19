<template>

</template>

<script>
    export default {
        props:{
            id:{
                type:Number,
                required:true
            },
            username:{
                type:String,
                required:true
            },
            content:{
                type:String,
                required:true
            },
            createdAt:{
                type:Date,
                required:true
            },
            updatedAt:{
                type:Date,
                required:true
            },
            watched: {
                type: Boolean,
                default: false
            }
         }
    }
</script>