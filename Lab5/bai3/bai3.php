<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="bai3lab5.css">
<title>Hiển thị thông tin</title>
<style>

legend {
  background-color: gray;
  color: white;
  padding: 5px 140px;
}

input {
  margin: 5px;
}
</style>
</head>
<body id="than">
<?php 
abstract class Nguoi{
	protected $hoten, $gioitinh,$diachi;
	public function sethoTen($hoTen){
		$this->hoten=$hoTen;
	}
	public function gethoTen(){
		return $this->hoten;
	}
	public function setgioiTinh($gioiTinh){
		$this->gioitinh=$gioiTinh;
	}
	public function getgioiTinh(){
		return $this->gioitinh;
	}
    public function setdiaChi($diaChi){
		$this->diachi=$diaChi;
	}
	public function getdiaChi(){
		return $this->diachi;
	}

}

class GiaoVien extends Nguoi{
    public $trinhdo, $luong;
    public function settrinhDo($trinhDo){
        $this->trinhdo=$trinhDo;
    } 
    public function gettrinhDo(){
        return $this->trinhdo;
    }
   

    const LCB=1500000;
	function tinh_Luong(){
		if($this->trinhdo == 'cn'){
            return self::LCB*2.43;
         
        }else 
        if($this->trinhdo =='ths'){
            return self::LCB*3.67;
        }else 
            return  self::LCB*5.66;
	}


}
class SinhVien extends Nguoi{
	public $lophoc, $nganhhoc;
    public function setlopHoc($lopHoc){
		$this->lophoc=$lopHoc;
	}
	public function getlopHoc(){
		return $this->lophoc;
	}
	public function setnganhHoc($nganhHoc){
		$this->nganhhoc=$nganhHoc;
	}
	public function getnganhHoc(){
		return $this->nganhhoc;
	}
    function tinh_DT(){
        if($this->nganhhoc == 'cntt'){
            return 1;
         
        }else 
        if($this->nganhhoc =='kt'){
            return 1.5;
        }else 
            return  0;
	}



}
$str=NULL;
if(isset($_POST['tinh'])){
	if(isset($_POST['nguoi']) && ($_POST['nguoi'])=="gv"){
		$gv=new GiaoVien();
		$gv->sethoTen($_POST['hoten']);
		$gv->setgioiTinh($_POST['gioitinh']);
        $gv->setdiaChi($_POST['diachi']);
        $gv->settrinhDo($_POST['trinhdo']);

        
		$str= "Họ tên ".$gv->gethoTen()." \n ".
              " Giới tính  ".$gv->getgioiTinh()." \n".
              " Địa chỉ ".$gv->getdiaChi()." \n".
              " Trình độ  ".$gv->gettrinhDo()." \n".
              " Tính lương  ".$gv->tinh_Luong()." \n";
            
	}
	if(isset($_POST['nguoi']) && ($_POST['nguoi'])=="sv"){
		$sv=new SinhVien();
        $sv->sethoTen($_POST['hoten']);
		$sv->setgioiTinh($_POST['gioitinh']);
        $sv->setdiaChi($_POST['diachi']);
        $sv->setlopHoc($_POST['lophoc']);
        $sv->setnganhHoc($_POST['nganh']);

		$str= "Họ tên ".$sv->gethoTen()." \n ".
              " Giới tính  ".$sv->getgioiTinh()." \n".
              " Địa chỉ ".$sv->getdiaChi()." \n".
              " Lớp học  ".$sv->getlopHoc()." \n".
              " Ngành học  ".$sv->getnganhHoc()." \n".
              " Tính điểm thưởng  ".$sv->tinh_DT()." \n";
	}
}
?>
<form action="" method="post" id="form">
<fieldset>
	<legend>Hiển thị thông tin</legend>
	<table border='0'>
		<tr>
			<td>Chọn </td>
			<td><input type="radio" name="nguoi" value="gv" 
					<?php if(isset($_POST['nguoi'])&&($_POST['nguoi'])=="gv") echo 'checked'?>/> Giáo Viên
				<input type="radio" name="nguoi" value="sv"
					<?php if(isset($_POST['nguoi'])&&($_POST['nguoi'])=="sv") echo 'checked'?>/>Sinh Viên
			</td>
		</tr>
		<tr>
			<td>Nhập tên:</td>
			<td><input type="text"  name="hoten" value="<?php if(isset($_POST['hoten'])) echo $_POST['hoten'];?>"/></td>
		</tr>
        <tr>
			<td>Giới Tính </td>
			<td><input type="radio" name="gioitinh" value="nam" 
					<?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nam") echo 'checked'?>/> Nam
				<input type="radio" name="gioitinh" value="nu"
					<?php if(isset($_POST['gioitinh'])&&($_POST['gioitinh'])=="nu") echo 'checked'?>/>Nữ
			</td>
		</tr>
		<tr>
			<td>Nhập địa chỉ:</td>
			<td><input type="text"  name="diachi" value="<?php if(isset($_POST['diachi'])) echo $_POST['diachi'];?>"/></td>
		</tr>
        <tr>
			<td>Nhập lớp học:</td>
			<td><input type="text"  name="lophoc" value="<?php if(isset($_POST['lophoc'])) echo $_POST['lophoc'];?>"/></td>
		</tr>
        <tr>
			<td>Ngành học (SV) </td>
			<td><input type="radio" name="nganh" value="cntt" 
					<?php if(isset($_POST['nganh'])&&($_POST['nganh'])=="cntt") echo 'checked'?>/> Công nghệ thông tin
				<input type="radio" name="nganh" value="kt"
					<?php if(isset($_POST['nganh'])&&($_POST['nganh'])=="kt") echo 'checked'?>/>Kinh Tế
                    <input type="radio" name="nganh" value="not"
					<?php if(isset($_POST['nganh'])&&($_POST['nganh'])=="not") echo 'checked'?>/>Not
			</td>
		</tr>
        <tr>
			<td>Trình độ (GV) </td>
			<td><input type="radio" name="trinhdo" value="cn" 
					<?php if(isset($_POST['trinhdo'])&&($_POST['trinhdo'])=="cn") echo 'checked'?>/> Cử nhân
				<input type="radio" name="trinhdo" value="ths"
					<?php if(isset($_POST['trinhdo'])&&($_POST['trinhdo'])=="ths") echo 'checked'?>/>Thạc sĩ
                <input type="radio" name="trinhdo" value="ts"
					<?php if(isset($_POST['trinhdo'])&&($_POST['trinhdo'])=="ts") echo 'checked'?>/>Tiến sĩ
			</td>
		</tr>
        <tr>
			<td colspan="2" align="center"><input type="submit" name="tinh" value="Nhập"/></td>
		</tr>
		<tr><td>Thông tin:</td>
			<td><textarea name="ketqua" cols="100" rows="8" disabled="disabled"><?php echo $str;?></textarea></td>
		</tr>
		
	</table>
</fieldset>
</form>
</body>
</html>

