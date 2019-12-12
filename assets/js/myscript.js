$(document).ready(function() {

	console.log('Js Aman');
    $('#dataTable').DataTable();

    //Site
    $('#siteAdd').on('click', function () {
        //console.log(id);
        $('.modal-body form').attr('action', base_url+'site/tambah');
        $('.modal-header h5').html('Tambah Site');
        $('#site_code').val('');
        $('#site_name').val('');
    });

    $('#dataTable').on('click', '#editSite', function () {
        const id = $(this).data('id');
        $('.modal-body form').attr('action', base_url+'site/edit/' + id);
        $('.modal-header h5').html('Ubah Data Site');

        $.ajax({
            url: base_url+'site/tampilubah',
            data: { id: id },
            dataType: 'json',
            method: 'post',
            success: function (data) {
                $('#site_code').val(data.site_code);
                $('#site_name').val(data.site_name);
            }
        });
    });

    //METER
    $('#meterAdd').on('click', function () {
        //console.log(id);
        $('.modal-body form').attr('action', base_url+'meter/tambah');
        $('.modal-header h5').html('Tambah Data Meter');
        $('#no_seri').val('');
        $('#type').val('');
        $('#merk').val('');
    });

    $('#dataTable').on('click', '#editMeter', function () {
        const id = $(this).data('id');
        $('.modal-body form').attr('action', base_url+'meter/edit/' + id);
        $('.modal-header h5').html('Ubah Data meter');
        console.log(id);
        $.ajax({
            url: base_url+'meter/tampilubah',
            data: { id: id },
            dataType: 'json',
            method: 'post',
            success: function (data) {
                $('#no_seri').val(data.no_seri);
                $('#type').val(data.tipe);
                $('#merk').val(data.merk);
            }
        });
    });

    //MODEM
    $('#modemAdd').on('click', function () {
        //console.log(id);
        $('.modal-body form').attr('action', base_url+'modem/tambah');
        $('.modal-header h5').html('Tambah Data Modem');
        $('#no_imei').val('');
        $('#type').val('');
        $('#merk').val('');
    });

    $('#dataTable').on('click', '#editmodem', function () {
        const id = $(this).data('id');
        $('.modal-body form').attr('action', base_url+'modem/edit/' + id);
        $('.modal-header h5').html('Ubah Data Modem');
        console.log(id);
        $.ajax({
            url: base_url+'modem/tampilubah',
            data: { id: id },
            dataType: 'json',
            method: 'post',
            success: function (data) {
                $('#no_imei').val(data.no_imei);
                $('#type').val(data.tipe);
                $('#merk').val(data.merk);
            }
        });
    });

    //SIMCARD
    $('#simcardAdd').on('click', function () {
        //console.log(id);
        $('.modal-body form').attr('action', base_url+'simcard/tambah');
        $('.modal-header h5').html('Tambah Data Sim Card');
        $('#no_sim').val('');
        $('#brand').val('');
    });

    $('#dataTable').on('click', '#editsimcard', function () {
        const id = $(this).data('id');
        $('.modal-body form').attr('action', base_url+'simcard/edit/' + id);
        $('.modal-header h5').html('Ubah Data Sim Card');
        console.log(id);
        $.ajax({
            url: base_url+'simcard/tampilubah',
            data: { id: id },
            dataType: 'json',
            method: 'post',
            success: function (data) {
                $('#no_sim').val(data.no_sim);
                $('#brand').val(data.brand);
            }
        });
    });



} );