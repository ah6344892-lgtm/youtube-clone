<div :class="searchOpen ? 'mt-14' : 'sticky top-14 pt-3 opacity-98 z-10 ml-2 py-1 bg-white'" class="">
    {{-- class="h-14 px-5 flex items-center gap-3 bg-white sticky top-14 z-10 overflow-hidden" --}}
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <div class="flex items-center">
        <button id="leftBtn"
            class="absolute left-0 w-10 h-10 flex items-center justify-center rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false"
                aria-hidden="true">
                <path
                    d="M8.793 5.293a1 1 0 000 1.414L14.086 12l-5.293 5.293a1 1 0 101.414 1.414L16.914 12l-6.707-6.707a1 1 0 00-1.414 0Z">
                </path>
            </svg>
        </button>

        <div id="categoryBar" class="flex-1 flex gap-3 overflow-x-auto px-2 scrollbar-hide whitespace-nowrap">
            @foreach ($categories as $category)
                <a href="{{ route('activeCategory', ['id' => $category->id]) }}" class="cursor-pointer">
                    <button
                        class="px-3 py-1.5 rounded-lg cursor-pointer text-sm font-medium {{ $activeCategory === $category->id ? 'bg-gray-900 text-white' : 'bg-gray-100 text-gray-800' }} whitespace-nowrap shrink-0 transition">
                        {{ $category->name }}
                    </button>
                </a>
            @endforeach
        </div>

        <button id="rightBtn"
            class="absolute flex items-center justify-center right-0 w-10 h-10 rounded-full bg-white hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24" focusable="false"
                aria-hidden="true">
                <path
                    d="M8.793 5.293a1 1 0 000 1.414L14.086 12l-5.293 5.293a1 1 0 101.414 1.414L16.914 12l-6.707-6.707a1 1 0 00-1.414 0Z">
                </path>
            </svg>
        </button>
    </div>

    <script>
        const categoryBar = document.getElementById('categoryBar');
        const leftBtn = document.getElementById('leftBtn');
        const rightBtn = document.getElementById('rightBtn');

        function updateButtons() {
            const scrollLeft = categoryBar.scrollLeft;
            const maxScroll = categoryBar.scrollWidth - categoryBar.clientWidth;

            // Left end
            if (scrollLeft <= 0) {
                leftBtn.style.display = 'none';
            } else {
                leftBtn.style.display = 'flex';
            }

            // Right end
            if (scrollLeft >= maxScroll - 1) {
                rightBtn.style.display = 'none';
            } else {
                rightBtn.style.display = 'flex';
            }
        }

        leftBtn.onclick = () => {
            categoryBar.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        };

        rightBtn.onclick = () => {
            categoryBar.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        };

        // important: track scrolling
        categoryBar.addEventListener('scroll', updateButtons);

        // initial check
        updateButtons();
    </script>
</div>
