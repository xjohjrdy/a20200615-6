<?php  namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;
class Message extends Base
{
	public function msg_pay()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_6402=input('appletid');
				$var_1134=Db::table('applet')->where('id',$var_6402)->find();
				if(!$var_1134)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_1134);
				$var_6403=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6402)->where('flag',1)->find();
				$this->assign('base',$var_6403);
			}
			else
			{
				$var_6404=Session::get('usergroup');
				if($var_6404==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_6404==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_6404==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_pay);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_pay()
	{
		$var_6406=array();
		$var_6407=input('appletid');
		$var_3445=input('pay_id');
		$var_6406['mid']=trim($var_3445);
		$var_471=input('url');
		$var_6406['url']=trim($var_471);
		$var_324=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6407)->where('flag',1)->count();
		if($var_324>0)
		{
			$var_6408=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6407)->where('flag',1)->update($var_6406);
		}
		else
		{
			$var_6406['flag']=1;
			$var_6406['uniacid']=$var_6407;
			$var_6408=Db::table('ims_sudu8_page_message')->insert($var_6406);
		}
		if($var_6408)
		{
			$this->success('支付通知更新成功！');
		}
		else
		{
			$this->error('支付通知更新失败，没有修改项！');
			exit;
		}
	}
	public function msg_duo()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_6410=input('appletid');
				$var_6411=Db::table('applet')->where('id',$var_6410)->find();
				if(!$var_6411)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_6411);
				$var_6412=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6410)->where('flag',6)->find();
				$this->assign('base',$var_6412);
			}
			else
			{
				$var_6413=Session::get('usergroup');
				if($var_6413==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_6413==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_6413==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_duo);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_duo()
	{
		$var_6415=array();
		$var_6416=input('appletid');
		$var_99=input('pay_id');
		$var_6415['mid']=trim($var_99);
		$var_6417=input('url');
		$var_6415['url']=trim($var_6417);
		$var_6418=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6416)->where('flag',6)->count();
		if($var_6418>0)
		{
			$var_6419=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6416)->where('flag',6)->update($var_6415);
		}
		else
		{
			$var_6415['flag']=6;
			$var_6415['uniacid']=$var_6416;
			$var_6419=Db::table('ims_sudu8_page_message')->insert($var_6415);
		}
		if($var_6419)
		{
			$this->success('多规格产品通知更新成功！');
		}
		else
		{
			$this->error('多规格产品通知更新失败，没有修改项！');
			exit;
		}
	}
	public function msg_pt()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_545=input('appletid');
				$var_6421=Db::table('applet')->where('id',$var_545)->find();
				if(!$var_6421)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_6421);
				$var_6422=Db::table('ims_sudu8_page_message')->where('uniacid',$var_545)->where('flag',7)->find();
				$this->assign('base',$var_6422);
			}
			else
			{
				$var_6423=Session::get('usergroup');
				if($var_6423==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_6423==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_6423==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_pt);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_pt()
	{
		$var_274=array();
		$var_6424=input('appletid');
		$var_6425=input('pay_id');
		$var_274['mid']=trim($var_6425);
		$var_6426=input('url');
		$var_274['url']=trim($var_6426);
		$var_6427=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6424)->where('flag',7)->count();
		if($var_6427>0)
		{
			$var_6428=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6424)->where('flag',7)->update($var_274);
		}
		else
		{
			$var_274['flag']=7;
			$var_274['uniacid']=$var_6424;
			$var_6428=Db::table('ims_sudu8_page_message')->insert($var_274);
		}
		if($var_6428)
		{
			$this->success('拼团产品通知更新成功！');
		}
		else
		{
			$this->error('拼团产品通知更新失败，没有修改项！');
			exit;
		}
	}
	public function msg_form()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_6430=input('appletid');
				$var_809=Db::table('applet')->where('id',$var_6430)->find();
				if(!$var_809)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_809);
				$var_6431=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6430)->where('flag',2)->find();
				$this->assign('base',$var_6431);
			}
			else
			{
				$var_78=Session::get('usergroup');
				if($var_78==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_78==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_78==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_form);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_form()
	{
		$var_106=array();
		$var_6433=input('appletid');
		$var_6434=input('pay_id');
		$var_106['mid']=trim($var_6434);
		$var_6435=input('url');
		$var_106['url']=trim($var_6435);
		$var_6436=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6433)->where('flag',2)->count();
		if($var_6436>0)
		{
			$var_6437=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6433)->where('flag',2)->update($var_106);
		}
		else
		{
			$var_106['flag']=2;
			$var_106['uniacid']=$var_6433;
			$var_6437=Db::table('ims_sudu8_page_message')->insert($var_106);
		}
		if($var_6437)
		{
			$this->success('系统表单通知更新成功！');
		}
		else
		{
			$this->error('系统表单通知更新失败，没有修改项！');
			exit;
		}
	}
	public function msg_yue()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_100=input('appletid');
				$var_1113=Db::table('applet')->where('id',$var_100)->find();
				if(!$var_1113)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_1113);
				$var_6439=Db::table('ims_sudu8_page_message')->where('uniacid',$var_100)->where('flag',3)->find();
				$this->assign('base',$var_6439);
			}
			else
			{
				$var_6440=Session::get('usergroup');
				if($var_6440==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_6440==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_6440==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_yue);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_yue()
	{
		$var_113=array();
		$var_6442=input('appletid');
		$var_6443=input('pay_id');
		$var_113['mid']=trim($var_6443);
		$var_6444=input('url');
		$var_113['url']=trim($var_6444);
		$var_6445=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6442)->where('flag',3)->count();
		if($var_6445>0)
		{
			$var_6446=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6442)->where('flag',3)->update($var_113);
		}
		else
		{
			$var_113['flag']=3;
			$var_113['uniacid']=$var_6442;
			$var_6446=Db::table('ims_sudu8_page_message')->insert($var_113);
		}
		if($var_6446)
		{
			$this->success('预约通知更新成功！');
		}
		else
		{
			$this->error('预约通知更新失败，没有修改项！');
			exit;
		}
	}
	public function msg_vip()
	{
		if(check_login())
		{
			if(powerget())
			{
				$var_6448=input('appletid');
				$var_6449=Db::table('applet')->where('id',$var_6448)->find();
				if(!$var_6449)
				{
					$this->error('找不到对应的小程序！');
				}
				$this->assign('applet',$var_6449);
				$var_6450=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6448)->where('flag',8)->find();
				$this->assign('base',$var_6450);
			}
			else
			{
				$var_677=Session::get('usergroup');
				if($var_677==1)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
				}
				if($var_677==2)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
				if($var_677==3)
				{
					$this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
				}
			}
			return $this->fetch(msg_vip);
		}
		else
		{
			$this->redirect('Login/index');
		}
	}
	public function save_vip()
	{
		$var_6452=array();
		$var_6453=input('appletid');
		$var_6454=input('pay_id');
		$var_6452['mid']=trim($var_6454);
		$var_6455=input('url');
		$var_6452['url']=trim($var_6455);
		$var_6456=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6453)->where('flag',8)->count();
		if($var_6456>0)
		{
			$var_6457=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6453)->where('flag',8)->update($var_6452);
		}
		else
		{
			$var_6452['flag']=8;
			$var_6452['uniacid']=$var_6453;
			$var_6457=Db::table('ims_sudu8_page_message')->insert($var_6452);
		}
		if($var_6457)
		{
			$this->success('会员卡开通通知更新成功！');
		}
		else
		{
			$this->error('会员卡开通通知更新失败，没有修改项！');
			exit;
		}
	}
	public function help(){
        if(check_login())
        {
            if(powerget())
            {
                $var_6402=input('appletid');
                $var_1134=Db::table('applet')->where('id',$var_6402)->find();
                if(!$var_1134)
                {
                    $this->error('找不到对应的小程序！');
                }
                $this->assign('applet',$var_1134);
                $var_6403=Db::table('ims_sudu8_page_message')->where('uniacid',$var_6402)->where('flag',1)->find();
                $this->assign('base',$var_6403);
            }
            else
            {
                $var_6404=Session::get('usergroup');
                if($var_6404==1)
                {
                    $this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/applet');
                }
                if($var_6404==2)
                {
                    $this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
                }
                if($var_6404==3)
                {
                    $this->error('您没有权限操作该小程序或找不到相应小程序！','Applet/index');
                }
            }
            return $this->fetch(help);
        }
        else
        {
            $this->redirect('Login/index');
        }
    }
}
?>