<?php
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends BaseController{
	function update($id){
		$g=D('Goods');
		if(isset($_POST['submit'])){
			doubi($_POST);
		}else{
			$this->goods=$g->relation(true)->find($id);
			// doubi($this->goods);exit;
			$this->display();
		}
		
	}
	/**
	 * 删除商品
	 * return [type] [description]
	 */
	public function del($id){
		// echo 'del';
		if(D('Goods')->delete($id)){
			// 这里要用U方法，删除成功的话、
			$this->success('del success',U('show'));
		}else{
			$this->error('delete error',U('show'));
		}
	}
	//获得sn商品编号的方法,自动生成编号的方法
	private function getSn(){
			// ss1234 案例
			// 取出数据，比较，取得最大值
			$max=D('Goods')->order('g_sn desc')->find();
			$sn=$max['g_sn'];
			//截取sn的最后4位数字
			$num=substr($sn,-5);
			$num++;
			//填充补0
			$num=str_pad($num,5,'0',STR_PAD_LEFT);
			// echo 'sh'.$num;exit;
			return 'sh' . $num;
	}
	/**
	 * 添加商品i信息------------------------add------------------------
	 */
	function add(){
		$c=new \Model\CategoryModel();
		// 判断post逻辑
		if(IS_POST){
			$g=new \Model\GoodsModel();
			// 时间戳转换
			$_POST['promote_start_time']=strtotime($_POST['promote_start_time']);
			$_POST['promote_end_time']=strtotime($_POST['promote_end_time']);
			$_POST['g_addtime']=time();
			//判断后面的是否没有选中
			if(I('post.cat_id')==-1){
				$_POST['cat_id']=$_POST['c_two'];
			}
			if(I('post.c_two')==-1){
				$g->cat_id=I('post.c_one');
			}
			if(I('post.c_pid')==-1 && I('post.c_two')==-1){
				$_POST['cat_id']=$_POST['c_one'];
			}
			// 判断商品编号用户是否有输入
			if(empty($_POST['g_sn'])){
				$_POST['g_sn']=$this->getSn();
			}
			// 执行添加,指定添加类型
			if($g->create(I('post.'),1)){
				if($g->add()){
					// 添加商品成功
					$this->success('添加商品成功',U('index'));exit;
				}
			}
			// 添加失败
			$this->error($g->getError());
			

			
	//否则显示add表单
		}else{
			//取出所有的商品类型
			$this->types=D('Goodstype')->select();
			//取出所有的品牌信息
			$this->brands=D('Brand')->select();
			//取出所有商品分类信息
			$this->p_cat=$c->where('c_pid=0')->select();	//获得一级分类列表
			$this->display();
		}

	
	}
	// ajax第一次获取分类
	function getcat($id){
		$data=D('Category')->where("c_pid=$id")->select();
		// ajax返回数据
		$this->ajaxReturn($data);
	}
	// 获取ajax分类信息的方法
	function getchild($id){
		$c=new \Model\CategoryModel();
		$data=$c->getchilds($id);
		// 		doubi($data);exit;
		$this->ajaxReturn($data);
	}
	//根据商品类型的id返回对应的所有属性的值，并显示在添加商品的页面，ajax返回数据
	function ajaxAttr(){
		$id=I('post.id');//获取商品类型的id值
		//2，根据类型的id在属性表里面取出对应的所有属性的值
		$where=array('type_id'=>array('eq',$id));
		$attrs=D('Attribute')->where($where)->select();
		// 3，遍历属性，组织html代码
		// doubi($attrs);exit;
		$html='';
		foreach($attrs as $k=>$v){
			$html.='<tr>';
			$html.='<td class="label">'.$v['a_name'].'</td>';
			$html.="<td><input type='hidden' name='attr_id[]' value=".$v['a_id'].'>';
			//判断当前属性的输入方式
			switch($v['a_input_type']){
				case 0:
					// 文本框手动输入
					$html.="<input name='attr_value[]' type='text' size='40'>";
					$html.="《---》<input name='attr_price[]' type='text' size='10'>属性价格";
					break;
				case 1:
					// 下拉框输入,把数组炸开
					$arr=explode(',', $v['a_value']);
					$html.="<select name='attr_value[]'>";
					$html .= "<option value=''>请选择...</option>";
					foreach ($arr as $v) {
						$html .= "<option value='$v'>$v</option>";
					}
					$html .= "</select>";
					$html.="《---》<input name='attr_price[]' type='text' size='10'>属性价格";
					break;
			
				case 2:
					//文本域
					$html.="<textarea name='attr_value[]' id='' cols='40' rows='10'></textarea>";
					$html.="《---》<input name='attr_price[]' type='text' size='10'>属性价格";
					break;
				default:
					break;
			}
			$html.='</td></tr>';
		}
		//输出给ajax，并返回给浏览器
		echo $html;
	}
	/**-------------------------------------add--------end--------
	 * 展示所有商品信息
	 * return [type] [description]
	 */
	function index(){
		// 商品数据要分页显示
		$this->goods=D('Goods')->select();
		$this->display();
	}
	



	// 空操作方法
	function _empty(){
		// echo "<img src='".A_IMG."404.gif' alt=''>";
		$this->redirect('Index/error');
	}
}