<template>
    <div class="min-h-screen flex flex-col items-center justify-center bg-white dark:bg-gray-950 px-4 py-12">
        <div class="mb-8">
            <img src="/images/my-logo.png" alt="My Logo" class="h-10 w-auto" />
        </div>
        <div class="w-full max-w-md bg-white dark:bg-gray-900 rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-center mb-2">{{ title }}</h2>
            <p class="text-sm text-center text-muted-foreground mb-6">{{ description }}</p>
            <slot />
        </div>
    </div>
</template>

<script setup lang="ts">
defineProps<{
    title: string;
    description?: string;
}>();
</script>
