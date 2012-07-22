<?php
namespace Work\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig_\Twig;
use Work\Model\Wpdb;

class XtBaseController
{
	public static $_tpl = null;
	public static $_db = null;
	
	public function __construct()
	{
		if(self::$_tpl === null){
			\Twig_Autoloader::register();
			$loader = new \Twig_Loader_Filesystem(ROOT_PATH.'src/templates');
			self::$_tpl = new \Twig_Environment($loader, array(
				'cache' => ROOT_PATH.'src/cache/compilation_cache',
				'autoescape' => true, 
				'auto_reload' => true,
			));
		}
		if(self::$_db === null){
			define('WP_DEBUG', 0);
			self::$_db = new Wpdb('root', '123456', 'test', 'localhost');
		}
	}
	
	public static function tpl($tpl, array $data = array(), $tpl_suffix = '')
	{
		if($tpl_suffix and in_array($tpl_suffix, array('php', 'html', 'tpl', 'phtml'))){
			$tpl = $tpl.'.'.$tpl_suffix;
		}else{
			if(XT_TPL_SUFFIX != '' and in_array(XT_TPL_SUFFIX, array('php', 'html', 'tpl', 'phtml'))){
				$tpl = $tpl.'.'.XT_TPL_SUFFIX;
			}				
		}
		if($tpl) $tpl = strtolower($tpl);
		$view = self::$_tpl->render($tpl, $data);
		return new Response($view);
	}
}