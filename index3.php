<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>What is Imagination?</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- <link rel="stylesheet" type="text/css" href="fonts/arq.css">-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
		$(document).ready(function(){
  			$("img.imageClass").mouseenter(function(){

			var mysrc = $(this).attr("src");
        
    		$('body').css("background-image","url("+mysrc+")");
    

	
		  });
		});
		</script>

    </head>
    
    
    
    <body style="background-image: url(background.jpg);">
    
    <header>
     <div class="col-lg-12">
     <nav class="navbar navbar-default">
     	<div class="jazz">
		<h4 class="text-center">IMAGINATION EXPLAINED</h4>
     	</div>
     </nav>
    </div>
    
          </header>
  <div class="container">
 
        	<div class="col-lg-2">
			<img class="twitter-logo" src="birdie-01.png" class="pull-left" alt="">
			</div>
			
		<div class="col-lg-4" id="tweets">
		
			<div class="clearfix equalheight jumbotron">
					
						
					<h1>-words words words words.</h1>	
						
					
					<h1>- Jean-Paul Sartre</h1>
					
				</div>
				
				<div class="clearfix equalheight jumbotron">
					
						
					<h1>-words words words words.</h1>
						
					
					<h1>- 3h</h1>
							
				</div>
				
				<div class="clearfix equalheight jumbotron">
					
						
					<h1>-words words words words.</h1>
						
					
					<h1>- 3h</h1>
					
				</div>
				
				<div class="clearfix equalheight jumbotron">
					
						
					<h1>-words words words words.</h1>	
						
					
					<h1>- Jean-Paul Sartre</h1>
					
				</div>
				
				<div class="clearfix equalheight jumbotron">
					
						
					<h1>-words words words words.</h1>	
						
					
					<h1>- Jean-Paul Sartre</h1>
					
				</div>


				
		</div>
			
			
		
        	<div class="col-lg-4" id="quotes">
			<div class="clearfix equalheight jumbotron">
				
					<h1></h1>
						
					
					
					
			</div>
				
				<div class="clearfix equalheight jumbotron">
					<h1></h1>
						
					
					
					
			</div>
				
				<div class="clearfix equalheight jumbotron">
					<h1></h1>
						
					
					
					
			</div>
			
			<div class="clearfix equalheight jumbotron">
					<h1></h1>
						
					
					
					
			</div>
			
			<div class="clearfix equalheight jumbotron">
					<h1></h1>
						
					
					
					
			</div>
			
			
		
			</div>
		<div class="col-lg-2">
			<img src="bookie-01.png" class="pull-right" alt="">
			</div>
				
				
		
	</div>
        </div>

  
  
  <!--start php-->
<?
//HELPFUL
//http://www.emoticode.net/php/embed-tumblr-posts-into-website.html 


//load the tumblr information into a variable
$xml = simplexml_load_file('http://cutleryjam.tumblr.com/api/read');
//save a path to all the posts for easy reference later
$posts = $xml->xpath("/tumblr/posts/post");
//declare an empty array for our posts
$post_array = array();

//this is some wierd php syntax
//it takes every post from our variable $posts
//and do this for each one
foreach($posts as $post) {?>  

<!--change the type to whichever you want
check the api to see if the attributes are the same though-->
<?php if ($post['type'] == 'photo') {  ?>

	<!--set date as variable-->
    <? $postDate = date("jS D M, H:i",strtotime($post['date']));?>
    
    <!--set a new variable as the human-readable date-->
    <?php $stringDate = str_replace(' ', '', $postDate);?>
	<?php $stringDate = str_replace(',', '.', $stringDate);?>
	
	<div class="post-body" >
	<!--save the photo url as variable to display later-->
    <?php $newphotourl = $post->{'photo-url'}; ?>
    <!--'echo' writes to html. '' designates html-->
    <!--echo the image-->
    <?php echo '<a href="http://www.openthiswindow.com"><img src="' . $newphotourl . '" width=100%  id="'.$stringDate.'" class="imageClass"><br></a>'; ?>
    <!--echo the date-->
    <? echo $postDate.'<br><br>'; ?>
    <!--echo the caption-->
    <?php $caption = $post->{'photo-caption'}; ?>
    <?php echo $caption.'<br>'; ?>

    </div><!--end middleContent-->
  <?php } ?>


<?}?>

</div><!--end middle"-->
		
		</div><!-- -->
  

    
   

    <!-- Collect the nav links, forms, and other content for toggling -->
        
   


  

        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Add your site or application content here -->
                 

        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
        
        <!--the 4 scripts below allow a dropdown menu as well as mobile adaptation to occur -->
        
        <script src="js/vendor/bootstrap.js"></script>
        <script src="js/vendor/bootstrap/collapse.js"></script>
        <script src="js/vendor/bootstrap/dropdown.js"></script> 
		<script src="js/vendor/jquery.equalheights.min.js"></script>
		<script src="js/vendor/wikiquote-api.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
	<script>
		$(function (){
			var $heights = $('.equalheight');
			
			console.log($heights);
			$heights.equalHeights();
			
			WikiquoteApi.getQuotesForSection(126452, 1, function (results){
				var quotes = results.quotes,
					i,
					count = quotes.length,
					quoteContainer = $('<div/>', {id: 'quotes-container'});
				
				console.log(results);
				
				for (i=0; i < 5; i++) {
					var quote = quotes[i];
					
					if (quote != "\n\n") {
						var quote = '<div class="clearfix equalheight jumbotron"><h1>' + quote + '</h1></div>';
						quoteContainer.append(quote);
					}
				}
				
				$('#quotes').empty().append(quoteContainer);
			});
		});
	</script> 
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>-->
    </body>
</html>
