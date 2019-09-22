@extends('layouts.app')

@section('content')
<!-- <div style="margin-top: 20px;">
    <div class="max-w-lg mx-auto">
        <div class="bg-white p-4 w-full rounded shadow-md">
            <div class="flex flex-col">
                <form autocomplete="off" action="{{ route('register') }}" method="post">
                    @csrf
                    <div>
                        <label for="email" class="text-gray-800 block mb-2">Email</label>
                        <input name="email" type="email" class="h-10 px-3 border rounded focus:outline-none focus:border-blue-500 w-full">
                    </div>
                    <div class="mt-4">
                        <label for="password" class="text-gray-800 block mb-2">Password</label>
                        <input name="password" type="password" placeholder="************" class="h-10 px-3 border rounded focus:outline-none focus:border-blue-500 w-full">
                    </div>
                    <div class="mt-4 flex items-center">
                        <button type="submit" class="px-6 py-1 bg-gray-800 text-white rounded shadow">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
@endsection
