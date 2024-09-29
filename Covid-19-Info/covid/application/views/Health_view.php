<style>
  .center{
   padding-left: 250px;
  }

}
</style>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  


<body>
   <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <!--h3 class="page-header"><i class="#"></i>Covid19</h3-->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo site_url('Main/index');?>">Home</a></li>
              <li><i class="#"></i>Health Assess</li>
            </ol>
          </div>
        </div>


   

 <div class="row  center" >
   <div class="row">
        
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="titlepage text_align_center">
                        <h2>Basics Details</h2>
                     </div>
                  </div>
            </div>


              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" 
                  action="<?php echo site_url('Main/Health_controller');?>">


                    <div class="form-group ">
                      <label for="fullname" class="control-label col-lg-4">Full name <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="fullname" name="fullname" type="text" size="50" />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="email" class="control-label col-lg-4">Email <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="email" name="email" type="email" size="50" />
                      </div>
                    </div>
                  

                    <div class="form-group ">
                      <label for="number" class="control-label col-lg-4">Phone Number <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="phone_no" name="pnone_no" type="number" size="50"/>
                      </div>
                    </div>

                  <div class="form-group ">
                    <label for="address" class="control-label col-lg-4">Gender <span class="required">*</span></label>
                    <div class="col-lg-8">
                   <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="Male" >
                                                  Male
                                              </label>
                      </div>
                      <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="Female">
                                                  Female
                                              </label>
                      </div>

                         <div class="radio">
                        <label>
                                                  <input type="radio" name="optionsRadios" id="optionsRadios3" value="Other">
                                                  Other
                                              </label>
                      </div>
                    </div>
                  </div>
                
                  <div class="form-group ">
                      <label for="address" class="control-label col-lg-4">Address <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="address" name="address" type="text" size="50"/>
                      </div>
                    </div>

                     <div class="form-group ">
                      <label for="address" class="control-label col-lg-4">State <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="state" name="state" type="text" size="50" />
                      </div>
                    </div>


                      <div class="form-group ">
                      <label for="address" class="control-label col-lg-4">Country <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <input class="contactus" id="country" name="country" type="text" size="50" />
                      </div>
                    </div>
          

          
                    <div class="form-group">
                      <div class="col-lg-offset-4 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        <button class="btn btn-default" type="button">
                          <a href="<?php echo site_url('Main/Corana_test_view_controller');?>" >Next</a></button>
                      </div>
                    </div>


                  </form>



                </div>
              </div>
            </section>
          </div>
        </div>
      </div>



            <!--div class="col-sm-10 center">
            <section class="panel">
              <header class="panel-heading">
                Striped Table
              </header>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>State</th>
                    <th>Country</th>
                  </tr>
                </thead>
                <tbody>
                      <?php foreach ($users as $item) { ?>
                     <tr>
            
                          <td><?php echo $item->full_name ?></td>
                           <td><?php echo $item->email_address ?></td>
                            <td ><?php echo $item->phone_no ?></td>
                            <td ><?php echo $item->address ?></td>
                            <td><?php echo $item->gender ?></td>
                           <td><?php echo $item->state ?></td>
                            <td ><?php echo $item->country ?></td>
                                              
                     </tr>

                    <?php } ?>

                </tbody>
              </table>
            </section>
          </div>
        </div-->

      </section>
    </section>

  </body>


