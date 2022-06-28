<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Information -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('/vendor/telescope/favicon.ico') }}">

	<meta name="robots" content="noindex, nofollow">

	<title>Telescope{{ config('app.name') ? ' - ' . config('app.name') : '' }}</title>

	<!-- Style sheets-->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="{{ asset(mix($cssFile, 'vendor/telescope')) }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="telescope" v-cloak>

	<div class="container mb-5">
		<div class="d-flex align-items-center py-4 header">
			<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
				<path class="fill-primary" d="M0 40a39.87 39.87 0 0 1 11.72-28.28A40 40 0 1 1 0 40zm34 10a4 4 0 0 1-4-4v-2a2 2 0 1 0-4 0v2a4 4 0 0 1-4 4h-2a2 2 0 1 0 0 4h2a4 4 0 0 1 4 4v2a2 2 0 1 0 4 0v-2a4 4 0 0 1 4-4h2a2 2 0 1 0 0-4h-2zm24-24a6 6 0 0 1-6-6v-3a3 3 0 0 0-6 0v3a6 6 0 0 1-6 6h-3a3 3 0 0 0 0 6h3a6 6 0 0 1 6 6v3a3 3 0 0 0 6 0v-3a6 6 0 0 1 6-6h3a3 3 0 0 0 0-6h-3zm-4 36a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM21 28a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
			</svg>

			<h4 class="mb-0 ml-3"><strong>Laravel</strong> Telescope{{ config('app.name') ? ' - ' . config('app.name') : '' }}</h4>

			<button class="btn btn-outline-primary ml-auto mr-3" v-on:click.prevent="toggleRecording" title="Play/Pause">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary" v-if="recording">
					<path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z"/>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary" v-else>
					<path d="M4 4l12 6-12 6z"/>
				</svg>
			</button>

			<button class="btn btn-outline-primary mr-3" v-on:click.prevent="clearEntries" title="Clear Entries">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary">
					<path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/>
				</svg>
			</button>

			<button class="btn btn-outline-primary mr-3" :class="{active: autoLoadsNewEntries}" v-on:click.prevent="autoLoadNewEntries" title="Auto Load Entries">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary">
					<path d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"></path>
				</svg>
			</button>

			<div class="btn-group" role="group" aria-label="Basic example">
				<router-link tag="button" to="/monitored-tags" class="btn btn-outline-primary" active-class="active" title="Monitoring">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="icon fill-primary">
						<path d="M12 10a2 2 0 0 1-3.41 1.41A2 2 0 0 1 10 8V0a9.97 9.97 0 0 1 10 10h-8zm7.9 1.41A10 10 0 1 1 8.59.1v2.03a8 8 0 1 0 9.29 9.29h2.02zm-4.07 0a6 6 0 1 1-7.25-7.25v2.1a3.99 3.99 0 0 0-1.4 6.57 4 4 0 0 0 6.56-1.42h2.1z"></path>
					</svg>
				</router-link>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-2 sidebar">
				<ul class="nav flex-column">
					<li class="nav-item">
						<router-link active-class="active" to="/requests" class="nav-link d-flex align-items-center pt-0">
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

<script src="{{ asset(mix('app.js', 'vendor/telescope')) }}"></script>
</body>
</html>