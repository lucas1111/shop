<?php 

function addAlbum($arr){
	insert("album", $arr);
}

/**
 * 根据商品id得到商品图片
 * @param int $id
 * @return array
 */
function getProImgById($id){
	$sql="select albumPath from album where pid={$id} limit 1";
	$row=fetchOne($sql);
	return $row;
}

/**
 * 根据商品id得到所有图片
 * @param int $id
 * @return array
 */
function getProImgsById($id){
	$sql="select albumPath from album where pid={$id} ";
	$rows=fetchAll($sql);
	return $rows;
}
/**
 * 文字水印的效果
 * @param int $id
 * @return string
 */
function doWaterText($id){
	$rows=getProImgsById($id);
	if($rows){
		foreach($rows as $row){
			$filename="../image_800/".$row['albumPath'];
			waterText($filename);		/* waterText() --image.func.php 文字水印*/
		}
		//$mes="操作成功！";
		alertMes("添加文字水印成功!","listProImages.php");
	}else{
		//$mes="操作失败！";
		alertMes("添加文字水印失败!","listProImages.php");
	}
	return $mes;
}

/**
 *图片水印
 * @param int $id
 * @return string
 */
function doWaterPic($id){
	$rows=getProImgsById($id);
	if($rows){
		foreach($rows as $row){
			$filename="../image_800/".$row['albumPath'];
			waterPic($filename);		/* waterPic() --image.func.php 图片水印*/
		}
		//$mes="操作成功";
		alertMes("添加图片水印成功!","listProImages.php");
	}else{
		alertMes("添加图片水印失败!","listProImages.php");
	}
	return $mes;
}




