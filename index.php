<?php
/**
 * Homepage template.
 */

queue_js_file(array('minimasonry.min', 'browse'));

$homepage_title = get_theme_option('homepage_title') ?? '';
$homepage_text = get_theme_option('homepage_text') ?? '';
?>

<?php echo head(array('bodyid' => 'home')); ?>

<h1><?php echo $homepage_title;  ?></h1>

<?php if ($homepage_text) : ?>
    <div id="intro">
        <?php echo $homepage_text;  ?>
    </div>
    <hr>
<?php endif; ?>

<?php echo $this->partial('home/featured-records.php'); ?>
<?php echo $this->partial('home/recent-records.php'); ?>
<?php echo $this->partial('home/tagcloud.php'); ?>

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>
    
<?php echo foot(); ?>
