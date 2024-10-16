<div> 
    <livewire:bread-crumb :url="$this->currentURL"  />
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Header -->
                        <div
                            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                    Products
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Add products, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <div class="max-w-sm space-y-3">
                                        <input wire:model.lazy="search" type="text" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Search Product" />
                                    </div>

                                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-lg gap-x-2 hover:bg-teal-700 focus:outline-none focus:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="/admin/add/product">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add product
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <th scope="col" class="px-5 py-3 text-center ps-6 lg:ps-3 xl:ps-0 pe-6">
                                        <div class="flex items-center justify-center px-5 gap-x-2">
                                            <button wire:click="sortSetting('name')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200" >
                                                Name
                                                    @if ($sortColumn != 'name')
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg> 
                                                    @elseif ($sortBy == 'ASC')   
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                        
                                                    @endif
                                                
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class="flex items-center justify-center gap-x-2">
                                            <button wire:click="sortSetting('description')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200" >
                                                Description
                                                    @if ($sortColumn != 'description')
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg> 
                                                    @elseif ($sortBy == 'ASC')   
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                        
                                                    @endif
                                                
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class="flex items-center justify-center gap-x-2">
                                            <button wire:click="sortSetting('price')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200" >
                                                Price
                                                    @if ($sortColumn != 'price')
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg> 
                                                    @elseif ($sortBy == 'ASC')   
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                        
                                                    @endif
                                                
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class="flex items-center justify-center gap-x-2">
                                            <button wire:click="sortSetting('category_id')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200" >
                                                Category
                                                    @if ($sortColumn != 'category_id')
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg> 
                                                    @elseif ($sortBy == 'ASC')   
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                        
                                                    @endif
                                                
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">
                                        <div class="flex items-center justify-center gap-x-2">
                                            <button wire:click="sortSetting('created_at')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200" >
                                                Created At
                                                    @if ($sortColumn != 'created_at')
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                        </svg> 
                                                    @elseif ($sortBy == 'ASC')   
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                        
                                                    @endif
                                                
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-center">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                               @foreach ($products as $product)  
                                    <tr>
                                        <td class="px-5 size-px whitespace-nowrap">
                                            <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                <div class="flex items-center gap-x-3">
                                                    <img class="inline-block size-[38px] rounded-full"
                                                        src="{{asset('storage/'.$product->image)}}"
                                                        alt="Avatar">
                                                    <div class="grow">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$product->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="h-px px-4 w-72 whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$product->description}}</span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span
                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                    <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                    {{$product->price}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-3">
                                                    <span class="text-xs text-gray-500 dark:text-neutral-500">{{ ucfirst($product->category->name)}}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-500 dark:text-neutral-500">{{$product->created_at}}</span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-1.5">
                                                <a wire:navigate class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                href="{{ url('admin/edit/' . $product->id . '/product') }}">
                                                    Edit
                                                </a>

                                                {{-- <a class="inline-flex items-center text-sm font-medium text-red-600 cursor-pointer gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-red-500" --}}
                                                {{-- @click="$dispatch('open-delete-modal', {{$product->id}})" --}}
                                                {{-- aria-haspopup="dialog" 
                                                aria-expanded="false" aria-controls="hs-slide-up-animation-modal"  
                                                data-hs-overlay="#hs-slide-up-animation-modal" --}}
                                                {{-- > --}}
                                                    {{-- <button type="button" class="inline-flex items-center px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-slide-up-animation-modal" data-hs-overlay="#hs-slide-up-animation-modal">
                                                        Open modal
                                                      </button> --}}
                                                    {{-- Delete
                                                </a> --}}
                                                <!-- Open Modal Button -->
                                                <a @click="$dispatch('open-delete-modal', {{$product->id}})" class="inline-flex items-center text-sm font-medium text-red-600 cursor-pointer gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-red-500" >
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach                               
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                            <div class="max-w-sm space-y-3">
                                <select class="block px-3 py-2 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400" wire:model.change="perPage">
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="5">5</option>
                                </select>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
    <x-delete-modal>
        <x-slot:title>
            Product
        </x-slot:title>
    </x-delete-modal>
    
</div>
