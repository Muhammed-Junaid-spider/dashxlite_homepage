<script>
        const accordions = document.querySelectorAll('.accordion-button');

        accordions.forEach(btn => {
            btn.addEventListener('click', () => {
                const panel = btn.nextElementSibling;
                const icon = btn.querySelector('svg');

                // Close others
                document.querySelectorAll('.accordion-panel').forEach(el => {
                    if (el !== panel) {
                        el.style.maxHeight = null;
                        el.style.opacity = 0;
                        el.previousElementSibling.querySelector('svg').style.transform = 'rotate(0deg)';
                    }
                });

                // Toggle this one
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    panel.style.opacity = 0;
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    panel.style.maxHeight = panel.scrollHeight + 'px';
                    panel.style.opacity = 1;
                    icon.style.transform = 'rotate(45deg)';
                }
            });
        });
    </script>