<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>DataTables</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
</head>

<body>
	<!--------------------------primer ejemplo de tabla----------------->
	<br>
	<center>
		<h1>primer ejemplo de tabla sin scroll</h1>
	</center><br>
	<table class="table display PaginarTabla">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Pais</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Carlos</td>
				<td>Alfaro</td>
				<td>El Salvador</td>
			</tr>
			<tr>
				<td>Evelyn</td>
				<td>Melendez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Brenda</td>
				<td>Lopez</td>
				<td>EE.UU</td>
			</tr>
			<tr>
				<td>Ricardo</td>
				<td>Rodriguez</td>
				<td>Italia</td>
			</tr>
			<tr>
				<td>Edward</td>
				<td>Lopez</td>
				<td>Alemania</td>
			</tr>
		</tbody>
	</table>

	<!--------------------------Segundo ejemplo de tabla----------------->
	<br>
	<center>
		<h1>Segundo ejemplo de tabla con scroll</h1>
	</center><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="col">
				<div class="card mb-3">
					<div class="card-body">
						<div class="table-responsive">
							<div id="dt-addrows_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
								<div class="row">
									<div class="col-sm-12">
										<table class="table display PaginarTabla">

											<thead>
												<tr>
													<th>id</th>
													<th>iddireccionamiento</th>
													<th>servicio a entregar</th>
													<th>Nit del Proveedor</th>
													<th>Fecha de Direccionamiento</th>
													<th>Estado del Direccionamiento</th>
													<th>Fecha de Anulacion</th>
													<th>Número de prescripción</th>
													<th>Tipo de documento</th>
													<th>Número de Documento</th>
													<th>Tipo de tecnología</th>
													<th>Conteo de tecnología</th>
													<th>Número de Entrega</th>
													<th>Codigo de la EPS</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>22383405</td>
													<td>21661791</td>
													<td>[BISOPROLOL FUMARATO] 2,5mg/1U</td>
													<td>816001182</td>
													<td>12/03/20 03:13:00 PM</td>
													<td>Anulado</td>
													<td>12/03/20 03:27:00 PM</td>
													<td>20190104182009821673</td>
													<td>CC</td>
													<td>802449</td>
													<td>MEDICAMENTO</td>
													<td>1</td>
													<td>1</td>
													<td>ESS076</td>
												</tr>

												<tr>
													<td>22396513</td>
													<td>21674427</td>
													<td>[BISOPROLOL FUMARATO] 2,5mg/1U</td>
													<td>816001182</td>
													<td>12/03/20 04:22:00 PM</td>
													<td>Anulado</td>
													<td>12/03/20 04:23:00 PM</td>
													<td>20190104182009821673</td>
													<td>CC</td>
													<td>802449</td>
													<td>MEDICAMENTO</td>
													<td>1</td>
													<td>1</td>
													<td>ESS076</td>
												</tr>

												<tr>
													<td>22394342</td>
													<td>21672325</td>
													<td>[BISOPROLOL FUMARATO] 2,5mg/1U</td>
													<td>816001182</td>
													<td>12/03/20 04:08:00 PM</td>
													<td>Anulado</td>
													<td>12/03/20 04:21:00 PM</td>
													<td>20190104182009821673</td>
													<td>CC</td>
													<td>802449</td>
													<td>MEDICAMENTO</td>
													<td>1</td>
													<td>1</td>
													<td>ESS076</td>
												</tr>

												<tr>
													<td>21472343</td>
													<td>20785434</td>
													<td>[BISOPROLOL FUMARATO] 2,5mg/1U</td>
													<td>816001182</td>
													<td>28/02/20 11:09:00 AM</td>
													<td>Anulado</td>
													<td>28/02/20 11:11:00 AM</td>
													<td>20190104182009821673</td>
													<td>CC</td>
													<td>802449</td>
													<td>MEDICAMENTO</td>
													<td>1</td>
													<td>1</td>
													<td>ESS076</td>
												</tr>


											</tbody>


										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div><!--./col-md-10-->
		<div class="col-md-1"></div>
	</div>


</body>

</html>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script>
	$(document).ready(function() {
		$('.PaginarTabla').DataTable({
			language: {
				"sProcessing": "Procesando...",
				"sLengthMenu": "Mostrar _MENU_ registros",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",
				"sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix": "",
				"sSearch": "Buscar:",
				"sUrl": "",
				"sInfoThousands": ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending": ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
			}
		});
	});
</script>