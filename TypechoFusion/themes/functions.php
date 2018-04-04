<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
}


function img_postthemb($thiz){
        $content = $thiz->content;
        $ret = preg_match("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $content, $thumbUrl);
        if($ret === 1 && count($thumbUrl) == 2){
                return $thumbUrl[1];
        }else{
$rand = mt_rand(1,500); 
$random = $thiz->widget('Widget_Options')->pluginUrl. '/TypechoFusion/themes/img/' . $rand . '.jpg';
                return $random;
        }
}


function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

<li id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
    <div id="<?php $comments->theId(); ?>">
        <div class="comment-author">
            <?php
            //头像CDN by Rich
            $host = 'https://gravatar.loli.net'; //自定义头像CDN服务器
            $url = '/avatar/'; //自定义头像目录,一般保持默认即可
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
  $email = strtolower($comments->mail);
  $qq=str_replace('@qq.com','',$email);
if(strstr($email,"qq.com") && is_numeric($qq) && strlen($qq) < 11 && strlen($qq) > 4)
{


$avatar = '//q.qlogo.cn/g?b=qq&nk='.$qq.'&s=100';

 
}else{
  $avatar = $host . $url . $hash . '&r=' . $rating . '&d=mm';
}

  
  
          
            ?>
            <img class="avatar" src="<?php echo $avatar ?>" alt="<?php echo $comments->author; ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
            <cite class="fn"><?php $comments->author(); ?></cite>
        </div>
        <div class="comment-meta">
            <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
            <span class="comment-reply"><?php $comments->reply(); ?></span>
        </div>
   <?php 
$cos = preg_replace('#</?[p|P][^>]*>#','',$comments->content);
echo $cos;
 ?>
    </div>
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</li>
<? }
function themeInit($archive)
{
 Helper::options()->commentsMaxNestingLevels = 999;
 Helper::options()->commentsAntiSpam = false;
}
?>
