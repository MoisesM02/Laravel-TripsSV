<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                    <form class="max-w-sm mx-auto py-5" enctype="{{$enctype}}" action="{{$route}}">
                      {{$slot}}
                    </form>
                </div>
            </div>
        </div>
    </div>