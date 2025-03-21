<div>
    <div class="space-y-4" x-data="{showReplies : true}">
        <div
            class="p-4 border rounded-lg bg-gray-50">
            <!-- Header (Avatar + Name + Date) -->
            <div class="flex items-center space-x-3">
                <img src="{{ $comment?->user->avatarUrl() }}" alt="Avatar" class="w-10 h-10 rounded-full">
                <div>
                    <p class="font-semibold">{{ $comment->user->name }}</p>
                    <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
                </div>
            </div>

            <!-- Comment Body -->
            <p
                class="mt-2 text-gray-700">{{ $comment->body }}
            </p>

            <!-- Actions -->
            <div class="mt-3 flex space-x-3 text-sm">
                @if (!$comment->parent_id)
                <button class="text-blue-600 hover:underline">Reply</button>
                @endif
                <button class="text-green-600 hover:underline">Edit</button>
                <button class="text-red-600 hover:underline">Delete</button>
            </div>

            <!-- Toggle Replies Button -->
            @if (count($comment->children ?? []))
            <button class="mt-2 text-sm text-gray-600 hover:text-gray-800 flex items-center" @click="showReplies = !showReplies">
                <span>Show Replies</span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            @endif
            <div class="ml-4 mt-2" x-show="showReplies">
                {{-- {{ $comment }} --}}
                {{-- {{ $comment->children ?? 'NULL' }} --}}
                @if(count($comment->children ??[]))
                @foreach ($comment->children as $child )
                <livewire:comments.comment :comment="$child" :key="$child->id" />
                @endforeach
                @endif
            </div>
            <!-- Replies (Initially Hidden) -->
            {{-- <div class="ml-6 mt-2 ">
                <div class="p-3 border-l-2 border-gray-300">
                    <div class="flex items-center space-x-2">
                        <img src="https://via.placeholder.com/30" class="w-8 h-8 rounded-full">
                        <div>
                            <p class="font-medium text-sm">Jane Doe</p>
                            <p class="text-xs text-gray-500">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    </div>
    <p class="mt-1 text-gray-700 text-sm">
        This is a reply to the comment.
    </p>
</div>
</div> --}}
</div>
</div>
</div>