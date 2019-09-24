@if(auth()->check())
	<div class="min-h-screen flex-none pt-header min-h-screen w-sidebar bg-grad-sidebar">
		<a href="/">
			<div class="absolute pin-t pin-l pin-r bg-title flex items-center justify-center w-sidebar h-header px-6 text-white">
				<h3 class="text-2xl">Pragmatic</h3>
			</div>
		</a>
		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mb-3 block">Resources</span>

		<a href="{{ route('app.home') }}" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('home-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M13 20v-5h-2v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-7.59l-.3.3a1 1 0 1 1-1.4-1.42l9-9a1 1 0 0 1 1.4 0l9 9a1 1 0 0 1-1.4 1.42l-.3-.3V20a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zm5 0v-9.59l-6-6-6 6V20h3v-5c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v5h3z"/>
			</svg>
			<span class="ml-3">Home</span>
		</a>

		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mt-8 mb-3 block">Sales</span>
		<a href="#" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('leads-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v2zm1-5a1 1 0 0 1 0-2 5 5 0 0 1 5 5v2a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3zm-2-4a1 1 0 0 1 0-2 3 3 0 0 0 0-6 1 1 0 0 1 0-2 5 5 0 0 1 0 10z"/>
			</svg>
			<span class="ml-3">Leads</span>
		</a>
		<a href="#" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('clients-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/>
			</svg>
			<span class="ml-3">Clients</span>
		</a>

		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mt-8 mb-3 block">Managment</span>
		<a href="{{ route('app.users.index') }}" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('users-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
			</svg>
			<span class="ml-3">Users</span>
		</a>
		<a href="{{ route('app.roles.index') }}" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('roles-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M11.85 17.56a1.5 1.5 0 0 1-1.06.44H10v.5c0 .83-.67 1.5-1.5 1.5H8v.5c0 .83-.67 1.5-1.5 1.5H4a2 2 0 0 1-2-2v-2.59A2 2 0 0 1 2.59 16l5.56-5.56A7.03 7.03 0 0 1 15 2a7 7 0 1 1-1.44 13.85l-1.7 1.71zm1.12-3.95l.58.18a5 5 0 1 0-3.34-3.34l.18.58L4 17.4V20h2v-.5c0-.83.67-1.5 1.5-1.5H8v-.5c0-.83.67-1.5 1.5-1.5h1.09l2.38-2.39zM18 9a1 1 0 0 1-2 0 1 1 0 0 0-1-1 1 1 0 0 1 0-2 3 3 0 0 1 3 3z"/>
			</svg>
			<span class="ml-3">Roles</span>
		</a>

		<span class="tracking-widest font-normal text-sm uppercase text-gray-500 px-6 mt-8 mb-3 block">Core</span>
		<a href="{{ route('app.settings.index') }}" class="flex items-center font-normal text-white py-2 text-base no-underline px-6 @yield('settings-active')">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-4 h-4">
				<path class="heroicon-ui" d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
			</svg>
			<span class="ml-3">Settings</span>
		</a>
	</div>
@endif