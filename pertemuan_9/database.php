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
            <a href="database.php" class="nav-link active">
              <i class="fas fa-calendar"></i> Database
            </a>
          </li>
          <li class="nav-item">
            <a href="framework.php" class="nav-link">
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
      <h1>Belajar Database itu Mudah</h1>
      <p>
        Tingkatkan Skill Database Kamu belajar tutorial Database gratis!
      </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="thumbnail">
            <a href="artikel.html">
              <img
                src="assets/gambar/cloud_database.jpeg"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>Cloud Database</h3>
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
                src="assets/gambar/sql_database.png"
                alt="Programming"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>
                <a
                  href="artikel.html"
                  style="text-decoration: none; color: black"
                  >Sql Database</a
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
                src="assets/gambar/nosql_database.png"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>No Sql Database</h3>
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
                src="assets/gambar/postgre_database.png"
                alt="Html & css"
                width="100%"
              />
            </a>
            <div class="caption">
              <h3>PostgreSql Database</h3>
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
