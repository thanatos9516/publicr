$( document ).ready(function() {
  guardar();
  listar();
  Editar();
  Eliminar();
});

function guardar(){
  $("#formAddProduct").on("submit", function(e){
         e.preventDefault();
         var $f = $(this);
         if ($f.data('locked') != undefined && !$f.data('locked')){
           var a = $('#tech_p').val();
           var b = $('#video_p').val();
           if($("#id").val() != ""){
                                       $.ajax({
                                          type: 'POST',
                                          url:"../admin/edit_product.php",
                                          data:  new FormData(this),
                                          contentType: false,
                                          cache: false,
                                          processData: false,
                                          success:function(result){
                                            $('#addproduct').modal('toggle');
                                            Limpiar()
                                            swal({
                                                position: 'center',
                                                type: 'success',
                                                title: 'file Updated successfully',
                                                showConfirmButton: false,
                                                timer: 1500
                                              });
                                            listar();
                                          },
                                             beforeSend: function(){
                                                 $f.data('locked', true);  // (2)
                                             },
                                            complete: function(){ $f.data('locked', false);  // (3)
                                           }
                                       });
                                     }
                                     else{
                                       $.ajax({
                                          type: 'POST',
                                          url:"../admin/addproduct.php",
                                          data:  new FormData(this),
                                          contentType: false,
                                          cache: false,
                                          processData: false,
                                          success:function(result){
                                            $('#addproduct').modal('toggle');
                                            Limpiar();
                                            swal({
                                                position: 'center',
                                                type: 'success',
                                                title: 'File saved successfully',
                                                showConfirmButton: false,
                                                timer: 1500
                                              });
                                            listar();
                                          },
                                             beforeSend: function(){
                                                 $f.data('locked', true);  // (2)
                                             },
                                            complete: function(){ $f.data('locked', false);  // (3)
                                           }
                                       });
                                     }

                      }
                      else
                      {
                       //Bloqueado!!!
                       //alert("locked");
                      }

  });

}


function getImg(data, type, full, meta) {
        var orderType = data.OrderType;
        if (orderType === 'Surplus') {
          console.log(data);
            return '<img src="../../upload/noimage.jpg" />';
        } else {
          if(data != ""){
            return '<img src="../'+data+'" />';
          }
          else{
            return '<img src="../../upload/noimage.jpg" />';
          }
        }
    }


function Editar(){
  $("#datatable").on("click",".btnEditar", function(){
   d = $(this).parents("tr").find("td");
   $('#addproduct').modal();

   $("#id").val(d[0].innerText);
   $("#name_p").val(d[1].innerText);
   $("#category_p").val(d[4].innerText);
   $("#supplier_p").val(d[8].innerText);
   $("#price_p").val(d[12].innerText);
   $("#qty_p").val(d[13].innerText);
   $("#description_p").val(d[7].innerText);
   $("#tech_p").val(d[9].innerText);
   $("#video_p").val(d[11].innerText);
 });
}

function Limpiar(){

     $("#id").val('');
     $("#name_p").val('');
     $("#category_p").val('');
     $("#supplier_p").val('');
     $("#price_p").val('');
     $("#qty_p").val('');
     $("#description_p").val('');
     $("#tech_p").val('');
     $("#video_p").val('');
}

function Eliminar(){
  $("#datatable").on("click",".btnEliminar", function(){
   d = $(this).parents("tr").find("td");


      const swalWithBootstrapButtons = swal.mixin({
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false,
      })

      swalWithBootstrapButtons({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {

          $.ajax({
             type: 'POST',
             url:"../admin/deleteproduct.php",
             data:{'id':d[0].innerText},
             success:function(result){
               swal({
                 position: 'center',
                 type: 'success',
                 title: 'Deleted successfully',
                 showConfirmButton: false,
                 timer: 1000
               });
               listar();
             }
           });

        } else if (
          // Read more about handling dismissals
          result.dismiss === swal.DismissReason.cancel
        ) {
          swal({
              position: 'center',
              type: 'error',
              title: 'Your file is safe',
              showConfirmButton: false,
              timer: 1000
            })
        }
      })
 });
}


function listar(){

  var table = $("#datatable").DataTable({
       "order": [[0, "desc" ]],
       "bFilter": true,
       "bDestroy": true,
        "sPaginationType": "full_numbers",
        "ajax": {
          "type": "POST",
          "url": "../admin/list_.php"
              },
        "columns": [
          { "data": "productid"},
          { "data": "product_name"},
          { "data": "company_name"},
          { "data": "category_name"},
          { "data": "categoryid", "class":"hidden"},
          { "data": "company_address", "class":"hidden"},
          { "data": "contact", "class":"hidden"},
          { "data": "description", "class":"hidden"},
          { "data": "supplierid", "class":"hidden"},
          { "data": "tech", "class":"hidden"},
          { "data": "userid", "class":"hidden"},
          { "data": "video", "class":"hidden"},
          { "data": "product_price" },
          { "data": "product_qty"},
          { "data": "photo", render: getImg},
          { "data": "photo", "class":"hidden"},
          { "data": null,"defaultContent": "<div class='btns'><button class='btn btn-success btnEditar'><span class='fa fa-pencil'></span> Edit</button> | <button class='btn btn-danger btnEliminar'><span class='fa fa-trash'></span> Delete</button></div>"}
          ]
        });
}
