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
    <div id="picture" style="height: 200px" class="d-flex justify-content-center overflow-hidden p-3"></div>
    <div style="height: 30px">
      <small id="duration" class="ps-2">0:00 / 0:00</small>
      <div style="height: 5px;background-color: rgb(245, 245, 245)">
        <div id="progress-bar" style="height: 100%;width: 0px;background-color: red"></div>
      </div>
    </div>
    
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
    </div>
    
  </section>
  <script src="./index.js" type="module"></script>
</body>
</html>