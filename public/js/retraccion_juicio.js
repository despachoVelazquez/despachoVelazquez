// $(document).ready(function(){
//     var maxField = 3; //Input fields increment limitation
//     var addButtonCliente = $('.add_button'); //Add button selector
//     var wrapperCliente = $('.field_wrapper'); //Input field wrapper
//     var x = 1; //Initial field counter is 1
    
   
//     var fieldHTMLCliente = '<div  id="remove"><br>'+
//                                '<input type="text" style="float:left;width: 12.5%;" class="form-control" name="field_name[]">'+
//                                '<a href="javascript:void(0);" class="remove_buttonCliente" title="Remove field">'+
//                                '<img src="archivo/remove-icon.png" width="30" height="30" />'+
//                                 '</a><br>'+ 
//                             '</div>'; //New input field html 
//     $(addButtonCliente).click(function(){ //Once add button is clicked
//         if(x < maxField){ //Check maximum number of input fields
//             x++; //Increment field counter
//             $(wrapperCliente).append(fieldHTMLCliente); // Add field html
//         }
//     });
//     $(wrapperCliente).on('click', '.remove_buttonCliente', function(e){ //Once remove button is clicked
//     	e.preventDefault();
//         $("#remove:first").remove(); //Remove field html
//         x--; //Decrement field counter
//     });
// });
$(document).ready(function(){
    maxField = 3;
    var x = 1;
    maxFieldDema = 3;
    var y = 1;
    $("#boton1").click(function(){
        if(x < maxField){
            x++;
            $("#AgregarAb").append("<div id='remove'><input type='text' name='campo"+x+"' id='campo"+x+"' class='form-control' disabled placeholder='Abogado ("+x+")'></div>");     
        }
    });
    $("#boton2").on('click', function(e){
        e.preventDefault();
        $("#remove:first").remove();    
            x--;
    });
    $("#abogado").click(function(){
        var campo1= $('select[name="abogado"] option:selected').text();
        if($("#campo1").val().length<=0){
            if(campo1 != ""){
           $("#campo1").val(campo1)
            }
            var $miSelect = $('#abogado');
            $miSelect.val($miSelect.children('option:first').val());
        }
        if($("#campo1").val().length > 0 && $("#campo2").val().length <= 0){  
                if(campo1 != ""){
                    $("#campo2").val(campo1)
                }
            var $miSelect = $('#abogado');
            $miSelect.val($miSelect.children('option:first').val());
        }
        if($("#campo1").val().length > 0 && $("#campo2").val().length > 0 ){  
                if(campo1 != ""){
                    $("#campo3").val(campo1)
                }
            var $miSelect = $('#abogado');
            $miSelect.val($miSelect.children('option:first').val());
        }
    });
    $("#boton3").click(function(){
        if(y < maxFieldDema){
            y++;
            $("#AgregarDe").append("<div id='removeDema'><input type='text' name='deman"+y+"' id='deman"+y+"' class='form-control' placeholder='Autoridad o Demandado ("+y+")'></div>");     
        }
    });
    $("#boton4").on('click', function(e){
        e.preventDefault();
        $("#removeDema:first").remove();    
            y--;
    });
});