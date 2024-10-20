<div class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4">
    @if (count($products) > 0)
        @foreach ($products as $product)
            <livewire:item-card :product_details="$product" wire:key="$product->id" />
        @endforeach
    @else
        <p class="text-2xl text-gray-300">Products are Unavailable.</p>
    @endif


</div>
