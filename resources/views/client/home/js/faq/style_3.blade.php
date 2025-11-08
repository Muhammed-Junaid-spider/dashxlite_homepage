<script>
        const accordions = document.querySelectorAll(".accordion-button");

        accordions.forEach((btn) => {
            btn.addEventListener("click", () => {
                const panel = btn.nextElementSibling;
                const isOpen = btn.getAttribute("aria-expanded") === "true";

                // Close all others
                accordions.forEach((b) => {
                    const otherPanel = b.nextElementSibling;
                    if (b !== btn) {
                        b.setAttribute("aria-expanded", "false");
                        otherPanel.style.maxHeight = "0px";
                        otherPanel.style.opacity = "0";
                        b.querySelector("svg").style.transform = "rotate(0deg)";
                    }
                });

                // Toggle current one
                if (isOpen) {
                    btn.setAttribute("aria-expanded", "false");
                    panel.style.maxHeight = "0px";
                    panel.style.opacity = "0";
                    btn.querySelector("svg").style.transform = "rotate(0deg)";
                } else {
                    btn.setAttribute("aria-expanded", "true");
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    panel.style.opacity = "1";
                    btn.querySelector("svg").style.transform = "rotate(45deg)";
                }
            });
        });
    </script>