<div class="w-60 bg-gray-50 shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
    <a href="#">
        <img src="{{ $image }}" alt="Product" class="h-60 w-full object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-full">
            <p class="text-lg font-bold text-black capitalize">{{ $title }}</p>
            <span class="text-gray-400 text-sm block">{!! $description !!}</span>
            <div class="flex items-center mt-2">
                <p class="text-base font-semibold text-black">Rp {{ $price }}</p>
                <del class="ml-2 text-sm text-gray-500">Rp {{ $original }}</del>
            </div>
        </div>
    </a>
</div>
