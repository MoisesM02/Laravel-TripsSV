<x-app-layout>
    <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Place') }}
    </h2>
    </x-slot>
    <x-slot name="slot">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mx-6 my-3">{{$place->name}}</h2>
        <div class="flex justify-center items-center mx-6 my-3">
            <img src="{{asset('storage/'. $place->image_path)}}" class="rounded-xl h-1/4" alt="" srcset="">
        </div>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mx-6 my-3">
            {{ __('Description') }}
        </h2>
        <section name="description" class="my-3 mx-6">
            {{$place->description}}
        </section>
        <section name="content" class=" mx-6 my-3">
            {{!! $place->content !!}}
        </section>

    </x-slot>
</x-app-layout>