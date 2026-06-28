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
            <div class="snap-start h-screen flex justify-center items-center bg-black rounded-3xl">

                <div class="relative w-full max-w-95 h-screen">
                    <video class="video w-full h-full object-cover rounded-2xl" autoplay muted loop playsinline>
                        <source src="{{ $video }}" type="video/mp4">
                    </video>
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
