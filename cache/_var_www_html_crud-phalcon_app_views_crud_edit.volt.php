<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD Phalcon</title>
        <?= $this->tag->stylesheetLink('/bootstrap/css/bootstrap.min.css') ?>
    </head>
    <body>
	    <div class="container">
	    <h2>EDIT <?= $cek_admin ?> - <?= $cek_user ?></h2>
		<p>The .table-bordered class adds borders to a table:</p>   
		
			<?= $this->tag->form(['crud/editSubmit', 'role' => 'form']) ?>
			    <div class="form-group">
			      <label for="usr">Name:</label>
			      <input type="text" name="usr" value="<?= $data_user->username ?>" class="form-control" id="usr">
			    </div>
			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="text" name="pwd" value="<?= $data_user->password ?>" class="form-control" id="pwd">
			      <input type="text" style="display: none;" name="id" value="<?= $data_user->id ?>" class="form-control" id="pwd">
			    </div>

				<div class="radio">
				  <label><input type="radio" value="user" <?= $cek_user ?> name="optradio">User</label>
				</div>
				<div class="radio">
				  <label><input value="admin" <?= $cek_admin ?> type="radio" name="optradio">Admin</label>
				</div>
				<input type="submit" name="">
			</form>
		</div>

        <?= $this->tag->javascriptInclude('bootstrap/js/bootstrap.min.js') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </body>
</html>