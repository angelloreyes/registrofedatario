function init(){
    $("#registro_form").on("submit",function(e){
        guardaryeditar(e);
    });
}


$(document).ready(function(){
    $.post("../../controller/categoria.php?op=combo",function(data,status){
        $('#tipo_id').html(data);
    });  
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#registro_form")[0]);
    $.ajax({
        url:"../../controller/registro.php?op=insert",
        type: "POST",
        data: formData,
        contentType:false,
        processData:false,
        success:function(datos){
            $('#r_ini').val(' ');
            $('#r_fecha').val(' ');
            $('#r_iden').val(' ');
            $('#r_foli').val(' ');
            $('#r_iden_trami').val(' ');
            $('#r_organo').val(' ');
            $('#r_nom_soli').val(' ');
            $('#r_dni').val(' ');
            $('#r_fech_eclu').val(' ');
           swal("Correcto!","Registrado Correctamente:","success");
        }
    });
}
init();