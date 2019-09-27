@extends('layouts.app')

@section('roles-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto" id="create-role">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">New Role</h3>
		</div>

		<div class="card flex flex-col">
			<form autocomplete="off" method="POST" action="{{ route('app.roles.permissions.store') }}" class="px-3 py-3">
				@csrf
				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Role Name</label>
		            	<p class="text-sm leading-normal text-80 italic">This is a form help text</p>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="name" class="w-full form-control form-input form-input-bordered">
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Role Slug</label>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="slug" class="w-full form-control form-input form-input-bordered" readonly>
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Description</label>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="description" class="w-full form-control form-input form-input-bordered">
		        	</div>
				</div>

				<div class="flex">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Status</label>
		        	</div>

		        	<div class="w-1/2 flex items-center px-8 py-6">
		        		<input type="checkbox" name="active" class="form-checkbox"> <span class="ml-2 text-80">Active</span>
		        	</div>
				</div>
			</form>
		</div>

		<div class="mb-3 mt-10">
			<div class="flex justify-between">
				<h3 class="text-90 font-normal text-2xl">Attach Permissions</h3>

				<div>

				</div>
			</div>
		</div>

		<div class="card flex flex-col">
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="table w-full">
					<thead>
						<tr>
							<th class="w-1/5"></th>
							<th class="w-1/5 text-center">
								<span>CREATE</span>
							</th>
							<th class="w-1/5 text-center">
								<span>READ</span>
							</th>
							<th class="w-1/5 text-center">
								<span>UPDATE</span>
							</th>
							<th class="w-1/5 text-center">
								<span>DELETE</span>
							</th>
						</tr>
					</thead>
					<tbody>
						@foreach($models as $model)
						<tr>
							<td class="w-1/5">{{ucfirst($model->model_name)}}</td>
							<td class="w-1/5 text-center">
								@if($model->can('create'))
									<input type="checkbox" class="form-checkbox">
								@endif
							</td>
							<td class="w-1/5 text-center">
								@if($model->can('read'))
									<input type="checkbox" class="form-checkbox">
								@endif
							</td>
							<td class="w-1/5 text-center">
								@if($model->can('update'))
									<input type="checkbox" class="form-checkbox">
								@endif
							</td>
							<td class="w-1/5 text-center">
								@if($model->can('delete'))
									<input type="checkbox" class="form-checkbox">
								@endif
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
	let app = new Vue({
		el: "#create-role",
		data: {
			available_permissions: []
		},
		methods: {
			modelOnChange(event) {
				let modelID = event.target.value
				axios.get('/roles/permissions/model/' + modelID)
				.then(res => {
					console.log(res.data)
					this.available_permissions = res.data
				})
			}
		}
	})
</script>
@endsection