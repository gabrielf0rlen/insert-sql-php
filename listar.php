<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <link rel="shortcut icon" href="icone.png">
        <title>Principal</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type="text/css" href='css.css'>
        <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css'>
        <script src='main.js'></script>
    </head>
    <body style="background-color:#686868;">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #181818;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">WEB Agendamentos</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="inserir.php">Inserir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="listar.php">Listar</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <section>
            <br /><center><font face = "Calibri" size = "8" color = "LightGrey"><b>Listagem</b><br><br><font size = "4">
            <?php
                include_once 'agendamento.php';
                $p = new agendamento();
                $pro_bd=$p->listar();
            ?>
            <b>ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Telefone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Data de Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Urgencia<br />
            <?php
                foreach($pro_bd as $pro_mostrar)
                {
                    ?>
                    <br>
                    <b> <?php echo $pro_mostrar[0]; ?>  	&nbsp;&nbsp;
                        <?php echo $pro_mostrar[1]; ?> 	    &nbsp;&nbsp;
                        <?php echo $pro_mostrar[2]; ?> 		&nbsp;&nbsp;
                        <?php echo $pro_mostrar[3]; ?>  	&nbsp;&nbsp;
                        <?php echo $pro_mostrar[4]; ?> 	    &nbsp;&nbsp;
                        <?php echo $pro_mostrar[5]; ?> 		</b>
                    <?php
                }
            ?>
            <br /><br /><a href="index.html"><button type="button" class="btn btn-light">Voltar</button></a>
            
        </section>
    </body>
</html>