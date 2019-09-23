@extends('layouts.app')

@section('pages-active')
link-active
@endsection

@section('content')
<div class="px-view py-view mx-auto">
	<div class="relative">
		<div class="mb-3">
			<h3 class="text-90 font-normal text-2xl">New Page</h3>
		</div>

		<div class="card my-8 flex flex-col">
			<div class="py-3 px-3">
				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Model Name</label>
						<p class="text-sm leading-normal text-80 italic">This value will be used to save DB table.</p>
		            </div>
		            <div class="w-1/2 px-8 py-6">
		            	<input type="password" placeholder="..." class="w-full form-control form-input form-input-bordered"> <!---->
		            </div>
				</div>
				<div class="flex border-b border-40">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Display Title</label>
						<p class="text-sm leading-normal text-80 italic">This value will display in Panel.</p>
		            </div>
		            <div class="w-1/2 px-8 py-6">
		            	<input type="password" placeholder="..." class="w-full form-control form-input form-input-bordered"> <!---->
		            </div>
				</div>
				<div class="flex">
					<div class="w-1/5 px-8 py-6">
						<label class="inline-block text-80 h-9 pt-2" for="Example Input">Status</label>
						<p class="text-sm leading-normal text-80 italic">This value will display in Panel.</p>
		            </div>
		            <div class="w-1/2 px-8 py-6 flex items-center">
		            	<label class="flex items-center">
						    <input type="checkbox" class="form-checkbox">
						    <span class="ml-2 text-90">Active</span>
					  	</label>
		            </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection