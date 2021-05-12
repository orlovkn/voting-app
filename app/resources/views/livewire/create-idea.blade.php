<form wire:submit.prevent="createIdea" action="#" method="post" class="space-y-4 px-4 py-6">
    <div>
        <input wire:model.defer="title" type="text" class="text-sm border-none w-full rounded-xl px-4 py-2" placeholder="Your idea">
        @error('title')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <select wire:model.defer="category" name="category_add" id="category_add" class="text-sm w-full rounded-xl ph-4 py-2 border-none">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <textarea wire:model.defer="description" name="idea" id="idea" cols="30" rows="10" class="w-full rounded-xl text-sm px-4 py-2 border-none" placeholder="Describe your idea"></textarea>
        @error('description')
            <p class="text-red text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>
    <div class="flex items-center justify-between space-x-3">
        <button
            type="button"
            class="flex items-center w-1/2 h-11 text-xs space-x-3 font-semibold px-6 py-3 bg-gray rounded-xl"
        >
            <span class="ml-2">Attach</span>
        </button>
        <button
            type="submit"
            class="flex items-center w-1/2 h-11 text-xs space-x-3 font-semibold px-6 py-3 bg-blue hover:bg-blue-hover text-white rounded-xl"
        >
            <span class="ml-2">Submit</span>
        </button>
    </div>
    <div>
        @if (session('success_message'))
            <div
                class="text-green mt-4">
                {{ session('success_message') }}
            </div>
        @endif
    </div>
</form>
