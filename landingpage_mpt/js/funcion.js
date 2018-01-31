        //con esta función de jQueryUI damos un estilo bastante elegante
        //al botón de nuestro formulario
        $(function() {
                $( "#btn_registrar").button();
                $("#btn_registrar").click(function() {
                });
            });
        //*******************************************************************
        //Aquí comenzamos creando un plugin, podríamos haber realizado estás 
        //funciones de otra forma, pero así comprendemos como se crean los plugins 
        //con jQuery, que aunque no soy experto en el tema como ya dije, mirando la 
        //documentación se aprende bastante
        jQuery.fn.LlenarLimpiarCampos = function(){
            this.each(function(){
                $("#nombre").attr("value","Introduzca su nombre");
                $("#nombre").focus(function(){
                    if($("#nombre").attr("value")=="Introduzca su nombre"){
                    $("#nombre").attr("value","");     
                    }
                });
                $("#nombre").blur(function(){
                    if($("#nombre").attr("value")==""){
                   $("#nombre").attr("value","Introduzca su nombre");      
                    }
                });
                $("#apellido").attr("value","Introduzca su apellido");
                $("#apellido").focus(function(){
                    if($("#apellido").attr("value")=="Introduzca su apellido"){
                    $("#apellido").attr("value","");     
                    }
                });
                $("#apellido").blur(function(){
                    if($("#apellido").attr("value")==""){
                   $("#apellido").attr("value","Introduzca su apellido");      
                    }
                });
                $("#dni").attr("value","Introduzca su dni");
                $("#dni").focus(function(){
                    if($("#dni").attr("value")=="Introduzca su dni"){
                    $("#dni").attr("value","");     
                    }
                });
                $("#dni").blur(function(){
                    if($("#dni").attr("value")==""){
                   $("#dni").attr("value","Introduzca su dni");      
                    }
                });
                $("#ciudad").attr("value","Introduzca su ciudad");
                $("#ciudad").focus(function(){
                    if($("#ciudad").attr("value")=="Introduzca su ciudad"){
                    $("#ciudad").attr("value","");     
                    }
                });
                    $("#ciudad").blur(function(){
                    if($("#ciudad").attr("value")==""){
                   $("#ciudad").attr("value","Introduzca su ciudad");      
                    }
                });
                $("#celular").attr("value","Introduzca su celular");
                $("#celular").focus(function(){
                    if($("#celular").attr("value")=="Introduzca su celular"){
                    $("#celular").attr("value","");     
                    }
                });
                $("#celular").blur(function(){
                    if($("#celular").attr("value")==""){
                   $("#celular").attr("value","Introduzca su celular");      
                    }
                });
            
                $("#email").attr("value","Introduzca su email");
                $("#email").focus(function(){
                    if($("#email").attr("value")=="Introduzca su email"){
                    $("#email").attr("value","");       
                    }
                });
                $("#email").blur(function(){
                    if($("#email").attr("value")==""){
                   $("#email").attr("value","Introduzca su email");     
                    }
                });

                $("#titulo").attr("value","Introduzca su titulo");
                $("#titulo").focus(function(){
                    if($("#titulo").attr("value")=="Introduzca su titulo"){
                    $("#titulo").attr("value","");      
                    }
                });
                $("#titulo").blur(function(){
                    if($("#titulo").attr("value")==""){
                   $("#titulo").attr("value","Introduzca su titulo");       
                    }
                });

                $("#descripcion").attr("value","Introduzca su descripcion");
                $("#descripcion").focus(function(){
                    if($("#descripcion").attr("value")=="Introduzca su descripcion"){
                    $("#descripcion").attr("value","");      
                    }
                });
                $("#descripcion").blur(function(){
                    if($("#descripcion").attr("value")==""){
                   $("#descripcion").attr("value","Introduzca su descripcion");       
                    }
                });

            });
            return this;
        };
        //siempre que creemos un plugin debemos llamarlo, sino no funcionará
        $(document).ready(function(){
            $(this).LlenarLimpiarCampos();
        });
        //*************************************************************************
        //realizamos las validaciones de nuestro formulario con jQuery
        $(document).ready(function () {
            var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            $("#btn_registrar").click(function(){
                $(".error").remove();
                if( $("#nombre").val() == "" || $("#nombre").val() == "Introduzca su nombre"){
                    $("#nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
                    return false;
                }else if($("#nombre").val().length < 2){
                    $("#nombre").focus().after("<span class='error'>Mínimo 2 carácteres para el nombre</span>");
                    return false;

                }else if( $("#apellido").val() == "" || $("#apellido").val() == "Introduzca su apellido"){
                    $("#apellido").focus().after("<span class='error'>Ingrese su apellido</span>");
                    return false;
                }else if($("#apellido").val().length < 2){
                    $("#apellido").focus().after("<span class='error'>Mínimo 2 carácteres para el apellido</span>");
                    return false; 

                }else if( $("#dni").val() == "" || $("#dni").val() == "Introduzca su dni"){
                    $("#dni").focus().after("<span class='error'>Ingrese su dni</span>");
                    return false;
                }else if($("#dni").val().length < 8 ){
                    $("#dni").focus().after("<span class='error'>Debe ser 8 números para el dni</span>");
                    return false;

                }else if( $("#ciudad").val() == "" || $("#ciudad").val() == "Introduzca su ciudad"){
                    $("#ciudad").focus().after("<span class='error'>Ingrese su ciudad</span>");
                    return false;
                }else if($("#ciudad").val().length < 2){
                    $("#ciudad").focus().after("<span class='error'>Mínimo 2 carácteres para la ciudad</span>");
                    return false;

                }else if( $("#celular").val() == "" || $("#celular").val() == "Introduzca su celular"){
                    $("#celular").focus().after("<span class='error'>Ingrese su celular</span>");
                    return false;
                }else if($("#celular").val().length < 9){
                    $("#celular").focus().after("<span class='error'>Debe ser como mínimo 9 números para el celular</span>");
                    return false; 

                }else if( $("#email").val() == "" || $("#email").val() == "Introduzca su email"){
                    $("#email").focus().after("<span class='error'>Ingrese un email</span>");
                    return false;                 
                }else if( !emailreg.test($("#email").val())){
                    $("#email").focus().after("<span class='error'>Ingrese un email correcto</span>");
                    return false;

                }else if( $("#titulo").val() == "" || $("#titulo").val() == "Introduzca su titulo"){
                    $("#titulo").focus().after("<span class='error'>Ingrese un titulo</span>");
                    return false;
                }else if($("#titulo").val().length < 2){
                    $("#titulo").focus().after("<span class='error'>Mínimo 2 carácteres para el titulo</span>");
                    return false;

                }else if( $("#descripcion").val() == "" || $("#descripcion").val() == "Introduzca su descripcion"){
                    $("#descripcion").focus().after("<span class='error'>Ingrese un descripcion</span>");
                    return false;
                }else if($("#descripcion").val().length < 20){
                    $("#descripcion").focus().after("<span class='error'>Mínimo 20 carácteres para el descripcion</span>");
                    return false;
                }
            });

        });