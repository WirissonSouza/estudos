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

    <title>Biblioteca | Cadastrar Livro</title>

  </head>

  <body id="dashboard" class="bg-light">

    <?php
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

    <div class=c-body">
    <main class="c-main"> <!-- Inicio do Main -->

    <div class="container"> <!-- Inicio dos Cards -->
    <div class="row mt-5">
    <!-- CARD 1 -->
      <div class="col-sm-12 col-lg-12 mb-2">
        <div class="card">

          <div class="card-header bg-primary content-center text-white">Cadastrar Leitor
          </div>

          <div class="card-body row">
            <div class="col">
              
              <form method="POST" action="valida_leitor.php">
                
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

                   <div class="form-group col-md-6">
                    <label class="form-text" for="data">Data do Cadastro</label>
                    <input id="data"  class="form-control" type="text" name="data" disabled="true">
                  </div>

                  
              
                  <div class="form-group col-md-1">
                    <label class="form-text">&nbsp;</label>
                    <button type="button" class="form-control btn btn-danger" data-toggle="tooltip" data-placement="top" title="Voltar" onclick="window.location.href='dashboard.php'"><i class="fas fa-angle-left"></i></button>
                  </div>

                  <div class="form-group col-md-1">
                    <label class="form-text">&nbsp;</label>
                    <button type="submit" class="form-control btn btn-primary" data-toggle="tooltip" data-placement="top" title="Salvar"><i class="far fa-save"></i></button>
                  </div>

                </div>
              </form>

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

    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
      <script type="text/javascript">
        document.getElementById('modalTitle').innerHTML = 'Leitor novo cadastrado, dê boas-vindas!'
        document.getElementById('modalContent').innerHTML = 'Um novo leitor foi cadastrado na biblioteca!'
        document.getElementById('modalTitle').classList.remove('text-danger')
        document.getElementById('modalTitle').classList.add('text-success')
      $('#modalAlert').modal('show')
      </script>

     <?php } ?>

     <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 2) { ?>
      <script type="text/javascript">
        // Modal de Erro
        document.getElementById('modalTitle').innerHTML = 'Ops, parece que existem campos vazios!'
        document.getElementById('modalContent').innerHTML = 'Encontrei alguns campos vazios, é preciso que você volte e termine de preenche-los.'
        document.getElementById('modalTitle').classList.remove('text-success')
        document.getElementById('modalTitle').classList.add('text-danger')
    $('#modalAlert').modal('show')
      $('#modalAlert').modal('show')
      </script>

     <?php } ?>

    <script type="text/javascript">clock()</script>
    

  </body>