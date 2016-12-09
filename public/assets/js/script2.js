$(function() {
  $('#send').on('click', function(event){
    event.preventDefault();

      /*var title = $('#title').val();
      var category = $('#category').val();
      var presentation = $('#presentation').val();
      var competence = $('#competence').val();
      var user_id = $('#user_id').val();*/

      var data = $('#form').serialize();

      console.log(data);
      //attribut data-url dans la baslise form avec le lien foruni par php
      //

      $.ajax({
      url: 'addPage',
      //url: $('#form').data('url'),
      method: 'POST',
      dataType: 'json',
      //data: {'title' : title, 'category' : category, 'presentation': presentation, 'competence' : competence, 'user_id' : user_id},
      data: {'data' : data},
      success: function(data){
          
          //var result = jQuery.parseJSON(data);
          var result = data;
          
      }
    });
  });


});
