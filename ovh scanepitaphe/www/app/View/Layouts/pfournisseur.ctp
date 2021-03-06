<?php
/**
* Website Name: Memories
* Description: The aim of this site is to offer the possibility to user to create a personal webpage to write * their biography of the one of lost one.
* Author: Benjamin Guimond
* Author URI: http://push-infographiste.fr
* Version: 1
* Tags: online memorials, biography, e-commerce, individual webpage
*/
?>
<!DOCTYPE html>
<!-- Website Name: Memories
Description: The aim of this site is to offer the possibility to user to create a personal webpage to write their biography of the one of lost one.
Author: Benjamin Guimond
Author URI: http://push-infographiste.fr
Version: 1
Tags: online memorials, biography, e-commerce, individual webpage
-->
<html itemscope itemtype="http://schema.org/WebPage">
<head>
	<?php echo $this->Html->charset(); ?>
	<title itemprop="name">
		 <?php $title = $this->requestAction('options/webtitle/'); ?>

		<?php echo $title['Option']['content']; ?>
	
	</title>
<?php echo $this->element('scripttop'); ?>
</head>
<body>
	<div id="container">
		<article id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</article>
	</div>
</body>
</html>
