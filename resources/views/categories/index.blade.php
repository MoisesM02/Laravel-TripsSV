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
                              
                            <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                                <div class="bg-white rounded-lg overflow-hidden mb-10">
                                    <img src="{{asset('storage/'.$category->image_path)}}" alt=" {{$category->name}}" class="w-full" />
                                    <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                                        <h3>
                                            <a href="javascript:void(0)" class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                                                {{$category->name}}
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color leading-relaxed mb-7">
                                            {{$category->description}}
                                        </p>
                                        <a href="{{Route('categories.show', ['category' => $category->id])}}" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                                            {{__('Discover new sites')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                                
                               
                            @endforeach
                        @else
                            {{__('No hay categorías que mostrar')}}
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>