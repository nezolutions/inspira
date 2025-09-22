<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<style>
    *, html {
        zoom: 0.99  ;
    }

    a, button, input, textarea, img {
        outline: none;
        user-select: none;
    }

    /* Scrollbar styling for mobile */
    .overflow-y-auto::-webkit-scrollbar {
        width: 4px;
    }

    .overflow-y-auto::-webkit-scrollbar-track {
        background: transparent;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb {
        background: rgba(156, 163, 175, 0.5);
        border-radius: 12px;
    }

    .overflow-y-auto::-webkit-scrollbar-thumb:hover {
        background: rgba(156, 163, 175, 0.7);
    }

    /* Back to Top */
    main.main #scroll-top {
        display: none !important;
        opacity: 0 !important;
    }

    main.main #scroll-top.show {
        display: inline !important;
        opacity: 1 !important;
    }

    main.main .jello-h {
        animation: jello-horizontal;
        animation-iteration-count: 1;
        animation-duration: 0.9s;    
    }

    main.main .jello-h:hover {
        animation-play-state: paused;
    }

    main.main .pulsate-bck:hover {
        animation: pulsate-bck 0.9s infinite;
    }

    @keyframes jello-horizontal {
        0% {
            transform: scale3d(1, 1, 1);
        }
        30% {
            transform: scale3d(1.25, 0.75, 1);
        }
        40% {
            transform: scale3d(0.75, 1.25, 1);
        }
        50% {
            transform: scale3d(1.15, 0.85, 1);
        }
        65% {
            transform: scale3d(0.95, 1.05, 1);
        }
        75% {
            transform: scale3d(1.05, 0.95, 1);
        }
        100% {
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes pulsate-bck {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(0.9);
        }
        100% {
            transform: scale(1);
        }
    }

    @media (max-width: 1280px) {
        *, html {
            zoom: 0.98;
        }
    }
</style>

<body class="font-['Poppins'] selection:bg-blue-600 selection:text-white overflow-y-auto bg-gray-900">
    @yield('content')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Notification
            setTimeout(function() {
                const notifications = document.querySelectorAll('.errors');
                notifications.forEach(function(notification) {
                    notification.style.transition = 'opacity 0.5s';
                    notification.style.opacity = '0';
                    setTimeout(function() {
                        notification.style.display = 'none';
                    }, 500);
                });
            }, 5000);
    
            // Animation
            setInterval(function() {
                var el = document.querySelector('.jello-h');
                if (el) {
                    el.classList.remove('jello-h');
                    // Paksa reflow agar animasi bisa diulang
                    void el.offsetWidth;
                    el.classList.add('jello-h');
                }
            }, 3000);
    
            // Back to Top Button
            const scrollTopBtn = document.getElementById('scroll-top');
            scrollTopBtn.classList.remove('show');
    
            window.addEventListener('scroll', function() {
                if (window.scrollY > 70) {
                    scrollTopBtn.classList.add('show');
                } else if (window.scrollY < 70) {
                    scrollTopBtn.classList.remove('show');
                } else {
                    scrollTopBtn.classList.remove('show');
                }
            });

            // FAQ's Toggle Menu
            const toggles = document.querySelectorAll(".faq-toggle");
        
            toggles.forEach(toggle => {
                toggle.addEventListener("click", () => {
                    const item = toggle.closest(".faq-item");
                    const content = item.querySelector(".faq-content");
                    const arrow = toggle.querySelector(".faq-arrow");

                    // Tutup semua item kecuali yang sedang diklik
                    document.querySelectorAll(".faq-item").forEach(el => {
                        if (el !== item) {
                            el.querySelector(".faq-content").style.maxHeight = null;
                            el.querySelector(".faq-content").style.opacity = 0;
                            el.querySelector(".faq-arrow").classList.remove("rotate-180");
                        }
                    });

                    // Toggle current item
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        content.style.opacity = 0;
                        arrow.classList.remove("rotate-180");
                    } else {
                        content.style.maxHeight = content.scrollHeight + "px";
                        content.style.opacity = 1;
                        arrow.classList.add("rotate-180");
                    }
                });
            });
            
            // Navigation Modal
            const modal = document.getElementById('default-modal');
            const toggleBtn = document.querySelector('[data-modal-toggle="default-modal"]');
            const closeBtns = document.querySelectorAll('[data-modal-hide="default-modal"]');
    
            function toggleModal() {
                if (modal.classList.contains('hidden')) {
                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                } else {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            }
    
            if (toggleBtn) {
                toggleBtn.addEventListener('click', toggleModal);
            }
    
            closeBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                });
            });
    
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        });
    </script>
</body>
</html>