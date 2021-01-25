<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FontAwesome -->
      <link href="fontawesome/css/all.css" rel="stylesheet">

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Biblioteca | Dashboard</title>

  </head>

  <body id="dashboard" class="bg-light">

    <?php
      include('valida_login.php');
      if($_SESSION['login'] != true){
          header('Location: index.php');
      }

      if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
      }
      // Dif_Livros
      $sql = "SELECT count(*) as t FROM livros";
      $sql = $conexao->query($sql);
      $sql = $sql->fetch();
      $dif_livros = $sql['t'];

      // Total de Livros
      $sql = "SELECT SUM(quant) AS total FROM livros";
      $sql = $conexao->query($sql);
      $sql = $sql->fetchColumn();
      $total_livros = $sql;

      // Qtd Leitores
       $sql = "SELECT count(*) as t FROM leitores";
      $sql = $conexao->query($sql);
      $sql = $sql->fetch();
      $qtd_leitores = $sql['t'];

    
    ?>

    <header> <!-- Inicio do Header -->
    
    <?php include ('header.php') ?>

    </header> <!-- Fim do Header -->

      <!-- Menu Lateral -->
    <?php
      include ('menu.html');
      ?>

    <div class="c-body">
      <main class="c-main">
      <!-- Inicio do Main -->

        <div class="container">
          <!-- Inicio dos Cards -->
          <div class="row mt-5">
          <!-- CARD 1 -->
          <div class="col-sm-6 col-lg-4 mb-2">
            <div class="card" style="max-width: 20rem;">

              <!-- Card Header -->
              <div class="card-header bg-primary content-center">
                <!-- <i class="text-white fas fa-book fa-2x"></i> -->
              </div>

              <!-- Card Body -->
              <div class="card-body row text-center">

                <div class="col">
                  <div id="livros-cadastrados" class="text-value-xl"><?= $dif_livros ?></div>
                  <div class="text-uppercase text-muted small">Livros Diferentes</div>
                </div>

                <div class="col">
                  <div id="qtd-atribuidos" class="text-value-xl"><?= $total_livros ?></div>
                  <div class="text-uppercase text-muted small">Total de Livros</div>
                </div>

              </div>
            </div>
          </div>

          <!-- CARD 2 -->
          <div class="col-sm-6 col-lg-4 mb-2">
            <div class="card" style="max-width: 20rem;">

              <!-- Card Header -->
              <div class="card-header bg-success content-center">
                <!-- <i class="text-white fas fa-book fa-2x"></i> -->
              </div>

              <!-- Card Body -->
              <div class="card-body row text-center">

                <div class="col">
                  <div id="qtd-leitores" class="text-value-xl">-</div>
                  <div class="text-uppercase text-muted small">Retirados</div>
                </div>

                <div class="col">
                  <div id="livros-retirados" class="text-value-xl"><?= $qtd_leitores ?></div>
                  <div class="text-uppercase text-muted small">Leitores</div>
                </div>

              </div>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="col-sm-6 col-lg-4 mb-2">
            <div class="card" style="max-width: 20rem;">

              <!-- Card Header -->
              <div class="card-header bg-warning content-center">
                <!-- <i class="text-white fas fa-book fa-2x"></i> -->
              </div>

              <!-- Card Body -->
              <div class="card-body row text-center">

                <div class="col">
                  <div id="vencem-hj" class="text-value-xl">-</div>
                  <div class="text-uppercase text-muted small">vencem hoje</div>
                </div>

                <div class="col">
                  <div id="vencidos" class="text-value-xl">-</div>
                  <div class="text-uppercase text-muted small">vencidos</div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </main> <!-- Fim do Main -->

    <footer> <!-- Inicio do Footer -->
      


    </footer> <!-- Fim do Footer -->




    <!-- JavaScript Custum -->
   
    
  </body>
</html>