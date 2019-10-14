<?php 
function naked_register_sidebars() {
	register_sidebar(array(					// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div class="widget">',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<span class="title-side-bar">',	// What to display before each widget's title
		'after_title' => '</span>',		
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
	));
} 
add_action( 'widgets_init', 'naked_register_sidebars' );
/*-----------------------------------------------------------
*/

 
function addnewwidget(){

 register_sidebar(
      array(
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',    // ID should be LOWERCASE  ! ! !
        'before_widget' => '<div class="side-bar">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '' )
    );

}

add_action('widgets_init', 'addnewwidget');
 ?>

<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</ul>
<?php endif; ?>