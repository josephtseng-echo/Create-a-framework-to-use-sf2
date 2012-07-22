<?php
// /src/Work/Controller/FrontDefaultController.php
namespace Work\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Work\Model\LeapYear;
use Work\Controller\XtBaseController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
 
class FrontDefaultController extends XtBaseController
{
    public function indexAction()
    {
		$row = self::$_db->get_row('select * from test order by id desc limit 0, 1');
		//print_r($row);
		$data = array('a' => 'abc');
		return self::tpl('front', $data);
    }
	
	public function testAction($year = '')
	{
		return new Response('year');
	}
 
}