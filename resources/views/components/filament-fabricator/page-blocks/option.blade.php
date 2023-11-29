@aware(['page'])
@props([
'name',
'select',

])
<div class="px-4 pt-24 md:py-1 flex w-full justify-center">
    <div class="max-w-7xl">
        <div class="container px-5 ">
            <div class="flex  w-full mb-4 gap-4">

                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">{{$name}}</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose</option>
                    @foreach ($select as $each )
                    <option value="{{$each['box_label']}}"> {{$each['box_label']}}</option>
                    @endforeach

                </select>
            </div>

        </div>
    </div>
</div>