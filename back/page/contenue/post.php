<form role="form" action="add-post" method="post" enctype="multipart/form-data" >
        <div class="form-group">
          <label>Titre</label>
            <input name="titre" class="form-control" placeholder="Titre" >
        </div>
		
		<!--
		<div class="form-group">
          <label>Date de publication</label>
            <input name="datepost" class="form-control" type="date">
        </div>
		-->
		 <div class="form-group">
		  <label for="sel1">Select list:</label>
		  <select name="idrubrique" class="form-control" id="sel1">
			<?php 
			$rubrique = readtab("rubrique");
			foreach( $rubrique as $rub ) { 
			?>
				<option value="<?php echo $rub["id"] ?>" ><?php echo $rub["nom"] ?></option>
			<?php } ?>
		  </select>
		</div> 
	   
        <div class="form-group">
            <label>Description</label>
            <textarea name="detail" class="form-control" rows="3"></textarea>
        </div>
		
		<div class="form-group">
          <label>Tag</label>
            <input name="tag" class="form-control" placeholder="Tag" >
        </div>

		<div class="form-group">
          <label>Nom de l'image</label>
            <input name="name" class="form-control" placeholder="Nom du rubrique" >
        </div>
		
        <div class="form-group">
            <label>Image 300*196</label>
			<input name="fileToUpload" type="file">
        </div>
		
        <button type="submit" class="btn btn-default">Submit Button</button>
</form>


