<?php get_header('single');?>
 <div class ="col-xs-12 col-sm-12">
<?php while(have_posts()):the_post()?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-sm-12">
<center>
  <h1>
    <?php the_title();?>
  </h1>
</center>
</div>
  
<?php if( has_post_thumbnail() ):?>
<?php the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
<?php endif;  ?>
 <?php global $wpdb;
        $post = get_post();
       $result = $wpdb->get_row( "SELECT * FROM wp_characteristics WHERE Name ='$post->ID'");
        ?>
  <div class="container">
    <center><h1>Characteristic</h1></center>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Engine Capacity</th>
        <th>Power</th>
        <th>Acceleration 0–100 km/h</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $result->EngineCap ?></td>
        <td><?php echo $result->Power ?></td>
        <td><?php echo $result->Speed ?></td>
      </tr>
    </tbody>
  </table>
</div>
  <center><h1>History</h1></center>
<p><?php the_content();?></p>
</article>
<?php endwhile;?>
</div>

<center><?php get_footer() ?></center>
