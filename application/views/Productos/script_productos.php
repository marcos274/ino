<script>
  //$(document).ready(function () {
  	var base_url = "<?php echo base_url(); ?>";
  $(".btn-view").on("click",function(){
  	var id = $(this).val();
    alert(id);
  	  $.ajax({
  	  	  url: base_url + "Productos/view/" + id,
  	  	  type: "Post",
  	  	  success: function(resp){
  	  	  	$("#modal-info .modal-body").html(resp);
  	  	  	//alert(resp);
         }
     });
    });
 // });
  //script>
 
</script>
