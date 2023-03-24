<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-[2400px] mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="h-screen p-6 text-gray-900 dark:text-gray-100 flex justify-between overflow-y-hidden">
                    <nav class="w-1/5 flex flex-col space-y-4 p-2 roudex-lg uppercase text-lg border-r-2 overflow-y-auto">
                        @foreach ($categories as $category)
                            <a href="{{ route('categories.show', $category) }}" class="hover:bg-blue-700 px-4 py-1 cursor-pointer">{{ $category->name }}</a>
                        @endforeach
                    </nav>

                    <main class="w-4/5 flex flex-wrap -mb-4 mx-auto pl-8 overflow-y-auto">
                        @foreach ($challenges as $challenge)
                            <div class="w-full md:w-1/2 lg:w-1/4 mb-6 px-2 overflow-auto">
                                <div class="max-w-sm flex flex-col rounded-lg overflow-hidden bg-white shadow">
                                    <!-- card cover -->
                                    <img class="h-56 w-full object-cover"
                                      src="https://images.unsplash.com/photo-1514897575457-c4db467cf78e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384"
                                      alt="" />
                                    <!-- end card cover -->

                                    <!-- card content -->
                                    <div class="flex-1 px-6 py-4">
                                        <div class="text-gray-800 font-bold capitalize text-xl mb-2">{{ $challenge->title }}</div>
                                        <h3 class="text-lg font-semibold uppercase text-blue-900 leading-none tracking-tighter px-3 py-2 rounded-md bg-blue-300 w-56">{{ $challenge->category->name }}</h3>
                                        <p class="text-gray-700 text-base">{{ Str::limit($challenge->description, 45, '...') }}</p>
                                    </div>
                                    <!-- end card content -->

                                    <!-- card footer -->
                                    <div class="px-6 py-4 bg-gray-100">
                                      <a href="{{ route('challenges.show', $challenge) }}"
                                        class="bg-blue-600 hover:bg-blue-700 py-2 px-4 text-sm font-medium text-white border border-transparent rounded-lg focus:outline-none">Read More ...</a>
                                    </div>
                                    <!-- end card footer -->
                                  </div>
                            </div>
                        @endforeach
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
