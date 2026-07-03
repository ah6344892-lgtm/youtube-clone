<div class="w-full md:w-1/2 mx-1 md:mx-auto h-1/2 md:h-full">
    {{-- @dd($video) --}}
    <video class="rounded-xl w-full object-cover" src="{{ asset('long-vides/' . $video->name) }}" controls
        autoplay></video>
</div>
