<!-- Para poder pasar las variables, hay que modificar la clase Card y agregarlas ahí -->
<div {{$attributes->merge(['class' => "w-full md:w-1/2 xl:w-1/3 px-4"])}} >
    <div class="bg-white rounded-lg overflow-hidden mb-10">
        <img src="{{$image}}" alt="{{$name}}" class="w-full" />
        <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
            <h3>
                <a href="javascript:void(0)" class="font-semibold text-dark text-xl sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px] mb-4 block hover:text-primary">
                    {{$name}}
                </a>
            </h3>
            <p class="text-base text-body-color leading-relaxed mb-7">
                {{$description}}
            </p>
            <a href="{{$route}}" class="inline-block py-2 px-7 border border-[#E5E7EB] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-white transition">
                {{__('Discover new sites')}}
            </a>
        </div>
    </div>
</div>