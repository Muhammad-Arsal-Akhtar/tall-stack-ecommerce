<div>
    <section class="bg-gray-50">
        <div class="max-w-screen-xl px-4 py-10 mx-auto lg:flex lg:items-center">
          <div class="max-w-xl mx-auto text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
              Online MarketPlace.
              <strong class="font-extrabold text-emerald-700 sm:block">Discover the Quality Products Online Now. </strong>
            </h1>
      
            <p class="mt-4 sm:text-xl/relaxed">
              Browse our collection  of high-quality products and enjoy seamless online shopping.
            </p>
      
            <div class="flex flex-wrap justify-center gap-4 mt-8">
              @if (auth()->check())
                <a
                class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring active:bg-emerald-500 sm:w-auto"
                href="#"
                >
                Redeemed Your Offer
                </a>
              @else
                <a
                  class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring active:bg-emerald-500 sm:w-auto"
                  href="/auth/login"
                >
                  Get Started
                </a>
              @endif
            
              <a
                class="block w-full px-12 py-3 text-sm font-medium rounded shadow text-emerald-600 hover:text-emerald-700 focus:outline-none focus:ring active:text-emerald-500 sm:w-auto"
                href="#"
              >
                Learn More
              </a>
            </div>
          </div>
        </div>
      </section>
</div>
