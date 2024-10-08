<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Category') }}
        </h2>
    </x-slot>
    <x-slot name="slot">
        <x-form enctype="multipart/form-data" method="POST" :route="route('categories.store')">
        @csrf
                        @if (session('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                                <span class="font-medium">Success!</span> {{session('success')}}
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="p-4 mt-5 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                            <div class="alert alert-danger">
                                
                            </div>
                        @endif
                        
                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{old('name')}}" placeholder="What is the name of the new category?"/>
                        </div>
                        <div class="mb-5">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Give a brief description of this category...">{{old('description')}}</textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="image" class="block text-gray-700 font-medium mb-2">Upload Image</label>
                            <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                        </div>
                        <x-primary-button>
                            {{__('Create')}}
                        </x-primary-button>
                        
        </x-form>
    </x-slot>
</x-app-layout>