<script setup lang="ts">
interface Props {
    links: Array<{
        url: string | null;
        label: string;
        active: boolean;
    }>;
}

defineProps<Props>();
</script>

<template>
    <nav class="flex justify-center mt-4" aria-label="Pagination">
        <ul class="hidden md:inline-flex -space-x-px gap-x-2">
            <li v-for="(link, i) in links" :key="i">
                <a v-if="link.url" :href="link.url"
                    class="px-3 py-1 border rounded-l first:rounded-l-lg last:rounded-r-lg text-sm transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500"
                    :class="[
                        link.active ? 'bg-primary-600 border-primary-600' : 'bg-white text-gray-700 border-gray-300 hover:bg-gray-100',
                        i === 0 ? 'rounded-l-lg' : '',
                        i === links.length - 1 ? 'rounded-r-lg' : ''
                    ]" v-html="link.label" />
                <span v-else class="px-3 py-1 border border-gray-200 bg-gray-100 text-gray-400 text-sm"
                    v-html="link.label" />
            </li>
        </ul>
        <ul class="inline-flex md:hidden -space-x-px gap-x-2">
            <template v-for="(link, i) in links" :key="i">
                <li v-if="link.label.includes('Previous') || link.label.includes('Next')">
                    <a v-if="link.url" :href="link.url"
                        class="px-3 py-1 border rounded-l first:rounded-l-lg last:rounded-r-lg text-sm transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-primary-500"
                        :class="[
                            i === 0 ? 'rounded-l-lg' : '',
                            i === links.length - 1 ? 'rounded-r-lg' : ''
                        ]" v-html="link.label" />
                    <span v-else class="px-3 py-1 border border-gray-200 bg-gray-100 text-gray-400 text-sm"
                        v-html="link.label" />
                </li>
                <li v-else-if="link.active">
                    <span class="px-3 py-1 border border-gray-200 bg-gray-100 text-gray-400 text-sm"
                        v-html="link.label" />
                </li>
            </template>
        </ul>
    </nav>
</template>
