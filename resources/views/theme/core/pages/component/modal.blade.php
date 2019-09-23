<template v-if="showModal">
	<div class="fixed inset-0 flex items-center justify-center">
		<div><div class="absolute inset-0 bg-black opacity-25"></div></div>
		<div class="relative">
			<div class="w-full bg-white rounded-lg shadow-2xl px-6 py-6">
				<h2 class="font-semibold text-gray-900 text-2xl leading-tight border-b-2 border-gray-200 pb-4">New Field</h2>
				<div class="flex items-center w-full">
					<div class="w-1/3 pr-2  mt-2">
						<label for="field" class="block font-semibold mb-2 text-90">Field Name</label>
						<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500">
					</div>
					<div class="w-1/3 px-2  mt-2">
						<label for="field" class="block font-semibold mb-2 text-90">Display Title</label>
						<input type="text" class="h-10 px-3 w-full font-light border border-60 rounded focus:outline-none focus:border-indigo-500">
					</div>
					<div class="w-1/3 pl-2  mt-2">
						<label for="field" class="block font-semibold mb-2 text-90">Field Type</label>
						<div class="relative">
							<select class="block appearance-none w-full font-light bg-transparent border border-60 text-90 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:border-indigo-500">
								<option>Text</option>
								<option>Manager</option>
								<option>User</option>
							</select>
							<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current h-4 w-4">
									<path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path>
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-6">
					<button type="button" class="px-4 py-2 text-white font-semibold bg-gray-800 hover:bg-gray-900 border border-transparent rounded focus:outline-none focus:shadow-outline">
		              Save Field
		            </button>
		            <button @click="showModal=false" class="ml-4 px-4 py-2 text-gray-800 font-semibold bg-white hover:bg-gray-100 border rounded focus:outline-none focus:shadow-outline">
		              Cancel
		            </button>
		        </div>
		    </div>
		</div>
	</div>
</template>