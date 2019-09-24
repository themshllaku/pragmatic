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
								<tr v-for="field in fields" :key="keyGen++">
									<td class="w-4"></td>
									<td class="w-48 text-left">@{{field.field_name}}</td>
									<td class="w-48">@{{field.display_title}}</td>
									<td class="w-32 text-left">@{{field.type}}</td>
									<td class="w-32">
										<div class="flex items-center">
											<span :class="field.icreate ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Create"></span>
											<span :class="field.iread ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Read"></span>
											<span :class="field.iupdate ? 'pill-success' : 'pill-danger'" class="mx-1" data-tooltip="Update"></span>
										</div>
									</td>
									<td class="w-32">
										<span v-if="field.validation">True</span>
										<span v-else class="text-80">n/a</span>
									</td>
									<td class="w-16">
										<span class="flex justify-center">
											<button class="text-80">
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

		<div class="flex flex-row mt-12">
			<div class="w-1/4">
				<h3 class="text-lg font-semibold text-90-half">Add New Field</h3>
				<p class="block text-90-half text-sm">Set login preferences, help us to personalize your experience and make big account changes here.</p>
			</div>
			<div class="w-3/4 pl-2">
				<div class="card relative overflow-hidden border border-50">
					<div class="overflow-hidden overflow-x-auto relative p-4">
						<div class="flex">
							<div class="w-1/4 p-2">
								<label class="text-90 block font-semibold mb-2">Field Name</label>
								<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500" name="first_name">
							</div>
							<div class="w-1/4 p-2">
								<label class="text-90 block font-semibold mb-2">Display Title</label>
								<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500" name="last_name">
							</div>
							<div class="w-1/4 p-2">
								<label class="text-90 block font-semibold mb-2">Type</label>
								<div class="relative">
							        <select class="block appearance-none w-full font-light bg-transparent border border-60 text-90 h-10 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-indigo-500">
							        	<optgroup label="Text Fields">
							        		<option value="text">Text</option>
							        		<option value="email">Email</option>
							        		<option value="textarea">Textarea</option>
							        		<option value="password">Password</option>
							        	</optgroup>
							        	<optgroup label="Choice Fields">
							        		<option value="radio">Radio</option>
							        		<option value="checkbox">Checkbox</option>
							        	</optgroup>
							        	<optgroup label="Number Fields">
							        		<option value="integer">Integer</option>
							        		<option value="float">Float</option>
							        		<option value="double">Double</option>
							        	</optgroup>
							        </select>
							        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
							        </div>
						      	</div>
							</div>
							<div class="w-1/4 p-2">
								<label class="text-90 block font-semibold mb-2">Validation</label>
								<div class="relative">
							        <select class="block appearance-none w-full font-light bg-transparent border border-60 text-90 h-10 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-indigo-500">
							          	<option>Required</option>
							          	<option>Not Required</option>
							        </select>
							        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							          	<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg>
							        </div>
						      	</div>
							</div>
						</div>
						<div class="flex">
							<div class="w-full p-2">
								<label class="text-90 block font-semibold mb-2">Permissions</label>
								<div class="w-1/5 inline-block">
									<label class="flex items-center">
									    <input type="checkbox" class="form-checkbox">
									    <span class="ml-2">In Create</span>
								  	</label>
								</div>
								<div class="w-1/5 inline-block">
									<label class="flex items-center">
									    <input type="checkbox" class="form-checkbox">
									    <span class="ml-2">In Read</span>
								  	</label>
								</div>
								<div class="w-1/5 inline-block">
									<label class="flex items-center">
									    <input type="checkbox" class="form-checkbox">
									    <span class="ml-2">In Update</span>
								  	</label>
								</div>
								<div class="w-1/5 inline-block">
									<label class="flex items-center">
									    <input type="checkbox" class="form-checkbox">
									    <span class="ml-2">In Delete</span>
								  	</label>
								</div>
							</div>
						</div>

						<div class="flex">
							<div class="w-full p-2">
								<button class="px-5 py-1 flex items-center text-gray-800 border border-gray-800 hover:text-gray-900 rounded">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current w-5 h-5">
										<path class="heroicon-ui" d="M17 11a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4H7a1 1 0 0 1 0-2h4V7a1 1 0 0 1 2 0v4h4z"/>
									</svg>
									<span class="ml-1">Add Field</span>
								</button>
							</div>
						</div>
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
	data() {
		return {
			keyGen: 0,
			requiredFields: [],
			showModal: false,
			newField: {
				field_name: '',
				display_title: '',
				type: '',

			}
		}
	},
	methods: {
		newField() {

		}
	},
	mounted() {
		this.requiredFields = required_fields
	},
	computed: {
		fields() {
			return this.requiredFields
		}
	}
})
</script>
@endsection