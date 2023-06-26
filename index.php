<?php include("header.php"); ?>
  
  <h4 class="mb-3">Contato</h4>
  
  <form action="enviar.php" name="FormularioEnvia" method="POST">
    <div class="row g-3">
      <div class="col-sm-6">
        <label>Nome</label>
        <input type="text" name="Nome" class="form-control" required>
      </div>
      <div class="col-sm-6">
        <label>Sobrenome</label>
        <input type="text" name="Sobrenome" class="form-control" required>
      </div>
      <div class="col-6">
        <label>E-mail</label>
        <input type="email" name="Email" class="form-control" required>
      </div>
    <div class="col-6">
        <label>Assunto</label>
        <input type="text" name="Assunto" class="form-control" required>
      </div>
      <div class="col-12">
        <label>Mensagem</label>
        <input type="text" name="Mensagem" class="form-control" required>
      </div>
      <div class="col-12">
        <button type="submit" name="FormularioEnvia" class="w-100 btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>

<?php include("footer.php"); ?>