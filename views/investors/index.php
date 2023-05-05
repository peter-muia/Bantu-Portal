
<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Investors';

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body class="g-sidenav-show  bg-gray-100">
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Investors</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Investors</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Welcome to</span> Bantu  
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="/site/profile" class="nav-link text-body">
                <i class="fa fa-user fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="customer-index">
                <div class="container-fluid">
                  <div class="table-wrapper">
                    <div class="table-title">
                      <div class="row">
                        <div class="col-sm-6">
                          <h6>Bantu <b>Investors</b>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="merchant-table" class="table align-items-center mb-0">
                        <thead>
                          <tr>
              
                            <!-- <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Image</th> -->
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">First Name</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Phone Number</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">County/State</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Identification</th>
                            <th class="text-uppercase text-xxs font-weight-bolder opacity-7">ID_Number</th>
                 	          <th class="text-uppercase text-xxs font-weight-bolder opacity-7">view</th>
		                      </tr>
                        </thead>
                        <tbody></tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editMerchantModal" class="modal fade" data-backdrop="static" data-keyboard="false">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form id="edit-merchant-form">
                        <div class="modal-header">
                          <h4 class="modal-title">Business Details</h4>
                          <button type="button" class="cancel" onclick="closeForm()" style="float:right;color: red;background: transparent; border:#fff; font-size: 22px;">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="form-merchantview col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="email" class="form-control">
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="businessname">BusinessName:</label>
                            <input type="name" id="businessname" name="businessname" placeholder="businessname" class="form-control" required>
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="industry">industry:</label>
                            <input type="name" id="industry" name="industry" placeholder="industry" class="form-control">
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="city">Location:</label>
                            <input type="name" id="city" name="city" placeholder="city" class="form-control">
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="image">Registration Document:</label>
                            <input type="imageid" id="registration" name="registration" placeholder="Registration Document" class="form-control" required>
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="city">Registration Number:</label>
                            <input type="name" id="registration_number" name="registration_number" placeholder="registration_number" class="form-control">
                          </div>
                          <div class="modal-header" style="padding-left:0;">
                            <h4 class="modal-title">Business Owner Details</h4>
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="lastname">LastName:</label>
                            <input type="name" id="lastname" name="lastname" placeholder="lastname" class="form-control" required>
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="firstname">FirstName:</label>
                            <input type="name" id="firstname" name="name" placeholder="firstname" class="form-control" required>
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="phone">Phone Number:</label>
                            <input type="name" id="phone" name="phone" placeholder="phone" class="form-control">
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="birthday">Birthday:</label>
                            <input type="name" id="birthday" name="birthday" placeholder="birthday" class="form-control">
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="tax_number">Tax Number:</label>
                            <input type="name" id="tax_number" name="tax_number" placeholder="tax_number" class="form-control">
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="role">Role:</label>
                            <input type="name" id="role" name="role" placeholder="role" class="form-control">
                          </div>
                          <div class="form-merchantview col-md-6">
                            <label for="id_number">Identification Number:</label>
                            <input type="name" id="id_number" name="id_number" placeholder="id_number" class="form-control" required>
                          </div>
                          <div class="form-merchant col-md-6">
                            <label for="identification">Identification:</label>
                            <input type="name" id="identification" name="identification" placeholder="identification" class="form-control">
                            
                          </div>
                          <div class="form-group">
                            <label for="image">Identification Document:</label>
                            <input type="imageid" id="idcard" name="idcard" placeholder="idcard Document" class="form-control" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <!-- <input type="submit" class="btn btn-info" value="Save"> -->
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
      
    
  </main>
 
  <!--   Core JS Files   -->
  
  <script src="../js/plugins/chartjs.min.js"></script>


<!--   Core JS Files   -->
  
  <script src="../js/core/popper.min.js"></script>
  <script src="../js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="../js/soft-ui-dashboard.min.js?v=1.0.2"></script> -->
   <script src="/js/vendor/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.4.2/firebase-storage.js"></script>
  <script src="/js/firebase.js"></script>
  <script src="/js/merchant.js"></script>
  <!-- <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApVYr8P9Lna37G3xkSw3eczjuM_AdY8XU&amp;sensor=false&&libraries=places&v=weekly&callback=initService"></script> -->
  </script>
  <script>
    $(function() {
      //function to show model
      var showModel = function(selectedMake) {
        $('#model option').hide();
        $('#model').find('option').filter(function() {
          var model = $(this).text();
          return model.indexOf(selectedMake) != -1;
        }).show();
        //set default value
        var defaultModel = $('#model option:visible:first').text();
        $('#model').val(defaultModel);
      };
      //set default make
      var make = $('#make').val();
      showModel(make);
      //on change event call showModel function 
      $('#make').change(function() {
        showModel($(this).val());
      });
    });
  </script>
  <script type="text/javascript">
    function closeForm() {
      window.parent.location.reload()
    }
  </script>
  
</body>

</html>







