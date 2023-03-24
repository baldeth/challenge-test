<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[2400px] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between overflow-y-hidden">
                    <div class="flex items-start space-x-4">
                        <div class="w-1/3">
                            <img class="h-full w-full object-cover self-center ..." src="https://images.unsplash.com/photo-1514897575457-c4db467cf78e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384" alt="" />
                        </div>

                        <div class="w-2/3">
                          <h3 class="text-xl font-medium mb-2"></p>
                        </div>
                      </div>
                      @foreach ($category->challenges as $challenge)
                          {{ $challenge->title }}
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
