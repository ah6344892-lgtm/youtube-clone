<div class="flex-1 overflow-y-auto pt-4 px-2 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
    {{-- @session('error')
        <p class="text-center text-sm">{{ session('error') }}</p>
    @endsession --}}
    {{-- video card --}}
    {{-- @foreach ($videoNames as $name) --}}
    @forelse ($videos as $i=> $video)
        @php
            $randomVideo = $videoNames[array_rand($videoNames)];
        @endphp
        <div class="cursor-pointer hover:bg-orange-100 transition-all ease-in-out duration-500 rounded-2xl p-2">
            <div class="mb-1.5">
                {{-- <img class="rounded-xl w-full object-cover"
                    src="https://live.staticflickr.com/7235/6916888998_e71e0c2e43_h.jpg" alt=""> --}}
                <video class="rounded-xl w-full object-cover" src="{{ asset('long-vides/' . $randomVideo) }}"></video>
            </div>
            <div class="flex">
                <div class="w-12.5">
                    <img class="rounded-full w-full" src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png"
                        alt="">
                </div>
                <div class="px-1.5">
                    <div class="relative text-sm pl-0.5 pr-9 font-bold">
                        {{ $video->title }}
                        <div class="absolute size-8 rounded-full hover:bg-gray-300 p-1 top-0 right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                                focusable="false" aria-hidden="true"
                                style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                                <path
                                    d="M12 4a2 2 0 100 4 2 2 0 000-4Zm0 6a2 2 0 100 4 2 2 0 000-4Zm0 6a2 2 0 100 4 2 2 0 000-4Z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-xs font-light">
                            {{ Str::limit($video->description, 90) }}
                        </p>
                    </div>

                </div>

            </div>
        </div>
    @empty
        <p class="text-center text-sm">No videos found in this category yet</p>
    @endforelse
    {{-- @endforeach --}}

</div>
