window.addEventListener('scroll', function() {
    var animatedContent = document.getElementById('animatedContent');
    var contentPosition = animatedContent.getBoundingClientRect().top;
    var screenPosition = window.innerHeight;

    if (contentPosition < screenPosition) {
        // Tambahkan kelas animasi saat konten terlihat di layar
        animatedContent.classList.add('slide-in-down');
    } else {
        // Hapus kelas animasi saat konten tidak lagi terlihat di layar
        animatedContent.classList.remove('slide-in-down');
    }
});
