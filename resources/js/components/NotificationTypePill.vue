<script setup lang="ts">
interface Props {
    type: string;
}

defineProps<Props>();

const typeColorClassMap: Record<string, string> = {
    message: 'bg-chart-1',
    alert: 'bg-chart-2',
    reminder: 'bg-chart-3',
    update: 'bg-chart-4',
    warning: 'bg-chart-5',
    info: 'bg-chart-2',
    error: 'bg-chart-1',
    comment: 'bg-chart-3',
};

function getTypeColorClass(type: string) {
    return typeColorClassMap[type] || 'bg-chart-4';
}
</script>

<template>
    <span
        :class="`inline-block px-2 py-0.5 rounded-sm text-xs font-semibold text-white mr-2 align-middle ${getTypeColorClass(type)}`"
    >
        {{ type }}
    </span>
</template>
