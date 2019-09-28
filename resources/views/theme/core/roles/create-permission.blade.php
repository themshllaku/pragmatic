@extends('layouts.app')

@section('roles-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto" id="create-permission">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">New Permission</h3>
		</div>

		<div class="card flex flex-col">
			<form autocomplete="off" method="POST" action="{{ route('app.roles.permissions.store') }}" class="px-3 py-3">
				@csrf
				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Permission Name</label>
		            	<p class="text-sm leading-normal text-80 italic">This is a form help text</p>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="name" class="w-full form-control form-input form-input-bordered">
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Model</label>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<div class="relative">
			        		<select name="model" class="w-full form-control form-select" @change="modelOnChange($event)">
			        			<option selected disabled>--</option>
			        			@foreach($models as $model)
			        				<option value="{{$model->id}}">{{ucfirst($model->model_name)}}</option>
			        			@endforeach
			        		</select>
			        		<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
					          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
					        </div>
					    </div>
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Available Permissions</label>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<template v-if="available_permissions.length > 0">
		        			<div class="flex items-center justify-start">
		        				<div class="mx-3 flex items-center" v-for="permission in available_permissions">
		        					<input type="radio" class="form-radio" name="permission" :value="permission.permission"> <span class="ml-1 text-90">@{{permission.name}}</span>
		        				</div>
		        			</div>
		        		</template>
		        		<template v-else>
		        			<div><span class="text-base text-80 font-normal">@{{message}}</span></div>
		        		</template>
		        	</div>
				</div>

				<div class="flex">
					<div class="w-1/5 px-8 py-6">
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<button type="submit" class="btn btn-default btn-primary">Save Permission</button>
		        	</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	let app = new Vue({
		el: "#create-permission",
		data: {
			available_permissions: [],
			message: 'n/a',
		},
		methods: {
			modelOnChange(event) {
				let modelID = event.target.value
				axios.get('/roles/permissions/available/' + modelID)
				.then(res => {
					if(res.data.message)
					{
						this.message = res.data.message
					} else {
						this.available_permissions = res.data
					}
				})
			}
		}
	})
</script>
@endsection