<?php 

require "../_scripts/Produto.class.php";
require "../_scripts/config.php";

$e = new Produto();
$busca = $e->estoque();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../_css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../_css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../_css/style.css" />
    <title>Cadastrar Produtos</title>
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
          >Cadastrar novo produto</a
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
              <a href="../Vendedorview.php" class="nav-link px-3 active">
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
              <a href="../adminview.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Consulta de Vendas</span>
              </a>
              <a href="editarProduto.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Editar Produto</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 mb-3">
            <div class="mb-3">
            <h1> Cadastrar Produto</h1>
          </div>
            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nome do Produto</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ex: Celular">
              </div>
              <label for="exampleFormControlInput1">Valor do Produto</label>
              <div class="input-group">
                <input type="number" class="form-control" aria-label="Valor do Produto">
                <span class="input-group-text">R$</span>
              </div>
              <label for="exampleFormControlInput1">Quantidade em Estoque</label>
              <div class="input-group">
                <input type="number" class="form-control" aria-label="Quantidade em Estoque">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição do Produto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </form>
            <div class="mt-2 d-md-flex justify-content-md-end">
              <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
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


