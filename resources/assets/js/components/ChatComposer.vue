<template>
    <div class="container chat-input">
        <input type="text" placeholder="Type your message" @keyup.enter="sendMessage" v-model="messageText">
        <button class="btn btn-primary" @click="sendMessage">Submit</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messageText: ''
            }
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    message: this.messageText,
                    user: "John Doe"
                });
                this.messageText = '';
            }
        }
    }
</script>

<style lang="css">
    .chat-input {
        display: flex;
    }
    .chat-input > input {
        flex: 1 auto;
        color: #222;
    }
    .chat-input button {
        border-radius: 0;
    }
</style>
