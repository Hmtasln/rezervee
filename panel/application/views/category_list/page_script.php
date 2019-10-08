


<!--<script>
$( "input[name='durum']").change(function( event,state){

 
    //console.log(this['checked']);
    var gris=this['checked'];
    var dataID=this['id'];
    //var giris=$(this['checked']); 
    $.post("http://localhost/malzemeuygulamasi/panel/welcome/vtUpdata",
    {durum:gris, id:dataID},
    function(data){

        
       

    });


});


