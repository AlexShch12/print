<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

<?php foreach ($posts as $item_post): ?>
	<h3><?php echo $item_post->post_title ?></h3>
	<?php echo $item_post->post_content ?>
<?php endforeach; ?>


</body>
</html>




