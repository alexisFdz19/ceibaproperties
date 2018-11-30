/*=============================================
=           Breadcrumb =
=============================================*/

var pagActiva = $(".pagActiva").html();

if(pagActiva != null){

    var regPagActiva = pagActiva.replace(/-/g, " ");

    $(".pagActiva").html(regPagActiva);
    
}