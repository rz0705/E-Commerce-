@extends('layout.app')
@section('content')
<form class="max-w-sm mx-auto" method="POST" action="{{ route('product.store') }}">
    @csrf
    <p class="text-center">Add Product</p>
    <hr>
    <div class="mb-1">
        <label for="name"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Product Name') }}</label>
        <input type="text" id="name" name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('name') }}" autocomplete="name" autofocus>
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-1">
        <label for="slug"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Slug') }}</label>
        <input type="text" id="slug" name="slug"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('slug') }}" autocomplete="slug">
        @error('slug')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-1">
        <label for="description"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Description') }}</label>
        <textarea id="description" name="description" rows="4" cols="30"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('description') }}" autocomplete="description"></textarea>
        @error('description')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-1">
        <label for="price"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Price') }}</label>
        <input type="number" id="price" name="price"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('price') }}" autocomplete="price">
        @error('price')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-1">
        <label for="image_path"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Image Path') }}</label>
        <input type="text" id="image_path" name="image_path"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            value="{{ old('image_path') }}" autocomplete="image_path">
        @error('image_path')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Add Product') }}</button>
</form>
@endsection