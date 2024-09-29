<style media="print">
  .hideblock{
      display:none;
}
</style>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  
<body>
  <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <!--h3 class="page-header"><i class="#"></i>Covid19</h3-->
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="#"></i>India Covid19 Live Updates</li>

            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <div class="title">Total Confirmed Cases</div>
              <div class="count" href="#" id="india_Total_confirm_case1"></div>
               
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              
               <div class="title">Total Deaths</div>
              <div class="count" id="india_total_death_case1"></div>

             
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <div class="title">Total Recovered Cases</div>
              <i class=""></i>
              <div class="count" id="india_total_recover_case1"></div>
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <div class="title">Active Cases</div>
             
              <div class="count" id="india_active_case1"></div>
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->

         <div class="col-md-4" style="float:right">
            <!-- List starts -->
          <ul class="today-datas">
              <!-- List #1 -->
                <br>
               <li> Active Cases
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text" id="india_active_case2"></div>
              </li>
              
                <li> Total Deaths
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text" id="india_total_death_case2"></div>
              </li>
                
               <li>Total Recovered Cases
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text" id="india_total_recover_case2"></div>
              </li>

               
                <li> Total Confirmed Cases
                <div><span id="todayspark5" class="spark"></span></div>
                </li><div class="datas-text"  id="india_Total_confirm_case2"></div>
             
          </div>


        </div>



        <!-- Today status end -->



        <div class="row" style="height:380px">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>State Wise Covid19 Updates</strong></h2>
                <div class="panel-actions">

                   <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary" style="float:right" ><i class="fa fa-print" aria-hidden="true"></i><b>Print</b></span> </a></span>


                  <a href="i#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>


              <div class="panel-body">
                <table class="table table-striped" >
                  <thead>
                    <tr class="warning">
                     
                      <th>Sno</th>
                      <th>State</th>
                      <th>Confirm Case</th>
                      <th>Deaths</th>
                      <th>Recovered</th>
                      <th>Active Case</th>   
                    </tr>




                  </thead>
                  <tbody id="india_state_wise_data">
                        <?php  

                        $data=file_get_contents("https://api.covid19india.org/data.json");
                        $coronalive=json_decode($data,true);//true convert in associative array

                        /*echo "<pre>";

                        print_r($coronalive);

                        echo "</pre>";*/

                       $state_count =count($coronalive["statewise"]);   //count no of state
                       $i=1;
                       while($i<$state_count)
                       {
                        ?>

                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $coronalive['statewise'][$i]['state'];?></td>
                            <td><?php echo $coronalive['statewise'][$i]['confirmed'];?></td>
                            <td><?php echo $coronalive['statewise'][$i]['deaths'];?></td>
                            <td><?php echo $coronalive['statewise'][$i]['recovered'];?></td>
                            <td><?php echo $coronalive['statewise'][$i]['active'];?></td>



                       <!--   echo $coronalive['statewise'][$i]['state']."<br>";
                          echo $coronalive['statewise'][$i]['confirmed']."<br>";
                          echo $coronalive['statewise'][$i]['deaths']."<br>";
                          echo $coronalive['statewise'][$i]['recovered']."<br>";
                          echo $coronalive['statewise'][$i]['active']."<br>";-->

                          <?php
                           $i++; 
                      }
                        ?>
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        

        </div>
</section>
</section>






 



