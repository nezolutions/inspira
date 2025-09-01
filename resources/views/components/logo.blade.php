<div class="flex flex-row items-center gap-2 select-none">
    <img class="w-16" src="{{ $icon ?? 'images/icon.png' }}" draggable="false" />
    <h1 class="text-3xl text-red-600 font-semibold tracking-tight">{{ $name ?? 'JGU INSPIRA ' . now()->format('Y') }}</h1>
</div>