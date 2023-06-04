@extends('layout')

@section('body')
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Post
            </h2>
            <p class="mb-4">Share your thoughts</p>
        </header>

        <form method="POST" action="/posts">
            @csrf
            <div class="mb-6">
                <label  for="title"
                        class="inline-block text-lg mb-2">
                    Post Title
                </label>
                <input  type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        value="{{old('title')}}"/>
                @error('title')
                    <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label  for="description" 
                        class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea   class="border border-gray-200 rounded p-2 w-full"
                            rows="5"
                            style="resize: none;"
                            name="description"
                            placeholder="Example: Did you know that in terms of.....">{{old('description')}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label  for="sender"
                        class="inline-block text-lg mb-2">
                    Sender
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="sender"
                    placeholder="Example: mirei_zakusa@ship.com"
                    value="{{old('sender')}}"/>
                @error('sender')
                    <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="format" class="inline-block text-lg mb-2">
                    Format
                </label>
                <select class="border border-gray-200 rounded p-2 w-full"
                        name="format">
                    <option value="Premium">Premium</option>
                    <option value="V-Premium">V-Premium</option>
                    <option value="D-Standard">D-Standard</option>
                </select>
            </div>

            <div class="mb-6">
                <label for="nation" class="inline-block text-lg mb-2">
                    Nation
                </label>
                <select class="border border-gray-200 rounded p-2 w-full"
                        name="nation">
                    <option value="Keter Santuary">Keter Santuary</option>
                    <option value="Dragon Empire">Dragon Empire</option>
                    <option value="Dark States">Dark States</option>
                    <option value="Stoichea">Stoichea</option>
                    <option value="Bradnt Gate">Bradnt Gate</option>
                    <option value="Lyrical Monestario">Lyrical Monestario</option>
                    <option value="Token Ranbu">Token Ranbu</option>
                    <option value="Monster Strike">Monster Strike</option>
                    <option value="Shaman King">Shaman King</option>
                    <option value="Records of Ragnarok">Records of Ragnarok</option>
                </select>
            </div>

            <div class="mb-6">
                <label  for="deck_name"
                        class="inline-block text-lg mb-2">Deck Name</label>
                <input  type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="deck_name"
                        placeholder="Example: Super Mega Ultra Deck"
                        value="{{old('deck_name')}}"/>
                @error('deck_name')
                    <p class="text-red-500 text-xs-mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Deck Image
                </label>
                <input  type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"/>
            </div> --}}

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Post
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
@endsection