<?php
header("Content-type: text/html; charset=utf-8");
include_once('model.php');//引入封装文件
con('root','','one');//链接数据库
if(!empty($_GET)){//如果有GET传id参数
$id =$_GET['id'];//接收id参数的值
$res= getOne('nm','id='.$id);//调用自定义函数getOne获取对应数据
include_once('edit','.html');//引入对应模块对应控制器对应方法的视图页面
	
}else////如果没有get传id参数
{
	echo "<script>alert('没有找到id');history.go(-1);</script>";
	
}
// var_dump($id);
// die;
if($_POST){//如果有post方式传数据,表示提交了表单
	$name='img';//flie类型的input标签的name值
	// var_dump($name);
	// var_dump($_FILES[$name]['name']);
	if(!empty($_FILES[$name]['name'])){//根据上传文件的名字不为空来确定有上传文件
		$data['image']=uploadImg($name);//调用自定义函数uploadImg进行图片上传操作
			// var_dump($data['image']);die;
		}
			$id=$_POST['id'];//接收id参数的值
			$data['name'] = $_POST['title'];//获取前端name值
			$data['content'] = $_POST['con'];//获取前端name值
			// $data['cid'] = $_POST['cid'];
			// var_dump($id);die;
			$res=edit('news',$data,'id='.$id);//调用自定义函数edit修改对应的数据
	
	if($res){//如果成功
		echo "<script>alert('修改成功');window.location.href='news.php'</script>";
	}else{
		echo "<script>alert('修改失败');history.go(-1)</script>";
	}



}
	
// var_dump($res);


	
	
	
	
	
	
	
	
	
	}






















