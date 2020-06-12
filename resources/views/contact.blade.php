@extends('layout')

@section('head')
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection

@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<h2 class="heading has-text-weigth-bold is-size-4">Contact Me</h2>
        <form method="POST" action="/contact" class="bg-white p-6 rounded shadow-mb"  style="width: 300px">
            @csrf
            <div class="mb-5">
                <label for="email" class="block text-xs uppercase font-semibold mb-1">Email Address</label>
                <input type="text" id="email" name="email" class="border px-2 py-1 text-sm w-full">
                @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
                <br><br>
                <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">Email Me</button>
                @if(session('message'))
                    <p class="text-green-500 text-xs mt-2">{{ session('message') }}</p>
                @endif
            </div>
        </form>
	</div>
</div>
@endsection
