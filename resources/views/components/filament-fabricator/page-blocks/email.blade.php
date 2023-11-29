@aware(['page'])
@props([
'Email'
    ])
    <div class="px-4 pt-24 md:py-1 flex w-full justify-center">
    <div class="max-w-7xl">
        <div class="container px-5 ">
            <div class="flex  w-full mb-4 gap-4">
                <div class="w-full">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">{{ $Email}}</h1>
                <input type="email" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300
                 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>

        </div>
    </div>
</div>
