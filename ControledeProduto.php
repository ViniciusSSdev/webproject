<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="_css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="_css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="_css/style.css" />
    <title>Admin Control</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >ADMIN HOME</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-house-door-fill"></i></span>
                <span>Início</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Páginas
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Home</span>
              </a>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Controle de Vendas</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img
              src="https://casaevideodigital.vtexassets.com/arquivos/ids/227943-800-450?v=637505712884130000&width=800&height=450&aspect=true"
              class="card-img-top"
              alt="Hollywood Sign on The Hill"
            />
            <div class="card-body">
              <h5 class="card-title">Xbox one Serie S</h5>
              <p class="card-text">
                Produto Disponível
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://cinebuzz.uol.com.br/media/_versions/oo_3f4UqiX_widelg.jpg"
              class="card-img-top"
              alt="Palm Springs Road"
            />
            <div class="card-body">
              <h5 class="card-title">PC Gamer</h5>
              <p class="card-text">
                Chega pra loja
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://casaevideodigital.vtexassets.com/arquivos/ids/273449-800-450?v=637574977926730000&width=800&height=450&aspect=true"
              class="card-img-top"
              alt="Los Angeles Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">Nitendo</h5>
              <p class="card-text">
                Disponivel tbm
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img
              src="https://noticias.maisesports.com.br/wp-content/uploads/2020/06/PlayStation-5-PS5-800x450.png"
              class="card-img-top"
              alt="Skyscrapers"
            />
            <div class="card-body">
              <h5 class="card-title">PS5</h5>
              <p class="card-text">
                Adivinha? 
                Tá disponível 
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
