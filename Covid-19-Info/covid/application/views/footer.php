<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  

  <!-- Main- footer -->
 
    <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url('assets1/Main_covid/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('assets1/Main_covid/js/bootstrap.bundle.min.js');?>"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="<?php echo base_url('assets1/Main_covid/js/owl.carousel.min.js');?>"></script>
      <script src="<?php echo base_url('assets1/Main_covid/js/custom.js');?>"></script>
   </body>
</html>





  <!-- javascripts -->
  <script src="<?php echo base_url('assets1/js/jquery.js');?>"></script>

  <!---preeti .js----------------------------------------------------------------->

    <script type="text/javascript" src="<?php echo base_url('assets1/preeti_js/preeti_jquery.js');?>?version=3.3">
      
    </script>

    <!------------------------------------------------------------------------------------>

  <script src="<?php echo base_url('assets1/js/jquery-ui-1.10.4.min.js');?>"></script>
  <script src="<?php echo base_url('assets1/js/jquery-1.8.3.min.js');?>"></script>

<!---chart.js cdn-------------------------------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <!----------------------------------------------------------------------------------->

  <script type="text/javascript" src="<?php echo base_url('assets1/js/jquery-ui-1.9.2.custom.min.js');?>"></script>
  <!-- bootstrap -->
  <script src="<?php echo base_url('assets1/js/bootstrap.min.js');?>"></script>
  <!-- nice scroll -->
  <script src="<?php echo base_url('assets1/js/jquery.scrollTo.min.js');?>"></script>
  <script src="<?php echo base_url('assets1/js/jquery.nicescroll.js');?>" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="<?php echo base_url('assets1/assets/jquery-knob/js/jquery.knob.js');?>"></script>
  <script src="<?php echo base_url('assets1/js/jquery.sparkline.js');?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets1/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js');?>"></script>
  <script src="<?php echo base_url('assets1/js/owl.carousel.js');?>"></script>
  <!-- jQuery full calendar -->
  <<script src="<?php echo base_url('assets1/js/fullcalendar.min.js');?>"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="<?php echo base_url('assets1/assets/fullcalendar/fullcalendar/fullcalendar.js');?>"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url('assets1/js/calendar-custom.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery.rateit.min.js');?>"></script>
    <!-- custom select -->
    <script src="<?php echo base_url('assets1/js/jquery.customSelect.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/assets/chart-master/Chart.js');?>"></script>

    <!--custome script for all page-->
    <script src="<?php echo base_url('assets1/js/scripts.js');?>"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url('assets1/js/sparkline-chart.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/easy-pie-chart.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery-jvectormap-1.2.2.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery-jvectormap-world-mill-en.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/xcharts.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery.autosize.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery.placeholder.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/gdp-data.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/sparklines.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/charts.js');?>"></script>
    <script src="<?php echo base_url('assets1/js/jquery.slimscroll.min.js');?>"></script>
     <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });



    $.ajax({
    url:"https://api.covid19api.com/summary",
    type:"GET",
    dataType:"JSON",
    success:function(data)
    {
      console.log(data);
      //console.log(data.Global.NewConfirmed);
      // console.log(data.Global.NewDeaths);

       var cases=["NewConfirmed","NewDeaths","TotalRecovered","TotalConfirmed","TotalDeaths"]  
    
       $.each(data.Global, function (key, value)
       {
        if(key==cases[0])
        {
          //console.log( key+ " : " + value);
          $("#new_confirm_case1").append(value +"<br>");
          $("#new_confirm_case2").append(value +"<br>");
        }
        else if(key==cases[1])
        {
          $("#new_death_case1").append(value +"<br>");
          $("#new_death_case2").append(value +"<br>");
        }
        else if(key==cases[2])
        {
          $("#total_recover_case1").append(value +"<br>");
          $("#total_recover_case2").append(value +"<br>");
        }
        else if(key==cases[3])
        {
          $("#total_confirm_case1").append(value +"<br>");
          $("#total_confirm_case2").append(value +"<br>");
        }
        else if(key==cases[4])
        {
          $("#total_death_case1").append(value +"<br>");
          $("#total_death_case2").append(value +"<br>");
        }

        });//global for each loop


  //country wise data----//

      //console.log(data.Countries);

      var sno=1;
       $.each(data.Countries, function (key, value)
       {
          $("#country_wise_data").append("<tr >"+
                                        "<td>"+ sno+"</td>" +
                                         "<td>"+ value.Country+"</td>" +
                                         "<td>"+ value.NewConfirmed+"</td>" +
                                         "<td>"+ value.NewDeaths+"</td>" +
                                         "<td>"+ value.NewRecovered+"</td>" +
                                         "<td>"+ value.TotalConfirmed+"</td>" +
                                         "<td>"+ value.TotalDeaths+"</td>" +
                                         "<td>"+ value.TotalRecovered+"</td>" +

                                         "</tr>");
          sno++;
       });

    }//success for each loop

  });//ajax close



//india state wise covid update

    $.ajax({
    url:"https://api.covid19india.org/data.json",
    type:"GET",
    dataType:"JSON",
    success:function(data)
    {
      //console.log(data);
      //console.log(data.statewise);

//india conora updates

    //console.log(data.Countries[76]);
    //console.log(data.Countries[76].NewConfirmed);
      var india_cases=["confirmed","deaths","recovered","active",]  
      var i=0;
       $.each(data.statewise[0], function (key, value)
       {
            if(key==india_cases[0])
            {
              //console.log(key+":"+value);
              $("#india_Total_confirm_case1").append(value +"<br>"); 
               $("#india_Total_confirm_case2").append(value +"<br>");
            }
             else if(key==india_cases[1])
            {
              //console.log(key+":"+value);
              $("#india_total_death_case1").append(value +"<br>"); 
              $("#india_total_death_case2").append(value +"<br>"); 
            }
            else if(key==india_cases[2])
            {
              //console.log(key+":"+value);
              $("#india_total_recover_case1").append(value +"<br>"); 
               $("#india_total_recover_case2").append(value +"<br>");
            }
            else if(key==india_cases[3])
            {
              //console.log(key+":"+value);
              $("#india_active_case1").append(value +"<br>"); 
                $("#india_active_case2").append(value +"<br>"); 
            }

         i++;
        });//india for each loop



  //india state wise data ----//


  /*  
        var cases=["state","active","confirmed","deaths","recovered"]; 
        var sno=1;
       $.each(data.statewise, function (key, value)
       {
  
          $("#india_state_wise_data").append("<tr >"+
                                        "<td>"+ sno+"</td>" +
                                         "<td>"+ value.state+"</td>" +
                                         "<td>"+ value.confirmed+"</td>" +
                                          "<td>"+ value.deaths+"</td>" +
                                          "<td>"+ value.recovered+"</td>" +
                                         "<td>"+ value.active+"</td>" +
                                          
                                         "</tr>");
         
          sno++;
        
          
       });//state wises*/
    }//success close



  });//ajax close
    </script>
 </body>
 </html>  



