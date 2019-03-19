let cat = $("#cat").val();

$(function(){
    loadProducts(1);
})

function loadProducts(page){
    var per_page=9;
    var parametros = {"page":page,'per_page':per_page, 'cat':cat};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'POS/admin/ajax/list_products_pag.php',
        type:'POST',
        data: parametros,
         beforeSend: function(){
        $(".list-products").html("Loading...");
      },
        success:function(data){
          $(".list-products").html(data).fadeIn('slow');
        },
        error:function(resp){
          $(".list-products").html("Error no se pueden cargar los productos!");
        }
    });
  }
  