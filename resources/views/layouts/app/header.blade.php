<div class="flex items-center relative shadow h-header bg-white z-50 px-6">
	<div class="ml-auto h-9 flex items-center">
		@guest
		<a href="{{ route('login') }}" class="flex items-center focus:outline-none px-3">Login</a>
			@if (Route::has('register'))
				<!-- <a href="{{ route('register') }}" class="flex items-center focus:outline-none px-3">Register</a> -->
			@endif
		@else
		<button type="button" class="flex items-center focus:outline-none text-80 mr-3">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current w-4 h-4">
				<path d="M4 8a6 6 0 0 1 4.03-5.67 2 2 0 1 1 3.95 0A6 6 0 0 1 16 8v6l3 2v1H1v-1l3-2V8zm8 10a2 2 0 1 1-4 0h4z"></path>
			</svg>
		</button>
		<div class="relative hidden sm:block">
			<button type="button" class="flex items-center focus:outline-none">
				<span class="text-base mr-1 text-90">{{auth()->user()->name}}</span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-4 h-4 fill-current">
					<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
				</svg>
			</button>

			<!-- start::Dropdown -->
			<div class="hidden">
				<button class="z-30 block fixed inset-0 w-full h-full cursor-default"></button>
				<div class="absolute z-40 right-0">
					<div class="mt-3 bg-white xl:border rounded-lg w-48 py-2 shadow-xl">
						<a href="#account" class="block hover:text-white text-gray-800 px-4 py-2 hover:bg-gray-600">Profile Settings</a>
						<a href="#logout" class="block hover:text-white text-gray-800 px-4 py-2 hover:bg-gray-600">Logout</a>
					</div>
				</div>
			</div>
			<!-- end::Dropdown -->
		</div>
		@endguest
	</div>
</div>