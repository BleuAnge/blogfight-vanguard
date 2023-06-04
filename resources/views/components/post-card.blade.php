@props(['item'])

<x-card class="p-6">
    <div class="flex">
        <img    class="hidden w-48 mr-6 md:block"
                src="{{asset('images/no-image-icon.png')}}"
                alt=""/>
        <div>
            <h3 class="text-2xl">
                <a href="posts/{{ $item->id }}">{{ $item->title }}</a>
            </h3>
            <x-post-tags :tagsCsv="$item->tags"/>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $item->sender }}
            </div>
        </div>
    </div>
</x-card>