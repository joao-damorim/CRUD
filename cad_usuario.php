<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="page-header">
	<h1>Cadastrar Usuário</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=2&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Listar</button></a>			
		</div>
  </div>
  <div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="processa/proc_cad_usuario.php">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
			  <input type="email" class="form-control" name="email" placeholder="E-mail">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="usuario" placeholder="Usuário">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="senha" placeholder="Senha">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nível de Acesso</label>
			<div class="col-sm-10">
				<select class="form-control" name="nivel_de_acesso_id">
				  <option>Selecione</option>
				  <option value="1">Administrativo</option>
				  <option value="2">Usuário</option>
				</select>
			</div>
		  </div>
		  
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div> <!-- /container -->