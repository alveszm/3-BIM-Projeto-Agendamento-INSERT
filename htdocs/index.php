<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <script src="cordova.js"></script>
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/index.js"></script>
        <title>3° BIM Projeto</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">APLICATIVO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="consulta.html">Consultar <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="mar">
            <h4><b>Agendamento de Vendas</b></h4>
            <h5>Sistema usado para agendamento de serviços</h5>
          </div>
          <form method="post" action="controller/ControllerCadastro.php" id="form" name="form">
            <div class="form-group row">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Nome:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nome">
              </div>
            </div>
            <div class="form-group row">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Telefone:</label>
              <div class="col-sm-10">
                <input type="tel" class="form-control" id="tel" placeholder="(XX)XXXXX-XXXX">
              </div>
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1">Origem:</label>
              <select class="form-control" id="orig">
                <option>Celular</option>
                <option>Fixo</option>
                <option>Whatsapp</option>
                <option>Facebook</option>
                <option>Instagram</option>
                <option>Google Meu Negócio</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="ExmpleFormControlInput1" class="col-sm-2 col-form-label">Data:</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="datac">
              </div>
            </div>
            <div class="form-group">
              <label for="ExmpleFormControlInput1">Observações</label>
              <textarea class="form-control" id="obse" rows="3"></textarea>
            </div>
          </form>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" id="btnInserir" class="btn btn-primary" onclick="inserir()">CADASTRAR</button>
            </div>
          </div>
    </body>
</html>
