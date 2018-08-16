
$(document).on('ready',function(){
     $('#btnSidebar').on('click', function(){
      $('body').toggleClass('sidebar-collapse');
      });
    });
 window.onload=function(){
        var contenedor=document.getElementById('contenedor_carga');
        contenedor.style.visibility='hidden';
        contenedor.style.opacity='0';
    }
$('[data-toggle="tooltip"]').tooltip();