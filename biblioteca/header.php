<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-border">
        <!-- Logo -->
        <a class="navbar-brand ml-4" href="#">BiblioTec</a>
        
        <div style="position: absolute; right: 50px;">
              <span id="cumprimento" style="font-size: 0.9em;"></span>
              <span style="font-size: 0.9em;">, <?= $_SESSION['name']; ?>&nbsp; | </span>
              <h6 class="mt-2 ml-2" style="display: inline;"><a href="?sair" class="btn btn-sm btn-outline-primary">Sair</a></h6>
          </div>
      </nav>

       <script src="js/js.js"></script>
    <script type="text/javascript">cumprimento()</script>

    <?php 
    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
      }
      ?>
