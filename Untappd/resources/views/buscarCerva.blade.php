
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
              <li><a><button class="btn btn-default" type="submit"><img src="img/lupa.png"></button></a></li>
            </ul>  
            </form>          
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
                <div class="preview col-md-6">
                  <br>            
                  <div class="preview-pic tab-content">
                    <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                  </div>
                  
                </div>
                <form method="post" action="{{url('check2')}}">
                <div class="details col-md-5">
                  <h2 class="product-title">Check-in da BOA!</h2>
                  <h3>Passo 1 de 2</h3>
                  <br>
                  <div class="details col-md-5">
                    <label>Cerveja: </label>
                    <select type="cerveja" class="form-control" id="cerveja" name="cerveja" >
                    @foreach($cervejas as $c)
                      <option value="{{$c->id}}">{{$c->name}}</option>
                    @endforeach
                    </select>
                    <br>
                    <a href="{{url('register_beer')}}"><button class="add-to-cart btn btn-default" type="button" >Adicionar nova cerveja</button></a>
                  </div>
                  <div class="details col-md-2"></div>
                  <div class="details col-md-5">
                    <label>Cervejaria:</label>
                    <select type="cerveja" class="form-control" id="cervejaria" name="cervejaria" >
                    @foreach($cervejarias as $ce)
                      <option value="{{$ce->id}}">{{$ce->name}}</option>
                    @endforeach
                    </select>
                    <br>
                    <a href="{{url('register_bar')}}"><button class="add-to-cart btn btn-default" type="button" >Adicionar nova cervejaria</button></a>

                  </div>
                  <br>
                  <div align="center" class="action">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>
                    <div>
                    <button class="add-to-cart btn btn-default" type="submit">Efetuar Check_in</button>
                    </div>
                    </form>
                  </div>
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
