<div>
    {{-- <div
		class="text-lg font-bold mb-4">{{json_encode( $comments ) }}
</div>
--}}
<div
    class=" mx-auto  bg-white shadow-lg rounded-lg px-4 py-2">
    <!-- Header -->
    <h2 class="text-xl font-semibold mb-4">Comments</h2>
    <!-- Comment Card -->
    @forelse ( $comments as $comment )
    <livewire:comments.comment :comment="$comment" :key="$comment->id" />
    @empty
    <p>No Comments Yet</p>
    @endforelse
    @auth
    <div class="p-2  bg-gray-50 pt-5 space-y-4">
        <div class="flex space-x-2 items-start">
            <img src="{{ auth()->user()->avatarUrl() }}" alt="" class="w-10 h-10 rounded-full">
            <textarea placeholder="Leave A Comment" class="w-full rounded-xl "></textarea>
        </div>
        <x-primary-button>
            Comment</x-primary-button>
    </div>
    @endauth
    @guest
    <x-responsive-nav-link href="{{ route( 'login' ) }} " wire:navigate class="bg-gray-600 text-white  w-fit !hover:bg-gray-200 mt-4">
        Login to comment
    </x-responsive-nav-link>
    @endguest
</div>
</div>