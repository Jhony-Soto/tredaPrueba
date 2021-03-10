$(document).ready(function(){

    $.ajax({
        url:url+'Home/getStudent',
        type:'POST',
        success:function(res){
            res=JSON.parse(res)

            pintarTable(res.estudiantes)
            selectEstudios(res.estudios)
        }
    })

    function pintarTable(data){
        $('#bodytable').empty()
        $.each(data,function(key,value){
            $('#bodytable').append(`
                <tr>
                    <td>${value.id}</td>
                    <td>${value.Nombre}</td>
                    <td>${value.Apellido}</td>
                    <td>${value.Email}</td>
                </tr>
            `)
        })
    }

    function selectEstudios(data){
        $('#estudios').empty()
        $.each(data,function(key,value){
            $('#estudios').append(`<option value="${value.id}">${value.nombre_estudio}</option>`)
        })
    }
   

})

