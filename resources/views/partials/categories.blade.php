<nav class="w-1/6 flex flex-col items-center space-y-4 roudex-lg uppercase text-lg border-r-2 overflow-y-auto">
    @foreach ($categories as $cat)
        <a href="{{ route('categories.show', $cat) }}" class="w-full text-center hover:bg-gray-300 hover:text-gray-900 px-4 py-2 cursor-pointer @if($category->id == $cat->id) bg-gray-300 text-gray-900 @endif >{{ $cat->name }}</a>
    @endforeach
</nav>
