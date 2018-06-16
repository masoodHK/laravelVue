<template lang="html">
  <div class="chat-log container">
      <chat-message v-for="message in messages" :message="message" :key="message.message"></chat-message>
  </div>
</template>


<script>
    export default {
        props: ['messages']
    }
</script>

<style>
    .chat-log  .chat-message:nth-child(even) {
        background: rgb(139, 139, 139);
        text-align: right;
    }
</style>
