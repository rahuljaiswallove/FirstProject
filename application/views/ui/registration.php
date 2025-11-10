
<?php $this->load->view('webmaster/header'); ?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration - Bootstrap Only</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-8">
        <div class="card shadow-sm">
          <div class="row g-0">
            <div class="col-md-5 d-none d-md-flex align-items-center justify-content-center bg-primary text-white p-4">
              <div class="text-center">
                <h3 class="mb-1">Welcome</h3>
                <p class="mb-3">Create your account to get started</p>
                <svg width="96" height="96" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 12a4 4 0 100-8 4 4 0 000 8z" fill="white" opacity="0.95"/>
                  <path d="M4 20a8 8 0 0116 0" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" opacity="0.95"/>
                </svg>
              </div>
            </div>

            <div class="col-md-7">
              <div class="card-body p-4">
                <h4 class="card-title mb-2">Create an account</h4>
                <form action="<?php echo base_url('submit'); ?>" method="POST" autocomplete="off" >
                  <div class="row g-3">
                    <div class="col-12 col-sm-6">
                      <label for="firstName" class="form-label">First name <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" required minlength="2" />
                    </div>

                    <div class="col-12 col-sm-6">
                      <label for="lastName" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" />
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Email address <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                    </div>

                    <div class="col-12 ">
                      <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="At least 6 characters" required minlength="6" />
                    </div>

        

                    <div class="col-12 col-md-6">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 98765 43210" pattern="^\+?\d{7,15}$" />
                    </div>

                    <div class="col-12 col-md-6">
                      <label for="dob" class="form-label">Date of birth</label>
                      <input type="date" class="form-control" id="dob" name="dob" />
                    </div>

                    <div class="col-12">
                      <label class="form-label d-block">Gender</label>
                      <div class="btn-group" role="group" aria-label="Gender">
                        <input type="radio" class="btn-check" name="gender" id="genderMale" value="male" autocomplete="off" checked>
                        <label class="btn btn-outline-secondary" for="genderMale">Male</label>

                        <input type="radio" class="btn-check" name="gender" id="genderFemale" value="female" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="genderFemale">Female</label>

                        <input type="radio" class="btn-check" name="gender" id="genderOther" value="other" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="genderOther">Other</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="address" class="form-label">Address</label>
                      <textarea id="address" name="address" rows="2" class="form-control" placeholder="Street, city, state..."></textarea>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">I agree to the Terms and Conditions <span class="text-danger">*</span></label>
                      </div>
                    </div>

                    <div class="col-12 d-grid">
                      <button type="submit" class="btn btn-primary btn-lg" name="Submit">Register</button>
                    </div>

                    <div class="col-12 text-center">
                      <small class="text-muted">Already have an account? <a href="<?php echo base_url('login'); ?>">Sign in</a></small>
                    </div>
                  </div>
                </form>

              </div>
            </div>

          </div> <!-- row g-0 -->
        </div> <!-- card -->
      </div>
    </div>
  </div>

  <!-- Bootstrap JS bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>










































<?php $this->load->view('webmaster/footer'); ?>