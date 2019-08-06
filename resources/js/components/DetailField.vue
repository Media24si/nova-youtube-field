<template>
    <panel-item :field="field">
        <template v-if="field.value" slot="value">
            <div class="ytplayer-container">
                <iframe id="ytplayer" type="text/html"
                        :src="'https://www.youtube.com/embed/' + field.value"
                ></iframe>
            </div>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>

<style>
.ytplayer-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    height: 0;
}

.ytplayer-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
