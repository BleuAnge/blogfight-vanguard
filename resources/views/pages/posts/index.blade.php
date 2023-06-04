@extends('layout')

@section('body')

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($posts) == 0)
            @foreach($posts as $item)
                <x-post-card :item="$item" />
            @endforeach

        @else
            <p> No Post Found </p>

        @endunless
    </div>

    <div class="mt-4 p-4">
        {{ $posts->links() }}
    </div>
@endsection