<x-app-layout>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="container">
                        <h2 class="text-2xl font-bold ml-6 mt-6 text-gray-800">{{__('Explore new places')}}</h2>
                        <div class="flex flex-wrap mx-4 p-8">
                        
                        @if($categories)
                            @foreach ($categories as $category)   
                            
                                {{-- Using named slots to pass data to the card component --}}
                               <x-card>
                                <x-slot:name>
                                    {{$category->name}}
                                </x-slot>
                                <x-slot:description>
                                    {{$category->description}}
                                </x-slot>
                                <x-slot:image>
                                    {{asset('storage/'.$category->image_path)}}
                                </x-slot>
                                <x-slot:route>
                                    {{Route('categories.show', ['category' => $category->id])}}
                                </x-slot>
                               </x-card>
                               
                            @endforeach
                        @else
                            {{__('There\'s no categories to show')}}
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>