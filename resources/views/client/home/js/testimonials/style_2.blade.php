<script>
        const swipertestimonials = new Swiper('.swiper-testimonials', {
            direction: 'horizontal',
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next-custom',
                prevEl: '.swiper-button-prev-custom',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },

            // Responsive breakpoints
            breakpoints: {
                320: { // Mobile
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: { // Tablet
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: { // Desktop
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    </script>