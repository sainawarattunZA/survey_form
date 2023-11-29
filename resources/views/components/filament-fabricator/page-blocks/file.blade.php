@aware(['page'])
@props([
'file'
    ])
    <div class="px-4 pt-24 md:py-1 flex w-full justify-center">
    <div class="max-w-7xl">
        <div class="container px-5 ">
            <div class="flex  w-full mb-4 gap-4">
                
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="multiple_files">{{ $file}}</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="multiple_files" type="file" multiple>
            </div>

        </div>
    </div>
</div>