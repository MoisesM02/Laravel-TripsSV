<x-app-layout>
    <x-slot name="slot">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @if($categories)
                        @foreach ($categories as $category)
                            {{__($category->name)}}
                            <br>
                        @endforeach
                    @else
                        {{__('No hay categorías que mostrar')}}
                    @endif
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>