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

    <title>Biblioteca | Consultar Livro</title>

  </head>

  <body id="dashboard" class="bg-light">

    <?php
    require_once ('conexao.php');
    require_once ('pesquisa_livros.php');

    session_start();
    if($_SESSION['login'] != true){
        header('Location: index.php');
    }
    ?>
    
    <header> <!-- Inicio do Header -->
    
    <?php include ('header.php') ?>

    </header> <!-- Fim do Header -->

      <!-- Menu Lateral -->
    <?php
      include ('menu.html');
      ?>

    <div class="c-body">
    <main class="c-main"> <!-- Inicio do Main -->

    <div class="container"> <!-- Inicio dos Cards -->
    <div class="row mt-5">
    <!-- CARD 1 -->
      <div class="col-sm-12 col-lg-12 mb-2">
        <div class="card">

          <div class="card-header bg-primary content-center text-white">Consultar Livro
          </div>

          <div class="card-body row">
            <div class="col">
              
              <form method="POST" action="pesquisa_livros.php">
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="form-text" for="nome-livro">Nome do Livro</label>
                    <input id="nome-livro" class="form-control" type="text" name="nome-livro" placeholder="Ex: A Fúria Dos Reis - As Crônicas De Gelo E Fogo, Volume 2">
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-text" for="autor-livro">Autor</label>
                    <input id="autor-livro" class="form-control" type="text" name="autor-livro" placeholder="Ex: Martin, George R. R." >
                  </div>

                  <div class="form-group col-md-2">
                    <label class="form-text" for="ano-livro">Ano do Livro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input id="ano-livro" class="form-control" type="number" name="ano-livro" placeholder="Ex: 2019">
                  </div>

              
                  <div class="form-group col-md-1 ml-auto">
                    <button type="button" class="form-control btn btn-danger" data-toggle="tooltip" data-placement="top" title="Voltar" onclick="window.location.href='dashboard.php'"><i class="fas fa-angle-left"></i></button>
                  </div>

                  <div class="form-group col-md-1">
                    <button type="button" class="form-control btn btn-primary text-white" data-toggle="tooltip" data-placement="top" title="Limpar Filtros" onclick="window.location.href='consultar.php'"><i class="fas fa-times"></i></button>
                  </div>

                  <div class="form-group col-md-2">
                    <button type="submit" class="form-control btn btn-primary" data-toggle="tooltip" data-placement="top" title="Pesquisar"><i class="fas fa-search"></i></button>
                  </div>

                </div>
              </form>

              <!-- ---------------------------------------------------- Tabela da consulta -------------------------------------------------- -->

              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Autor</th>
                      <th scope="col">Ano</th>
                      <th scope="col">Livros</th>
                      <th scope="col">Paginas</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $consulta = $conexao->query("SELECT id, nome, autor, ano, quant, paginas FROM livros");
                    $consulta = $consulta->fetchAll(PDO::FETCH_OBJ); 

                    $id = 1;

                    if(isset($_GET['pesquisa']) && $_GET['pesquisa'] == 1){

                      echo (pesquisaLivro());

                    foreach($consulta as $indice => $livro) {?>

                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $livro->nome ?></td>
                        <td><?= $livro->autor ?></td>
                        <td><?= $livro->ano ?></td>
                        <td><?= $livro->quant ?></td>
                        <td><?= $livro->paginas ?></td>
                      </tr>

                 <?php $id++; }
                 }
                 else{
                  foreach($consulta as $indice => $livro) {?>

                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $livro->nome ?></td>
                        <td><?= $livro->autor ?></td>
                        <td><?= $livro->ano ?></td>
                        <td><?= $livro->quant ?></td>
                        <td><?= $livro->paginas ?></td>
                      </tr>
                    <?php $id++; }
                    }
                     ?>
                    
                    
                      

                  </tbody>

                </table>

              </div>

            </div>

          </div>
        </div>
      </div>



     
          </div>
        </div>
      </div>
    </div> <!-- Fim do Container Cards -->

    </div>



      <!-- MODAL -->
      <div id="modal" class="container">
        <!-- Modal -->
        <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="modalAlertWindow" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body" id="modalContent">
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-check"></i></button>
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