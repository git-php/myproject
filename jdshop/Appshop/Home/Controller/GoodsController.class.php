<?php
namespace Home\Controller;
use Think\Controller;
// 前台商品控制器、
class GoodsController extends Controller{
	// 商品分类列表页面
	function index(){
		//传递一个分类cid过来，然后根据cid寻找其以下的goods商品信息，展示
		$cid=I('get.cid');$cid=(int)($cid);
		if($cid<0){
			$cid=0;
		}
		// echo $cid;
		$g_model=new \Model\GoodsModel();
		$goods=$g_model->getGoodsByCid($cid);	//取得当前分类的所有子分类的ids
		

		// 传递样式变量
		$this->assign(array(
			'title'=>'商品分类列表',
			'css'=>array('list.css','common.css'),
			'js'=>array('list.js'),
			'goods'=>$goods,
		));
		$this->display();
	}

	//商品的详情页面
	function detail(){
		//接收id的值
		$id=I('get.id');
		$id=(int)$id;
		if($id<0){
			$id=1;
		}
		// 取出当前商品的信息，展示详情页面
		$this->goodsinfo=D('Goods')->where('g_id='.$id)->find();
		//把浏览过的商品存入cookie里面，备下次取出
		// cookie('goods_id',$id);
// select * from jd_goods_attr a left join jd_attribute b 
// on a.attr_id=b.a_id where a.goods_id=13;
		$sql="select a.id,a.attr_id,b.type_id,b.a_name,a.attr_value from jd_goods_attr a left join jd_attribute b on a.attr_id=b.a_id where a.goods_id=$id";
		$attrs=M()->query($sql); //取出属性，可是没有意义啦，都不能遍历三维数组。
		// 添加商品的时候，就没有弄好属性的添加，每个属性只有一个值，现在好了，都没有单选属性了。。
		// doubi($attrs);

		$this->assign(array(
			'title'=>'商品详情列表页面',
			'css'=>array('goods.css','common.css','jqzoom.css'),
			'js'=>array('goods.js','jqzoom-core.js'),
		));
		$this->display();
	}	

	// end
}