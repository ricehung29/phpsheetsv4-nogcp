<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Example - phpsheetsv4-nogcp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="features.css" rel="stylesheet">
  </head>
  <body>
    
  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Example - phpsheetsv4-nogcp</h2>
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      
    <?php 
    include 'phpsheetsv4-nogcp.php';
    $lines = getSheets('https://docs.google.com/spreadsheets/d/e/2PACX-1vQHu7XTUWUzYh-FlhVYw_k6HwAE7XqVWAcqMQ1mj32kKPtHzGkXNRsYONh84l556vJu3gYoBCF_wDhT/pub?gid=0&single=true&output=csv');
    
    foreach ($lines as $line){
      echo '
      
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('.$line[3].');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">'.$line[0].'</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="d-flex align-items-center me-3">
                <small>'.$line[2].'</small>
              </li>
              <li class="d-flex align-items-center">
                <small>'.$line[1].'</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    
      ';
    }


      ?>
  </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="mb-1">&copy; 2022 ricehung29 </p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>
</html>
