<div>
    <div class=" mx-auto  bg-white shadow-lg rounded-lg">
        <!-- Header -->
        <h2 class="text-xl font-semibold mb-4">Comments</h2>

        <!-- Comment Card -->
        <div class="space-y-4">
            <div class="p-4 border rounded-lg bg-gray-50">
                <!-- Header (Avatar + Name + Date) -->
                <div class="flex items-center space-x-3">
                    <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
                    <div>
                        <p class="font-semibold">John Doe</p>
                        <p class="text-xs text-gray-500">2 hours ago</p>
                    </div>
                </div>

                <!-- Comment Body -->
                <p class="mt-2 text-gray-700">
                    This is a sample comment. Tailwind makes styling easy!
                </p>

                <!-- Actions -->
                <div class="mt-3 flex space-x-3 text-sm">
                    <button class="text-blue-600 hover:underline">Reply</button>
                    <button class="text-green-600 hover:underline">Edit</button>
                    <button class="text-red-600 hover:underline">Delete</button>
                </div>

                <!-- Toggle Replies Button -->
                <button class="mt-2 text-sm text-gray-600 hover:text-gray-800 flex items-center">
                    <span>Show Replies</span>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Replies (Initially Hidden) -->
                <div class="ml-6 mt-2 hidden">
                    <div class="p-3 border-l-2 border-gray-300">
                        <div class="flex items-center space-x-2">
                            <img src="https://via.placeholder.com/30" class="w-8 h-8 rounded-full">
                            <div>
                                <p class="font-medium text-sm">Jane Doe</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <p class="mt-1 text-gray-700 text-sm">
                            This is a reply to the comment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>