<div class="container-fluid form-aluno">
<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome da Disciplina</label>
    <input type="text" class="form-control" name="disciplina">
  </div>
  <div class="col-md-6">
    <label class="form-label">Status</label>
    <select class="form-select" name="status">
      <option value="A">Ativo</option>
      <option value="D">Desativado</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

<?php 

    if(!empty($_POST['disciplina'])){

      if(cadDisciplina($_POST)){ ?>        

        <script language='javascript'>
          swal.fire({ 
            icon:"success",
            text: "Feito com Sucesso!",
            type: "success"}).then(okay => {
              if (okay) {
                window.location.href = "painel.php?r=";
              }
            });
          </script>
          <?php }else{ ?>
              <script language='javascript'>
          swal.fire({ 
            icon:"error",
            text: "Ops! Ouve um erro.",
            type: "success"}).then(okay => {
              if (okay) {
                window.location.href = "painel.php?r=";
              }
            });
          </script>
         <?php } 
    }
?>