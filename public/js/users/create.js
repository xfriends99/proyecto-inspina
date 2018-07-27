$(function(){

  $('.country').on('change', onSelectCountryChange);

});



function onSelectCountryChange() {
  var country_id = $(this).attr("data-target");
  var country_id = $(this).val();

 if(!country_id)
 	$('.province').html('<option value="">Seleccione un Estado</option>');

 //AJAX
 $.get('/api/country/'+country_id+'/provinces', function(data){
 	var html_select='<option value="">Seleccione un Estado</option>';
   for (var i=0; i<data.length; ++i)
       html_select +='<option value="'+data[i].id+'">'+data[i].name+'</option>';
   $('.province').html(html_select);
 });

}

$(function(){

  $('.province').on('change', onSelectProvinceChange);

});

function onSelectProvinceChange() {
  var province_id = $(this).val();

   if(!province_id)
 	$('.city').html('<option value="">Seleccione una Ciudad</option>');
 //AJAX
 $.get('/api/province/'+province_id+'/city', function(datap){
 	var html_select='<option value="">Seleccione una Ciudad</option>';
   for (var i=0; i<datap.length; ++i)
       html_select +='<option value="'+datap[i].id+'">'+datap[i].name+'</option>';
   $('.city').html(html_select);
 });

}


$(function(){

  $('.city').on('change', onSelectCityChange);

});

function onSelectCityChange() {
  var city_id = $(this).val();

 //AJAX
 $.get('/api/city/'+city_id+'/locality', function(datac){
 	var html_select='<option value="">Seleccione una Localidad</option>';
   for (var i=0; i<datac.length; ++i)
       html_select +='<option value="'+datac[i].id+'">'+datac[i].name+'</option>';
   $('.locality').html(html_select);
 });

}














