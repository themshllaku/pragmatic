@extends('layouts.app')

@section('settings-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto" id="create-model">
	<div class="flex flex-col">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">New Model</h3>
		</div>

		<div class="card flex flex-col">
			<form autocomplete="off" method="POST" action="{{ route('app.settings.models.store') }}" class="px-3 py-3">
				@csrf
				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Model Name</label>
		            	<p class="text-sm leading-normal text-80 italic">This is a form help text</p>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="name" class="w-full form-control form-input form-input-bordered">
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Created By</label>
		        	</div>

		        	<div class="w-1/2 px-8 py-6">
		        		<input type="text" name="slug" value="{{Auth::user()->name}}" class="w-full form-control form-input form-input-bordered" readonly>
		        	</div>
				</div>

				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Status</label>
		        	</div>

		        	<div class="w-1/2 flex items-center px-8 py-6">
		        		<input type="checkbox" name="active" class="form-checkbox"> <span class="ml-2 text-80">Active</span>
		        	</div>
				</div>

				<div class="flex">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Permissions</label>
		        	</div>

		        	<div class="w-1/2 flex items-center px-8 py-6">
		        		<div class="relative w-full">
			        		<select name="permissions" class="w-full form-control form-select">
			        			<option selected disabled>--</option>
			        			<option value="1">Auto Create</option>
			        			<option value="0">Create Later</option>
			        		</select>
			        		<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
					          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
					        </div>
					    </div>
		        	</div>
				</div>
			</form>
		</div>

		<div class="mb-3 mt-10">
			<h3 class="text-90 font-normal text-2xl">Fields</h3>
		</div>

		<div class="card relative overflow-hidden border border-50">
			<div class="overflow-hidden overflow-x-auto relative">
				<table class="w-full table">
					<thead>
						<tr>
							<th class="w-4"></th>
							<th class="w-64 text-left">Field Name</th>
							<th class="w-64 text-left">Display Name</th>
							<th class="w-64 text-left">Field Type</th>
							<th class="w-32 text-left">Access</th>
							<th class="w-64 text-left">Required</th>
							<th class="w-16"></th>
						</tr>
					</thead>
					<tbody>
						<tr v-if="rowData.length > 0" v-for="row in rowData">
							<td class="w-4"></td>
							<td class="w-64">@{{row.field_name}}</td>
							<td class="w-64">@{{row.display_title}}</td>
							<td class="w-64">@{{row.field_type}}</td>
							<td class="w-32">
								<div class="flex items-center">
									<span :class="row.access.create ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Create"></span>
									<span :class="row.access.read ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Read"></span>
									<span :class="row.access.update ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Update"></span>
									<span :class="row.access.delete ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Delete"></span>
								</div>
							</td>
							<td class="w-64">
								<span v-if="row.required">True</span>
								<span v-else>False</span>
							</td>
							<td class="w-16">
								<span class="flex justify-center">
									<a href="#" class="text-80 hover:text-red-500">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
											<path d="M8 6V4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8H3a1 1 0 1 1 0-2h5zM6 8v12h12V8H6zm8-2V4h-4v2h4zm-4 4a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0v-6a1 1 0 0 1 1-1z" class="heroicon-ui"></path>
										</svg>
									</a>
								</span>
							</td>
						</tr>
						<tr>
							<td class="w-4"></td>
							<td class="w-64">
								<input type="text" v-model="current.field_name" class="w-full form-control form-input form-input-bordered">
							</td>
							<td class="w-64">
								<input type="text" v-model="current.display_title" class="w-full form-control form-input form-input-bordered">
							</td>
							<td class="w-64">
								<div class="relative">
					        		<select v-model="current.field_type" name="permissions" class="w-full form-control form-select">
					        			<option selected disabled>--</option>
					        			<option value="text">Text</option>
					        			<option value="password">Password</option>
					        			<option value="email">Email</option>
					        		</select>
					        		<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							        </div>
							    </div>
							</td>
							<td class="w-32">
								<input type="checkbox" v-model="current.access.create" class="form-checkbox" data-tooltip="CREATE">
								<input type="checkbox" v-model="current.access.read" class="form-checkbox" data-tooltip="READ">
								<input type="checkbox" v-model="current.access.update" class="form-checkbox" data-tooltip="UPDATE">
								<input type="checkbox" v-model="current.access.delete" class="form-checkbox" data-tooltip="DELETE">
							</td>
							<td class="w-64">
								<div class="relative">
					        		<select name="required" v-model="current.required" class="w-full form-control form-select">
					        			<option selected disabled>--</option>
					        			<option value="1">True</option>
					        			<option value="0">False</option>
					        		</select>
					        		<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
							        </div>
							    </div>
							</td>
							<td>
								<span class="flex justify-center">
									<button type="button" @click="addField" class="text-80 hover:text-blue-500 focus:outline-none">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-6 h-6"><path class="heroicon-ui" d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/></svg>
									</a>
								</span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>

<script>
	let app = new Vue({
		el: "#create-model",
		data: {
			current: {
				field_name: '',
				field_type: '',
				display_title: '',
				access: {create: 0, read: 0, update: 0, delete: 0},
				required: 0,
			},
			rowData: []
		},
		methods: {
			addField() {
				let newObject = {
					field_name: this.current.field_name,
					field_type: this.current.field_type,
					display_title: this.current.display_title,
					access: this.current.access,
					required: this.current.required,
				};
				this.rowData.push(newObject)
				this.cleanData()
			},
			cleanData() {
				this.current.field_name = ''
				this.current.field_type = ''
				this.current.display_title = ''
				this.current.access = {create: 0, read: 0, update: 0, delete: 0}
				this.current.required = 0
			}
		}
	})
</script>
@endsection