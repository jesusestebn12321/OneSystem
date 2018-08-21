$(document).ready(function(){
    $('#btnSidebar').click(function(){
      	$('body').toggleClass('sidebar-collapse');
    });
    $('#btn-corazon').click(function(){
      $('#corazon').toggleClass('fa-heart-o');
    });
    $('#btn-bell').click(function(){
      $('#bell').toggleClass('fa-bell-o');
    });
    $('#categoria').click(function() {
      $('#categoria-menu').toggleClass('open');
    });    
});
 window.onload=function(){
        var contenedor=document.getElementById('contenedor_carga');
        contenedor.style.visibility='hidden';
        contenedor.style.opacity='0';
    }
$('[data-toggle="tooltip"]').tooltip();