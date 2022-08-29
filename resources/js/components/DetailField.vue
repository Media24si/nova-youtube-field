<template>
    <PanelItem :field="field" :index="index">
        <template v-if="field.value" #value>
            <iframe id="ytplayer" type="text/html" width="640" height="360"
                    :src="`https://www.youtube.com/embed/${field.value}`"
                    frameborder="0"></iframe>
        </template>
    </PanelItem>
</template>

<script>
export default {
    props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],
}
</script>
