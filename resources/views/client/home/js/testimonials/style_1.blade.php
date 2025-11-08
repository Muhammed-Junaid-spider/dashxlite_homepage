 <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal', // or 'vertical'
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.nav-next',
                prevEl: '.nav-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>