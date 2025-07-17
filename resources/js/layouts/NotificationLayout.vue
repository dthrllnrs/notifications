<script setup lang="ts">

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="flex justify-center p-8 md:p-16 py-8 bg-background min-h-screen">
        <div class="flex flex-col gap-4 w-full md:max-w-[64rem]">
            <h1 class="text-2xl font-semibold">Notifications</h1>
            <main class="w-full bg-card text-card-foreground rounded-lg shadow p-6 h-max">
                <slot></slot>
            </main>
        </div>
    </div>
</template>
