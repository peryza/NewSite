<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer class="s-footer" style="background-color: gray">

<div class="s-footer__main">

	<div class="row">
	
		<div class="col-six tab-full s-footer__about">
				
			<section class="s-extra" style="background-color: gray">
				<div class="row">	
	
	 
					<div class="col-four md-six tab-full end" >
						<div class="row">
							<a class="logo" href="/">
								<img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="Homepage">
							</a>
		
		
							<h3>Site Links</h3>
							
							<br>
							<ul class="linklist">
								<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(	
								),
								false
								);?>
							</ul>
							
							
					</div>
					
					</div>
						
					</div>
					<div  style="float:left; margin-top:5.7%" >
							<h3>Phone</h3>
							<p>
				
								 (+7) 999 431 3467
							</p>

					</div>	
					
				</div>
			</section>
		</div> <!-- end s-footer__about -->

		
				
		
          
        
			

		

	</div>
	
</div> <!-- end s-footer__main -->


		<div class="col-six" style="margin-left:30%">
			<div class="s-footer__copyright">
				<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
			</div>
		</div>
		
	</div>
</div> <!-- end s-footer__bottom -->

<div class="go-top">
	<a class="smoothscroll" title="Back to Top" href="#top"></a>
</div>

</footer> <!-- end s-footer -->


<!-- Java Script
================================================== -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.2.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/plugins.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>

</body>

</html>