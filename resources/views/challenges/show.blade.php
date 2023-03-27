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

                    @include('partials/categories')

                    <main class="w-5/6 flex flex-col mx-auto p-8 overflow-y-auto">
                        <h2 class="text-4xl text-center capitalize font-bold">{{ $challenge->title }}</h2>
                        <hr class="w-full my-12">
                        <div class="flex justify-between bg-gray-200 text-black p-16">
                            <div class="w-1/3">
                                <img src="{{ asset('/storage/'. $challenge->image) }}" onerror="this.onerror=null;this.src='{{ asset('/storage/challenges/' . 'default.png') }}'" alt="" class="rounded-xl w-full object-contains">
                            </div>
                            <div class="px-10 flex text-xl flex-col justify-between">
                                <div class="space-y-8">
                                    <p>{{ $challenge->description }}</p>
                                    <p>{{ $challenge->category->name }}</p>
                                    <p>{{ $challenge->level }}</p>
                                </div>
                                @if(auth()->id() == $challenge->user->id)
                                <div class="flex justify-between">
                                    <div>{{ $challenge->created_at }}</div>
                                    <div>{{ $challenge->user->name }} ({{ $challenge->user->email }})</div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="mt-24 flex items-center space-x-10 mx-auto">
                            <a href="" class="px-24 py-4 rounded-lg etxt-xl font-semibold tracking-wider leading-10 bg-gray-300 text-gray-800 hover:bg-gray-400">Edit</a>
                            <a href="" class="px-24 py-4 rounded-lg etxt-xl font-semibold tracking-wider leading-10 bg-red-300 text-red-800 hover:bg-red-400">Delete</a>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
