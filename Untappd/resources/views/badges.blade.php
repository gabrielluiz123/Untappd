
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
         <form method="POST" action="{{url('search')}}">
          <div class="col-md-4">
            <ul class="nav navbar-nav">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <li><a><input type="text" id="pesquisa" name="pesquisa" class="form-control" required placeholder="Pesquisa"></a></li>
              <li><a><button class="btn btn-default" type="submit"><img src="../img/lupa.png"></button></a></li>
            </ul>  
            </form>

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
              @if($checkT > 0)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge1.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Bem-Vindo </h1>
                </div>
                <div class="col-md-9">
                  <h5>Realizar seu primeiro Check-in</h5>
                </div>
              </div>
              @endif
              @if($happyHour == true)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge2.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Happy Hour</h1>
                </div>
                <div class="col-md-9">
                  <h5>Fazer Check-in no horário de Happy Hour</h5>
                </div>
              </div>
              @endif
              @if($friday == true)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge3.jpg" class="img-thumbnail" alt="">
                </div>
                
                <div class="col-md-9">
                  <h1>Ufa, Hoje é sexta!</h1>
                </div>
                <div class="col-md-9">
                  <h5>Fazer Check-in em um sexta-feira</h5>
                </div>
              </div>
              @endif
              @if($checkT > 4)
                @if($checkT < 49)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge4.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>25 Cervejas</h1>
                </div>
                <div class="col-md-9">
                  <h5>Consumir um total de 25 cervejas.</h5>
                </div>
              </div>
              @endif
              @endif
               @if($checkT > 49)
                @if($checkT < 99)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge5.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>50 cervejas.</h1>
                </div>
                <div class="col-md-9">
                  <h5>Consumir um total de 50 cervejas.</h5>
                </div>
              </div>
              @endif
              @endif
               @if($checkT > 99)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge6.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>100 cervejas.</h1>
                </div>
                <div class="col-md-9">
                  <h5>Consumir um total de 100 cervejas.</h5>
                </div>
              </div>
              @endif
              @if($checkT > 0)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge7.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Expandindo Horizontes</h1>
                </div>
                <div class="col-md-9">
                  <h5>Experimentar um novo tipo de cerveja.</h5>
                </div>
              </div>
              @endif
              @if($threeBeerInHour == true)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge8.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Bom de Copo</h1>
                </div>
                <div class="col-md-9">
                  <h5>Beber mais de 3 cervejas em menos de 1 hora.</h5>
                </div>
              </div>
              @endif
              @if($checkB > 0)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="img/badge9.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Cliente Fiel</h1>
                </div>
                <div class="col-md-9">
                  <h5>Consummir 3 vezez a mesma cerveja.</h5>
                </div>
              </div>
              @endif
              @if($coT > 0)
              <div class="row member-row">
                <div class="col-md-3">
                  <img src="../img/badge10.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-9">
                  <h1>Tem Amigos</h1>
                </div>
                <div class="col-md-9">
                  <h5>Ter pelo menos um Check-in comentado.</h5>
                </div>
              </div>
              @endif
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
