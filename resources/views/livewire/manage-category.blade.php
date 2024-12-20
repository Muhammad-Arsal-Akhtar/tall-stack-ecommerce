<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl">
                        <!-- Header -->
                        <div
                            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">
                                    Category
                                </h2>
                                <p class="text-sm text-gray-600">
                                    Add category, edit and more.
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <div class="max-w-sm space-y-3">
                                        <input wire:model.live="search" type="text" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Search Category" />
                                    </div>
                                    
                                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-lg gap-x-2 hover:bg-teal-700 focus:outline-none focus:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none"
                                        href="/admin/add/category">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="M12 5v14" />
                                        </svg>
                                        Add category
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-5 py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                        <div class="flex items-center justify-center px-5 gap-x-2">
                                            <button wire:click="sortSetting('name')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase" >
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

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center justify-center gap-x-2">
                                            <button wire:click="sortSetting('created_at')"
                                                class="flex items-center text-xs font-semibold tracking-wide text-gray-800 uppercase" >
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

                                    <th scope="col" class="flex items-center justify-center px-6 py-3 item text-end">Actions</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-5 size-px whitespace-nowrap">
                                            <div class="flex items-center justify-center py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                <div class="flex items-center gap-x-3">
                                                    <div class="grow">
                                                        <span
                                                            class="block text-sm font-semibold text-gray-800">{{ ucfirst($category->name) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="size-px whitespace-nowrap">
                                            <div class="flex items-center justify-center px-6 py-3">
                                                <span class="text-sm text-gray-500">{{$category->created_at}}</span>
                                            </div>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <div class="px-6 py-1.5 flex items-center justify-evenly">
                                                <a wire:navigate class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline"
                                                    href="edit/{{$category->id}}/category">
                                                    Edit
                                                </a>

                                                <!-- Open Modal Button -->
                                                <a
                                                @click="$dispatch('open-delete-modal', {{$category->id}})"
                                                 class="inline-flex items-center text-sm font-medium text-red-600 cursor-pointer gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline" >
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr> 
                                @endforeach   
                                <div wire:loading.delay.longest wire:target="search"> 
                                    Checking availability of username...
                                </div>                           
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center">
                            <div class="max-w-sm space-y-3">
                                <select class="block px-3 py-2 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500" wire:model.change="perPage">
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="5">5</option>
                                </select>
                            </div>

                            <div>
                                <div class="">
                                    {{ $categories->links() }}
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

    {{-- Single Modal for deletion of Data --}}
    <x-delete-modal>
        <x-slot:title>
            Category
        </x-slot:title>
    </x-delete-modal>
</div>

