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
        <form wire:submit.prevent="postComment">

            <div class="flex space-x-2 items-start">
                <img src="{{ auth()->user()->avatarUrl() }}" alt="" class="w-10 h-10 rounded-full">
                <div class="flex flex-col w-full gap-y-2">
                    <textarea wire:model="newCommentState.body" placeholder="Leave A Comment" class="w-full rounded-xl @error('newCommentState.body') border-red-500 @enderror "></textarea>
                    @error('newCommentState.body')
                    <div class="text-xs text-red-500 px-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <x-primary-button class="mt-4">
                Comment</x-primary-button>
        </form>
    </div>
    @endauth
    @guest
    <x-responsive-nav-link href="{{ route( 'login' ) }} " wire:navigate class="bg-gray-600 text-white  w-fit !hover:bg-gray-200 mt-4">
        Login to comment
    </x-responsive-nav-link>
    @endguest
</div>
</div>