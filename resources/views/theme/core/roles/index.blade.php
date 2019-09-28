@extends('layouts.app')

@section('roles-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto" id="roles-and-permissions">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Roles</h3>

			<div class="flex justify-between items-center my-2">
				<div class="relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
					<input type="text" class="appearance-none form-control form-input w-search pl-search" placeholder="Search...">
				</div>
				<div class="text-right">
					<a href="{{ route('app.roles.create') }}" class="btn btn-default btn-primary">New Role</a>
				</div>
			</div>
		</div>

		<!-- begin::Content -->
		<div class="card relative overflow-hidden border border-50">
			<div class="py-3 px-3">
				<div class="flex items-center justify-between">
					<div class="relative">
						<input type="checkbox" class="form-checkbox">
					</div>
				</div>
			</div>
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="table w-full">
					<thead>
						<tr>
							<th class="w-4 text-left"></th>
							<th class="w-48 text-left">Name</th>
							<th class="w-64 text-left">Slug</th>
							<th class="w-64 text-left">Description</th>
							<th class="w-32 text-left">Active</th>
							<th class="w-16 text-left"></th>
						</tr>
					</thead>
					<tbody>
						@if(count($roles) == 0)
						<tr>
							<td colspan="6" class="w-full text-center">
								<div class="flex flex-col mt-6 items-center justify-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="65" height="51" viewBox="0 0 65 51" class="mb-3">
										<g id="Page-1" fill="none" fill-rule="evenodd">
											<g id="05-blank-state" fill="#A8B9C5" fill-rule="nonzero" transform="translate(-779 -695)">
												<path id="Combined-Shape" d="M835 735h2c.552285 0 1 .447715 1 1s-.447715 1-1 1h-2v2c0 .552285-.447715 1-1 1s-1-.447715-1-1v-2h-2c-.552285 0-1-.447715-1-1s.447715-1 1-1h2v-2c0-.552285.447715-1 1-1s1 .447715 1 1v2zm-5.364125-8H817v8h7.049375c.350333-3.528515 2.534789-6.517471 5.5865-8zm-5.5865 10H785c-3.313708 0-6-2.686292-6-6v-30c0-3.313708 2.686292-6 6-6h44c3.313708 0 6 2.686292 6 6v25.049375c5.053323.501725 9 4.765277 9 9.950625 0 5.522847-4.477153 10-10 10-5.185348 0-9.4489-3.946677-9.950625-9zM799 725h16v-8h-16v8zm0 2v8h16v-8h-16zm34-2v-8h-16v8h16zm-52 0h16v-8h-16v8zm0 2v4c0 2.209139 1.790861 4 4 4h12v-8h-16zm18-12h16v-8h-16v8zm34 0v-8h-16v8h16zm-52 0h16v-8h-16v8zm52-10v-4c0-2.209139-1.790861-4-4-4h-44c-2.209139 0-4 1.790861-4 4v4h52zm1 39c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8z"></path>
											</g>
										</g>
									</svg>
									<span class="text-base text-80 font-normal mb-6">No records found in database.</span>
								</div>
							</td>
						</tr>
						@else
							@foreach($roles as $role)
								<tr>
									<td class="w-4"></td>
									<td class="w-48">{{$role->name}}</td>
									<td class="w-64">{{$role->slug}}</td>
									<td class="w-64">{{$role->description}}</td>
									<td class="w-32"><span class="@if($role->active) pill-success @else pill-danger @endif"></span></td>
									<td class="w-16">
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			</div>
		</div>

		<div class="mb-3 mt-10">
			<h3 class="text-90 font-normal text-2xl">Permissions</h3>

			<div class="flex justify-between items-center my-2">
				<div class="relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
					<input type="text" class="appearance-none form-control form-input w-search pl-search" placeholder="Search...">
				</div>
				<div class="text-right">
					<a href="{{ route('app.roles.permissions.create') }}" class="btn btn-default btn-primary">New Permission</a>
				</div>
			</div>
		</div>

		<div class="card relative overflow-hidden border border-50">
			<div class="py-3 px-3">
				<div class="flex items-center justify-between">
					<div class="relative">
						<input type="checkbox" class="form-checkbox">
					</div>
					<div class="flex">
						<button type="button" class="btn-icon btn-outline mx-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
								<path class="heroicon-ui" d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z"/>
							</svg>
						</button>
						<button type="button" class="btn-icon btn-default btn-primary">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
								<path class="heroicon-ui" d="M20.12 11.95l-6.58 6.59a5 5 0 1 1-7.08-7.07l6.59-6.6a3 3 0 0 1 4.24 4.25l-6.58 6.59a1 1 0 1 1-1.42-1.42l6.59-6.58a1 1 0 0 0-1.42-1.42l-6.58 6.59a3 3 0 0 0 4.24 4.24l6.59-6.58a5 5 0 0 0-7.08-7.08l-6.58 6.6a7 7 0 0 0 9.9 9.9l6.59-6.6a1 1 0 0 0-1.42-1.4z"/>
							</svg>
						</button>
					</div>
				</div>
			</div>
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="table w-full">
					<thead>
						<tr>
							<th class="w-2 text-left"></th>
							<th class="w-64 text-left">Name</th>
							<th class="w-64 text-left">Slug</th>
							<th class="w-64 text-left">Model</th>
							<th class="w-16 text-left"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($permissions as $permission)
						<tr>
							<td class="w-2">
								<input type="checkbox" class="form-checkbox" value="{{$permission->id}}" id="{{$permission->id}}">
							</td>
							<td class="w-64">{{$permission->name}}</td>
							<td class="w-64">{{$permission->slug}}</td>
							<td class="w-64">{{ucfirst($permission->model->model_name)}}</td>
							<td class="w-16">
								<span class="flex">
									<a href="#" class="text-80 hover:text-blue-500">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
											<path d="M6.3 12.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H7a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h6a1 1 0 0 1 0 2H4v14h14v-6z"/>
										</svg>
									</a>
								</span>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	let roles = new Vue({
		el: "#roles-and-permissions",
		data: {
			permissionsSelected: [],
        	allPermissionsSelected: false,
        	pIDS: []
		},
		methods: {

	    }
	})
</script>
@endsection