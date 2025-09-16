<div id="scroll-top" class="fixed z-50 bottom-20 xl:bottom-4 right-4">
    <a href="#" class="w-10 h-10 bg-gradient-to-b from-red-600 to-red-700 hover:from-red-800 hover:to-red-900 cursor-pointer text-white flex items-center rounded-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-full text-center">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
        </svg>          
    </a>
</div>
<script>
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

</script>