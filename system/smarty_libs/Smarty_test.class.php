<?php
// load Smarty library
require_once('Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you    setup.php文件是一个很好的加载应用程序的类库文件
// can do that right here. An example:    你也可以这样做，例如：
// require('guestbook/guestbook.lib.php');

class Smarty_test extends Smarty
{

	function Smarty_test()
	{

		// Class Constructor. These automatically get set with each new instance.
		//类构造函数.创建实例的时候自动配置

		parent::__construct();

		$this->template_dir = 'E:/xampp/htdocs/projects/blog2.0/view/templates/';
		$this->compile_dir = 'E:/xampp/htdocs/projects/blog2.0/view/templates_c/';
		$this->config_dir = 'E:/xampp/htdocs/projects/blog2.0/view/configs/';
		$this->cache_dir = 'E:/xampp/htdocs/projects/blog2.0/view/cache/';

		$this->caching = true;
		//$this->assign('app_name','Guest Book');
	}
}

$smarty = new Smarty_test();

?>
