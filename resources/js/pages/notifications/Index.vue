<script setup lang="ts">
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { type BreadcrumbItem, type Notification as NotificationType } from '@/types';
import NotificationLayout from '@/layouts/NotificationLayout.vue';
import Notification from '@/components/Notification.vue';
import PaginationLinks from '@/components/PaginationLinks.vue';

interface Props {
    notifications: NotificationType;
}

defineProps<Props>();

const breadcrumbItems: BreadcrumbItem[] = [];
const page = usePage();
const notifications = page.props.notifications as NotificationType;
// const notifications = notifications_data.data;

</script>

<template>
    <NotificationLayout>
        <div class="flex flex-col">
            <template v-for="notification in notifications.data" :key="notification.id">
                <div>
                    <Notification :notification="notification" />
                    <hr v-if="notification !== notifications.data[notifications.data.length - 1]" class="border-gray-200" />
                </div>
            </template>
            <PaginationLinks :links="notifications.links" />
        </div>
    </NotificationLayout>
</template>
