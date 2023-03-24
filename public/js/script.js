$(function() {
    $('.tombolTambah').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function() {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/learn-mvc/public/mahasiswa/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/learn-mvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'POST',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#nik').val(data.nik);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});