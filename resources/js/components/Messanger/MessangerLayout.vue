<template>
    <div class="grid" style="grid-template-columns: 25% 75%;">
        <div>
            <h2>Chats</h2>
            <chatlist chats></chatlist>
        </div>
        <div>
            <messages></messages>
        </div>
    </div>
</template>

<script>
export default {
    data: { chats: [], isFetchingChats: false, errChats: "" },
}

</script>