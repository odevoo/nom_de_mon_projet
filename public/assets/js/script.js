$(function() {

  $.ajax({
      url: 'getskills',
      method: 'POST',
      dataType: 'json',
      //data: {'data' : dataJson},
      success: function(data){
          
          //var result = jQuery.parseJSON(data);
          var result = data;
          displayData(result); 
          animate();
         
      }
    });
});



//Functions
//display data
function displayData(skills){
  $('.bars').html('');
  $('.skills').html('');
  for (var key in skills){
    var personal = skills[key],
        work = skills[key];
    
    $('.skills').append("<li><span>"+key+"</span></li>");
    $('.bars').append("<li><div data-percentage='"+skills[key]+"' class='bar'>"+skills[key]+"</div></li>"); 
    
  };
}


//animate the data
function animate(){
  $('.bar').css('width','0px');
  $(".bars .bar").delay(1000).each(function(i){
    var percentage = $(this).data('percentage');
    
    $(this).delay(i+"00").animate({'width': percentage + '%'}, 700);
   
  });
}