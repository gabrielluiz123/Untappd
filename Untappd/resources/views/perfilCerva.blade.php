
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
  </head>

  <body>

  <header>
    <div class="container">
      <img src="../img/logo.png" class="logo" alt="">
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
              <li><a href="{{url('solicitation')}}">
                  <img src="../img/add.png" id="add">
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
      @foreach($cerveja as $c)
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header">{{$c->name}}</h1>
              <div class="row">
                <div class="col-md-4">
                  <img src="../img/user.png" class="img-thumbnail" alt="">
                </div>
                
                <div class="col-md-8">
                  <ul>
                    <li><strong>Tipo:</strong> {{$c->type}}</li>
                    <li><strong>Teor Alcoólico:</strong> {{$c->teor}}</li>
                    <li><strong>Media de avaliação:</strong> {{$media}}</li>
                  </ul>
                </div>
                @endforeach
              </div><br><br>
              <div class="row">
                <div class="col-md-12">
                
                </div>
              </div>
            </div>
            @foreach($checkins as $ch)
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default post">
                    <div class="panel-body">
                       <div class="row">
                         <div class="col-sm-2">
                           <a href="{{url('vizualizarP', $ch->id_user)}}" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">{{$ch->name_user}}</div></a>
                         </div>
                         <div class="col-sm-10">
                           <div class="bubble">
                             <div class="pointer">
                               <p>Cervejaria: {{$ch->name_cervejaria}}  Cerveja:{{$ch->name_cerveja}} Stars:{{$ch->star}}</p>
                             </div>
                             <div class="pointer-border"></div>
                           </div>

                           <div class="comment-form">
                             <form class="form-inline">
                            </form>
                           </div>
                           <div class="clearfix"></div>

                           <div class="comments">
                            
                             <div class="clearfix"></div>
                             <div class="clearfix"></div>
                           </div>
                         </div>
                       </div>
                    </div>
                  </div>
                  
                </div>
              </div>
              @endforeach
          </div>
          <div class="col-md-4">
            <div align="center" class="panel panel-default friends">
              <div class="panel-heading">
                <h3 class="panel-title">Meus Amigos</h3>
              </div>
              <div class="panel-body">
                <ul>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                  <li><a href="profile.html" class="thumbnail"><img src="img/user.png" alt=""></a></li>
                </ul>
                <div class="clearfix"></div>
                <a class="btn btn-primary" href="{{url('friends')}}">Ver Amigos</a>
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
