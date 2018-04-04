<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;$this->need('header.php');
?>





<article class="container">

  <!-- Postlist --> <?php while($this->next()): ?>
    <div class="row postlist">
 
      <a href="<?php $this->permalink() ?>"><div class="tu"><img class="tutu" src="<?php echo img_postthemb($this);?>"></div></a>
<div class="neirong">
  
    <a href="<?php $this->permalink() ?>"><h3 class="wa"><?php $this->title(); ?></h3></a>

<span class="suolue" style="font-size: 14px;"><?php $this->excerpt(60, '...'); ?></span>
  
    </div>
    <!-- End Right -->

  </div>
    
  <?php endwhile; ?>  
    <!-- End Postlist -->

  <!-- Pagination -->
  <div class="pagination" style="display: none;">
<?php $this->pageLink('下一页','next'); ?> </div>
  <!-- End Pagination -->

</article>



















<?php $this->need('footer.php');?>
