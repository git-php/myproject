<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 前台首页控制器，显示首页
     * return [type] [description]
     */
    public function index(){
        // 取出首页商品信息
        $g_model=new \Model\GoodsModel();
        $new_goods=$g_model->getGoodsByIs('is_new');    //新品
        $hot_goods=$g_model->getGoodsByIs('is_hot');    //热销品
        $best_goods=$g_model->getGoodsByIs('is_best');  //好品





        // 分配若干模板变量信息，标题，css，js等文件动态引入
        $this->assign(array(
                'title'=>'聚鹿网上商城，网上的价格，实体的服务',
                'css'=>array('index.css'),
                'js'=>array('index.js'),
                'nav'=>1,
                //分配对应的商品信息
                'new_goods'=>$new_goods,
                'hot_goods'=>$hot_goods,
                'best_goods'=>$best_goods,
            ));
		$this->display();
    }


    
    //返回市
    function city($id=17){
    	$c=new \Model\CityModel();
    	$data=$c->getCity($id);
    	$this->ajaxReturn($data);
    }
    
    // 获取导航三维数组,可以直接遍历到导航栏目里面
    public function navigate(){
    	$c=new \Model\CategoryModel();
    	$navs=$c->getNav();
    	doubi($navs);
    }
    // 获取文章分类数组
    function footernav(){
        $a=new \Model\ArctypeModel();
        $data=$a->getArc();
        doubi($data);
    }
    
    
    
    
    
    
    
    
    
    
    
    //end
}