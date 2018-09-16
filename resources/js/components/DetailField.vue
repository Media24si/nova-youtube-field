<template>
    <panel-item :field="field">
        <template v-if="field.value" slot="value">
            <iframe id="ytplayer" type="text/html" width="640" height="360"
                    :src="'https://www.youtube.com/embed/' + field.value"
                    frameborder="0"></iframe>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
