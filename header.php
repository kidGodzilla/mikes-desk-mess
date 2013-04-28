<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php if ( is_home() || is_page() || is_archive()  ) { ?> <?php bloginfo('description'); echo ' | '; ?><?php } ?><?php if ( is_single() ) { ?> <?php wp_title('|',true,'right'); ?><?php } ?><?php bloginfo('name'); ?></title>

<!-- START META -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="description" content="<?php if ( is_home() || is_category() || is_archive() || is_page() ) { ?><?php bloginfo('description'); ?><?php } ?><?php if ( is_single() ) { echo strip_tags(get_the_excerpt()); } ?>" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />-->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- END META --> 

<!-- BEGIN MY LINKS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/ico-poop.png" />
<!-- END MY LINKS -->

<!-- BEGIN WP HEAD -->
<?php wp_head(); ?>
<!-- END WP HEAD -->

</head>

<body>

<!-- BEGIN HEADER -->
<div id="header">

	<!-- BEGIN LOGO -->
    <div id="logo">
    <a href="http://www.mikesinkula.com" title="Mike Sinkula's Home Page"><img src="<?php bloginfo('template_directory'); ?>/images/img-logo.png" alt="MikeSinkula.com" longdesc="http://www.mikesinkula.com" /></a>    
    </div>
	<!-- END LOGO -->
	
    <!-- BEGIN TCHOTCHKES -->
    <div id="tchotchkes">
    <a href="http://www.premiumdw.com/" target="_blank" title="Link to Mike's Business Website"><img id="tchotchkes-business" src="<?php bloginfo('template_directory'); ?>/images/img-tchotchkes-business.png" alt="Mike's Business Website" /></a>
    <a href="http://www.sccc.premiumdw.com/" target="_blank" title="Link to Mike's Student Website"><img id="tchotchkes-school" src="<?php bloginfo('template_directory'); ?>/images/img-tchotchkes-students.png" alt="Mike's Student Website" /></a>
  </div>
  <!-- END TCHOTCHKES -->
    
</div>
<!-- END HEADER -->

<!-- BEGIN MENU -->
<div id="menu">
	<nav class="main">
    <ul id="menu-items">
    <li class="<?php if ( is_home() || is_single() || is_archive()) { print 'current_page_item'; } ?>"><a href="<?php echo get_option('home'); ?>" title="Mike Sinkula's Blog">Blog</a></li>
    <?php wp_list_pages('post_title&depth=1&title_li='); ?>
    </ul>
    
    </nav>
</div>
<!-- END MENU --> 

<!-- BEGIN TOPPER -->
<div id="topper"><img src="<?php bloginfo('template_directory'); ?>/images/bg-topper.png" /></div>
<!-- END TOPPER -->

<!-- BEGIN MIDDLE -->
<div id="middle">
    <nav class="select">
    <?php $pageslabel = array('show_option_none' => 'Pages:'); wp_dropdown_pages( $pageslabel); /* creates the dropdown list of pages in WordPress with a label of 'Pages:' */ ?>
    <script type="text/javascript">
		// creates the link to the page's id
		var pageDropdown = document.getElementById("page_id");
		function onPageChange() {
			if ( pageDropdown.options[pageDropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo get_option('home'); ?>/?page_id="+pageDropdown.options[pageDropdown.selectedIndex].value;
			}
		}
		pageDropdown.onchange = onPageChange;
    </script>
    <?php $categorieslabel = array('show_option_none' => 'Categories:'); wp_dropdown_categories($categorieslabel); /* creates the dropdown list of categories in WordPress with a label of 'Categories:' */ ?> 
    <script type="text/javascript">
		// creates the link to the category's id
		var catDropdown = document.getElementById("cat");
		function onCatChange() {
			if ( catDropdown.options[catDropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo get_option('home'); ?>/?cat="+catDropdown.options[catDropdown.selectedIndex].value;
			}
		}
    	catDropdown.onchange = onCatChange;
    </script> 
	</nav>