
<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full select-none">
    <div class="relative p-4 w-full max-w-sm max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700 p-4 text-center">
            <!-- Tombol X di kanan atas -->
            <button type="button" data-modal-hide="default-modal" aria-label="Tutup" class="absolute top-2 right-2 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex items-center justify-center transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <ul class="flex-row items-center">
                <a href="#home"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Home</li></a>
                <a href="#about"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">About</li></a>
                <a href="#agenda"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Agenda</li></a>
                <a href="#topics"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Topics</li></a>
                <a href="#category"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Category</li></a>
                <a href="#awards"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Awards</li></a>
                <a href="#fee"><li data-modal-hide="default-modal" class="py-2 text-lg text-gray-200 hover:text-black font-semibold transition">Fee</li></a>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScu_P8sgARBq5Apvboqu9yqBMFHLTYgI_jSWtdVrMeVyNSD5w/viewform"><li data-modal-hide="default-modal" class="my-2 text-lg text-white font-semibold bg-red-600 hover:bg-red-700 transition rounded-full px-5 py-2">Registeration</li></a>
            </ul>
        </div>
    </div>
</div>
  
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Ambil elemen
    const modal = document.getElementById('default-modal');
    const toggleBtn = document.querySelector('[data-modal-toggle="default-modal"]');
    const closeBtns = document.querySelectorAll('[data-modal-hide="default-modal"]');

    // Fungsi untuk toggle modal
    function toggleModal() {
        if (modal.classList.contains('hidden')) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        } else {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    }

    // Event untuk tombol toggle
    if (toggleBtn) {
        toggleBtn.addEventListener('click', toggleModal);
    }

    // Event untuk semua tombol close
    closeBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        });
    });
});
</script>
  