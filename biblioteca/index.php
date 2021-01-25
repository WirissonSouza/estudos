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

    <title>Biblioteca | Painel</title>

  </head>

  <body class="bg-gradient">
    <header> <!-- Inicio do Header -->
      


    </header> <!-- Fim do Header -->

    <main> <!-- Inicio do Main -->
        
      <div class="container">

        <div class="row justify-content-center d-flex align-items-center" style="height: 100vh;">

          <!-- Coluna 1 -->  
          <div id="svg" class="col-1 col-lg-6 d-flex justify-content-center">
            <img class="d-none d-lg-block" src="img/book-lover.svg" width="320">
          </div>
              
          <!-- Coluna 2 -->
          <div id="login-1" class="col-10 col-lg-4 bg-light">

            <div id="cumprimento1" class="row mt-5 ml-4">
              <h4>Olá!<br><strong id="cumprimento"></strong></h4>
            </div>

            <div id="cumprimento2" class="row mt-2 ml-4">
               <h5>Acesse sua conta</h5>
            </div>
           
          <!-- Formulário -->
          <div id="row-form" class="row d-flex justify-content-center mt-2">
            <form id="form-login" class="form-group mt-4" method="POST" action="valida_login.php">
              <!-- Email -->
              <div class="input-container">
                <input class="form-control mb-2 input" id="email" type="text" name="user" pattern=".+" required >
                <label name="email" class="label" for="email">Email</label>
              </div>
              <!-- Senha -->
              <div class="input-container mt-4">
                
                <input class="form-control mb-1 input" id="password" type="password" name="password" pattern=".+" required >
                <label name="senha" class="form-label text-dark label" for="password">Senha</label>
              </div>

              <!-- Botão Acessar -->
              <div class="input-container">

                 <a class="text-dark form-group text-left recover" data-toggle="modal" data-target="#modalAlert" href="">Esqueci minha senha</a>

              <div class="text-right">
               <button id="btn-acessar" class="btn btn-primary form-control mt-2" type="submit" style="width: 60px;"><i class="fas fa-sign-in-alt"></i></button>
              </div>
             </div>
              <!-- Fim do Form -->
              <span class="clearfix"></span>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="modalAlertWindow" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title text-primary" id="modalTitle">Recuperar Senha</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>

              <div class="modal-body" id="modalContent">
                
                <form class="form-group">

                  <input type="email" class="form-control" name="email-recover" id="email-recover" required="required" placeholder="Digite o seu e-mail">
                  <br>
                  <small id="emailHelpBlock" class="form-text text-muted">
                    Enviaremos  um código de recuperação para seu e-mail cadastrado, verifique também a caixa de SPAM.
                  </small>

                </form>

              </div>

              <div class="modal-footer">
                <form method="POST" action="valida_email.php">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="submit" class="btn btn-primary" value="submit">Enviar</button>
              </div>

            </div>
          </div>
        </div>
      </div>

    </main> <!-- Fim do Main -->

    <footer> <!-- Inicio do Footer -->
      


    </footer> <!-- Fim do Footer -->

    <script src="js/js.js"></script>
    <script type="text/javascript">cumprimento()</script>
    </body>
  </html>