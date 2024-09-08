
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        
        <form {{$attributes->merge(['class' => 'max-w-sm mx-auto py-5'])}} >
            {{$slot}}
        </form>
    </div>
</div>
