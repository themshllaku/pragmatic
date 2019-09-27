@extends('layouts.app')

@section('users-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Users</h3>
			<div class="flex justify-between items-center my-2">
				<div class="relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
					<input type="text" class="appearance-none form-control form-input w-search pl-search" placeholder="Search...">
				</div>
				<div class="text-right">
					<a href="{{ route('app.users.create') }}" class="btn btn-default btn-primary">New User</a>
				</div>
			</div>
		</div>

		<!-- begin::Content -->
		<div class="card relative overflow-hidden border border-50">
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="table w-full">
					<thead>
						<tr>
							<th class="w-4"></th>
							<th class="w-48 text-left">
								<span class="cursor-pointer">Full Name</span>
							</th>
							<th class="w-48 text-left">Email</th>
							<th class="w-48 text-left">Status</th>
							<th class="w-48 text-left">Created</th>
							<th class="w-16"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td class="w-4"></td>
							<td class="w-48">{{$user->name}}</td>
							<td class="w-48">{{$user->email}}</td>
							<td class="w-48">{{$user->active}}</td>
							<td class="w-32">{{$user->created_at}}</td>
							<td>
								<span class="flex items-center justify-end">
									<a class="cursor-pointer text-70 mr-3 hover:text-blue-500" title="View">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 16" aria-labelledby="view" role="presentation" class="fill-current">
											<path d="M16.56 13.66a8 8 0 0 1-11.32 0L.3 8.7a1 1 0 0 1 0-1.42l4.95-4.95a8 8 0 0 1 11.32 0l4.95 4.95a1 1 0 0 1 0 1.42l-4.95 4.95-.01.01zm-9.9-1.42a6 6 0 0 0 8.48 0L19.38 8l-4.24-4.24a6 6 0 0 0-8.48 0L2.4 8l4.25 4.24h.01zM10.9 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
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
		<!-- end::Content -->
	</div>
</div>
@endsection