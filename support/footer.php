
 <script src="bootstrap/js/jquery.min.js"></script>
<div class="jumbotron primary-black" style="padding:15px 0px 0px 0px;">
	<div class="container" style="padding:0px;">
	<div class="col-lg-1 hidden-xs hidden-sm"></div>
		<div class="col-lg-2 col-xs-12 col-sm-12 col-md-2">
			<div class="row">
				<img src="images/logo.png" class="img-responsive img-center" style="margin:0 auto;max-width:60%;width:60%;height:auto;"/>
			</div>
		
		</div>
		<div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
			<div class="row">
		
				<h4 class="footer_text" style="color:#fff;">#1. 1/C1 Kambar Salai, Mogappair West,</h4>
				<h4 class="footer_text" style="color:#fff;">Landmark:  Above KFC,</h4>
				<h4 class="footer_text" style="color:#fff;">Chennai,Tamilnadu - 600 037.</h4>
				<h4 class="footer_text" style="color:#fff;"><i class="fa fa-envelope fa-sm" aria-hidden="true"></i>&nbsp;contact@moosaaland.com</h4>
				<h4 class="footer_text" style="color:#fff;"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;044 - 48577768</h4>
			
			</div>
		
		</div>
		<div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
		<h4 style="color:#fff;margin:5px;" class="footer_text">News Letters</h4>
			  <form action="newsletter-do.php" method="post" class="formnews">
              <div class="input-group" style="margin-top:0px;">
			  	<input type="hidden" name="url" value="<?php echo $_SERVER['PHP_SELF'];?>">
                 <input class="btn btn-lg"	 name="email" id="email_news" type="email" placeholder="Email" >
                 <button class="btn btn-warning btn-lg" type="submit" style="padding:0px">Submit</button>
              </div>
             </form>
		</div>
		

	</div>
	<div class="container" style="padding-bottom:15px !important">
		<hr style="background-color:#ccc;opacity:0.3;margin-bottom:0px;margin-top:0px;">
		<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center">
			<span style="opacity:0.6">&copy; <a href="index.php" style="color:inherit;text-decoration:none;">Moosaaland</a> All rights received</span>
		</div>
	
	</div>
</div>
		<script>
		$(document).ready(function(){
				
				$('.formnews').submit(function(){
				
					var news_mail = $('#email_news').val();
					var email_regex = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
					if(!news_mail.match(email_regex)){
					$('#email_news').focus();
					return false;
				}
				else{
					return true;
				}
				});
			});
		</script>