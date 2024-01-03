<section id="video_youtube" class="py-5">
    <div class="container py-5">
        <div class="text-center">
            <h2 class="fw-bold bg-danger">Video Terkait</h2>
        </div>

        <div class="row py-4">
            @foreach ($more as $item)
            <div class="col-lg-4">
                <img src="https://img.youtube.com/vi/{{$item->youtube_code}}/maxresdefault.jpg" alt="">
            </div>
            @endforeach
        </div>
    </div>
</section>