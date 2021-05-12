<x-app-layout>
    <h4 class="text-xl font-semibold">{{  $idea->title }}</h4>
    <div class="text-gray-600 mt-3 line-clamp-3">
        {{ $idea->description }}
    </div>
</x-app-layout>
