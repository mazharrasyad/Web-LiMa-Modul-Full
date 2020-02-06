<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				Data LOG BOOK
			</div>
			<tbody>
				<select>
					@foreach($logsprint as $l)
						<option value="{{ $l->sprint_id }}">{{ $l->nama_sprint }}</option>
					@endforeach
				</select>
			</tbody>
		</div>
	</div>
</body>
</html>