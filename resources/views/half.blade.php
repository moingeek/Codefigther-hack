<!DOCTYPE html>
<html lang="en">
<head>
       <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />

  <style>
  .hide{
      display: none;
  }

  .show{
      display: block;
  }
  </style>
</head>
<body>
    
        <div class="container-scroller" id="text">
                <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
                  <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
                    <div class="row w-100">
                      <div class="col-lg-4 mx-auto">
                        <h2 class="text-center mb-4">Personal Details</h2>
                        <div class="auto-form-wrapper">
                        <form method="POST" action="{{route('half')}}">
                            @csrf
                          
                           <div class="form-group">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email" name="email" >
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                    <i class="mdi mdi-check-circle-outline"></i>
                                  </span>
                                </div>
                              </div>
                        </div>
                            <div class="form-group">
                              <div class="input-group">
                                <input type="number" class="form-control" placeholder="Aadhar Number" name="aadhar_no" maxlength="14" minlength="14" required>
                                <div class="input-group-append">
                                  <span class="input-group-text">
                                    <i class="mdi mdi-check-circle-outline"></i>
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                    <select class="form-control" id="type" name="type">
                                            <option value="None">Select Type</option>
                                            <option value="Student" id="student">Student</option>
                                            <option value="Trustee" id="trustee">Trustee</option>
                                          </select>
                                          
                              
                              </div>
                            </div>
                            <div class="form-group hide" id="organisation" >
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Organisation Name" name="org_name" >
                                      <div class="input-group-append">
                                        <span class="input-group-text">
                                          <i class="mdi mdi-check-circle-outline"></i>
                                        </span>
                                      </div>
                                    </div>
                            </div>
                            <div class="form-group hide" id = "field">
                                    <div class="input-group">
                                          <select class="form-control" name="sudtype">
                                                  <option value="None">Select Field</option>
                                                  <option value="Medical">Medical</option>
                                                  <option value="Engineering">Engineering</option>
                                                </select>
                                                
                                    
                                    </div>
                            </div>

                          
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary submit-btn btn-block">Register</button>
                            </div>
                            <div class="text-block text-center my-3">
                              <span class="text-small font-weight-semibold">Already have and account ?</span>
                              <a href="/login" class="text-black text-small">Login</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- content-wrapper ends -->
                </div>
                <!-- page-body-wrapper ends -->
              </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>

  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
    </script>
  <!-- endinject -->

  <script>
      $(document).ready(function(){
        var selectBox = document.getElementById("type");
        selectBox.addEventListener('change', changeFunc);
        function changeFunc() {


            if (this.value == "Student"){
                $("#field").removeClass('hide');
                $("#field").addClass('show');
                $("#organisation").removeClass('show');
                $("#organisation").addClass('hide');
            }
            else {
                $("#organisation").removeClass('hide');
                $("#organisation").addClass('show');
                $("#field").removeClass('show');
                $("#field").addClass('hide');

            }
         }
 
    });
  </script>
</body>
</html>