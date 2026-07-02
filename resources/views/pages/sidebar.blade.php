<aside class="sticky top-19 z-0 h-full mt-4.5">
    {{-- closebar --}}
    <div :class="openSidebar ? 'block' : 'hidden'" class="flex flex-col items-center gap-8 w-20">
        <a href="{{ route('home') }}">
            <div class="flex cursor-pointer flex-col items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false"
                    aria-hidden="true">
                    <path
                        d="m11.485 2.143-8 4.8-2 1.2a1 1 0 001.03 1.714L3 9.567V20a2 2 0 002 2h5v-8h4v8h5a2 2 0 002-2V9.567l.485.29a1 1 0 001.03-1.714l-2-1.2-8-4.8a1 1 0 00-1.03 0Z">
                    </path>
                </svg>
                <p class="text-[10px] font-normal">Home</p>
            </div>
        </a>
        <a href="{{ route('shorts') }}">
            <div class="flex flex-col items-center cursor-pointer justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                    focusable="false" aria-hidden="true">
                    <path
                        d="m13.467 1.19-8 4.7a5 5 0 00-.255 8.46 5 5 0 005.32 8.462l8-4.7a5 5 0 00.258-8.462 5 5 0 001.641-6.464l-.12-.217a5 5 0 00-6.844-1.78m5.12 2.79a2.999 2.999 0 01-1.067 4.107l-1.327.78a1 1 0 00.096 1.775l.943.423a3 3 0 01.288 5.323l-8 4.7a3 3 0 01-3.039-5.173l1.327-.78a1 1 0 00-.097-1.775l-.942-.423a3 3 0 01-.288-5.323l8-4.7a3 3 0 014.106 1.066ZM15 12l-5-3v6l5-3Z">
                    </path>
                </svg>
                <p class="text-[10px]">Shorts</p>
            </div>
        </a>
        <a href="{{ route('subscriptions') }}">
            <div class="flex flex-col items-center cursor-pointer justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                    focusable="false" aria-hidden="true">
                    <path
                        d="M18 1H6a2 2 0 00-2 2h16a2 2 0 00-2-2Zm3 4H3a2 2 0 00-2 2v13a2 2 0 002 2h18a2 2 0 002-2V7a2 2 0 00-2-2ZM3 20V7h18v13H3Zm13-6.5L10 10v7l6-3.5Z">
                    </path>
                </svg>
                <p class="text-[10px]">Subscriptions</p>
            </div>
        </a>
        <div class="flex flex-col items-center justify-center cursor-pointer gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false"
                aria-hidden="true">
                <path
                    d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11 11-4.925 11-11S18.075 1 12 1Zm0 2a9 9 0 016.447 15.276 7 7 0 00-12.895 0A9 9 0 0112 3Zm0 2a4 4 0 100 8 4 4 0 000-8Zm0 2a2 2 0 110 4 2 2 0 010-4Zm-.1 9.001L11.899 16a5 5 0 014.904 3.61A8.96 8.96 0 0112 21a8.96 8.96 0 01-4.804-1.391 5 5 0 014.704-3.608Z">
                </path>
            </svg>
            <p class="text-[10px]">You</p>
        </div>
    </div>
</aside>
