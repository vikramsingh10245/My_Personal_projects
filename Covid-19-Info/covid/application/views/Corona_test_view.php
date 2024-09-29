<style>
   .center{
   padding-left: 180px;
  }

   #after_submit{
      visibility:hidden;
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
          <div class="col-lg-12">
            <section class="panel">
              <!--header class="panel-heading">
              Basic Details
              </header-->
              <div class="panel-body">
                <div class="form">
				<form id = "quiz" name = "quiz">
					   <div class="form-group ">
                      <label for="question1" class="control-label col-lg-3">Are you expriencing any of the following symptoms? <span class="required">*</span></label>
                  <div class="col-lg-8">
                       <div class="radio">
                        <label>
                                   <input type="radio" name="question1" id="question1" value="option1">Cough
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question1" id="question1" value="option2">Fever
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question1" id="question1" value="option3">Difficulty in Breathing
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question1" id="question1" value="option4">None of the above
                                                  
                         </label>
                      </div>
                    </div>
                  </div>



                  <div class="form-group ">
                      <label for="question2" class="control-label col-lg-3">Have you ever had any of the following ? <span class="required">*</span></label>

                    <div class="col-lg-8">
                       <div class="radio">
                        <label>
                                   <input type="radio" name="question2" id="question2" value="option1">Diabetes
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question2" id="question2" value="option2">Hypertension
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question2" id="question2" value="option3">
                                   Lung Disease
                                                  
                        </label>
                      </div>

                          <div class="radio">
                        <label>
                                   <input type="radio" name="question2" id="question2" value=" option4">
                                   Heart Disease
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question2" id="question2" value="None of The Above">None of the above
                                                  
                         </label>
                      </div>
                    </div>
                  </div>


                    <div class="form-group ">
                      <label for="question3" class="control-label col-lg-3">Which of the following apply to you ? <span class="required">*</span></label>

                    <div class="col-lg-8">
                       <div class="radio">
                        <label>
                                   <input type="radio" name="question3" id="question3" value="option1">I have recently intracted or lived with someone who has tested positive for COVID-19.
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question3" id="question3" value="option2">I am a health care worker and i examined a COVID-19 confirmed case without protective gear.
                                                  
                        </label>
                      
                    </div>
                     <div class="radio">
                        <label>
                                   <input type="radio" name="question3" id="question3" value="option3">None of the ablove.
                                                  
                        </label>
                      
                    </div>
                  </div>
                </div>


              <div class="form-group ">
                      <label for="question4" class="control-label col-lg-3">Have you travelled anywhere internallionally in the last 28-45 days? <span class="required">*</span></label>

                    <div class="col-lg-8">
                       <div class="radio">
                        <label>
                                   <input type="radio" name="question4" id="question4" value="option1">Yes.
                                                  
                        </label>
                      </div>
                         <div class="radio">
                        <label>
                                   <input type="radio" name="question4" id="question4" value="option2">No.
                                                  
                        </label>
                      
                         </div>
                  </div>
                </div>
              

                
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <!--input  type="button" id="button1" value="Submit" onclick="check();"-->
                        <button type="submit" id="button1" value="Submit" onclick="check();" class="btn-primary">Submit</button>
       					
                      </div>
                    </div>
                </div>

                  </form>


                    <div class="form-group" >
                      <div class="col-lg-offset-2 col-lg-10" id="after_submit">
                        <p id="message"></p>
                        <p id="number_correct"></p>
                      </div>
                    </div>

                </div>
              </div>
            </section>
          </div>
        </div>
      </div>

      </section>
    </section>
</body>


