<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css" />
  <title>Pagina Inicial</title>
</head>
<body style="height: 100%">
  <header id="header" class="d-flex flex-direction-row">
    <div class="w-25 h-100"></div>
    <div class="d-flex h-100 w-50 align-items-center">
      <form class="w-100 d-flex" action="." method="POST">
        <input id="search-input" class="p-2" placeholder="Pesquisar"/>
        <button id="search-btn" type="submit">
          <img class="svg-icon" src="icons/search.svg"/>
        </button>
      </form>
    </div>
    <div class="w-25 pe-3 d-flex justify-content-end">
      <div id="myaccount-dropdown"></div>
    </div>
  </header>
  <div id="mini-player" class="overflow-hidden">
    <button id="btn-close" class="p-0 border-0"><img src="icons/x.svg"></button>
    <div style="height: 220px"></div>
    <div style="height: 30px;font-size: 0" class="d-flex justify-content-around px-5">
      <button id="btn-left" class="bg-transparent border-0"><img src="icons/arrow-bar-left.svg" width="30px"/></button>
      <button id="btn-RP" class="bg-transparent border-0"><img id="btnRP-icon" src="icons/pause-fill.svg" width="30px"/></button>
      <button id="btn-right" class="bg-transparent border-0"><img src="icons/arrow-bar-right.svg" width="30px"/></button>
    </div>
    <div style="height: 50px; background-color: var(--purple)"></div>
  </div>
  <section style="width: 64%;min-height: calc(100% - 50px);transform: translateY(50px);" class="mx-auto pt-4 px-5">
    <div id="filter" class="w-100 px-3">
      <button class="filter-btn">Destaques</button>
      <button class="filter-btn">Mais ouvidos</button>
      <button class="filter-btn">Mais recentes</button>
    </div>
    <div id="songs-container" class="w-100">
      <div class="song">
        <div class="song-picture">
          <div class="song-play-icon d-flex align-items-center justify-content-center">
            <img src="icons/play-fill.svg" width="50px" class="svg-icon">
          </div>
        </div>
        <div class="song-info">
          <div>Eazy E Ft. Blood Of Abraham - Niggaz And Jews</div>
          <div>3:28</div>
        </div>
      </div>
      <div class="song">
        <div class="song-picture">
          <div class="song-play-icon d-flex align-items-center justify-content-center">
            <img src="icons/play-fill.svg" width="50px" class="svg-icon">
          </div>
        </div>
        <div class="song-info">
          <div>2Pac - Only God Can Judge Me (Solo)</div>
          <div>3:32</div>
        </div>
      </div>
      <div class="song">
        <div class="song-picture">
          <div class="song-play-icon d-flex align-items-center justify-content-center">
            <img src="icons/play-fill.svg" width="50px" class="svg-icon">
          </div>
        </div>
        <div class="song-info">
          <div>Mobb Deep - Shook Ones pt.II</div>
          <div>5:28</div>
        </div>
      </div>
      <div class="song" onclick="playSong('Adestrador De Madeon')">
        <div class="song-picture">
          <div class="song-play-icon d-flex align-items-center justify-content-center">
            <img src="icons/play-fill.svg" width="50px" class="svg-icon">
          </div>
        </div>
        <div class="song-info">
          <div>Adestrador de Madeon</div>
          <div>3:00</div>
        </div>
      </div>
    </div>
    
  </section>
  <script src="./index.js" type="module"></script>
</body>
</html>