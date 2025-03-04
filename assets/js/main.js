//banner slider

let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    const dotsContainer = document.querySelector('.dots');

    // Create dots dynamically
    slides.forEach((_, index) => {
        let dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
        if (index >= totalSlides) currentIndex = 0;
        if (index < 0) currentIndex = totalSlides - 1;

        slides.forEach(slide => slide.classList.remove('active'));
        slides[currentIndex].classList.add('active');

        dots.forEach(dot => dot.classList.remove('active'));
        dots[currentIndex].classList.add('active');
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });

    // Auto-slide every 6 seconds
    setInterval(() => {
        currentIndex++;
        showSlide(currentIndex);
    }, 6000);

    //banner slider end

    //view menu slider

    $(document).ready(function(){
        $(".image-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: { items: 2 },  /* 2 images on mobile */
                600: { items: 4 }, /* 4 images on tablets */
                1000: { items: 4 } /* 8 images on large screens */
            }
        });
    });

    //view menu slider end 

    //celebration slider start

    $(document).ready(function(){
        $(".celebration-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0: { items: 2 },  /* 2 images on mobile */
                600: { items: 4 }, /* 4 images on tablets */
                1000: { items: 4 } /* 8 images on large screens */
            }
        });
    });

    //celebration slider end

     //sport slider start

     $(document).ready(function(){
        $(".sports-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            responsive: {
                0: { items: 2 },  /* 2 images on mobile */
                600: { items: 4 }, /* 4 images on tablets */
                1000: { items: 5 } /* 8 images on large screens */
            }
        });
    });

    //sport slider end

    