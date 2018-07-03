
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
  </head>

  <body>

  <header>
    <div class="container">
      <img src="img/logo.png" class="logo" alt="">
      <form class="form-inline">
        <label>Usuário</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;       
        <button type="submit" class="btn btn-default">Sair</button><br>
      </form>
    </div>
  </header>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <div class="col-md-6">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html">Feed</a></li>
              <li><a href="members.html">Perfil</a></li>
              <li><a href="contact.html">Check-in</a></li>
              <li><a href="groups.html">Badges</a></li>
              <li><a href="groups.html">
                  <img src="img/add.png" id="add">
                  <span class="badge">4</span>
                  </a>
                  </li>
            </ul>
          </div>
          <!-- Pesquisa -->
          <div class="col-md-2">
            
          </div>
          <div class="col-md-4">
            <ul class="nav navbar-nav">
              <li><a><input type="text" class="form-control" placeholder="Pesquisa"></a></li>
              <li><a><button class="btn btn-default" type="button"><img src="img/lupa.png"></button></a></li>
            </ul>            
          </div>
          
          <!--FIM PESQUISA -->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="members">
              <h1 class="page-header">Amigos</h1>
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/user.png" class="img-thumbnail" alt="">
                  <div class="text-center">
                    SomeUser01
                  </div>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> Perfil</a></p>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-danger btn-block"><i class="fa fa-close"></i> Desfazer Amizade</a></p>
                </div>
                <div class="col-md-3">
                  
                </div>
              </div>
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/user.png" class="img-thumbnail" alt="">
                  <div class="text-center">
                    SomeUser01
                  </div>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-primary btn-block"><i class="fa fa-edit"></i> Perfil</a></p>
                </div>
                <div class="col-md-3">
                  <p><a href="#" class="btn btn-danger btn-block"><i class="fa fa-close"></i> Recusar</a></p>
                </div>
                <div class="col-md-3">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>Dobble Copyright &copy, 2015</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
