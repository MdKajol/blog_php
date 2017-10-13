<?php
if( !defined( 'SERVER_ROOT' ) ) {
    define( 'SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/sites/blog_php/' );
}
require_once ( SERVER_ROOT . 'setup.php' );

?>

<?php include (SERVER_ROOT . INC . 'header.php' ); ?>
<?php include (SERVER_ROOT . INC . 'sidebar.php' ); ?>

    <section id="wraper">
        <?php include (SERVER_ROOT . INC . 'user_header.php' ); ?>
        <?php include(SERVER_ROOT . INC . 'post.php'); ?>
    </section>

<?php include ( SERVER_ROOT . INC . 'footer.php' ); ?>