<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php $this->archiveTitle(array(
'category'=>_t('分类 %s 下的文章'),
'search'=>_t('包含关键字 %s 的文章'),
'tag' =>_t('标签 %s 下的文章'),
'author'=>_t('%s 的主页')
), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')||$this->is('front')): ?>
<?php endif; ?></title>

    <!-- 引入样式 -->
    <link rel="stylesheet" href="<?php $this->options->pluginUrl('TypechoFusion/themes/ydui.css'); ?>?v201803311736">
<?php echo $this->options->plugin('TypechoFusion')->header; ?><?php $this->header(); ?>
</head>
<body>
