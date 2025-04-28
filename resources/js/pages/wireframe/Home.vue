<script setup lang="ts">
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

interface Props {
    route: object
}

const props = defineProps<Props>()

let anything = 10
anything = 12

const page = usePage()
const appEnv = computed(() => page.props.app_env)

appEnv
</script>

<template>
    <div class="place-items-center grid bg-red-50 h-screen">
        <div class="place-items-center grid bg-red-100 rounded-3xl w-[24em] h-[10em]">
            <p class="font-bold text-red-800 uppercase">Hello World | @{{ $page.props.app_env }}</p>
        </div>
    </div>
</template>