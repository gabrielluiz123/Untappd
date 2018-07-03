
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
        <label>{{$nome}}</label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;       
        <button class="btn btn-default"><a href="{{url('auth/logout')}}">Sair</a></button><br>
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
              <li class="active"><a href="{{url('feed')}}">Feed</a></li>
              <li><a href="{{url('inicio')}}">Perfil</a></li>
              <li><a href="{{url('check')}}">Check-in</a></li>
              <li><a href="{{url('badges')}}">Badges</a></li>
              <li><a href="{{url('solicitations')}}">
                  <img src="img/add.png" id="add">
                  <span class="badge">{{$numero}}</span>
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
          <div class="col-md-12">
            <div class="panel panel-default post">
              <div class="panel-body">
                <div class="preview col-md-3">                  
                </div>
                <div class="preview col-md-6">
                  <h2 align="center">CADASTRO DE CERVEJARIA</h2>
                  <br>
                  <form method="POST" action="{{url('store_bar')}}">
                  <div class="preview col-md-12">
                    <label for="Nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" required name="nome">
                  </div>
                  <!-- SUB DIV -->
                  <div class="preview col-md-6">
                    <label for="Nome">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" required name="tipo">
                    <label for="Nome">Estado:</label>
                     <input type="text" class="form-control" id="estado" required name="estado">

                  </div>
                  <div class="preview col-md-6">
                    <label for="Nome">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" required name="cidade">
                    <label for="Nome">País:</label>
                     <input type="text" class="form-control" id="pais" required name="pais">
                  </div>
                  <!-- FIM SUB DIV -->
                  <!-- SUB DIV -->
                  <div class="preview col-md-12">
                    <div align="center" class="action">
                      <br>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button class="btn btn-primary" type="submit">Cadastrar</button>
                    </div>
                    <br>
                  </div>
                  <!-- FIM SUB DIV -->   
                  </form>    
                </div>
                <div class="details col-md-3">
                </div>
              </div>
            </div>
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
