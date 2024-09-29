 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
           $url="http://newsapi.org/v2/top-headlines?country=in&apiKey=4e70a4ff82594c90b526af275bcfccb3";
           $response=file_get_contents($url);
            $News_live=json_decode($response);
                    /*	echo "<pre>";

                        print_r($News_live);

                        echo "</pre>";*/
?>
     <div class="coronata">
         <div class="container">
         	  <?php foreach($News_live->articles as $News)
                  		{

                ?>  		
            <div class="row d_flex grid">
               <div class="col-md-4">
                  <div class="coronata_img text_align_center">
                     <figure><img src="<?php echo $News->urlToImage ?>" alt="image Not Available"/></figure>
                   </div>
               </div>

               <div class="col-md-8">
                  <div>
                  		
                  		<h3><b>Title:  <?php echo $News->title ?></b></h3>
                  		<h4><b>Description:</b>  <?php echo $News->description ?></h4>
                  		<p><b>Content:</b>  <?php echo $News->content ?></p>
                  		<h6><b>Author: </b> <?php echo $News->author ?></h6>
                  		<h6><b>Published: </b><?php echo $News->publishedAt ?></h6>
                    	
                  </div>
               </div>
            </div>
             <br>
            <?php
       			 }
       		 ?>
       		
         </div>
      </div>
      <!-- end coronata -->