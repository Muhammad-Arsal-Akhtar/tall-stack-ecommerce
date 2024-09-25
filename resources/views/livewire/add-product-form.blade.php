<div>
    <livewire:bread-crumb :url="$currentURL" />
    <!-- Card Section -->
    <div class="max-w-4xl px-4 py-10 mx-auto sm:px-6 lg:px-8 lg:py-14">
        <!-- Card -->
        <div class="p-4 bg-teal-100 shadow rounded-xl sm:p-7 dark:bg-neutral-900">
            <form wire:submit="saveNewProduct">
                <!-- Section -->
                <div
                    class="grid gap-2 py-8 border-t border-gray-200 sm:grid-cols-12 sm:gap-4 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Add New Product
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-full-name"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Name of Product
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div class="sm:flex">
                            <input wire:model="name" id="af-submit-application-full-name" type="text"
                                class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" />
                        </div>
                        @error('name')
                          <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-price"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Price
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <input wire:model="price" id="af-submit-application-price" type="number"
                            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            @error('price')
                                  <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                      <label for="af-submit-application-category"
                          class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                          Category
                      </label>
                  </div>
                  <!-- End Col -->
                  
                  <div class="sm:col-span-9">
                      <select wire:model="category" id="af-submit-application-category"
                          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                          <option value="">Select a Category</option>
                          <option value="category1">1</option>
                          <option value="category2">2</option>
                          <option value="category3">3</option>
                          <!-- Add more options as needed -->
                      </select>
                  
                      @error('category')
                          <span class="text-red-500">{{ $message }}</span>
                      @enderror
                  </div>
                  <!-- End Col -->

                </div>
                <!-- End Section -->

                <!-- Section -->
                <div
                    class="grid gap-2 py-8 border-t border-gray-200 sm:grid-cols-12 sm:gap-4 first:pt-0 last:pb-0 first:border-transparent dark:border-neutral-700 dark:first:border-transparent">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Extra Details
                        </h2>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <label for="af-submit-application-resume-cv"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Image
                        </label>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-cancel="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label for="af-submit-application-resume-cv" class="sr-only">Choose file</label>
                            <input type="file" wire:model="photo" id="af-submit-application-resume-cv"
                                class="block w-full text-sm border border-gray-200 rounded-lg shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">
                                @error('photo')
                                  <span class="text-red-500">{{ $message }}</span>
                                @enderror

                            <!-- Progress Bar -->
                            <div x-show="uploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                        </div>

                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-3">
                        <div class="inline-block">
                            <label for="af-submit-application-bio"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Description
                            </label>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="sm:col-span-9">
                        <textarea wire:model="description" id="af-submit-application-bio"
                            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            rows="6" placeholder="Add a Prduct Description"></textarea>
                            @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Section -->

                <button type="submit"
                    class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-lg gap-x-2 hover:bg-teal-700 focus:outline-none focus:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none"
                    wire:loading.attr="disabled">
                    <span wire:loading.remove>Click to Add</span>

                    <!-- Show loading spinner when the button is clicked -->
                    <span wire:loading>
                        <svg class="w-5 h-5 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                        </svg>
                    </span>
                </button>
            </form>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
</div>
