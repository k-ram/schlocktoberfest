<?php  
  $errors = $movie->errors;
  $verb = ($movie->id? "Edit" : "Add");
  if($movie->id){
    $submitAction = ".\?page=movie.update";
  } else {
    $submitAction = ".\?page=movie.store";
  }
 echo $submitAction;
?>
<div class="row">
  <div class="col-xs-12">
    <h1>Movies</h1>
    <ol class="breadcrumb">
      <li><a href=".\">Home</a></li>
      <li><a href=".\?page=movies">Movies</a></li>
      <li  class="active"><?= $verb;?> Movies</li>
    </ol>
  </div>
</div>

  
    <form id="moviecreate" action="<?= $submitAction; ?>" method="POST" class="form horizontal" enctype="multipart/form-data">

    <?php if($movie->id): ?>
     
          <input type="hidden" name="id" value="<?= $movie->id;?>">
    <?php endif; ?>
      <h3 class="text-center"><?= $verb; ?> Movie</h3>

      <div class="form-group <?php if($errors['title']): ?> has-error <?php endif; ?>">
        <label for="title" class="control-label">Movie Title</label>
        <div>
          <input class="form-control" id="movietitle" name="title" placeholder="Troll2 (1990)"
            value="<?php echo $movie->title; ?>">
          <div class="help-block"><?php echo $errors['title']; ?></div>
        </div>
      </div>
        
      <div class="form-group <?php if($errors['year']): ?> has-error <?php endif; ?>">
        <label for="year" class="control-label">Release Year</label>
        <div>
          <input type="year" class="form-control" id="year" name="year" placeholder="1990"
            value="<?php echo $movie->year; ?>">
          <div class="help-block"><?php echo $errors['year']; ?></div>
        </div>
      </div>

      <div class="form-group <?php if($errors['description']): ?> has-error <?php endif; ?>">
        <label for="description" class="control-label">Movie description</label>
        <div>
          <textarea class="form-control" rows="3" name="description" placeholder="A paragraph about the movie."><?php echo $movie->description; ?></textarea>
          <div class="help-block"><?php echo $errors['description']; ?></div>
        </div>
      </div>

      <div class="form-group <?php if($errors['poster']): ?> has-error <?php endif; ?>">
        <label for="poster" class="control-label">Poster</label>
        <div>
          <input type="file" class="form-control" id="poster" name="poster" >
        </div>
        <?php if($movie->poster != ""): ?>
          <div >
            <img src="./images/poster/100h/<?= $movie->poster ?>" alt="image">
          </div>
          <div>
            <div class="checkbox">
              <label><input type="checkbox" name="removeImage" value="true">Remove image</label>
            </div>
          </div>
        <?php else: ?>
        <div> 
          <p><small>No poster found for this movie</small></p>
        </div>
        <?php endif; ?>
      </div>

      <div class="form-group <?php if($errors['tags']): ?> has-error <?php endif; ?>">
        <label for="tags" class="control-label">Tags</label>
        <div id="tags" class="form-control">
          <script type="text/javascript">
            var inputTags = "<?= $movie->tags;?>";
          </script>
        </div>
      </div>



      <div class="form-group">
        <div>
          <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span><?= $verb;?> Movie</button>
        </div>
      </div>

    </form> 



  <?php if($movie->id): ?>
    <form action=".\?page=movie.destroy" method="POST" class="form horizontal">
      <div class="form-group">
        <div>
        <input type="hidden" name="id" value="<?= $movie->id;?>">
          <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</button>
        </div>
      </div>
    </form> 
  <?php endif; ?>  