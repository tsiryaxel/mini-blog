<form role="form" method="post" action="add-rubrique" enctype="multipart/form-data" >
        <div class="form-group">
          <label>Nom</label>
            <input name="nom" class="form-control" placeholder="Nom du rubrique" >
        </div>
		
        <div class="form-group">
            <label>Description</label>
            <textarea name="detail" class="form-control" rows="3"></textarea>
        </div>
		
		<div class="form-group">
          <label>Nom de l'image</label>
            <input name="name" class="form-control" placeholder="Nom du rubrique" >
        </div>
		
        <div class="form-group">
            <label>Image 397*210</label>
            <input name="fileToUpload" type="file">
        </div>
		
		
        <button type="submit" class="btn btn-default">Submit Button</button>

</form>