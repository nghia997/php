$(document).ready(function(){
  $('#js-form').submit(function(event){
    if($('#js-file').val()=='')
    {
      alert('No file selected for upload');
      return false;
    }
    else{
      event.preventDefault();
      $('#load_icon').show();
      $(this).ajaxSubmit({
        target: '#target',
        beforeSubmit:function(){
          $('.progress').show();
          $('.progress-bar').width('0%');
        },
        uploadProgress: function(event, position, total, percentageComplete)
        {
          $('.progress-bar').width(percentageComplete + "%")
          $('.progress-bar').html('<div id="progress-status">' + percentageComplete+' %</div>')
        },
        success: function(result){
          $('#load_icon').hide();
          $('#target').show();
        },
        resetForm: true
      });
    }
    return false;
  });
});