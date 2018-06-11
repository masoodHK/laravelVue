<template lang="html">
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>{{ message.user }}</small>
    </div>
</template>

<script>
    export default {
        props: ['message']
    }
</script>
<style>
    .chat-message  {
        padding: 10px;
    }
    .chat-message p {
        font-weight: bold;
        font-size: 20px
    }
</style>
