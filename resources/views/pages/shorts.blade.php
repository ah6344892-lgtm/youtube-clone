<style>
    ::-webkit-scrollbar {
        display: none;
    }

    html,
    body {
        margin: 0;
        overflow: hidden;
    }
</style>
<div class="flex justify-center items-center w-full">
    <div class="h-screen overflow-y-scroll snap-y snap-mandatory">
        @foreach ($videos as $video)
            <div class="snap-start max-w-96 flex justify-center items-center rounded-3xl">

                <div class="w-full flex gap-3 items-center justify-center h-screen">
                    <div>
                        <video class="video mb-8 w-full h-full object-cover rounded-2xl" controls loop playsinline>
                            <source src="{{ $video }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="flex justify-end flex-col h-1/2">
                        <div class="text-black h-full flex gap-3 justify-between flex-col items-center">
                            <div class="flex flex-col justify-center items-center gap-1">
                                <button class="bg-gray-100 rounded-full p-3 cursor-pointer">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" focusable="false" aria-hidden="true">
                                        <path
                                            d="M16.25 2.5c3.823 0 6.75 3.232 6.75 7 0 4.436-2.806 7.696-5.224 9.699-2.46 2.038-4.906 3.104-4.98 3.135l-.796.347-.797-.347c-.073-.031-2.52-1.097-4.98-3.135C3.807 17.196 1 13.936 1 9.5c0-3.768 2.927-7 6.75-7 1.629 0 3.1.596 4.25 1.565A6.559 6.559 0 0 1 16.25 2.5zm0 2c-1.861 0-3.47 1.128-4.25 2.768C11.22 5.628 9.611 4.5 7.75 4.5 5.127 4.5 3 6.74 3 9.5c0 7.09 9 11 9 11s9-3.91 9-11c0-2.76-2.127-5-4.75-5z"
                                            fill="currentColor"></path>
                                    </svg>
                                </button>
                                <span>1k</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-1">
                                <button class="bg-gray-100 rounded-full p-3 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                        width="24" focusable="false" aria-hidden="true">
                                        <path
                                            d="M1 6a4 4 0 014-4h14a4 4 0 014 4v10a4 4 0 01-4 4h-4.8l-5.105 2.836A1.41 1.41 0 017 21.604V20H5a4 4 0 01-4-4V6Zm8 12v2.601l4.229-2.35.453-.251H19a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2h4ZM7 8a1 1 0 000 2h10a1 1 0 100-2H7Zm-1 5a1 1 0 001 1h6a1 1 0 000-2H7a1 1 0 00-1 1Z">
                                        </path>
                                    </svg>
                                </button>
                                <span>1k</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-1">
                                <button class="bg-gray-100 rounded-full p-3 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                        width="24" focusable="false" aria-hidden="true">
                                        <path
                                            d="M10 3.158V7.51c-5.428.223-8.27 3.75-8.875 11.199-.04.487-.07.975-.09 1.464l-.014.395c-.014.473.578.684.88.32.302-.368.61-.73.925-1.086l.244-.273c1.79-1.967 3-2.677 4.93-2.917a18.011 18.011 0 012-.112v4.346a1 1 0 001.646.763l9.805-8.297 1.55-1.31-1.55-1.31-9.805-8.297A1 1 0 0010 3.158Zm2 6.27v.002-4.116l7.904 6.688L12 18.689v-4.212l-2.023.024c-1.935.022-3.587.17-5.197 1.024a9 9 0 00-1.348.893c.355-1.947.916-3.39 1.63-4.425 1.062-1.541 2.607-2.385 5.02-2.485L12 9.428Z">
                                        </path>
                                    </svg>
                                </button>
                                <span>1k</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-1">
                                <button class="bg-gray-100 rounded-full p-3 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                        width="24" focusable="false" aria-hidden="true">
                                        <path
                                            d="M10.564 1.095a11 11 0 00-9.189 8.058 1 1 0 101.932.517A8.999 8.999 0 0119.481 7H18a1 1 0 100 2h5V4a1 1 0 00-2 0v1.679a11 11 0 00-10.436-4.584ZM12 7a1 1 0 00-1 1v3H8a1 1 0 000 2h3v3a1 1 0 002 0v-3h3a1 1 0 000-2h-3V8a1 1 0 00-1-1Zm8.693 7.33A9 9 0 014.517 17H6a1 1 0 000-2H1v5a1 1 0 102 0v-1.68a11 11 0 0019.625-3.472 1 1 0 10-1.932-.518Z">
                                        </path>
                                    </svg>
                                </button>
                                <span>1k</span>
                            </div>
                            <div class="w-8">
                                <img class="rounded-full w-full"
                                    src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const videos = document.querySelectorAll(".video");

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const video = entry.target;

                if (entry.isIntersecting) {
                    video.play().catch(() => {});
                } else {
                    video.pause();
                    video.currentTime = 0;
                }
            });
        }, {
            threshold: 0.7
        });

        videos.forEach(video => observer.observe(video));
    });
</script>
