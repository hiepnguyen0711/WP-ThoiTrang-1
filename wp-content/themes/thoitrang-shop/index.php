<?php 
    get_header();
?>

<h1>Chào mừng đến với shop thời trang của hiệp</h1>
<?php 
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_title('<h2>','</h2>');
            the_content();
        }
    }else {
        echo "Không có bài viết nào";
    }
?>
<?php 
    get_footer();
?>