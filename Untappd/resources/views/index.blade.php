
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
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail3">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword3">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Senha">
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
              <div align="center" class="panel-heading">
                <h3 class="panel-title">Cadastre-se</h3>
              </div>
              <div class="panel-body">
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" id="Nome" placeholder="Nome" required name="name">
                <label for="E-mail">E-mail:</label>
                <input type="email" class="form-control" id="E-mail" placeholder="example@example.com" required name="email">
                <label for="Senha">Senha:</label>
                <input type="password" class="form-control" id="Senha" placeholder="********" required name="password_1">
                <label for="Repetir_Senha">Repetir Senha</label>
                <input type="password" class="form-control" id="Repetir_Senha" placeholder="********" required name="password_2">
                <label for="sexo">Sexo:</label>
                <select class="form-control" id="sexo" name="sex" placeholder="Selecione">
                  <option value="male">Masculino</option>
                  <option value="female">Feminino</option>
                </select>
                <label for="datepicker">Data de Nascimento:</label>
                <input class="form-control" type="date"  name="date" placeholder="dd/mm/aaaa">
                <br>

                <div class="clearfix"></div>
                <div align="center">
                  <a class="btn btn-primary" href="#">Cadastrar</a>
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
