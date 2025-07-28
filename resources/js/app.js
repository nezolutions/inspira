import './bootstrap';

// Global error handling for fetch requests
window.addEventListener('error', function(e) {
    if (e.message.includes('FetchEvent') || e.message.includes('redirect mode')) {
        console.warn('Service Worker or Fetch API error detected:', e.message);
    }
});

// Ensure proper fetch configuration
if (typeof fetch !== 'undefined') {
    const originalFetch = fetch;
    window.fetch = function(url, options = {}) {
        // Ensure redirect mode is set to 'follow' by default
        if (!options.redirect) {
            options.redirect = 'follow';
        }
        return originalFetch(url, options);
    };
}
