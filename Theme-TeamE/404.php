

 
<div class="content">
 
        <section id="main-content">
        <?php
        _e('<h2>404 NOT FOUND</h2>', 'hayghe');
        _e('<p>The article you were looking for was not found, but maybe try looking again!</p>', 'hayghe');
 
        get_search_form();
 
        _e('<h3>Content categories</h3>', 'hayghe');
        echo '<div class="404-catlist">';
        wp_list_categories( array( 'title_li' => '' ) );
        echo '</div>';
 
        _e('<h3>Tag Cloud</h3>', 'hayghe');
        wp_tag_cloud();
?>
     
        </section>
        <section id="sidebar">
        <?php get_sidebar(); ?>
        </section>
 
</div>

<