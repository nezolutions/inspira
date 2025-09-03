<div class="flex flex-row items-center gap-2 select-none">
    <img class="py-2 w-18 {{ $isimage ? 'h-16' : '' }}" src="{{ $icon ?? 'images/icon.png' }}" draggable="false" />
    <h1 class="text-3xl text-red-600 font-semibold tracking-tight {{ $isname ? 'hidden lg:inline' : 'hidden'}}">{{ $name ?? 'JGU-WXUT INSPIRA ' . now()->format('Y') }}</h1>
</div>