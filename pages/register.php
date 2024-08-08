<?php pageAdd("header.php"); ?>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-6 col-sm-12">
  <div class="card py-4 px-3 shadow">
  <div class="card-title">
<h2 class="text-center text-dark mb-3">Sign Up</h2>
</div>
<form method="POST" action="submit-register">
<div class="form-floating mb-3">
<input type="text" id="name" name="name" class="form-control" id="floatingInput" placeholder="user" required>
<label for="floatingInput"><i class="bi bi-person-fill"></i> Name</label>
</div>
<div class="form-floating mb-3">
<input type="email" id="email" name="email" class="form-control" id="floatingInput" placeholder="user@example.com" required>
<label for="floatingInput"><i class="bi bi-envelope-at-fill"></i> Email</label>
</div>
<div class="d-flex align-items-center justify-content-between">
<button type="submit" id="register" name="submit" class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-in-right"></i> Register</button>
<a class="text-dark text-decoration-none" href="/login">Login</a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php pageAdd("footer.php"); ?>
