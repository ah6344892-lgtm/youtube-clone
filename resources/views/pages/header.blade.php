<header :class="searchOpen ? 'hidden' : 'block'" class="sticky top-0 z-10">
    <div class="h-14 bg-white opacity-98 px-4 flex flex-row items-center justify-between">
        {{-- right side of header --}}
        <div class="flex items-center gap-6.25 ml-1">
            {{-- menu icon --}}
            <div class="lg:w-6 md:w-6 sm:w-6 xs:w-6 w-10  h-6 ml-1">
                <button type="button" @click="openSidebar = !openSidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-full h-full">
                        <path
                            d="M20 5H4a1 1 0 000 2h16a1 1 0 100-2Zm0 6H4a1 1 0 000 2h16a1 1 0 000-2Zm0 6H4a1 1 0 000 2h16a1 1 0 000-2Z">
                        </path>
                    </svg>
                </button>
            </div>

            {{-- youtube logo + PK --}}
            <a href="{{ route('home') }}">
                <div class="flex items-start relative">
                    <svg xmlns="http://www.w3.org/2000/svg" id="yt-ringo2-svg_yt113" width="93" height="20"
                        viewBox="0 0 93 20" focusable="false" aria-hidden="true"
                        style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                        <g>
                            <path
                                d="M14.4848 20C14.4848 20 23.5695 20 25.8229 19.4C27.0917 19.06 28.0459 18.08 28.3808 16.87C29 14.65 29 9.98 29 9.98C29 9.98 29 5.34 28.3808 3.14C28.0459 1.9 27.0917 0.94 25.8229 0.61C23.5695 0 14.4848 0 14.4848 0C14.4848 0 5.42037 0 3.17711 0.61C1.9286 0.94 0.954148 1.9 0.59888 3.14C0 5.34 0 9.98 0 9.98C0 9.98 0 14.65 0.59888 16.87C0.954148 18.08 1.9286 19.06 3.17711 19.4C5.42037 20 14.4848 20 14.4848 20Z"
                                fill="#FF0033"></path>
                            <path d="M19 10L11.5 5.75V14.25L19 10Z" fill="white"></path>
                        </g>
                        <g id="youtube-paths_yt113">
                            <path
                                d="M37.1384 18.8999V13.4399L40.6084 2.09994H38.0184L36.6984 7.24994C36.3984 8.42994 36.1284 9.65994 35.9284 10.7999H35.7684C35.6584 9.79994 35.3384 8.48994 35.0184 7.22994L33.7384 2.09994H31.1484L34.5684 13.4399V18.8999H37.1384Z">
                            </path>
                            <path
                                d="M44.1003 6.29994C41.0703 6.29994 40.0303 8.04994 40.0303 11.8199V13.6099C40.0303 16.9899 40.6803 19.1099 44.0403 19.1099C47.3503 19.1099 48.0603 17.0899 48.0603 13.6099V11.8199C48.0603 8.44994 47.3803 6.29994 44.1003 6.29994ZM45.3903 14.7199C45.3903 16.3599 45.1003 17.3899 44.0503 17.3899C43.0203 17.3899 42.7303 16.3499 42.7303 14.7199V10.6799C42.7303 9.27994 42.9303 8.02994 44.0503 8.02994C45.2303 8.02994 45.3903 9.34994 45.3903 10.6799V14.7199Z">
                            </path>
                            <path
                                d="M52.2713 19.0899C53.7313 19.0899 54.6413 18.4799 55.3913 17.3799H55.5013L55.6113 18.8999H57.6012V6.53994H54.9613V16.4699C54.6812 16.9599 54.0312 17.3199 53.4212 17.3199C52.6512 17.3199 52.4113 16.7099 52.4113 15.6899V6.53994H49.7812V15.8099C49.7812 17.8199 50.3613 19.0899 52.2713 19.0899Z">
                            </path>
                            <path d="M62.8261 18.8999V4.14994H65.8661V2.09994H57.1761V4.14994H60.2161V18.8999H62.8261Z">
                            </path>
                            <path
                                d="M67.8728 19.0899C69.3328 19.0899 70.2428 18.4799 70.9928 17.3799H71.1028L71.2128 18.8999H73.2028V6.53994H70.5628V16.4699C70.2828 16.9599 69.6328 17.3199 69.0228 17.3199C68.2528 17.3199 68.0128 16.7099 68.0128 15.6899V6.53994H65.3828V15.8099C65.3828 17.8199 65.9628 19.0899 67.8728 19.0899Z">
                            </path>
                            <path
                                d="M80.6744 6.26994C79.3944 6.26994 78.4744 6.82994 77.8644 7.73994H77.7344C77.8144 6.53994 77.8744 5.51994 77.8744 4.70994V1.43994H75.3244L75.3144 12.1799L75.3244 18.8999H77.5444L77.7344 17.6999H77.8044C78.3944 18.5099 79.3044 19.0199 80.5144 19.0199C82.5244 19.0199 83.3844 17.2899 83.3844 13.6099V11.6999C83.3844 8.25994 82.9944 6.26994 80.6744 6.26994ZM80.7644 13.6099C80.7644 15.9099 80.4244 17.2799 79.3544 17.2799C78.8544 17.2799 78.1644 17.0399 77.8544 16.5899V9.23994C78.1244 8.53994 78.7244 8.02994 79.3944 8.02994C80.4744 8.02994 80.7644 9.33994 80.7644 11.7299V13.6099Z">
                            </path>
                            <path
                                d="M92.6517 11.4999C92.6517 8.51994 92.3517 6.30994 88.9217 6.30994C85.6917 6.30994 84.9717 8.45994 84.9717 11.6199V13.7899C84.9717 16.8699 85.6317 19.1099 88.8417 19.1099C91.3817 19.1099 92.6917 17.8399 92.5417 15.3799L90.2917 15.2599C90.2617 16.7799 89.9117 17.3999 88.9017 17.3999C87.6317 17.3999 87.5717 16.1899 87.5717 14.3899V13.5499H92.6517V11.4999ZM88.8617 7.96994C90.0817 7.96994 90.1717 9.11994 90.1717 11.0699V12.0799H87.5717V11.0699C87.5717 9.13994 87.6517 7.96994 88.8617 7.96994Z">
                            </path>
                        </g>
                    </svg>
                    <span class="ml-1 text-[10px] text-gray-900 leading-none">
                        PK
                    </span>

                </div>
            </a>
        </div>
        {{-- middle side of header --}}
        <div class="relative flex items-center justify-center gap-3 w-1/2">
            <div class="hidden lg:block md:block sm:block xs:block w-full">
                <div class="flex w-full">
                    <div class="w-full">
                        <form action="#" method="get">
                            <input id="searchInput"
                                class="border rounded-l-full border-gray-200 pl-4 p-2 w-full focus:outline-none focus:border focus:border-blue-400"
                                type="text" placeholder="Search">
                        </form>
                    </div>

                    <div>
                        <button
                            class="bg-gray-50 cursor-pointer p-2 rounded-r-full w-16 flex items-center justify-center border-y border-gray-200"
                            type="button">
                            <!-- Search Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                <path
                                    d="M11 2a9 9 0 105.641 16.01.966.966 0 00.152.197l3.5 3.5a1 1 0 101.414-1.414l-3.5-3.5a1 1 0 00-.197-.153A8.96 8.96 0 0020 11a9 9 0 00-9-9Zm0 2a7 7 0 110 14 7 7 0 010-14Z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="block lg:hidden md:hidden sm:hidden xs:hidden w-full">
                <button @click="searchOpen = !searchOpen"
                    class="cursor-pointer p-2 rounded-r-full w-16 flex items-center justify-center" type="button">
                    <!-- Search Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path
                            d="M11 2a9 9 0 105.641 16.01.966.966 0 00.152.197l3.5 3.5a1 1 0 101.414-1.414l-3.5-3.5a1 1 0 00-.197-.153A8.96 8.96 0 0020 11a9 9 0 00-9-9Zm0 2a7 7 0 110 14 7 7 0 010-14Z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="flex justify-center">
                <button id="voiceBtn" type="button" class="bg-gray-50 rounded-full p-2 cursor-pointer">
                    <!-- Microphone Icon -->
                    <svg viewBox="0 0 24 24" height="24" width="24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 4.5C10.314 4.5 9 5.80455 9 7.35V12.15C9 13.6955 10.314 15 12 15C13.686 15 15 13.6955 15 12.15L15 7.35C15 5.80455 13.686 4.5 12 4.5ZM7.5 7.35C7.5 4.919 9.54387 3 12 3C14.4561 3 16.5 4.919 16.5 7.35L16.5 12.15C16.5 14.581 14.4561 16.5 12 16.5C9.54387 16.5 7.5 14.581 7.5 12.15V7.35ZM6.75 12.75C6.75 15.1443 9.0033 17.25 12 17.25C14.9967 17.25 17.25 15.1443 17.25 12.75H18.75C18.75 15.9176 16.0499 18.3847 12.75 18.7129V21H11.25V18.7129C7.95007 18.3847 5.25 15.9176 5.25 12.75H6.75Z"
                            fill="black">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            const voiceBtn = document.getElementById('voiceBtn');
            const searchInput = document.getElementById('searchInput');

            voiceBtn.addEventListener('click', () => {
                const SpeechRecognition =
                    window.SpeechRecognition || window.webkitSpeechRecognition;

                if (!SpeechRecognition) {
                    alert('Voice Search is not supported in this browser.');
                    return;
                }

                const recognition = new SpeechRecognition();

                // English
                recognition.lang = 'en-US';

                // For Urdu use:
                // recognition.lang = 'ur-PK';

                recognition.start();

                recognition.onresult = (event) => {
                    searchInput.value = event.results[0][0].transcript;
                };

                recognition.onerror = (event) => {
                    console.error(event.error);
                };
            });
        </script>
        {{-- left side of header --}}
        <div class="flex items-center gap-4 ml-4">
            {{-- menu icon --}}
            <div class="w-6 h-6">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"
                    focusable="false" aria-hidden="true"
                    style="pointer-events: none; display: inherit; width: 100%; height: 100%;">
                    <path d="M12 4a2 2 0 100 4 2 2 0 000-4Zm0 6a2 2 0 100 4 2 2 0 000-4Zm0 6a2 2 0 100 4 2 2 0 000-4Z">
                    </path>
                </svg>
            </div>
            <div class="flex items-center relative">
                <div class="flex items-center gap-1.5 mr-1 border pl-2 pr-[14px] py-1 rounded-full border-gray-200">
                    <svg viewBox="0 0 24 24" height="24" width="24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path
                                d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.71997 11.28 8.71997 9.50998C8.71997 7.69998 10.18 6.22998 12 6.22998C13.81 6.22998 15.28 7.69998 15.28 9.50998C15.27 11.28 13.88 12.72 12.12 12.78Z"
                                stroke="blue" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M18.74 19.3801C16.96 21.0101 14.6 22.0001 12 22.0001C9.40001 22.0001 7.04001 21.0101 5.26001 19.3801C5.36001 18.4401 5.96001 17.5201 7.03001 16.8001C9.77001 14.9801 14.25 14.9801 16.97 16.8001C18.04 17.5201 18.64 18.4401 18.74 19.3801Z"
                                stroke="blue" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                stroke="blue" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <p class="text-blue-600 font-bold text-sm">Sign in</p>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- this is for mobile --}}
<header x-show="searchOpen" class="sticky top-0 z-10">
    <div class="h-14 bg-white opacity-98 px-4 flex flex-row items-center justify-between">

        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
            class="w-full absolute top-4 z-200">
            <div class="flex w-full">
                <div class="w-full">
                    <form action="#" method="get">
                        <input id="searchInput"
                            class="border rounded-l-full border-gray-200 pl-4 p-2 w-full focus:outline-none focus:border focus:border-blue-400"
                            type="text" placeholder="Search">
                    </form>
                </div>

                <div>
                    <button
                        class="bg-gray-50 cursor-pointer p-2 rounded-r-full w-16 flex items-center justify-center border-y border-gray-200"
                        type="button">
                        <!-- Search Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                            <path
                                d="M11 2a9 9 0 105.641 16.01.966.966 0 00.152.197l3.5 3.5a1 1 0 101.414-1.414l-3.5-3.5a1 1 0 00-.197-.153A8.96 8.96 0 0020 11a9 9 0 00-9-9Zm0 2a7 7 0 110 14 7 7 0 010-14Z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
