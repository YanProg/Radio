import miniPlayer from "./components/mini-player.js";

renderSongs();



async function getSongs(){
  let res = await fetch('./server/songs/list.php');
  let json = await res.json();
  return json;
}

async function renderSongs(){
  let songsContainer = document.querySelector('#songs-container');
  let songs = await getSongs();

  songs.forEach((el) => {
    songsContainer.innerHTML += `<div class="song">
          <div class="song-picture">
            <div class="song-play-icon d-flex align-items-center justify-content-center">
              <img src="icons/play-fill.svg" width="50px" class="svg-icon">
            </div>
            
          </div>
          <div class="song-info">
            <div>${el.song_name}</div>
            <div>${el.song_duration}</div>
          </div>
        </div>`;
  });

  document.querySelectorAll('.song').forEach((song, i) => {
    song.onclick = () => {
      let songObj = {
        path: songs[i].song_path.replaceAll(' ', '%20'),
        picture: songs[i].song_picturepath
      };
      playSong(songObj);
    };
  });
}

function playSong(song){
  miniPlayer.stop();
  miniPlayer.play(song);
}