<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;$this->need('header.php');
?>



<article class="container">


    <div class="row postlist">
 

<div class="neirong">
  
     <h3><?php $this->title(); ?></h3>
<div class="time">写于：<?php $this->date('Y/m/j'); ?></div>

      <span class="suolue"><?php $this->content(); ?></span>
  
    </div>

  </div>



</article>
<?php if($this->user->hasLogin()): ?><div class="ias-trigger">
<p><?php _e('文章管理：'); ?><a href="<?php $this->options->adminUrl(); ?>write-<?php if($this->is('post')): ?>post<?php else: ?>page<?php endif;?>.php?cid=<?php echo $this->cid;?>">编辑</a>&nbsp;|&nbsp;<a href="<?php $this->options->adminUrl(); ?>manage-comments.php?cid=<?php echo $this->cid;?>">管理评论</a></p>
</div><?php endif; ?>
<div class="ias-trigger"><?php $this->need('comment.php');?></div>

<?php $this->need('footer.php');?>