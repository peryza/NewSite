<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
<nav class="header__nav-wrap">

	<h2 class="header__nav-heading h6">Navigate to</h2>

	<ul class="header__nav">
		<?/*
		<li class="current"><a href="index.html" title="">Home</a></li>
		<li class="has-children">
			<a href="#0" title="">Categories</a>
			<ul class="sub-menu">
				<li><a href="category.html">Lifestyle</a></li>
				<li><a href="category.html">Health</a></li>
				<li><a href="category.html">Family</a></li>
				<li><a href="category.html">Management</a></li>
				<li><a href="category.html">Travel</a></li>
				<li><a href="category.html">Work</a></li>
			</ul>
		</li>
		<li class="has-children">
			<a href="#0" title="">Blog</a>
			<ul class="sub-menu">
				<li><a href="single-video.html">Video Post</a></li>
				<li><a href="single-audio.html">Audio Post</a></li>
				<li><a href="single-standard.html">Standard Post</a></li>
			</ul>
		</li>
		<li><a href="style-guide.html" title="">Styles</a></li>
		<li><a href="page-about.html" title="">About</a></li>
		<li><a href="page-contact.html" title="">Contact</a></li>
		*/?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<li class="current"><a href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>
<p  style = "   position: absolute;  
  top: 0.2em; 
  right: 2%;" >Телефон: +7-999-431-3467</p>
</ul> <!-- end header__nav -->

<a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

</nav> <!-- end header__nav-wrap -->
<?endif?>