<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Episode: {{ $episode->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto ">
            <livewire:comments.comments :model="$episode" />
        </div>
    </div>
</x-app-layout>
