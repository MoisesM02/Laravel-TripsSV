<x-app-layout>
    <x-slot name="slot">

    <x-form enctype="multipart/form-data" :route="route('places.create')">
        @csrf
        @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success!</span> {{session('success')}}
            </div>
        @endif
        
        <div class="mb-5">
            <x-input-label value="Place's name" for="name" class="mb-2" />
            <x-text-input name="name" class="block w-full rounded-lg" value="{{old('name')}}"/>
        </div>
        
        <div class="mb-5">
            <x-input-label value="Category" for="category_id" />
            <select name="category_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" id="category_id">

                @if ($categories->count())
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                    @endforeach
                @else
                <option value="0">{{__('There are no categories to display')}}</option> 
                @endif
            </select>
        </div>
        
        <div class="mb-5">
            <x-input-label for="description" value="Description"/>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tell us a description of this place...">{{old('description')}}</textarea>
        </div>
        
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Upload Image</label>
            <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <x-input-label value ="content" for="content"/>
            <textarea name="content" id="content">{{old('content')}}</textarea>
        </div>
        <x-primary-button>
            {{__('Create')}}
        </x-primary-button>
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
    </x-form>
    </x-slot>
</x-app-layout>