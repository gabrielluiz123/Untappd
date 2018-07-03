
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dobble Social Network</title>

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
      <form method="POST" action="/auth/login">
      {!! csrf_field() !!}
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input  type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail3" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Password</label>
          <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword3" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-default">Entrar</button><br>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Manter-me conectado
          </label>
        </div>
      </form>
    </div>
  </header>
    <br><br>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            
            
          </div>
          <div class="col-md-4">
            <div class="panel panel-default friends">
              <div class="panel-heading">
                <h3 class="panel-title">Cadastre-se</h3>
              </div>
              <form method="POST" action="{{url('/register')}}">
              <div class="panel-body">
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome" required name="nome">
                <label for="E-mail">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="example@example.com" required name="email">
                <label for="Senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="********" required name="senha">
               <label for="Nome">Pais:</label>
                <input type="text" class="form-control" id="country" placeholder="Pais" required name="country">
                <label for="Nome">Estado:</label>
                <input type="text" class="form-control" id="state" placeholder="Estado" required name="state">
                 <label for="Nome">Cidade:</label>
                <input type="text" class="form-control" id="city" placeholder="Cidade" required name="city">
                <br>
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="clearfix"></div>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
              </div>
            </div>
            </form>
            
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
