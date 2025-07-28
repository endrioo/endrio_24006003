<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mengimplementasikan Library (Bootstrap dan Font Owesome)</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fontawesome5beta/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <a href="index.php" class="navbar-brand">
        <img src="assets/gambar/logo.png" alt="logo" , style="width: 100px" />
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavbar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-book"></i> Pemograman
            </a>
          </li>
          <li class="nav-item">
            <a href="database.php" class="nav-link">
              <i class="fas fa-calendar"></i> Database
            </a>
          </li>
          <li class="nav-item">
            <a href="framework.php" class="nav-link active">
              <i class="fas fa-cog"></i> Framework
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-envelope-open"></i> Lainnya
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1>Belajar Framework itu Mudah</h1>
      <p>
        Tingkatkan Skill Framework Kamu belajar tutorial Framework gratis!
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="thumbnail">
            <a href="artikel.html">
              <img
                src="assets/gambar/bootstrap_framework.png"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>Bootstrap</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book
              </p>
              <p>
                <a
                  href="artikel.html"
                  class="btn btn-light btn-block"
                  role="button"
                >
                  Selengkapnya
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <a href="artikel.html">
              <img
                src="assets/gambar/jquery_framework.png"
                alt="Programming"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>
                <a
                  href="artikel.html"
                  style="text-decoration: none; color: black"
                  >Jquery</a
                >
              </h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book
              </p>
              <p>
                <a
                  href="artikel.html"
                  class="btn btn-light btn-block"
                  role="button"
                >
                  Selengkapnya
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <a href="artikel.html">
              <img
                src="assets/gambar/tailwind_framework.png"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>Tailwind</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book
              </p>
              <p>
                <a
                  href="artikel.html"
                  class="btn btn-light btn-block"
                  role="button"
                >
                  Selengkapnya
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="thumbnail">
            <a href="artikel.html">
              <img
                src="assets/gambar/react_framework.png"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>React</h3>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy
                text ever since the 1500s, when an unknown printer took a galley
                of type and scrambled it to make a type specimen book
              </p>
              <p>
                <a
                  href="artikel.html"
                  class="btn btn-light btn-block"
                  role="button"
                >
                  Selengkapnya
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom: 0">
      <p>CopyRight 2021 Programming Web</p>
    </div>
  </body>
</html>
