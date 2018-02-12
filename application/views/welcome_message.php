<h1>Create your BentoBox!</h1>
<div class="container text-center">
  <div class="row">
    <div class="col">
      <h2>BentoBox</h2>
      <div class="row">
        <div class="col-8 acc">
          <h3>Main</h3>
          <div id="mainItem" class="item">
            <img id="mainPicture" src="" alt="">
            <h4 id="mainCaption"></h4>
          </div>
        </div>
        <div class="col-4 acc">
          <h3>Side</h3>
          <div id="sideItem" class="item"></div>
          <img id="sidePicture" src="" alt="">
          <h4 id="sideCaption"></h4>
        </div>
      </div>
      <div class="row">
        <div class="col acc">
          <h3>Sushi</h3>
          <div id="sushiItem" class="item"></div>
          <img id="sushiPicture" src="" alt="">
          <h4 id="sushiCaption"></h4>
        </div>
        <div class="col acc">
          <h3>Salad</h3>
          <div id="saladItem" class="item"></div>
          <img id="saladPicture" src="" alt="">
          <h4 id="saladCaption"></h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="row">
        <div class="col section">
          <h2>Menu</h2>
          <div class="row">
            <div class="col">
              <h3>Main</h3>
            </div>
            <div class="col">
              <div class="btn-group dropright">
                <button id="mainButton" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose a Main
                </button>
                <div id="mainDropdown" class="dropdown-menu">
                  <button id="chickenTeriyaki" class="dropdown-item" type="button">Chicken Teriyaki</button>
                  <button id="omuRice" class="dropdown-item" type="button">Omu Rice</button>
                  <button id="grilledMackarel" class="dropdown-item" type="button">Grilled Mackerel</button>
                  <button id="udon" class="dropdown-item" type="button">Udon</button>
                  <button id="unagi" class="dropdown-item" type="button">Unagi</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Side</h3>
            </div>
            <div class="col">
              <div class="btn-group dropright">
                <button id="sideButton" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose a Side
                </button>
                <div id="sideDropdown" class="dropdown-menu">
                  <button id="yamTempura" class="dropdown-item" type="button">Yam Tempura</button>
                  <button id="agedashiTofu" class="dropdown-item" type="button">Agedashi Tofu</button>
                  <button id="shripTempura" class="dropdown-item" type="button">Shrimp Tempura</button>
                  <button id="misoSoup" class="dropdown-item" type="button">Miso Soup</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Sushi Roll</h3>
            </div>
            <div class="col">
              <div class="btn-group dropright">
                <button id="sushiButton" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose a Sushi Roll
                </button>
                <div id="sushiDropdown" class="dropdown-menu">
                  <button id="salmonRoll" class="dropdown-item" type="button">Salmon Roll</button>
                  <button id="tunaRoll" class="dropdown-item" type="button">Tuna Roll</button>
                  <button id="shripNigiri" class="dropdown-item" type="button">Shrimp Nigiri</button>
                  <button id="salmonSashimi" class="dropdown-item" type="button">Salmon Sashimi</button>
                  <button id="tunaSashimi" class="dropdown-item" type="button">Tuna Sashimi</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h3>Salad</h3>
            </div>
            <div class="col">
              <div class="btn-group dropright">
                <button id="saladButton" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose a Salad
                </button>
                <div id="saladDropdown" class="dropdown-menu">
                  <button id="ebiSunomono" class="dropdown-item" type="button">Ebi Sunomono</button>
                  <button id="goma-ae" class="dropdown-item" type="button">Goma-ae</button>
                  <button id="potatoSalad" class="dropdown-item" type="button">Potato Salad</button>
                  <button id="japaneseSalad" class="dropdown-item" type="button">Japanese Salad</button>
                  <button id="japaneseSalad" class="dropdown-item" type="button">Seaweed Salad</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col section">
          <h2>Statistics</h2>

          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Attributes</th>
                <th scope="col">Main</th>
                <th scope="col">Side</th>
                <th scope="col">Sushi</th>
                <th scope="col">Salad</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Weight (g)</th>
                <td id="mainWeight">Mark</td>
                <td id="sideWeight">Otto</td>
                <td id="sushiWeight">@mdo</td>
                <td id="saladWeight">@mdo</td>
              </tr>
              <tr>
                <th scope="row">Calories</th>
                <td id="mainCalories">Jacob</td>
                <td id="sideCalories">Thornton</td>
                <td id="sushiCalories">@fat</td>
                <td id="saladCalories">@mdo</td>
              </tr>
              <tr>
                <th scope="row">Presentation</th>
                <td id="mainPresentation">Larry</td>
                <td id="sidePresentation">the Bird</td>
                <td id="sushiPresentation">@twitter</td>
                <td id="saladPresentation">@mdo</td>
              </tr>
              <tr>
                <th scope="row">Price ($)</th>
                <td id="mainPrice">Larry</td>
                <td id="sidePrice">the Bird</td>
                <td id="sushiPrice">@twitter</td>
                <td id="mainPrice">@mdo</td>
              </tr>
            </tbody>
          </table>
          <h4>Total ($): </h4>
        </div>
      </div>
    </div>
  </div>
</div>
