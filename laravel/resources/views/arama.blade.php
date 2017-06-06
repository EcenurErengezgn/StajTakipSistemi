<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="panel panel-default">
		<div class="panel-heading">

		</div>
		<div class="panel-body">
		<div class="form-group">
		<input type="text" class="form-control" id="arama" name="arama"></input>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Adı</th>
					<th>Web Adresi</th>
					<th>Telefon No</th>
					<th>Faks</th>
					<th>İl</th>
					<th>İlçe</th>
					<th>İşlemler</th>
				</tr>
			</thead>
			<tbody>

			</tbody>

		</table>
		</div>
		</div>
	</div>
	</div>
	<script type="text/javascript">
		$('#arama').on('keyup',function(){
				$value=$(this).val();
				$.ajax({
					type : 'get',
					url : '{{URL::to('arama')}}',
					data : {'arama':$value},
					success:function(data){
						$('tbody').html(data);

					}
				});
		})
		</script>

</body>
</html>