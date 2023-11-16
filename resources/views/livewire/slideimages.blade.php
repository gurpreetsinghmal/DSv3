<div>
<div class="mt-8 flex justify-center w-full">
    <div class="max-w-full w-full h-screen relative overflow-hidden">
        <div id="carousel" class="flex transition-transform ease-in-out duration-300">
            <!-- Slide 1 -->
            
            @foreach($images as $image)
            <div class="w-full h-72 lg:h-screen md:h-[70%] bg-gray-500 flex-shrink-0">
                <img src="{{ $image->url }}" alt="Image 1" class="w-full h-full object-cover">
            <div class="bg-gradient-to-r from-rose-400 via-rose-500 to-rose-400 text-center text-white p-1">{{$image->name}}</div>
            </div>
            @endforeach
            <!-- Slide 2 -->
           
        </div>
    </div>
</div>
<div class="text-xl bg-rose-500 z-1 w-full top-0 absolute text-white p-3 rounded-b-lg text-center">Digital Sahungra</div>
   

<script>
    let currentSlide = 0;

    function showSlide(index) {
        const carousel = document.getElementById('carousel');
        const transformValue = `translateX(-${index * 100}%)`;
        carousel.style.transform = transformValue;
        currentSlide = index;
    }

    function nextSlide() {
        const totalSlides = document.getElementById('carousel').children.length;
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function startAutoSlider(interval) {
        setInterval(() => {
            nextSlide();
        }, interval);
    }

    // Start auto-slider with a 3-second interval
    startAutoSlider(3000);
</script>

</div>
