<div>
    <div class="p-1 bg-gray-200 rounded-lg shadow-sm hover:border border-emerald-400">
        <a wire:navigate href="{{ url('product-details') }}">
        <div>
            <img src="{{ $product->image ? Storage::url($product->image) : asset('products-images/spray.jpg')}}" alt="" class="object-cover h-48 rounded w-96"  />
        </div>
        <div>
            <h2 class="p-1 font-semibold text-1xl line-clamp-3">{{$product->name}}</h2>
            <h2 class="px-3 line-clamp-2">{{$product->description}}</h2>
            <div class="flex justify-between gap-3 px-3 py-2">
                <div class="p-1 rounded-md bg-emerald-200">
                    <h2 class="text-1xl">
                        {{$product->category->name}}
                    </h2>
                </div>
                <h2 class="text-1xl">${{$product->price}}</h2>
            </div>
            <div class="flex justify-center w-full px-12 py-2 text-sm font-medium text-center text-white rounded bg-emerald-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <a wire:navigate href="{{ auth()->check() ? '/add-to-cart' : '/auth/login' }}" class="">   
                    Add to Cart</a>
                
            </div>
        </div>
    </a>
    </div>
</div>
