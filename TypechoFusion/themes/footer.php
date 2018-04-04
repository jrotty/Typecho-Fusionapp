  
 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script><?php if(!$this->is('single')): ?>
    <script src="<?php $this->options->pluginUrl('TypechoFusion/themes/dist/ias.min.js'); ?>"></script>
   	<script>
var ias = jQuery.ias({
container:  '.container', 
item:       '.postlist', 
pagination: '.pagination', 
next:       '.next'
});

ias.extension(new IASSpinnerExtension({
html: '<div class="ias-spinner"><img src="<?php $this->options->pluginUrl('TypechoFusion/themes/dist/loading.svg'); ?>"></div>',
}));   
ias.extension(new IASTriggerExtension({
html: '<div class="ias-trigger" style="text-align: center; cursor: pointer;"><a>点击加载更多</a></div>',
offset: 999,
}));  
ias.extension(new IASNoneLeftExtension({text: '<div class="trigger-next" style="text-align: center; cursor: pointer;">加载没了！</div>',}));   

</script><?php endif; ?>
<?php echo $this->options->plugin('TypechoFusion')->footer; ?>
</body>
</html>