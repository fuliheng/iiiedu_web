<?php
/*  引入  */
require_once "header.php";
if (!isset($_SESSION['user_name'])) {
    header("location:index.php");
    exit;
}

/*  流程控制  */
$op = isset($_REQUEST['op']) ? my_filter($_REQUEST['op'], "string") : '';
switch ($op) {
    case 'goods_form':
        goods_form();
        break;

    case 'insert_goods':
        $goods_sn = insert_goods();
        header("location:index.php?goods_sn={$goods_sn}");
        exit;
        break;
}

/*  輸出  */
require_once "footer.php";

/*  本檔案使用函數  */

//商品編輯表單
function goods_form()
{

}

//儲存商品
function insert_goods()
{
    global $mysqli;
    $goods_title   = $mysqli->real_escape_string($_POST['goods_title']);
    $goods_content = $mysqli->real_escape_string($_POST['goods_content']);
    $goods_price   = $mysqli->real_escape_string($_POST['goods_price']);
    $goods_date    = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `goods` (`goods_title`, `goods_content`, `goods_price`, `goods_counter`, `goods_date`) VALUES ('{$goods_title}', '{$goods_content}', '{$goods_price}', '0', '{$goods_date}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
    $goods_sn = $mysqli->insert_id;
    return $goods_sn;
}

//上傳照片
function save_goods_pic($goods_sn = "")
{
    include_once "class/upload/class.upload.php";
    $pic = new Upload($_FILES['goods_pic'], 'zh_TW');
    if ($pic->uploaded) {
        //大圖
        $pic->file_new_name_body = $goods_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 600;
        $pic->image_y            = 400;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/goods/');
        if (!$pic->processed) {
            return 'error : ' . $pic->error;
        }
        //縮圖
        $pic->file_new_name_body = $goods_sn;
        $pic->file_overwrite     = true;
        $pic->image_resize       = true;
        $pic->image_x            = 300;
        $pic->image_y            = 200;
        $pic->image_convert      = 'png';
        $pic->image_ratio_crop   = true;
        $pic->Process('uploads/thumbs/');
        if ($pic->processed) {
            $pic->Clean();
        } else {
            return 'error : ' . $pic->error;
        }
    }
}

//建立目錄
function mk_dir($dir = "")
{
    //若無目錄名稱秀出警告訊息
    if (empty($dir)) {
        die("無目錄名稱");
    }

    //若目錄不存在的話建立目錄
    if (!is_dir($dir)) {
        umask(000);
        //若建立失敗秀出警告訊息
        if (!mkdir($dir, 0777)) {
            die("無法建立目錄");
        }

    }
}
