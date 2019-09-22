@if(auth()->check())
	<div class="min-h-screen flex-none pt-header min-h-screen w-sidebar bg-grad-sidebar">
		<a href="/">
			<div class="absolute pin-t pin-l pin-r bg-title flex items-center justify-center w-sidebar h-header px-6 text-white">
				<h3 class="text-2xl">Pragmatic</h3>
			</div>
		</a>
		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mb-3 block">Resources</span>
		
		<a href="index.html" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 link-active">Dashboard</a>

		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mt-8 mb-3 block">Core</span>

		<a href="settings.html" class="flex items-center font-normal text-white py-2 text-base no-underline px-6">Settings</a>
	</div>
@endif