<!-- login modal-->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Login here</h4>
      </div>
		<form action="login.php" method="post">
		
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" name="email">
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
	</form>		
			
    </div>
  </div>
</div>

<!-- end login modal-->