@extends('layouts.app')

@section('settings-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Settings</h3>
		</div>

		<div class="flex items-center">
			<div class="w-1/2 pr-2">
				<div class="card relative overflow-hidden border border-50">
					<div class="overflow-hidden overflow-x-auto relative py-4 px-4">
						<div class="flex justify-between">
							<div>
								<h3 class="text-xl text-90">Models</h3>
								<span class="block text-80">You can define models and create new ones.</span>
							</div>
							<div class="flex items-center text-80">
								<a href="{{ route('app.settings.models.index') }}" class="px-4 transform-r-2px">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-current">
										<path class="heroicon-ui" d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection