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
    <title>Editar Produto</title>
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
          >Editar produto</a
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
              <a href="cadastroProduto.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Adicionar Produto</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Tabela
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Quantidade</th>
                        <th>Data de inclusão</th>
                        <th>Atualizar Quantidade</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($busca as $indice => $value){ ?>
                      <tr>
                        <td><?php echo $busca[$indice]['id_produto'];?></td>
                        <td><?php echo $busca[$indice]['nome_produto'];?></td>
                        <td><?php echo $busca[$indice]['valor_produto'];?></td>
                        <td><?php echo $busca[$indice]['quantidade_produto'];?></td>
                        <td><?php echo $busca[$indice]['data'];?></td>
                        <td>
                        <div class="form-outline">
                        <input type="number" id="typeNumber" class="form-control" />
                        <label class="form-label" for="typeNumber"></label>
                        </div>
                        </td>
                        <td><button type="button" class="btn btn-danger">Deletar</button></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <div class="d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-success btn-lg">Atualizar</button>
                  </div>
                </div>
              </div>
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

