
$(function() {
    load(1);
});
function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/list_products.php',
        data: parametros,
         beforeSend: function(objeto){
        $("#loader").html("Loading...");
      },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}
$('#editProductModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
	$('#edit_id').val(id)
  var name = button.data('name') 
  $('#edit_name').val(name)
  var category = button.data('category') 
  $('#edit_category').val(category)
  var stock = button.data('stock') 
  $('#edit_stock').val(stock)
  var price = button.data('price') 
  $('#edit_price').val(price)
  var description = button.data('description')  
  $('#edit_description').val(description)
  var tech = button.data('tech')  
  $('#edit_tech').val(tech)
  var video = button.data('video')  
  $('#edit_video').val(video)
  var supplier = button.data('supplier')  
  $('#edit_supplier').val(video)
})

$('#deleteProductModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  $('#delete_id').val(id)
})


$( "#edit_product" ).submit(function( event ) {
  var parametros = $(this).serialize();
    $.ajax({
            type: "POST",
            url: "ajax/edit_product.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
                swal(
                  'Product update!',
                  '',
                  'success'
                    )
            $("#resultados").html(datos);
            load(1);
            $('#editProductModal').modal('hide');
          }
    });
  event.preventDefault();
});

$( "#add_product" ).submit(function( event ) {
  var parametros=new FormData($(this)[0])
    $.ajax({
            type: "POST",
            encoding:"UTF-8",
            url: "save_product.php",
            data: parametros,
            contentType: false, 
            processData: false, 
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
              swal(
                'product added correctly!',
                '',
                'success'
                  )
            $("#resultados").html(datos);
            load(1);
            $('#addProductModal').modal('hide');
          }
    });
  event.preventDefault();
});

/* $( "#add_product" ).submit(function( event ) {
  var parametros = $(this).serialize();
    $.ajax({
            type: "POST",
            url: "ajax/save_product.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
              swal(
                'product added correctly!',
                '',
                'success'
                  )
            $("#resultados").html(datos);
            load(1);
            $('#addProductModal').modal('hide');
          }
    });
  event.preventDefault();
}); */

$( "#delete_product" ).submit(function( event ) {
  var parametros = $(this).serialize();
    $.ajax({
            type: "POST",
            url: "ajax/del_product.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#resultados").html("Enviando...");
              },
            success: function(datos){
              swal(
                'Product Delete!',
                '',
                'success'
                  )
            $("#resultados").html(datos);
            load(1);
            $('#deleteProductModal').modal('hide');
          }
    });
  event.preventDefault();
});
