<!DOCTYPE html>
<html lang="en">


@include('admin\partials\head')



<body>
	<div class="wrapper">
		@include('admin\partials\sidebar')

		<div class="main">
		@include('admin\partials\navbar')

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">
						@yield('title')

					</h1>

					<div class="row">
						<div class="col-12">

							@yield('content-section')

						</div>
					</div>

				</div>
			</main>

	@include('admin\partials\footer')
	
</body>

</html>