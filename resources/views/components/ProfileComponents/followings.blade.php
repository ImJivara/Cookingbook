<div id="followingModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg shadow-lg  w-full sm:w-3/4 md:w-1/2 lg:w-1/3">
        <!-- Modal header -->
        <div class="bg-white text-black px-4 py-2 flex justify-between items-center border-b">
            <h2 class="text-xl font-semibold">Following</h2>
            <button id="closeFollowingModal" class="text-black hover:text-gray-600 text-2xl" onclick="closeModal('followingModal')" >&times;</button>
        </div>
        <!-- Modal body -->
        <div class="p-4 max-h-96 overflow-y-auto">
            <div class="grid grid-cols-1 gap-4">
                {{-- Example content, replace with dynamic content from your foreach loop --}}
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('imgs/user.jpg') }}" alt="Profile Picture" class="w-12 h-12 rounded-full border">
                    <div class="flex-grow">
                        <h3 class="text-sm font-semibold">Sample User 1</h3>
                        <p class="text-gray-500 text-xs">Sample Bio</p>
                    </div>
                    <button class="bg-gray-200 hover:bg-gray-300 text-black font-semibold py-1 px-3 rounded-full text-xs">
                        Following
                    </button>
                </div>
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('imgs/user.jpg') }}" alt="Profile Picture" class="w-12 h-12 rounded-full border">
                    <div class="flex-grow">
                        <h3 class="text-sm font-semibold">Sample User 2</h3>
                        <p class="text-gray-500 text-xs">Sample Bio</p>
                    </div>
                    <button class="bg-gray-200 hover:bg-gray-300 text-black font-semibold py-1 px-3 rounded-full text-xs">
                        Following
                    </button>
                </div>
                <!-- Repeat for other following -->
                {{-- @foreach ($following as $follow) --}}
                {{-- <div class="flex items-center space-x-4">
                    <img src="{{ asset($follow->profile_picture) }}" alt="Profile Picture" class="w-12 h-12 rounded-full border">
                    <div class="flex-grow">
                        <h3 class="text-sm font-semibold">{{ $follow->username }}</h3>
                        <p class="text-gray-500 text-xs">{{ $follow->bio }}</p>
                    </div>
                    <button class="bg-gray-200 hover:bg-gray-300 text-black font-semibold py-1 px-3 rounded-full text-xs">
                        Following
                    </button>
                </div> --}}
                {{-- @endforeach --}}
                <!-- End dynamic content -->
                <p class="text-gray-500 col-span-full text-center">No followings yet.</p>
            </div>
        </div>
    </div>
</div>