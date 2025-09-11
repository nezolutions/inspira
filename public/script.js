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

document.addEventListener('DOMContentLoaded', () => {
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
    
    setInterval(function() {
        var el = document.querySelector('.jello-hh');
        if (el) {
            el.classList.remove('jello-hh');
            // Paksa reflow agar animasi bisa diulang
            void el.offsetWidth;
            el.classList.add('jello-hh');
        }
    }, 3000);

    // Back to Top Button
    const scrollTopBtn = document.getElementById('scroll-top');
    scrollTopBtn.classList.add('show');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 70) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
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