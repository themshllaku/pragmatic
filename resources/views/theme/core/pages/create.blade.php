@extends('layouts.app')

@section('pages-active')
link-active
@endsection

@section('content')
<div id="newPage" class="px-view py-view mx-auto">
	<div class="relative">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">New Page</h3>
		</div>

		<div class="flex flex-row mt-4">
			<div class="w-1/4">
				<h3 class="text-lg font-semibold text-90-half">Basic Information</h3>
				<p class="block text-90-half text-sm">Set login preferences, help us to personalize your experience and make big account changes here.</p>
			</div>
			<div class="w-3/4 pl-2">
				<div class="card relative overflow-hidden border border-50">
					<div class="overflow-hidden overflow-x-auto relative p-4">
						<div class="flex">
							<div class="w-1/2 p-2">
								<label class="text-90 block font-semibold mb-2">Model Name</label>
								<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500" name="first_name">
							</div>
							<div class="w-1/2 p-2">
								<label class="text-90 block font-semibold mb-2">Display Title</label>
								<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500" name="last_name">
							</div>
						</div>
						<div class="flex">
							<div class="w-full p-2">
								<label class="text-90 block font-semibold mb-2">Parent Menu</label>
								<div class="relative">
							        <select class="block appearance-none w-full font-light bg-transparent border border-60 text-90 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-indigo-500">
							          	<option>Administrator</option>
							          	<option>Manager</option>
							          	<option>User</option>
							        </select>
							        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
							        </div>
						      	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="flex flex-row mt-12">
			<div class="w-1/4">
				<h3 class="text-lg font-semibold text-90-half">Model Settings</h3>
				<p class="block text-90-half text-sm">Set login preferences, help us to personalize your experience and make big account changes here.</p>
			</div>
			<div class="w-3/4 pl-2">
				<div class="card relative overflow-hidden border border-50">
					<div class="overflow-hidden overflow-x-auto relative">
						<table class="table w-full">
							<thead>
								<tr>
									<th class="w-4"></th>
									<th class="w-48 text-left">Field</th>
									<th class="w-48 text-left">Display</th>
									<th class="w-32 text-left">Type</th>
									<th class="w-32 text-left">Permissions</th>
									<th class="w-32 text-left">Required</th>
									<th class="w-16"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="w-4"></td>
									<td class="w-48 text-left">first_name</td>
									<td class="w-48">First Name</td>
									<td class="w-32 text-left">text</td>
									<td class="w-32">
										<div class="flex items-center">
											<span class="pill-success mx-1" data-tooltip="Create"></span>
											<span class="pill-danger mx-1" data-tooltip="Read"></span>
											<span class="pill-success mx-1" data-tooltip="Update"></span>
											<span class="pill-success mx-1" data-tooltip="Delete"></span>
										</div>
									</td>
									<td class="w-32">
										True
									</td>
									<td class="w-16">
										<span class="flex justify-center">
											<button @click="showModal=true" class="text-80">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
													<path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/>
												</svg>
											</button>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="flex flex-row mt-4">
			<div class="w-1/4"></div>
			<div class="w-3/4 pl-2">
				<button class="px-5 py-1 text-white bg-gray-800 rounded shadow">Save</button>
				<a href="#" class="px-5 py-1 text-90 ">Cancel</a>
			</div>
		</div>
	</div>
	@include('theme.core.pages.component.modal')
</div>

<script type="application/javascript">
let newPage = new Vue({
	el: "#newPage",
	data: {
		showModal: true
	}
})
</script>
@endsection