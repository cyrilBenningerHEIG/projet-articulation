<template>

  <div class="container">
    <div class="row mt-5 justify-content-center">
      <div class="filters mx-auto">
        <div class="btn-group" role="group">
          <button
            id="type-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Type</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="pays-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Pays</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="regions-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Régions</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="pays-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Appellation</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="millesime-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Millésime</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="producteur-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Producteur</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="btn-group" role="group">
          <button
            id="format-btn"
            type="button"
            class="btn btn-white dropdown-toggle btn-filter"
            data-toggle="dropdown"
            aria-haspopup="false"
            aria-expanded="true"
          >Format</button>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="#">Dropdown link</a>
          </div>
        </div>
        <div class="container">
          <div id="tri-produit" class="row">
            <div class="col-sm">
              <a class="icon_display" id="icon_display2" href="#">
                <img src="/public/images/display2.svg">
              </a>
              <a class="icon_display" id="icon_display3" href="#">
                <img src="/public/images/display3.svg">
              </a>
              <a class="icon_display" id="icon_display4" href="#">
                <img src="/public/images/display4.svg">
              </a>
            </div>
            <div class="col-sm">
              <p class="number_results">X résultats</p>
            </div>
            <div class="col-sm">
              <div class="btn-group" role="group">
                <button
                  id="tri-btn"
                  type="button"
                  class="btn btn-white dropdown-toggle btn-filter"
                  data-toggle="dropdown"
                  aria-haspopup="false"
                  aria-expanded="true"
                >Tri</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item">Nom A-Z</a>

                  <a class="dropdown-item">Nom Z-A</a>
                  <a class="dropdown-item">Prix croissant</a>
                  <a class="dropdown-item">Prix décroissant</a>
                  <a class="dropdown-item">Age croissant</a>
                  <a class="dropdown-item">Age décroissant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
