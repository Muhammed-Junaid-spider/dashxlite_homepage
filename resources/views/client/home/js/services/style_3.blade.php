<script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,

            pagination: {
                el: '.swiper-custom-pagination',
                clickable: true,
                bulletClass: 'swiper-custom-bullet',
                bulletActiveClass: 'swiper-custom-bullet-active',
                renderBullet: function (index, className) {
                    return `<span class="${className} cursor-pointer"></span>`;
                },
            },

            navigation: {
                nextEl: '.swiper-navigation-next',
                prevEl: '.swiper-navigation-prev',
            },


            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 2.1,
                    spaceBetween: 30,
                },
            },
        });
    </script>