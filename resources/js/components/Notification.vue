<script setup lang="ts">
import { type NotificationResource } from '@/types';
import NotificationTypePill from './NotificationTypePill.vue';
import NotificationTypeIcon from './NotificationTypeIcon.vue';

interface Props {
    notification: NotificationResource;
}

defineProps<Props>();
</script>

<template>
    <!-- <div class="p-4">
        <div class="mb-2 flex items-center gap-1">
            <NotificationTypeIcon :type="notification.type" />
            <NotificationTypePill :type="notification.type" />
        </div>
        <h2 class="text-lg font-semibold">{{ notification.title }}</h2>
        <p class="text-sm text-gray-600">{{ notification.content }}</p>
        <span class="text-xs text-gray-400">{{ new Date(notification.created_at).toLocaleString() }}</span>
    </div> -->
    <div :class="`flex px-4 py-2 ${notification.read_at ? 'bg-transparent' : 'bg-gray-100'}`">
        <span class="pe-8 py-2">
            <NotificationTypeIcon :type="notification.type" />
        </span>
        <div class="flex flex-col flex-grow-1">
            <div class="flex flex-col gap-2 lg:flex-row items-start lg:justify-between py-2">
                <NotificationTypePill :type="notification.type" />
                <span class="text-xs text-gray-400">{{ new Date(notification.created_at).toLocaleString() }}</span>
            </div>
            <div>
                <h2 class="text-md font-semibold">{{ notification.author }}</h2>
                <p class="text-sm text-gray-600" v-html="notification.content"></p>
            </div>
        </div>
    </div>
</template>
