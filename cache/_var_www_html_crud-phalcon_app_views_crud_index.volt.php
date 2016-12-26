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
	    <h2>Bordered Table</h2>
		<p>The .table-bordered class adds borders to a table:</p>   
		

		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Modal Add</h4>
		      </div>
		      <div class="modal-body">
		        <?= $this->tag->form(['crud/insert', 'role' => 'form']) ?>
				    <div class="form-group">
				      <label for="usr">Name:</label>
				      <input type="text" name="usr" class="form-control" id="usr">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" name="pwd" class="form-control" id="pwd">
				    </div>

					<div class="radio">
					  <label><input value="admin" type="radio" name="optradio">Admin</label>
					</div>
					<div class="radio">
					  <label><input type="radio" value="user" name="optradio">User</label>
					</div>
					<input type="submit" name="">
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div><br><br>
		           
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Username</th>
		        <th>Pass</th>
		        <th>Role</th>
		        <th>Edit</th>
		        <th>Delete</th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; ?>
		     <?php foreach ($data_user as $v) { ?>
		      <tr>
		        <td><?= $v->username ?></td>
		        <td><?= $v->password ?></td>
		        <td><?= $v->role ?></td>
		        <td><a href="<?= $this->url->get('crud/edit/') ?><?= $v->id ?>">edit</a> </td>
		        <td><a href="<?= $this->url->get('crud/delete/') ?><?= $v->id ?>">del</a></td>
		      </tr>
		      <?php $no ++; ?>
		    <?php } ?>
		    </tbody>
		  </table>
		</div>

        <?= $this->tag->javascriptInclude('bootstrap/js/bootstrap.min.js') ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    </body>
</html>