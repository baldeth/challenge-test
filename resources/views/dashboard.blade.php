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

                    <nav class="w-1/6 flex flex-col items-center space-y-4 roudex-lg uppercase text-lg border-r-2 overflow-y-auto">
                        @foreach ($categories as $cat)
                            <a href="{{ route('categories.show', $cat) }}" class="w-full text-center hover:bg-gray-300 hover:text-gray-900 px-4 py-2 cursor-pointer"  >{{ $cat->name }}</a>
                        @endforeach
                    </nav>

                    <main class="w-5/6 flex flex-wrap -mb-4 mx-auto pl-8 overflow-y-auto">
                        @foreach ($challenges as $challenge)
                            <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/5 mb-6 px-2 overflow-auto">
                                <div class="max-w-sm flex flex-col rounded-lg overflow-hidden bg-white shadow">
                                    <!-- card cover -->
                                    <img class="h-56 w-full object-cover"
                                      src="{{ asset('/storage/'. $challenge->image) }}" onerror="this.onerror=null;this.src='{{ asset('/storage/challenges/' . 'default.png') }}'"
                                      alt="" />
                                    <!-- end card cover -->

                                    <!-- card content -->
                                    <div class="flex-1 px-6 py-4">
                                        <div class="text-gray-800 font-bold capitalize text-xl mb-2">{{ $challenge->title }}</div>
                                        <h3 class="text-lg font-semibold uppercase text-blue-900 leading-none tracking-tighter px-3 py-2 rounded-md bg-blue-300 w-full">{{ $challenge->category->name }}</h3>
                                        <p class="text-gray-700 text-base font-sans">{{ Str::limit($challenge->description, 45, '...') }}</p>
                                    </div>
                                    <!-- end card content -->

                                    <!-- card footer -->
                                    <div class="px-4 py-4 bg-gray-100 flex justify-between">
                                      <a href="{{ route('challenges.show', $challenge) }}"
                                        class="bg-blue-600 hover:bg-blue-700 py-2 px-4 text-sm font-medium text-white border border-transparent rounded-lg focus:outline-none">Read More ...</a>
                                        <p class="text-gray-600 tracking-tighter font-sans font-bold">{{ \Carbon\Carbon::parse($challenge->created_at)->diffForHumans() }}</p>
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
