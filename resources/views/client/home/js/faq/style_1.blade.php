<script>
        const accordions = document.querySelectorAll('.accordion-header');

        accordions.forEach(header => {
            header.addEventListener('click', () => {
                const body = header.nextElementSibling;
                const svg = header.querySelector('svg');

                // Close all others
                document.querySelectorAll('.accordion-body').forEach(el => {
                    if (el !== body) {
                        el.style.maxHeight = null;
                        el.previousElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle current one
                if (body.style.maxHeight) {
                    body.style.maxHeight = null;
                    svg.style.transform = 'rotate(0deg)';
                } else {
                    body.style.maxHeight = body.scrollHeight + 'px';
                    svg.style.transform = 'rotate(45deg)';
                }
            });
        });
    </script>