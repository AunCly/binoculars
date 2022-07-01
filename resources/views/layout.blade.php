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

	<div class="container mb-5">

		<div class="row mt-4">
			<div class="col-2 sidebar">
				<ul class="nav flex-column">
					<li class="nav-item">
						<router-link active-class="active" to="/" class="nav-link d-flex align-items-center pt-0">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
								<path d="M0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 2v12h16V5H2zm8 3l4 5H6l4-5z"></path>
							</svg>
							<span>Requests</span>
						</router-link>
					</li>
				</ul>
			</div>

			<div class="col-10">
				<router-view></router-view>
			</div>
		</div>
	</div>
</div>

<!-- Global Telescope Object -->
<script>
  window.Binoculars = @json($binocularsScriptVariables);
</script>

<script src="{{ asset('vendor/binoculars/app.js') }}"></script>
</body>
</html>