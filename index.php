<?php 
  include("layouts.php");

  ?>
            <!-- Quick Action Toolbar Starts-->
            <div class="row quick-action-toolbar">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-header d-block d-md-flex">
                    <h5 class="mb-0">Your Room Number: <?php echo $room_num2 ?></h5>
                    <p class="ml-auto mb-0">Hello <?php echo $list_f_name ?>, Hostel Number <b><?php echo $room_num2 ?></b> has been assigned to you<i class="icon-bulb"></i></p>
                  </div>
                  <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                  <a  type="button" class="btn px-0"> <i class="icon-user mr-2">&nbsp;Your Reg No: <b style="color: red"><?php echo $list_reg_num ?></b></i></a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0"><i class="icon-lock mr-2"></i>Department: <b style="color: red"><?php echo $list_dept ?></b></a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a  type="button" class="btn px-0"><i class="icon-lock mr-2"></i>Course: <b style="color: red"><?php echo $list_course ?></b></a>
                    </div>
                    <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                      <a type="button" class="btn px-0"><i class="icon-lock mr-2"></i>Phone Number: <b style="color: red"><?php echo $list_c_num ?></b></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Quick Action Toolbar Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="d-sm-flex align-items-baseline report-summary-header">
                          <h5 class="font-weight-semibold">Your Course Books</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                        </div>
                      </div>
                    </div>
                    <div class="row report-inner-cards-wrapper">
                      <div class=" col-md -6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">GST 001</span>
                          <h4>₦5000</h4>
                          <span class="report-count"> 2 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-success">
                          <i class="icon-rocket"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">Web Development</span>
                          <h4>₦95</h4>
                          <span class="report-count"> 3 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-danger">
                          <i class="icon-briefcase"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">PYTHON</span>
                          <h4>₦2650</h4>
                          <span class="report-count"> 5 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-warning">
                          <i class="icon-globe-alt"></i>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl report-inner-card">
                        <div class="inner-card-text">
                          <span class="report-title">UI/UX</span>
                          <h4>₦542</h4>
                          <span class="report-count"> 9 Reports</span>
                        </div>
                        <div class="inner-card-icon bg-primary">
                          <i class="icon-diamond"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</div>

                </div>
                <?php
include("layouts_footer.php")
?>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
  </body>
</html>