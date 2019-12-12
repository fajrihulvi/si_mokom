$(document).ready(function() {

	console.log('ok');
    $('#dataTable').DataTable();

    $('#siteAdd').on('click', function () {
        //console.log(id);
        $('.modal-body form').attr('action', 'http://localhost/si_mokom/site/tambah');
        $('.modal-header h5').html('Tambah Site');
        $('#site_code').val('');
        $('#site_name').val('');
    });

    $('#dataTable').on('click', '#editSite', function () {
        const id = $(this).data('id');
        $('.modal-body form').attr('action', 'http://localhost/si_mokom/site/edit/' + id);
        $('.modal-header h5').html('Ubah Data Site');

        $.ajax({
            url: 'http://localhost/si_mokom/site/tampilubah',
            data: { id: id },
            dataType: 'json',
            method: 'post',
            success: function (data) {
                $('#site_code').val(data.site_code);
                $('#site_name').val(data.site_name);
            }
        });
    });


} );