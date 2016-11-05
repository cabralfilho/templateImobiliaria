<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE);?>
<?php $db = open_database();?>
<?php if($db): ?>

<br/><br/><br/><br/>
<?php include(CONTENT_TEMPLATE);?>



<?php else : ?>

<?php endif;?>
<?php include(FOOTER_TEMPLATE);?>