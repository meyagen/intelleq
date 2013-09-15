<script type="text/javascript">
$(document).ready(function(){
 $("#user_name").keyup(function(){
  if($("#user_name").val().length >= 4)
  {
  $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>index.php/user/check_user",
   data: "name="+$("#user_name").val(),
   success: function(msg){
    if(msg=="true")
    {
     $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>images/yes.png')" });
    }
    else
    {
     $("#usr_verify").css({ "background-image": "url('<?php echo base_url();?>images/no.png')" });
    }
   }
  });
  }
  else 
  {
   $("#usr_verify").css({ "background-image": "none" });
  }
 });
});
</script>