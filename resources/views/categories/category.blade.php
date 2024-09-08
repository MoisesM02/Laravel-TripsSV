<x-app-layout>
    <x-slot name="slot">      
        <h2 class="text-2xl font-bold ml-6 mt-6 text-gray-800">{{__('Explore new places')}}</h2>
        <div class="flex flex-wrap mx-4 p-8">
            @if ($places->count())
                @foreach ($places as $place)
                    <x-card>
                        <x-slot:name>
                            {{$place->name}}
                        </x-slot>
                        <x-slot:image>
                            {{asset('storage/'. $place->image_path)}}
                        </x-slot>
                        <x-slot:description>
                            {{$place->description}}
                        </x-slot>
                        <x-slot:route>
                            {{route('places.show', ['place' =>$place->id])}}
                        </x-slot>
                    </x-card>                                    
                @endforeach
            @else
                {{__('Sorry! We have no places for this category yet, we are hoping to add some soon.')}}
            @endif
        </div>
    </x-slot>
</x-app-layout>