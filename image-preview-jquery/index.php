<!DOCTYPE html>
<html lang="en">
  <body>	
          	<form role="form" method="post" enctype="multipart/form-data">
				<div class="form-group">
			    	<label for="file">Choose your Image: </label>
			    	<input type="file"  class="coverimage" id="file" name="file[]" multiple>
			  	</div>
				
				<div id="image_container">
				</div>	
			</form>	
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function($){
		images = new Array();
		$(document).on('change','.coverimage',function(){
			 files = this.files;
			 $.each( files, function(){
				 file = $(this)[0];
				
					 var reader = new FileReader();
					 reader.readAsDataURL(file);
					 reader.onloadend = function(e) {
						img_src = e.target.result; 
						html = "<iframe src='http://docs.google.com/gview?url=http://www.testurl.in/prtemplate/template/&embedded=true' width='500px' height='500px'></iframe>";
						$('#image_container').append( html );
					
					 };
				 
			});
		});
	});
	</script>
    
  </body>
</html>
