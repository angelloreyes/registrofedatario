var tabla;

function init(){
    $("#menu_form").on("submit",function(e){	
        guardaryeditar(e);	
    });
}

$(document).ready(function(){
    tabla=$('#usuario_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: false,
        colReorder: true,
        buttons: [		          
                'copyHtml5',
                'excelHtml5'
                ],
        "ajax":{
            url: '../../controller/usuario.php?op=listar',
            type : "post",
            dataType : "json",							
            error: function(e){
                console.log(e.responseText);	
            }
        },
        "ordering": false,
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "autoWidth": false,
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }     
    }).DataTable(); 
});

function editar(usu_id){
    $('#mdtitulo').html('Editar Registro');
    $('#modalnuevo').modal('show');
}
function eliminar(usu_id){
    swal({
        title: "Registro de Usuario",
        text: "Esta seguro de Eliminar Usuario?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Si",
        cancelButtonText: "No",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
       
        $.post("../../controller/usuario.php?op=eliminar", {usu_id : usu_id }, function (data) {

        });
        $('#usuario_data').DataTable().ajax.reload();

            swal({
                title: "HelpDesk!",
                text: "Usuario eliminado correctamente.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
}

function editara(r_id) {
    $.post("../../controller/registro.php?op=mostrar",{r_id : r_id}, function(data, status){
        data = JSON.parse(data);
        $('#titulo_crud').html('Editar Registro');
        $('#r_ini').val(data.r_ini);
        $('#tipo_id').val(data.tipo_id);
        $('#r_fecha').val(data.r_fecha);
        $('#r_iden').val(data.r_iden);
        $('#r_foli').val(data.r_foli);
        $('#r_iden_trami').val(data.r_iden_trami);
        $('#r_organo').val(data.r_organo);
        $('#r_nom_soli').val(data.r_nom_soli);
        $('#r_dni').val(data.r_dni);
        $('#r_fech_eclu').val(data.r_fech_eclu);
        $('#r_id').val(data.r_id);
    }); 
    $("#modalcrud").modal('show');
    
}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#menu_form")[0]);
    $.ajax({
        url:"../../controller/registro.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType:false,
        processData:false,
        success:function(datos){
            console.log(datos);
            $('#menu_form')[0].reset();
            $("#modalcrud").modal('hide');
            $('#registro_data').DataTable().ajax.reload();	
           swal("Correcto!","Registrado Correctamente:","success");
        }
    });
}
$(document).on("click","#btnnuevo",function(){
    $('#mdtitulo').html('Nuevo Registro');
    $('#modalnuevo').modal('show');
});
init();