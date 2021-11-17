const id = '#mini-player';

const miniPlayer = () => {
  let paused = false;

  let player = document.querySelector(id);

  let progressBar = null;
  let currentAudio = null;

  let pictureContainer = document.querySelector(id + ' #picture');
  let durationContainer = document.querySelector(id + ' #duration');

  load();

  function load() {
    

    let btnClose = document.querySelector(id + ' #btn-close');
    let btnRP = document.querySelector(id + ' #btn-RP');
    
    let btnReturn = document.querySelector(id + ' #btn-left');
    let btnAdvance = document.querySelector(id + ' #btn-right');
    

    btnRP.onclick = () => {
      paused = !paused;
      pauseOrResume();
    };
    btnAdvance.onclick = () => {
      currentAudio.currentTime = 10;
    };
    btnClose.onclick = () => {
      player.style.bottom = '-300px';
      stop();
    };
    
  }
  function play(song) {
    paused = false;
    stop();
    pauseOrResume();
    let audio = new Audio('../songs/' + song.path + '.mp3');
    setPicture(song.picture);
    audio.play();
    currentAudio = audio;
    handleProgressBar();
    player.style.bottom = '0px';
  }
  function stop(){
    if (currentAudio) currentAudio.pause();
    currentAudio = null;
    if (progressBar) clearInterval(progressBar);
  }
  function pauseOrResume(){
    let iconPause = 'icons/play-fill.svg';
    let iconPlay = 'icons/pause-fill.svg'
    let btnRPIcon = document.querySelector(id + ' #btnRP-icon');

    if (paused){
      btnRPIcon.src = iconPause;
      if (currentAudio) {
        currentAudio.pause();
        clearInterval(progressBar);
      }
    }else {
      btnRPIcon.src = iconPlay;
      if (currentAudio) {
        currentAudio.play();
        handleProgressBar();
      }
    }
  }
  function handleProgressBar(){
    let bar = document.querySelector(id + ' #progress-bar');

    progressBar = setInterval(() => {
      let duration = currentAudio.duration;
      let curTime = currentAudio.currentTime;

      let percent = 100 - ((duration - curTime) * 100 / duration);
      
      duration = Math.round(duration);
      curTime = Math.round(curTime);

      let durationFormatted = Math.trunc(duration / 60) + ':' + Math.trunc(duration % 60);
      durationFormatted += ' / ' + Math.trunc(curTime / 60) + ':' + Math.trunc(curTime % 60);

      durationContainer.innerHTML = durationFormatted
      bar.style.width = percent.toFixed(2) + '%';
    }, 1000);

  }
  function setPicture(picture){
    let path = '../pictures/' + picture + '.jpg';
    let img = new Image(278, 190);
    img.src = path;
    img.onerror = () => {
      img.src = '../icons/music-note.svg'
    }
    pictureContainer.innerHTML = '';
    pictureContainer.appendChild(img);
  }
  return {
    load,
    play,
    stop
  };
}

export default miniPlayer();