<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel</title>

        <link href="/public/bootstrap-5.3.3-dist/css/bootrstrap.css" rel="stylesheet">
 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
 
    </head>
    <body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
 
<!-- código do navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
 
    <a class="navbar-brand" href="#">Sistema Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#">Cadastrar</a>
        <a class="nav-link" href="#">Consultar</a>
        <!-- <a class="nav-link" href="#">Mais</a> -->
      </div>
    </div>
 
  </div>
</nav>
<!-- fim do código do navbar -->
 
<!-- código do formulário -->
<form>
 
  <div class="mb-3">
    <label for="exemploCampo1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="campoNome">
  </div>
 
  <div class="mb-3">
    <label for="exemploCampo2" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="campoSobrenome">
  </div>
 
  <div class="mb-3">
    <label for="exemploCampo3" class="form-label">Email</label>
    <input type="email" class="form-control" id="campoEmail" placeholder="principal@gmail.com">
  </div>
 
  <div class="mb-3">
    <label for="exemploCampo4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="campoSenha">
  </div>
 
  <div class="mb-3">
    <label for="exemploCampo5" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="CampoEndereco" placeholder="Rua Principal, 123">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
 
  <button type="submit" class="btn btn-primary">Enviar</button>
 
</form>
<!-- fim do código do formulário -->
 
<script src="/bootstrap-5.3.3-dist/js/boostrap.js"></script>

    </body>
</html>
 