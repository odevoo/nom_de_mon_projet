$(function() {
  //list of skills
  var skills = {
                "SQL":{work:80},
                "PHP":{work:75},
                "JavaScript":{work:85},
                "JQuery" :{work:80},
                "Wordpress":{work:95},
                "HTML":{work:90},
                "CSS":{work:95},
               };
  
  
  
  displayData(skills);
  animate();
  
  //add new skill
  $('input:button').click(function(){
    var name = $('#txtSkill').val(),
        perc = $('#txtPerc').val();
    
    if(name && perc){
      skills[name] = {work:perc};
      displayData(skills);
      animate();

      var newheight = $('.chart').outerHeight() + 50;
      $('.chart').css('height',newheight);
    }else{
      animate();
    }
    $('input:text').val('');
  });
});



//Functions
//display data
function displayData(skills){
  $('.bars').html('');
  $('.skills').html('');
  for (var key in skills){
    var personal = skills[key].personal,
        work = skills[key].work;
    
    $('.skills').append("<li><span>"+key+"</span></li>");
    $('.bars').append("<li><div data-percentage='"+skills[key].personal+"' class='bar'>"+personal+"</div><div data-percentage='"+skills[key].work+"' class='bar'>"+work+"</div></li>"); 
    
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