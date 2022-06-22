<div class="container-fluid form-aluno">
<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome do Professor</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="col-md-6">
    <label class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="dt_nascimento">
  </div>
  <div class="col-12">
    <label class="form-label">Nome da Mãe</label>
    <input type="text" class="form-control" name="nome_mae">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Disciplina</label>
    <select class="form-select" name="disciplina" required>
        <option value="">-</option>
        <?php
        $lista = listarDisciplina();
        while ($dados = $lista->fetch_array()) {
        ?>        
        <option value="<?php echo $dados['id']; ?>"><?php echo $dados['disciplina']; ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="col-md-12">
    <label class="form-label">Sexo</label>
    <select class="form-select" name="sexo">
      <option value="M">Masculino</option>
      <option value="F">Feminino</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

<?php 

    if(!empty($_POST['nome'])){

        if(cadProf($_POST)){ ?>        

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