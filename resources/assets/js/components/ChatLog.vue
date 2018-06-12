<template lang="html">
  <div class="chat-log container">
      <chat-message v-for="message in messages" :message="message" :key="message.user"></chat-message>
  </div>
</template>


<script>
    export default {
        data() {
            return {
                messages: [
                    {
                        message: "test",
                        user: "Mark"
                    },
                    {
                        message: "testing",
                        user: "Sam"
                    },
                    {
                        message: "test",
                        user: "Mark"
                    },
                ]
            }
        }
    }
</script>

<style>
    .chat-log  .chat-message:nth-child(even) {
        background: rgb(139, 139, 139);
        text-align: right;
    }
</style>
