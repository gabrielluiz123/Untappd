
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dobble Social Network: Profile Page</title>

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
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Feed</a></li>
            <li><a href="members.html">Perfil</a></li>
            <li><a href="contact.html">Check-in</a></li>
            <li><a href="groups.html">Badges</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="profile">
              <h1 class="page-header">Nome</h1>
              <div class="row">
                <div class="col-md-4">
                  <img src="img/user.png" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-8">
                  <ul>
                    <li><strong>Nome:</strong> exemplo </li>
                    <li><strong>E-mail:</strong> exemplo</li>
                    <li><strong>Sexo:</strong> exemplo</li>
                    <li><strong>Data de nascimento:</strong> exemplo</li>
                  </ul>
                </div>
              </div><br><br>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-default post">
                    <div class="panel-body">
                       <div class="row">
                         <div class="col-sm-2">
                           <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">DevUser1</div></a>
                           <div class="likes text-center">7 Likes</div>
                         </div>
                         <div class="col-sm-10">
                           <div class="bubble">
                             <div class="pointer">
                               <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                             </div>
                             <div class="pointer-border"></div>
                           </div>
                           <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                           <div class="comment-form">
                             <form class="form-inline">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="enter comment">
                              </div>
                              <button type="submit" class="btn btn-default">Add</button>
                            </form>
                           </div>
                           <div class="clearfix"></div>

                           <div class="comments">
                             <div class="comment">
                               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                               <div class="comment-text">
                                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                               </div>
                             </div>
                             <div class="clearfix"></div>
                             <div class="comment">
                               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                               <div class="comment-text">
                                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                               </div>
                             </div>
                             <div class="clearfix"></div>
                           </div>
                         </div>
                       </div>
                    </div>
                  </div>
                  <!-- Novo Check-in -->
                  <div class="panel panel-default post">
                    <div class="panel-body">
                       <div class="row">
                         <div class="col-sm-2">
                           <a href="profile.html" class="post-avatar thumbnail"><img src="img/user.png" alt=""><div class="text-center">DevUser1</div></a>
                           <div class="likes text-center">7 Likes</div>
                         </div>
                         <div class="col-sm-10">
                           <div class="bubble">
                             <div class="pointer">
                               <p>Hey I was wondering if you wanted to go check out the football game later. I heard they are supposed to be really good!</p>
                             </div>
                             <div class="pointer-border"></div>
                           </div>
                           <p class="post-actions"><a href="#">Comment</a> - <a href="#">Like</a> - <a href="#">Follow</a> - <a href="#">Share</a></p>
                           <div class="comment-form">
                             <form class="form-inline">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="enter comment">
                              </div>
                              <button type="submit" class="btn btn-default">Add</button>
                            </form>
                           </div>
                           <div class="clearfix"></div>

                           <div class="comments">
                             <div class="comment">
                               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                               <div class="comment-text">
                                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                               </div>
                             </div>
                             <div class="clearfix"></div>
                             <div class="comment">
                               <a href="#" class="comment-avatar pull-left"><img src="img/user.png" alt=""></a>
                               <div class="comment-text">
                                 <p>I am just going to paste in a paragraph, then we will add another clearfix.</p>
                               </div>
                             </div>
                             <div class="clearfix"></div>
                           </div>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                <a class="btn btn-primary" href="#">Ver Amigos</a>
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
