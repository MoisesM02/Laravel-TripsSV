
<div class="bg-white overflow-hidden mx-auto shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        
        <form {{$attributes->merge(['class' => 'max-w-full mx-auto py-5'])}}>
            {{$slot}}
        </form>
    </div>
</div>
