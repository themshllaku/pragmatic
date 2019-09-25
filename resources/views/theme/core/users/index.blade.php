@extends('layouts.app')

@section('users-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Users</h3>
			<div class="flex items-center my-2">
				<div class="w-1/2">
					<input type="text" class="h-10 w-1/2 px-3 border bg-white focus:outline-none rounded" placeholder="Search...">
				</div>
				<div class="w-1/2 text-right">
					<a href="#" class="font-bold py-2 px-6 bg-blue-600 text-white rounded shadow">New User</a>
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
							<td class="w-48">{{$user->status}}</td>
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