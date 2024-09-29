<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  





    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
      
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">

          <li class="active">

            <a class="" href="<?php echo site_url('Main/index');?>">
                          <i class="#"></i>
                          <span>Covid-19 </span>
                      </a>
          </li>
<!-- HOME---->

          <li class="sub-menu">
            <a href="<?php echo site_url('Main/index');?>" class="">
                       <i class="fa fa-globe"></i>
                          <span>World Updates</span>
      		</a>
          </li>
<!--- india covid updates--->
          <li class="sub-menu">
            <a href="<?php echo site_url('Main/india_update_controller');?>" class="">
                           <img src="<?php echo base_url('assets1/img/india_icon.png');?>"  style="height:25px;
                                                                                              filter:invert(100%);

                                                                                             " >
                          <span>India Updates</span>
           
          </a>
          </li>


<!--- Things To do-->

          <li class="sub-menu">
            <a href="<?php echo site_url('Main/To_do_controller'); ?>"class="">
                          <i class="icon_document_alt"></i>
                          <span>Things to do </span>
                       
                      </a>
   
          </li>

<!-- Health assess------>
          <li>
            <a class="" href="<?php echo site_url('Main/Health_controller_view'); ?>">
                          <i class="icon_genius"></i>
                          <span>Health Assess</span>
                      </a>
          </li>

<!--FAQ----->
          <li>
            <a class="" href="<?php echo site_url('Main/Faq_controller'); ?>">
                          <i class="fa fa-question-circle"></i>
                          <span>FAQ</span>

                      </a>

          </li>

          <!--li class="sub-menu">
            <a href="<?php echo site_url('Main/About_controller'); ?>" class="">
                          <i class=""></i>
                          <span>About</span>
                      </a>
     >
          </li-->



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->