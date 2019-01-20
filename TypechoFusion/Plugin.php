<?php
/**
 * 针对Fusion app做的主题，启用该插件就会为Fusion app启用一个简洁的皮肤，请务必用Fusion app自定义ua功能，自定义内容包含fusion即可哦
 *
 * @package TypechoFusion
 * @author Jrotty
 * @version 1.1.1
 * @link https://qqdie.com/archives/typechofusionapp-plugin.html
 */
class TypechoFusion_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->handleInit = array('TypechoFusion_Plugin', 'location');
        return _t('插件已激活！');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){
        return _t('插件已禁用！');
	}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
		$header = new Typecho_Widget_Helper_Form_Element_Textarea('header', NULL, '', '头部代码', '附加页面头部代码');
        $form->addInput($header);
		$footer = new Typecho_Widget_Helper_Form_Element_Textarea('footer', NULL, '', '底部代码', '附加页面底部代码');
        $form->addInput($footer);
	}
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    
    /**
     * 设置主题
     * 
     * @access public
     * @param Widget_Archive $widget
     * @return void
     */
    public static function location($widget)
    {
		$acceptHeader = $_SERVER['HTTP_USER_AGENT'];
		if(strpos($acceptHeader,'fusion') !== false)	{
			$widget->setThemeDir(__TYPECHO_ROOT_DIR__ . '/' . __TYPECHO_PLUGIN_DIR__ . '/TypechoFusion/themes/');
		}
    }

}
