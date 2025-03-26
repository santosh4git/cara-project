document.addEventListener("DOMContentLoaded", function () {
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active'); // Open menu
        });
    }

    if (close) {
        close.addEventListener('click', () => { // Corrected: should be 'close' not 'bar'
            nav.classList.remove('active'); // Close menu
        });
    }
});
