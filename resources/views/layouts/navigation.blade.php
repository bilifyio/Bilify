<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:divide-y lg:divide-gray-200 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="relative z-10 flex px-2 lg:px-0">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
            </div>
            <div class="relative z-10 flex items-center lg:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
                <button type="button" class="flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    <span class="sr-only">Your cart</span>
                    <i class="fa-solid fa-bag-shopping"></i>
                </button>
            </div>
        </div>
        <nav class="hidden lg:flex lg:space-x-8 lg:py-2" aria-label="Global">
            <a href="#" class="bg-gray-100 text-gray-900 inline-flex items-center rounded-md py-2 px-3 text-sm font-medium" aria-current="page">Dashboard</a>
        </nav>
    </div>
</header>
