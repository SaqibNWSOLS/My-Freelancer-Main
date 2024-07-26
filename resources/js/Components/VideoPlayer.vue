<template>
  <div class="w-full">
    <video-player
      class="video-player vjs-custom-skin"
     :class="`h-[${this.vidoeHeight}px]`"
      :options="playerOptions"
      @play="onPlayerPlay"
      @pause="onPlayerPause"
      @ended="onPlayerEnded"
      @loadeddata="onPlayerLoadeddata"
        :style="{ height: this.vidoeHeight }"
    ></video-player>
  </div>
</template>
<style>
.vjs-custom-skin {
  width: 100%;
}
.video-js .vjs-big-play-button{
  top:auto !important;
  left:auto !important;
  background-color: red;
}
.video-js{
    justify-content: center;
    text-align: center;
    align-items: center;
    display: flex;
}
.vjs-fullscreen-control{
  display: none !important;
}
.vjs-picture-in-picture-control{
  display: none !important;
}
</style>
<script>
import { VideoPlayer } from 'vue-video-player';
import 'video.js/dist/video-js.css';

export default {
  components: {
    VideoPlayer,
  },
  props: {
    videoUrl: {
      type: String,
      required: true,
    },
    vidoeHeight: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      playerOptions: {
        autoplay: true,
        controls: true,
        sources: [
          {
            type: "video/mp4",
            src: this.videoUrl,
          },
        ],
      },
    };
  },
  methods: {
    onPlayerPlay(player) {
      console.log('player play!', player)
    },
    onPlayerPause(player) {
      console.log('player pause!', player)
    },
    onPlayerEnded(player) {
      console.log('player ended!', player)
    },
    onPlayerLoadeddata(player) {
      console.log('player loadeddata!', player)
    }
  }
};
</script>


