//Lokasi: public/wilayah.js
$('#price_sell').on('change',function(){
    var id = $(this).val();    
    if(id){
        $.ajax({
            type:"GET",
            url:"/getPrice?"+id, 
            data : {"_token":"{{ csrf_token() }}"},
            dataType: "json",
            success:function(res){               
            if(res){
                $("#price_sell").empty();
                $("#price_sell").append('<option>--- Pilih Barang ---</option>');
                $.each(res,function(id,price_sell){
                    $("#price_sell").append('<input value="'+ id +'">'+ price_sell +'</input>');
                });
            }else{
                    $("#price_sell").empty();
                }
            }
        });
    }else{
        $("#price_sell").empty();
    }      
});
