<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Ordenes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="../../template/lib/loading/jquery.loadingModal.css" rel="stylesheet">
        <link href="../../template/lib/fontawesome-free/css/all.css" rel="stylesheet">
        <link href="../../template/lib/Ionicons/css/ionicons.css" rel="stylesheet">
        <link href="../../template/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
        <link href="../../template/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
        <link href="../../template/lib/highlightjs/github.css" rel="stylesheet">
        <link href="../../template/lib/select2/css/select2.min.css" rel="stylesheet">
        <link href="../../template/lib/jquery.steps/jquery.steps.css" rel="stylesheet">
        <link href="../../template/lib/datatables/dataTables.min.css" rel="stylesheet">
        <link href="../../template/lib/datatables/dataTables.checkboxes.css" rel="stylesheet">
        <link href="../../template/lib/icheck/skins/all.css" rel="stylesheet">
        <link href="../../template/lib/toastr/toastr.min.css" rel="stylesheet">
        <link href="../../template/lib/sweetalert2/sweetalert2.min.css" rel="stylesheet">
        <link href="../../template/css/bracket.css" rel="stylesheet">
        <link href="../../template/lib/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
    <div style="min-height:100%; height:3rem; display:flex; flex-direction:row; color:white; align-items:center "  class="bg-dark">
            <a style="flex:1; text-align:center" href="../../Orden/Crear">
                Create
            </a>
            <a style="flex:1; text-align:center" href="../../Orden/View">
                View
            </a>
    </div>
    <div class="card" style ="margin:1.5rem">
        <div class="card-body">
            <form >
                <div class="form-group">
                    <label for="inputDescripcion">Comentario</label>
                    <textarea type="text" class="form-control" id="inputDescripcion"  placeholder=""></textarea>
                </div>
            
                <div class="row" style="display:none;">
                    <div class="col-8">
                        <div class= "form-group">
                            <label for="input_producto">Producto</label>
                            <select class="form-control" id="input_producto">
                            </select>
                        </div>
                    </div>
                    <div class = "col-4">
                        <button type="button" onclick="updateTableJson()" class="btn btn-success">Agregar</button>
                    </div>
                </div>
              
            <div class="float-end">
                <button type="button" onclick="Editar()" class="btn btn-success">Editar</button>

            </div>

                
            </form>
    
        </div>
    </div>
    <div>
    <div class="form-group">
                          <div class="p-2 table-responsive">
                              <table class="table table-bordered table-striped" id="table">
                                  <thead class="text-center bg-dark text-white">
                                      <tr>
                                      <th class="text-white" style="text-align: center;"><strong>Codigo</strong></th>

                                          <th class="text-white" style="text-align: center;"><strong>Descripcion</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>Precio Unitario</strong></th>
                                          <th class="text-white" style="text-align: center;"><strong>Cantidad</strong></th>

                                      </tr>	
                                  </thead>
                                  <tbody class="text-center"></tbody>

                              </table>
                          </div>
                      </div>
    </div>
    
    </body>
</html>
<script src="../../template/lib/jquery/jquery.js"></script>
        <script src="../../template/lib/popper.js/popper.js"></script>
        <script src="../../template/lib/bootstrap/bootstrap.js"></script>
        <script src="../../template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
        <script src="../../template/lib/moment/moment.js"></script>
        <script src="../../template/lib/jquery-ui/jquery-ui.js"></script>
        <script src="../../template/lib/jquery-switchbutton/jquery.switchButton.js"></script>
        <script src="../../template/lib/peity/jquery.peity.js"></script>
        <script src="../../template/lib/highlightjs/highlight.pack.js"></script>
        <script src="../../template/lib/jquery.steps/jquery.steps.js"></script>
        <script src="../../template/lib/parsleyjs/parsley.js"></script>
        <script src="../../template/lib/parsleyjs/es.js"></script>
        <script src="../../template/lib/datatables/datatables.js"></script>
        <script src="../../template/lib/datatables/dataTables.checkboxes.js"></script>
        <script src="../../template/lib/toastr/toastr.min.js"></script>
        <script src="../../template/lib/sweetalert2/sweetalert2.min.js"></script>

 <script type="text/javascript" src="../../template/lib/JSZip-2.5.0/jszip.min.js"></script>
 <script type="text/javascript" src="../../template/lib/pdfmake-0.1.36/pdfmake.min.js"></script>
 <script type="text/javascript" src="../../template/lib/pdfmake-0.1.36/vfs_fonts.js"></script>
 <script type="text/javascript" src="../../template/lib/Buttons-2.0.1/js/dataTables.buttons.min.js"></script>
 <script type="text/javascript" src="../../template/lib/Buttons-2.0.1/js/buttons.html5.min.js"></script>
 <script type="text/javascript" src="../../template/lib/Buttons-2.0.1/js/buttons.print.min.js"></script>
        <script src="../../template/lib/jquery-toggles/toggles.min.js"></script>
        <script src="../../template/lib/jt.timepicker/jquery.timepicker.js"></script>
        <script src="../../template/lib/spectrum/spectrum.js"></script>
        <script src="../../template/lib/jquery.maskedinput/jquery.maskedinput.js"></script>
        <script src="../../template/lib/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <script src="../../template/lib/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
        <script src="../../template/lib/jquery-validation/jquery.validate.min.js"></script>
        <script src="../../template/lib/jquery-validation/additional-methods.min.js"></script>
        <script src="../../template/lib/loading/jquery.loadingModal.js"></script>
<script>
    let productData;
    let idEliminados = [];
    let jsonProductos = [];
    let select = document.getElementById('input_producto');
    function updateTableJson(){}
    function readTableJson(){}
    function deleteRow(){}
    $(document).ready(function () {
        var user_json = jsonProductos;
      
        var count = 0;
        var table = $('#table').DataTable({
        
            data: user_json,

            columns: [
                { "data": "id", "defaultContent": "" },
                { "data": "descripcion", "defaultContent": "" },
                { "data": "costo", "defaultContent": "" },
                {"render": function (data, type, row) {
                        count++;
                        var county = count - 1;
                    
                        return '<input type="number" disabled value="'+row.cantidad+'" id="number_'+row.index+'"></input>';
                    },},
             

            ],
            "order": [],
            "lengthChange": true,
            "info": true,
            "autoWidth": false,
            

        });
        deleteRow = function(rowid){
            table.clear();
            idEliminados[idEliminados.length] = jsonProdu
            jsonProductos.splice(rowid,1);
            
            let index = jsonProductos.length ;
            for(let i = 0 ; i < index; i++){
                jsonProductos[i].index = i;
                let elemento = {'id':jsonProductos[i].id,'descripcion':jsonProductos[i].descripcion,'index' : i};
                table.rows.add([elemento]).draw();
            } 
            
           
        }
        updateTableJson = function(){
            let index = jsonProductos.length ;
             
            let elemento = {'id':select.value,'descripcion':select.options[select.selectedIndex].text,'index' : index,'costo':productData[select.selectedIndex].costo, "cantidad":0};
            jsonProductos[index] = elemento;
            table.rows.add([elemento]).draw();
            console.log(jsonProductos);
        }
        readTableJson = function(producto){
            let index = jsonProductos.length ;
             
            let elemento = {'id':producto.id_producto,'descripcion':select.options[producto.id_producto].text,'index' : index,'costo':productData[producto.id_producto].costo, "cantidad":producto.cantidad};
            jsonProductos[index] = elemento;
            table.rows.add([elemento]).draw();
            console.log(jsonProductos);
            
        }
});



    $.ajax({
        type: "Post",
        url: '../../Orden/GetProductos',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            productData = data;
            for(let i = 0 ; i < data.length; i++){
                let option = document.createElement("option");
                option.innerHTML = data[i].descripcion;
                option.value = data[i].id;
                $("#input_producto").append(option);
            }
        },
        

    })
    var url = window.location.href;
    var id = url.substring(url.lastIndexOf('?') + 1);
    $.ajax({
        type: "Post",
        url: '../../Orden/GetOrders',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            
        },
        data:{
            "id":id,
        },
        success: function (data) {
            console.log(data);
            $("#inputDescripcion").val(data.orden.comentario);
            let productos = data.producto;
            for(let i = 0 ; i < productos.length ; i++){
                select.value = productos[i];
                readTableJson(productos[i]);
            }
        },
        

    })
    function Editar(){
        let dataAjax = {
            "id":id,
            "comentario": document.getElementById("inputDescripcion").value,
         
        }
        $.ajax({
        type: "Post",
        url: '../../Orden/UpdateRechazo',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data:dataAjax,
        success: function (data) {
            window.location.href = "../../Orden/View"
        },
        

    })
    }
</script>