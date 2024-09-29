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
              <li><i class="#"></i>Global Covid19 Live Updates</li>

            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <div class="title">New Confirmed Cases</div>
              <div class="count" href="#" id="new_confirm_case1"></div>
               
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              
               <div class="title">New Death</div>
              <div class="count" id="new_death_case1"></div>

             
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <div class="title">Total Recovered Cases</div>
              <i class=""></i>
              <div class="count" id="total_recover_case1"></div>
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <div class="title">Total Confirm Cases</div>
             
              <div class="count" id="total_confirm_case1"></div>
              
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <div class="title">Total Deaths Cases</div>
              <i class=""></i>
              <div class="count" id="total_death_case1"></div>
              
            </div>
            <!--/.info-box-->
          </div>

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-9 col-md-12">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>
              </div>
              <div class="panel-body-map">
                <div id="map" class="map" style="height:380px;"></div>
              </div>

            </div>
          </div>
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li> New confirm cases
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text" id="new_confirm_case2"></div>
              </li>
              <li>New death
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text" id="new_death_case2"></div>
              </li>
              <li>Total Recovered Cases
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text" id="total_recover_case2"></div>
              </li>
              <li>Total Confirm Cases
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text" id="total_confirm_case2"></div>
              </li>
              <li>Total Death Cases
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text"  id="total_death_case2"></div>
              </li>
            </ul>
          </div>


        </div>


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-12 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Country Wise Covid19 Updates</strong></h2>
                <div class="panel-actions">
                  <!-----To print window----------------------->
                  <span class="hideblock"> <a href="#" onclick="window.print()"><span class="btn  btn-primary" style="float:right" ><i class="fa fa-print" aria-hidden="true"></i><b>Print</b></span> </a></span>
                  <!---------------------------------------------------->

                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>

                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped" >
                  <thead>
                    <tr class="warning"> 
                      
                      <th>Sno</th>
                      <th>Country</th>
                      <th>New Confirmed</th>
                      <th>New Deaths</th>
                      <th>New Recovered</th>
                      <th>Total Confirmed</th>
                      <th>Total Deaths</th>
                      <th>Total Recovered</th>
                    </tr>
                  </thead>
                  <tbody id="country_wise_data">
                   
                  </tbody>
                </table>
              </div>

            </div>

          </div>
        

        </div>
</section>
</section>
 



 