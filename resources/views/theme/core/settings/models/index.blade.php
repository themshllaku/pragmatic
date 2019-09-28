@extends('layouts.app')

@section('settings-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">Models</h3>

			<div class="flex justify-between items-center my-2">
				<div class="relative">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="search" role="presentation" class="fill-current absolute search-icon-center ml-3 text-70"><path fill-rule="nonzero" d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
					<input type="text" class="appearance-none form-control form-input w-search pl-search" placeholder="Search...">
				</div>
				<div class="text-right">
					<a href="{{ route('app.settings.models.create') }}" class="btn btn-default btn-primary">New Model</a>
				</div>
			</div>
		</div>


		<div class="card relative overflow-hidden border border-50">
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="w-full table">
					<thead>
						<tr>
							<th class="w-4"></th>
							<th class="w-64 text-left">Model Name</th>
							<th class="w-22 text-left">Active</th>
							<th class="w-64 text-left">Created By</th>
							<th class="w-64 text-left">Created At</th>
							<th class="w-16"></th>
						</tr>
					</thead>
					<tbody>
						@foreach($models as $model)
							<tr>
								<td class="w-4"></td>
								<td class="w-64">{{$model->model_name}}</td>
								<td class="w-64"><span class="@if($model->active) pill-success @else pill-danger @endif"></span></td>
								<td class="w-64">{{$model->user->name}}</td>
								<td class="w-64">{{$model->created_at}}</td>
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
@endsection