@aware(['page'])
@props([
'age'
])
<div class="px-4 pt-24 md:py-1 flex w-full justify-center">
    <div class="max-w-7xl">
        <div class="container px-5 ">
            <div class="flex  w-full mb-4 gap-4">

                <form class="max-w-sm mx-auto">
                    <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">{{$age}}</label>
                    <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min=0  required>
                </form>
            </div>

        </div>
    </div>
</div>