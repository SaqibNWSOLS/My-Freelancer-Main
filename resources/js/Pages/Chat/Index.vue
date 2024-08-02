<template>
  <ChatLayout>
    <div class="app">
      <div class="wrapper">
        <div class="conversation-area shadow-md">
          <div class="search-barss">
            <input type="text" class="border-2 border-[#f9fafb]" placeholder="Search..." />
          </div>
          <div v-for="conversation in conversations" :key="conversation.id" class="msg " :class="{ active: conversation.id === activeConversation.id }" @click="selectConversation(conversation.id)">
           <template v-if="conversation?.sender_id!=userId">
                <img class="msg-profile" :src="conversation.sender.image" alt="" />
            <div class="msg-detail">
              <div class="msg-username">{{ conversation?.sender?.name }}</div>
              <div class="msg-content">
                <span class="msg-message">{{ conversation?.title }}</span>
                <span class="msg-date">{{ conversation?.created_at }}</span>
              </div>
            </div>
           </template>

           <template v-if="conversation?.receiver_id!=userId">
                <img class="msg-profile" :src="conversation.receiver?.image" alt="" />
            <div class="msg-detail">
              <div class="msg-username">{{ conversation.receiver?.name }}</div>
              <div class="msg-content">
                <span class="msg-message">{{ conversation?.title }}</span>
                <span class="msg-date">{{ format(conversation?.created_at, 'd MMMM Y') }}</span>
              </div>
            </div>
           </template>

          </div>
        </div>
        <div class="chat-area">
          <div class="chat-area-header bg-[#f9fafb]" v-if="activeConversation?.sender_id!=userId">
            <div class="chat-area-title">{{ activeConversation?.title }}</div>
            <div class="chat-area-group">
              <img class="chat-area-profile" :src="activeConversation?.sender?.image" alt="" />
            </div>
          </div>
            <div class="chat-area-header bg-[#f9fafb]" v-if="activeConversation?.receiver_id!=userId">
            <div class="chat-area-title">{{ activeConversation?.receiver?.name }}</div>
            <div class="chat-area-group">
              <img class="chat-area-profile" :src="activeConversation?.receiver?.image" alt="" />
            </div>
          </div>
          <div class="chat-area-main">
            <div v-for="message in messages" :key="message.id" class="chat-msg" :class="{ owner: message.user_id === userId }">
              <div class="chat-msg-profile">
                <img class="chat-msg-img" :src="message.user.image" alt="" />
                <div class="chat-msg-date">Message seen {{ format(message.created_at, 'd MMMM Y') }}</div>
              </div>
              <div class="chat-msg-content">
                <div v-for="text in message.content.split('\n')" class="chat-msg-text">{{ text }}</div>
              </div>
            </div>
          </div>
        <div class="chat-area-footer">
            <!-- Add file upload input -->
            <input type="file" @change="handleFileUpload" style="display: none;" ref="fileInput" />
            <button @click="openFileInput">Attach File</button>
            <button @click="toggleEmojiPicker">😊</button>
            
            <!-- Emoji Picker -->
            <emoji-picker v-if="showEmojiPicker" @emoji-click="addEmoji"></emoji-picker>
            
            <input type="text" class="border-2 border-[#f9fafb] focus: border-[#f9fafb]" placeholder="Type something here..." v-model="newMessage" @keyup.enter="sendMessage" />
            <!-- Existing code for other icons... -->
          </div>
        </div>

         <div class="detail-area">
   <div class="detail-area-header" v-if="activeConversation?.sender_id!=userId">
    <div class="msg-profile group">
     <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%2812%29.png" class="rounded-full">
    </div>
    <div class="detail-title">Miguel Cohen</div>
    <div class="detail-subtitle">Created by Aysenur, 1 May 2020</div>
   
   </div>

    <div class="detail-area-header" v-if="activeConversation?.receiver_id!=userId">
    <div class="msg-profile group">
     <img :src="activeConversation?.receiver?.image" class="rounded-full">
    </div>
    <div class="detail-title">{{ activeConversation?.receiver?.name }}</div>
    <div class="detail-subtitle">Created by {{ activeConversation?.sender?.name }}, {{ format(activeConversation.created_at, 'd MMMM Y') }}</div>
   
   </div>
  
   <div class="detail-photos">
    <div class="detail-photo-title flex">
     <svg xmlns="http://www.w3.org/2000/svg" style="height:20px; width:40px" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
      <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
      <circle cx="8.5" cy="8.5" r="1.5" />
      <path d="M21 15l-5-5L5 21" /></svg>
     Shared Media
    </div>
   
    <div class="view-more">View More</div>
   </div>
 
  </div>
      </div>
    </div>
  </ChatLayout>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import ChatLayout from '@/Layouts/ChatLayout.vue';
import { format } from 'date-fns';
import Echo from 'laravel-echo';
import 'emoji-picker-element';

const conversations = ref([]);
const messages = ref([]);
const activeConversation = ref({});
const newMessage = ref('');
const userId = ref(null);
const showEmojiPicker = ref(false);

const props = defineProps({
  conversationProp: Object
});

const fetchConversations = async () => {
  const response = await axios.get('/api/conversations');
  conversations.value = response.data;
  if (props?.conversationProp?.id) {
    selectConversation(props?.conversationProp?.id);
  } else if (conversations.value.length > 0) {
    selectConversation(conversations.value[0].id);
  }
};

const fetchMessages = async (conversationId) => {
  const response = await axios.get(`/api/conversations/${conversationId}/messages`);
  messages.value = response.data;
};

const selectConversation = (conversationId) => {
  activeConversation.value = conversations.value.find(convo => convo.id === conversationId);
  fetchMessages(conversationId);
};

const sendMessage = async () => {
  if (newMessage.value.trim() === '') return;
  await axios.post('/api/messages', { conversation_id: activeConversation.value.id, content: newMessage.value });
  newMessage.value = '';
  fetchMessages(activeConversation.value.id);
};

const handleFileUpload = async (event) => {
  const file = event.target.files[0];
  if (file) {
    const formData = new FormData();
    formData.append('file', file);
    formData.append('conversation_id', activeConversation.value.id);

    await axios.post('/api/files', formData, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    });

    fetchMessages(activeConversation.value.id);
  }
};

const openFileInput = () => {
  const fileInput = document.querySelector('input[type="file"]');
  fileInput.click();
};

const toggleEmojiPicker = () => {
  showEmojiPicker.value = !showEmojiPicker.value;
};

const addEmoji = (event) => {
  console.log(event.detail); // Inspect the event detail to find the correct property
  newMessage.value += event.detail.unicode; // Use the correct property for the emoji
  toggleEmojiPicker();
};
// Pusher integration for real-time updates
const setupPusher = () => {
  window.echo.channel(`conversation.${activeConversation.value.id}`)
    .listen('MessageSent', (e) => {
      messages.value.push(e.message);
    });
};

onMounted(async () => {
  await fetchConversations();
  userId.value = (await axios.get('/api/user')).data.id;
  setupPusher();
});
</script>

<style src="@/assets/chat/style.css"></style>
