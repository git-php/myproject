<?php
namespace Model;
use Think\Model;
class GoodsModel extends Model{
	// 定义添加时要插入的字段信息
	protected $insertFields=array('g_name','g_sn','cat_id','brand_id',
			'shop_price','market_price','promote_price',
			'promote_start_time','promote_end_time',
			'g_desc','g_number','is_best','is_new','is_hot',
			'is_onsale','g_brief','type_id','g_addtime',
			'is_promote','g_sort'
	);
	// 定义表单验证规则
	protected $_validate=array(
			array('g_name','require','名字为空'),
			array('g_sn','require','商品编号为空'),
			array('cat_id','number','选择商品父类'),
			array('brand_id','number','选择品牌'),
			array('shop_price','currency','价格不正确',1,'regex',3),
			array('market_price','currency','价格不正确',1,'regex',3),
			array('promote_price','currency','价格不正确',1,'regex',3),

			array('g_desc','require','描述为空'),
			array('g_number','require','库存为空'),
			// array('is_best','0,1','名字为空',1,'in'),
			array('g_brief','require','简单描述为空'),
			array('type_id','number','商品类型为空')
	);
	
	//商品插入的前置操作
	function _before_insert(&$data, $options){
		//完成商品图片的上传，和缩略图的生成
		// 判断用户是否有上传图片
		if(isset($_FILES['g_img']) && $_FILES['g_img']['error']==0){
			//获取配置文件
			/* $muf=ini_get('upload_max_filesize');
			$umf=C('MAX_IMG_SIZE');
			$maxImg=(int)min($muf,$umf); */
		
			$upload = new \Think\Upload();
			$upload->maxSize = 2*1024*1024;
			$upload->exts = array('jpg','png','gif','jpeg');
			$upload->rootPath = './Uploads/';
			$upload->savePath = 'Goods/';
			// 上传文件
			$info = $upload->upload();
			if($info){
				//原图的名字
				$data['g_img']=$info['g_img']['savepath'] . $info['g_img']['savename'];
				$data['g_thumb']=$info['g_img']['savepath'] . 'sm_'.$info['g_img']['savename'];
			
				// 完成缩略图的生成
				$image = new \Think\Image(); //实例化图片类
				$image->open(IMG_URL_HD.$data['g_img']);//打开原图路径，使用路口常量
				// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
				$image->thumb(160, 160)->save(IMG_URL_HD.$data['g_thumb']);// 保存缩略图路径
				
			}else{
				$this->error=$upload->getError();
				return false;
			}
				
		}
	}
	// 处理商品添加后的操作，完成属性的添加
	function _after_insert($data, $options){
		//------------属性的添加-----------------
		$goods_id=$data['g_id'];
		$ids=I('post.attr_id');
		$vals=I('post.attr_value');
		$prices=I('post.attr_price');
		// doubi(I('post.attr_id'));
		// doubi(I('post.attr_value'));
		// doubi(I('post.attr_price'));
		// 循环遍历讲属性添加到对应的表里面
		foreach ($ids as $k=>$v){
			$data=array(
				'goods_id'=>$goods_id,	
				'attr_id'=>$v,	
				'attr_value'=>$vals[$k],	
				'attr_price'=>$prices[$k]	
			);
			//调用模型循环插入数据
			D('GoodsAttr')->add($data);
		}
		/*************** 处理商品图片 ***************/
		//判断是否上传成功，这里要循环遍历的判断是否==0
// 		if($_FILES['imgs']['error']==0){
			// 从配置文件中取出允许上传的图片的类型
// 			$auf = C('ALLOW_UPLOAD_FILETYPE');
			// 从配置文件中取出图片的最大尺寸
// 			$muf = C('MAX_UPLOAD_FILESIZE');
			// 从php.ini中读出系统对图片的硬限制
// 			$umf = ini_get('upload_max_filesize');
			// 实际的限制应该是以上两项中小者
// 			$maxFileSize = (int)min($muf, $umf);
			// 插入数据库之前先上传logo图片
			$upload = new \Think\Upload();// 实例化上传类
			$upload->maxSize = 3 * 1024 * 1024;
			$upload->exts = array('jpg','png','gif','jpeg');// 设置附件上传类型
			$upload->rootPath = './Uploads/'; // 设置附件上传根目录
			$upload->savePath = 'Goods/'; // 设置附件上传（子）目录
			// 上传文件
			$info = $upload->upload(array('imgs'=>$_FILES['imgs']));
			if($info){
				$gpModel = M('Goodsimg');
				$image = new \Think\Image();
				// 循环每张图片生成缩略图
				foreach ($info as $k => $v)
				{
					// 先拼缩略图和原图的名称
					$logo = $v['savepath'] . $v['savename'];
					$sm_logo = $v['savepath'] . 'sm_'.$v['savename'];
					$big_logo = $v['savepath'] . 'big_'.$v['savename'];
					$image->open(IMG_URL_HD . $logo);
					$image->thumb(350, 350)->save(IMG_URL_HD . $big_logo);
					$image->thumb(50, 50, 3)->save(IMG_URL_HD . $sm_logo);
					// 存到表中
					$gpModel->add(array(
							'i_img' => $logo,
							'i_thumb' => $sm_logo,
							'i_big_thumb' => $big_logo,
							'goods_id' => $goods_id,
					));
				}
			}
			$this->error=$upload->getError();
// 		}
		
	}
	
	// ---------------------- home -------------------
	// 获取一个分类下面的所有子分类ids，并返回ids数组
	function getCatChildIds($cid){
		$cmodel=new \Model\CategoryModel();
		$ids=$cmodel->getIds($cid);
		$ids[]=$cid;
		return $ids;
	}
	//根据ids查询出所有在其下面的goods商品信息，并返回数组
	function getGoodsByCid($cid){
		$ids=$this->getCatChildIds($cid);
		// 把ids数组砸成字符串，隔开
		$ids=implode(',',$ids);
		// 获取商品信息，并分页展示出来
		$goods=$this->where('cat_id in ('.$ids.')')->select();
		return $goods;
	}
	// 根据is_new,is_hot,is_best查询对象的商品信息展示在首页-------------------
	public function getGoodsByIs($_is){
		$goods=$this->where("$_is = 1")->order('g_id desc')->select();
		return $goods;
	}
	
	
	
	
	
	
	
	
	// end
}
