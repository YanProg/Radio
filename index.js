import miniPlayer from "./components/mini-player.js";

let songs = document.querySelectorAll('.song');

function playSong(song){
  miniPlayer.play(song)
}