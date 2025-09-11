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

// Inisialisasi tombol scroll-top
document.addEventListener('DOMContentLoaded', function() {
    const scrollTopBtn = document.getElementById('scroll-top');
    scrollTopBtn.classList.add('show');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 70) {
            scrollTopBtn.classList.add('show');
        } else {
            scrollTopBtn.classList.remove('show');
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
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