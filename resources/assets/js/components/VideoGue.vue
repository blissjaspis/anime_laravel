<template>
    <video id="my-video" class="video-js vjs-default-skin" :poster="rawPoster">
        <source :src="rawSource" type="video/mp4">
        <track v-if="rawLang" label="Indonesia" kind="captions" srclang="id" :src="rawLang" default="">
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that support HTML5 video.
        </p>
    </video>
</template>

<script>
export default {
    name: 'VideoGue',
    props: {
        rawPoster: {
            type: String,
            required: true
        },
        rawSource: {
            type: String,
            required: true
        },
        rawLang: {
            type: String
        }
    },
    data() {
        return {
        }
    },
    mounted() {
        let player = videojs(document.querySelector('.video-js'), {
            controls: true,
            autoplay: false,
            preload: 'none',
            playbackRates: [1, 1.5, 2],
            aspectRatio: "16:9"
        })

        // player.ready(function() {
        //     player.play();
        // })
    }
}
</script>
