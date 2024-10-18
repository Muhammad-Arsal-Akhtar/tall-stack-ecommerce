<div>
  <div x-data="{ isOpen: false, itemId: null }" @open-delete-modal.window="isOpen = true; itemId = $event.detail; console.log(itemId)" @close-modal-deleted.window="isOpen = false">
    <!-- Modal -->
    <div x-show="isOpen" x-cloak @keydown.window.escape="isOpen = false" id="hs-basic-modal" class="size-full fixed top-0 start-0 z-[80] opacity-100 overflow-x-hidden transition-all overflow-y-auto pointer-events-auto" tabindex="-1" aria-labelledby="hs-basic-modal-label">
      <div class="m-3 sm:max-w-lg sm:w-full sm:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm pointer-events-auto rounded-xl">
          <div class="flex items-center justify-between px-4 py-3 border-b">
            <h3 id="hs-basic-modal-label" class="font-bold text-gray-800">
              {{$title}} Delete
            </h3>
            <!-- Close Button -->
            <button @click="isOpen = false" type="button" class="inline-flex items-center justify-center text-gray-800 bg-gray-100 border border-transparent rounded-full size-8 gap-x-2 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </button>
          </div>
          <div class="p-4 overflow-y-auto">
            <p class="mt-1 text-gray-800">
              Are you sure you want to delete this record?
            </p>
          </div>
          <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2">
            <!-- Close Button in Footer -->
            <button @click="isOpen = false" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
              Close
            </button>
            <button @click="$wire.deleteItem(itemId)" type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
              Delete It!
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
