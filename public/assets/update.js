$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.Update').on('click', function(){
        let id_peserta = $(this).data('id')
        $.ajax({
            url:`/admin/peserta/${id_peserta}`,
            method:"GET",
            success: function(data){
                // alert(data.data[0].nama_barang);
                $('#UpdateModal').modal('show');
                $('#nilai_hafalan').val(data.data[0].nilai_hafalan);
                $('#nama_barang').val(data.data[0].nama_barang);
                $('#qty').val(data.data[0].qty);
                $('#harga').val(data.data[0].harga);
                $('#gambar').val(data.data[0].gambar);
            }
        });
    });

});