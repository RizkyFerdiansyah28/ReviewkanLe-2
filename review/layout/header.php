<?php 

include 'config/app.php';


$data_review = select("SELECT * FROM review_film");



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <ul
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
          >
            <li>
              <a href="index.php" class="nav-link px-2 text-secondary"
                ><img
                  src="./foto/RAY_Logo_2021.webp"
                  width="50"
                  alt=""
                  srcset=""
              /></a>
            </li>
            <li>
              <a href="home.php" class="nav-link px-2 text-secondary">Home</a>
            </li>
            <li><a href="#" class="nav-link px-2 text-white">Bookmark</a></li>
            <li>
              <a href="filmbaru.html" class="nav-link px-2 text-white"
                >Film Terbaru</a
              >
            </li>
            <li><a href="daftar-review.php" class="nav-link px-2 text-white">Daftar Review</a></li>
          </ul>

          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control form-control-dark text-bg-dark"
              placeholder="Search..."
              aria-label="Search"
            />
          </form>

          <div class="text-end">
            <a href="login.html" class="btn btn-dark my-2">Login</a>
            <a href="signup.html" class="btn btn-primary my-2">Sign Up </a>
          </div>
        </div>
      </div>
    </header>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
  </html>