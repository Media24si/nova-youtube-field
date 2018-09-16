<template>
    <p>
        <img v-if="field.value" :src="'https://img.youtube.com/vi/' + field.value + '/default.jpg'" style="object-fit: cover;" class="rounded-full w-8 h-8" />
        <span v-else>&mdash;</span>
    </p>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
