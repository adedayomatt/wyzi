<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		@include('layouts.components.meta-data')
        @include('layouts.components.head-scripts')
        @include('layouts.components.styles')
	</head>
	<body>
		<div id="app">
		   @include('layouts.components.nav')
		   <main>
			   <div id="app-accordion">
					<div class="container-fluid">
						<div class="app-50-50-rhs-fixed">
							<div class="row">
								<div class="col-md-6 col-no-padding-xs">
									<div class="lhs-content">
										@yield('LHS')
									</div>
								</div>
								<div class="col-md-6  col-no-padding-xs">
									<div class="rhs-fixed">
										<div class="rhs-content">
											@yield('RHS')
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			   </div>
		   </main>
		   
		</div>
		
		@include('layouts.components.bottom-scripts')
	</body>
</html>
