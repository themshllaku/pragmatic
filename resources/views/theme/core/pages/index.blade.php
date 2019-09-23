@extends('layouts.app')

@section('pages-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="relative">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Pages</h3>
		</div>

		<!-- begin::Search Field -->
		<div class="flex items-center mb-4">
			<div class="w-1/2">
				<div class="relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70">
						<path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
					</svg>
					<input placeholder="Search" type="search" class="appearance-none form-control form-input w-search pl-search focus:outline-none focus:shadow-outline">
				</div>
			</div>
			<div class="w-1/2 text-right flex justify-end">
				<a href="{{ route('app.pages.create') }}" class="px-2 text-sm font-semibold text-blue-500 flex items-center">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fill-current w-4 h-4">
						<path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
					</svg>
					<span class="ml-2 uppercase">New Page</span>
				</a>
			</div>
		</div>
		<!-- end::Search Field -->

		<!-- begin::Content -->
		<div class="card relative overflow-hidden border border-50">
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="table w-full">
					<thead>
						<tr>
							<th class="w-4"></th>
							<th class="w-48 text-left">
								<span class="cursor-pointer">Model Name</span>
							</th>
							<th class="w-48 text-left">Display Title</th>
							<th class="w-48 text-left"># Fields</th>
							<th class="w-48 text-left">Status</th>
							<th class="w-32 text-left">Date Created</th>
							<th class="w-32 text-left">Date Updated</th>
							<th class="w-16"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="w-4"></td>
							<td class="w-48">users</td>
							<td class="w-48">All Users</td>
							<td class="w-48">14</td>
							<td class="w-48">Active</td>
							<td class="w-32">12 Aug 2019</td>
							<td class="w-32">21 Sep 2019</td>
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
					</tbody>
				</table>
			</div>
		</div>
		<!-- end::Content -->
	</div>
</div>
@endsection