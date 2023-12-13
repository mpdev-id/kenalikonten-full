</section>
<script>
    // Tambahkan script untuk menghilangkan preloader setelah halaman selesai dimuat
    document.addEventListener("DOMContentLoaded", function () {
        // Hilangkan preloader
        document.getElementById("preloader").style.display = "none";
        // Tampilkan konten setelah halaman dimuat
        document.getElementById("content").style.display = "block";
    });
</script>