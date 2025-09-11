<div class="flex flex-row items-center gap-2 select-none">
    <img class="py-2 max-h-12 {{ $isimage ? 'w-16' : '' }}" src="{{ $icon ?? 'images/icon.png' }}" draggable="false" />
    <h1 class="text-3xl text-red-600 font-semibold tracking-tight mt-[2px]">
        <span class="{{ $isfname ? 'hidden lg:inline' : 'hidden'}}">{{ $fname }}</span>
        <span class="{{ $islname ? 'hidden lg:inline' : 'hidden'}}">{{ $lname }}</span>
    </h1>
</div>