<?php 
	require_once '../include.php';
	/* checkLogined()--admin.inc.php 检查session和cookie*/
	checkLogined();

	$act=$_REQUEST['act'];
	$id=isset($_REQUEST['id'])?$_REQUEST['id']:null;

	if($act=="logout"){
		logout();				/* logout()   --admin.inc.php */

	}elseif($act=="addAdmin"){
		$mes=addAdmin();		/* addAdmin() --admin.inc.php */

	}elseif($act=="editAdmin"){
		$mes=editAdmin($id);	/* editAdmin()--admin.inc.php */

	}elseif($act=="delAdmin"){
		$mes=delAdmin($id);		/* delAdmin() --admin.inc.php */

	}elseif($act=="addCate"){
		$mes=addCate();			/* addCate() --category.inc.php */

	}elseif($act=="editCate"){
		$where="id={$id}";
		$mes=editCate($where);	/* editCate() --category.inc.php */

	}elseif($act=="delCate"){
		$mes=delCate($id);		/* delCate() --category.inc.php */

	}elseif($act=="addPro"){
		$mes=addPro();			/* addPro() --product.inc.php */

	}elseif($act=="editPro"){
		$mes=editPro($id);		/* editPro() --product.inc.php */

	}elseif($act=="delPro"){
		$mes=delPro($id);		/* delPro() --product.inc.php */

	}elseif($act=="addUser"){
		$mes=addUser();			/* addUser() --admin.inc.php */

	}elseif($act=="delUser"){
			$mes=delUser($id);	/* delUser() --admin.inc.php */

	}elseif($act=="editUser"){
		$mes=editUser($id);		/* editUser() --admin.inc.php */

	}elseif($act=="waterText"){
		$mes=doWaterText($id);	/* doWaterText() --album.inc.php 文字水印*/

	}elseif($act=="waterPic"){
		$mes=doWaterPic($id);	/* doWaterPic() --album.inc.php 图片水印*/
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Insert title here</title>
	</head>
	<body>
		<?php 
			if($mes){
				echo $mes;
			}
		?>
	</body>
</html>