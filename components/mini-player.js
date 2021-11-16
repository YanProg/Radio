const miniPlayer = () => {
  const id = '#mini-player';
  let player = document.querySelector(id);

  let iconPause = 'icons/play-fill.svg';
  let iconPlay = 'icons/pause-fill.svg'

  let currentAudio = null;

  load();

  function load() {
    let paused = false;

    let btnClose = document.querySelector(id + ' #btn-close');
    let btnRP = document.querySelector(id + ' #btn-RP');
    let btnRPIcon = document.querySelector(id + ' #btnRP-icon');
    let btnLeft = document.querySelector(id + ' #btn-left');
    let btnRight = document.querySelector(id + ' #btn-right');

    btnRP.onclick = () => {
      paused = !paused;
      
      if (paused){
        btnRPIcon.src = iconPause;
        currentAudio.pause();
      }else {
        btnRPIcon.src = iconPlay;
        currentAudio.play();
      }
    };

    btnClose.onclick = () => {
      player.style.bottom = '-300px';
      currentAudio.pause();
      currentAudio = null;
    };

    return {
      player,
      btnRP,
      btnLeft,
      btnRight
    };
  }
  function play(song) {
    player.style.bottom = '0px';

    let audio = new Audio('../songs/' + song + '.mp3');
    audio.play();
    currentAudio = audio;
  }

  return {
    load,
    play,
    pause
  };
}

export default miniPlayer();