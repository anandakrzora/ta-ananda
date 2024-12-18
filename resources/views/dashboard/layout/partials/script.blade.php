<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<script>
    // Event handler untuk tombol delete
    document.querySelectorAll('.delete').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah submit form otomatis

            const form = this.closest('form'); // Ambil form terdekat dari tombol
            const dataName = this.getAttribute('data-name'); // Ambil nilai data-name dari atribut

            // SweetAlert dengan tombol konfirmasi dan pembatalan yang disesuaikan
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data ' + dataName + ' yang dihapus tidak bisa dikembalikan!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit form jika dikonfirmasi
                } else {
                    Swal.fire('Data Anda aman!', '',
                        'info'); // Tampilkan pesan jika dibatalkan
                }
            });
        });
    });
</script>

@if(session('success'))
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: "{{ session('success') }}",
        icon: 'success',
        confirmButtonText: 'Oke'
    });
</script>
@endif

@if(session('updated'))
<script>
    Swal.fire({
        title: 'Diupdate!',
        text: "{{ session('updated') }}",
        icon: 'info',
        confirmButtonText: 'Oke'
    });
</script>
@endif