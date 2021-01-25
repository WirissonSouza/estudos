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

    <title>Biblioteca | Consultar Leitores</title>

  </head>

  <body id="dashboard" class="bg-light">
    <?php
    require_once ('conexao.php');

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
      <div class="col-sm-12 col-lg-12 mb-2"  >
        <div class="card">

          <div class="card-header bg-primary content-center text-white">Consultar Leitor
          </div>

          <div class="card-body row">
            <div class="col">
              
              <form>
                
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="form-text" for="nome">Nome</label>
                    <input id="nome" class="form-control" type="text" name="nome" placeholder="Ex: George">
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-text" for="sobrenome">Sobrenome</label>
                    <input id="sobrenome" class="form-control" type="text" name="sobrenome" placeholder="Ex: Martin">
                  </div>

                  <div class="form-group col-md-4">
                    <label class="form-text" for="celular">Celular</label>
                    <input id="celular" class="form-control" type="text" name="celular" placeholder="Ex: (14) 99999-9999">
                  </div>                  
              
                  <div class="form-group col-md-1 ml-auto">
                    <label class="form-text">&nbsp;</label>
                    <button type="button" class="form-control btn btn-danger" data-toggle="tooltip" data-placement="top" title="Voltar" onclick="window.location.href='dashboard.php'"><i class="fas fa-angle-left"></i></button>
                  </div>

                  <div class="form-group col-md-1">
                    <label class="form-text">&nbsp;</label>
                    <button type="button" class="form-control btn btn-primary" onclick="" data-toggle="tooltip" data-placement="top" title="Salvar"><i class="far fa-save"></i></button>
                  </div>

                </div>
              </form>

              <!-- ---------------------------------------------------- Tabela da consulta -------------------------------------------------- -->

              <div class="table-responsive mt-3">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Sobrenome</th>
                      <th scope="col">Celular</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php
                    $consulta = $conexao->query("SELECT id, nome, sobrenome, celular FROM leitores");
                    $consulta = $consulta->fetchAll(PDO::FETCH_OBJ); 

                    $id = 1;

                    foreach($consulta as $indice => $leitor) {?>

                      <tr>
                        <td><?= $id ?></td>
                        <td><?= $leitor->nome ?></td>
                        <td><?= $leitor->sobrenome ?></td>
                        <td><?= $leitor->celular ?></td>
                      </tr>

                 <?php $id++; } ?>

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