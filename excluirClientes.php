<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"> 
 
    <meta name="format-detection" content="telephone=no"> 
    <meta name="msapplication-tap-highlight" content="no"> 
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> 
    <meta name="color-scheme" content="light dark"> 
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
    <link rel="stylesheet" href="css/estilo.css">


    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/editar.js"></script>

    <title>EXCLUIR REGISTROS</title>
    </head> 
    <body> 
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand navbar-dark bg-primary col-12">
                    <a class="navbar-brand" href="index.php">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active"> <a class="nav-link" href="index.php">Cadastrar<span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"><a class="nav-link" href="consultarClientes.php">Consultar</a> </li>
                        </ul>
                    </div>
                </nav>  
            </div>
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Excluir - Agendamento de Potenciais Clientes</h5>
					<p class="card-text">Sistema utilizado para excluir agendamento de serviços.</p>
					<p>
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" id="txtNome">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" id="txtOrigem">
									<option>Celular</option>
									<option>Fixo</option>
									<option>Whatsapp</option>
									<option>Facebook</option>
									<option>Instagram</option>
									<option>Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" id="txtDataContato">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" id="txtObservacao" rows="3"></textarea>
							</div>
                            <button type="submit" id="btnInserir" class="btn btn-primary">Excluir</button>
                            <button type="submit" id="btnInserir" class="btn btn-primary">Buscar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
