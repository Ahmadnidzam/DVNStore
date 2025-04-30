<?php
include "../include/session_cek.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVNStore.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/Asessmen2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../asset/image/logap.png" alt="logo" width="35" height="40">
                <h1>DVNStore</h1>
            </div>
            <input type="text" placeholder="Telusuri.......">
            <div class="ic">
                <a href ="unduhan.php" class="material-symbols-outlined icon">download</a>
                <a href= "logout.php"class="material-symbols-outlined icon">logout</a>
            </div>
        </nav>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="../asset/image/carousel1.png" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
              <img src="../asset/image/penggantii crs.png" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
              <img src="../asset/image/carousel3.png" class="d-block w-100" alt="Slide 3">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
   </div>
   <main>
    <a href="Dashboard.php" class="menu aktif">Home</a>
    <a href="Dashboard Game.php" class="menu">Game</a>
    <a href="Dashboard Apps.php" class="menu">Apps</a>
    <a href="dashboardfilm.php" class="menu">film</a>
   </main>
   <section class="scrkcl">
        <section class="header-card">
            <h2>TOP GAME</h2>
            <a href="Top GAME.php" class="material-symbols-outlined icon">chevron_right</a>
        </section>
        <section class="gird-scrkcl">
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/mobile legends game.png" alt="Mobile Legends">
                <section class="card-info">
                    <h4>Mobile Legends</h4>
                    <h5>Aksi</h5>
                    <section class="last-info">
                        <p>137 MB</p>
                        <p>&#9733 4,9</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/roblox game.png" alt="Roblox">
                <section class="card-info">
                    <h4>Roblox</h4>
                    <h5>Kasual</h5>
                    <section class="last-info">
                        <p>331 MB</p>
                        <p>&#9733 4,3</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/valorant game.png" alt="Valorant">
                <section class="card-info">
                    <h4>Valorant</h4>
                    <h5>Strategi</h5>
                    <section class="last-info">
                        <p>12 GB</p>
                        <p>&#9733 4,8</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/clash of clans game.png" alt="COC">
                <section class="card-info">
                    <h4>COC</h4>
                    <h5>Strategi</h5>
                    <section class="last-info">
                        <p>288 MB</p>
                        <p>&#9733 4,1</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/ball poll game.png" alt="Ball Poll">
                <section class="card-info">
                    <h4>Ball Poll </h4>
                    <h5></h5>
                    <section class="last-info">
                        <p>99 MB</p>
                        <p>&#9733 4,5</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/minecraft game.png " alt="Minecraft">
                <section class="card-info">
                    <h4>Minicraft</h4>
                    <h5>Arcade</h5>
                    <section class="last-info">
                        <p>63 MB</p>
                        <p>&#9733 4,2</p>
                    </section>
                </section>
            </a>
            <a href="labelgame.php" class="card-scrkcl">
                <img src="../asset/image/subway surf game.png" alt="Subway Surf">
                <section class="card-info">
                    <h4>Subway Surf</h4>
                    <h5>Aksi</h5>
                    <section class="last-info">
                        <p>148 MB</p>
                        <p>&#9733 4,4</p>
                    </section>
                </section>
            </a>
        </section>
    </section>
    <section class="balok">
        <section class="header-card">
            <h2>TOP APPS</h2>
            <a href="Top Apps.php" class="material-symbols-outlined icon">chevron_right</a>
        </section>
        <section class="gird-balok">
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/LOGO_TOP1_Binance_keuangan_4,9.png" alt="Binance">
                <section class="app-label">
                    <h4>Binance</h4>
                    <h5>Keuangan</h5>
                    <p>&#9733 4,9</p>
                </section>
                <p>120 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/logo_instagram.png" alt="Instagram">
                <section class="app-label">
                    <h4>Instagram</h4>
                    <h5>Sosial</h5>
                    <p>&#9733 4,7</p>
                </section>
                <p>180 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/fb.png" alt="facebook">
                <section class="app-label">
                    <h4>Facebook</h4>
                    <h5>Sosial</h5>
                    <p>&#9733 4,4</p>
                </section>
                <p>97 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/duolingo logo.png" alt="Duolingo">
                <section class="app-label">
                    <h4>Duolingo</h4>
                    <h5>Pembelajaran</h5>
                    <p>&#9733 4,6</p>
                </section>
                <p>80 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/spotify logo.png" alt="Spotify">
                <section class="app-label">
                    <h4>Spotify</h4>
                    <h5>Hiburan</h5>
                    <p>&#9733 4,7</p>
                </section>
                <p>210 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/coursera logo.png" alt="coursera ">
                <section class="app-label">
                    <h4>coursera</h4>
                    <h5>Pembelajaran</h5>
                    <p>&#9733 4,7</p>
                </section>
                <p>164 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/calm logo.png" alt="Calm">
                <section class="app-label">
                    <h4>Calm</h4>
                    <h5>kesehatan</h5>
                    <p>&#9733 4,3</p>
                </section>
                <p>70 MB</p>
            </a>
            <a href="labelapps.php" class="balok-card">
                <img src="../asset/image/splitwise logo.png" alt="Splitwise">
                <section class="app-label">
                    <h4>Splitwise</h4>
                    <h5>Keuangan</h5>
                    <p>&#9733 4,2</p>
                </section>
                <p>130 MB</p>
            </a>
        </section>
    </section>
    <section class="filmdashboard">
        <section class="header-card">
            <h2>TOP FILM</h2>
            <a href="Top Film.php" class="material-symbols-outlined icon">chevron_right</a>
        </section>
        <section class="gird-film">
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies3.png" alt="Avatar">
                <section class="card-info">
                    <h4>Avatar</h4>
                    <h5>Adventure, Fantasy</h5>
                    <section class="last-info">
                        <p>USD$ 3.79</p>
                        <p>&#9733 7,9</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies7.png" alt="Fury">
                <section class="card-info">
                    <h4>Fury</h4>
                    <h5>Action, War</h5>
                    <section class="last-info">
                        <p>USD$ 3.79</p>
                        <p>&#9733 7,6</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies12.png" alt="London Has Fallen">
                <section class="card-info">
                    <h4>London Has Fallen</h4>
                    <h5>Thriller, Action</h5>
                    <section class="last-info">
                        <p>USD$ 2.89</p>
                        <p>&#9733 8</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies14.png" alt="Titanic">
                <section class="card-info">
                    <h4>Titanic</h4>
                    <h5>Drama, Romance</h5>
                    <section class="last-info">
                        <p>USD$ 2.99</p>
                        <p>&#9733 7,9</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies16.png" alt="Dunkirk">
                <section class="card-info">
                    <h4>Dunkirk</h4>
                    <h5>History, War</h5>
                    <section class="last-info">
                        <p>USD$ 3.79</p>
                        <p>&#9733 7,8</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies17.png" alt="The Social Network">
                <section class="card-info">
                    <h4>The Social Network</h4>
                    <h5>Drama, Biography</h5>
                    <section class="last-info">
                        <p>USD$ 3.99</p>
                        <p>&#9733 7,8</p>
                    </section>
                </section>
            </a>
            <a href="labelfilm.php" class="card-film">
                <img src="../asset/image/Movies18.png" alt="War For The Planet Of The Apes">
                <section class="card-info">
                    <h4>War For The Planet Of The Apes</h4>
                    <h5>Drama, Adventure</h5>
                    <section class="last-info">
                        <p>USD$ 3.55</p>
                        <p>&#9733 7,4</p>
                    </section>
                </section>
            </a>
        </section>
    </section>
    <footer>
        <section class="footer-logo">
            <img src="../asset/image/logap.png" alt="logo" width="180" height="180" style="display: block;">
            <span class="copy">&copy;DVNStore 2024</span>
            <section class="i">
                <a class="fab fa-instagram"></a>
                <a class="fab fa-facebook-f"></a>
                <a class="fab fa-linkedin-in"></a>
                <a class="fab fa-x-twitter"></a>
            </section>
        </section>
        <ul class="footer">
            <p>Dashboard</p>
            <li><a href="Dashboard.php">Home</a></li>
            <li><a href="Dashboard Game.php">Game</a></li>
            <li><a href="Dashboard Apps.php">Apps</a></li>
            <li><a href="dashboardfilm.php">Film</a></li>
        </ul>
        <ul class="footer">
            <p>Top Kategori</p>
            <li><a href="Top Game.php">Top Game</a></li>
            <li><a href="Top Apps.php">Top Apps</a></li>
            <li><a href="Top Film.php">Top Film</a></li>
        </ul>
    </footer>
    <section class="fotbwh">
        <p>About Us</p>
        <p>Security Policy</p>
        <P>Bahasa Indonesia</P>
    </section>
    <section class="kondusif">
        <span class="copy-k">&copy;DVNStore 2024</span>
        <section class="o">
            <a class="fab fa-instagram"></a>
            <a class="fab fa-facebook-f"></a>
            <a class="fab fa-linkedin-in"></a>
            <a class="fab fa-x-twitter"></a>
        </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>