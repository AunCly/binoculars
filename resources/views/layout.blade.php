<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Information -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('/vendor/binoculars/favicon.ico') }}">

	<meta name="robots" content="noindex, nofollow">

	<title>Binoculars{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>

	<!-- Style sheets-->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="{{ asset('vendor/binoculars/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="binoculars" v-cloak>

	<b-container fluid>
		<b-row>
			<b-col sm="2">
				<sidebar></sidebar>
			</b-col>
			<b-col sm="10" class="pt-5">
				<router-view></router-view>
			</b-col>
		</b-row>
	</b-container>

</div>

<!-- Global Binoculars Object -->
<script>
  window.Binoculars = @json($binocularsScriptVariables);
</script>

<script src="{{ asset('vendor/binoculars/app.js') }}"></script>
</body>
</html>
