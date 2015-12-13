<?php 
$past_courses = array();
$upcoming_courses = array();


$kursus = new WP_Query(
    array(
        'post_type' => 'kursus', 
        'posts_per_page' => -1,
        'meta_key' => 'course_start',
        'orderby' => 'meta_value_num'
    )
); 

if($kursus->have_posts()) { 
    while ( $kursus->have_posts() ) { 
        
        $kursus->the_post();

        $time = strtotime(get_post_meta(get_the_ID(),'course_start',true));

        if ($time > strtotime(date('Y-m-d'))){
            $upcoming_courses[] = array(
                'title' => get_the_title(),
                'url' => get_the_permalink(),
            );   
        }
        else{
            $past_courses[] = array(
                'title' => get_the_title(),
                'url' => get_the_permalink(),
            ); 
        }
    }
}

wp_reset_postdata();

?>
<ul id="flex-accordion-menu" class="list-unstyled">
    <?php if (!empty($upcoming_courses)) : ?>    
    <li><a href="#">Kommende Konferencer</a>
        <ul>
            <?php foreach($upcoming_courses as $course) :  ?>
            <li><a href="<?php echo $course['url'] ?>"><?php echo $course['title'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php endif; if ($kursus->have_posts()) : ?>
    <li><a href="#">Tidligere konferencer</a>
        <ul>
            <?php while ($kursus->have_posts()) : $kursus->the_post();  ?>
            <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata();?>
        </ul>
    </li>
    <?php endif; ?>
</ul>