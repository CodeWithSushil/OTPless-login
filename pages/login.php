<?php pageAdd("header.php"); ?>
<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-6 col-sm-12">
<div class="card py-4 px-3 shadow">
  <div class="card-title">
    <h2 class="mb-3 text-center text-dark">Login</h2>
  </div>
<form method="POST" action="/submit-login">
  <div class="form-floating mb-3">
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="user@example.com" required>
    <label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope-at-fill"></i> Email</label>
</div>
<div class="d-flex align-items-center justify-content-between">
  <button type="submit" id="submit" name="submit" class="btn btn-sm btn-outline-dark"><i class="bi bi-box-arrow-in-right"></i> Login</button>
  <a class="text-dark text-decoration-none" href="/register">Register ?</a>
</div>
</form>
</div>
</div>
</div>
</div>
<?php pageAdd("footer.php"); ?>
