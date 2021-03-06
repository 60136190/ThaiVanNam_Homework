<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tinh chu vi va dien tich</title>
<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>
<?php 
abstract class Hinh{
	protected $ten, $dodai;
	public function setTen($ten){
		$this->ten=$ten;
	}
	public function getTen(){
		return $this->ten;
	}
	public function setDodai($doDai){
		$this->dodai=$doDai;
	}
	public function getDodai(){
		return $this->dodai;
	}

	abstract public function tinh_CV();
	abstract public function tinh_DT();
}
class HinhTron extends Hinh{
	const PI=3.14;
	function tinh_CV(){
		return $this->dodai*2*self::PI;
	}
	function tinh_DT(){
		return pow($this->dodai,2)*self::PI;
	}
}
class HinhVuong extends Hinh{
	public function tinh_CV(){
		return $this->dodai*4;
	}
	public function tinh_DT(){
		return pow($this->dodai,2);
	}
}
class HinhTamGiacDeu extends Hinh{
	public function tinh_CV(){
		return $this->dodai*3;
	}
	public function tinh_DT(){
		return $this->dodai*$this->dodai*0.866;
	}
}
class HinhTamGiacThuong extends Hinh{
	public function tinh_CV(){
		$hinhtamgiacthuong=array();
    $hinhtamgiacthuong =$_POST['dodai'];
    $hinhtamgiacthuong1 = explode(",", $hinhtamgiacthuong);

    $canh1 = $hinhtamgiacthuong1[0];
    $canh2 = $hinhtamgiacthuong1[1];
    $canh3 = $hinhtamgiacthuong1[2];
		return  $canh1 * $canh2 *$canh3;
	}
	public function tinh_DT(){
		$hinhtamgiacthuong=array();
		$hinhtamgiacthuong =$_POST['dodai'];
		$hinhtamgiacthuong1 = explode(",", $hinhtamgiacthuong);
	
		$canh1 = $hinhtamgiacthuong1[0];
		$canh2 = $hinhtamgiacthuong1[1];
		$canh3 = $hinhtamgiacthuong1[2];
		$p = ($canh1 * $canh2 *$canh3)/2;

		$dientich = $p*($p-$canh1)*($p-$canh2)*($p-$canh3);
		return sqrt($dientich);
	}
}
class HinhChuNhat extends Hinh{
	public function tinh_CV(){
		$hinhchunhat=array();
		$hinhchunhat =$_POST['dodai'];
		$hinhchunhat1 = explode(",", $hinhchunhat);
	
		$canh1 = $hinhchunhat1[0];
		$canh2 = $hinhchunhat1[1];

			return  ($canh1 + $canh2) *2;
	}
	public function tinh_DT(){
		$hinhchunhat=array();
		$hinhchunhat =$_POST['dodai'];
		$hinhchunhat1 = explode(",", $hinhchunhat);
	
		$canh1 = $hinhchunhat1[0];
		$canh2 = $hinhchunhat1[1];

			return  $canh1 * $canh2;
	}
}
$str=NULL;
if(isset($_POST['tinh'])){
    
    

	if(isset($_POST['hinh']) && ($_POST['hinh'])=="hv"){
		$hv=new HinhVuong();
		$hv->setTen($_POST['ten']);
		$hv->setDodai($_POST['dodai']);
		$str= "Di???n t??ch h??nh vu??ng ".$hv->getTen()." l?? : ".$hv->tinh_DT()." \n".
		 		"Chu vi c???a h??nh vu??ng ".$hv->getTen()." l?? : ".$hv->tinh_CV();
	}
	if(isset($_POST['hinh']) && ($_POST['hinh'])=="ht"){
		$ht=new HinhTron();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Di???n t??ch c???a h??nh tr??n ".$ht->getTen()." l?? : ".$ht->tinh_DT()." \n".
				"Chu vi c???a h??nh tr??n ".$ht->getTen()." l?? : ".$ht->tinh_CV();
	}
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="htgd"){
		$ht=new HinhTamGiacDeu();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Di???n t??ch c???a h??nh tam gi??c ?????u ".$ht->getTen()." l?? : ".$ht->tinh_DT()." \n".
				"Chu vi c???a h??nh tam gi??c ?????u ".$ht->getTen()." l?? : ".$ht->tinh_CV();
	}
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="htgt"){
		$hinhtamgiacthuong=array();
		$hinhtamgiacthuong =$_POST['dodai'];
		$hinhtamgiacthuong1 = explode(",", $hinhtamgiacthuong);
		$canh1 = $hinhtamgiacthuong1[0];
		$canh2 = $hinhtamgiacthuong1[1];
		$canh3 = $hinhtamgiacthuong1[2];
		if(($canh1+$canh2>$canh3)&&($canh1+$canh3>$canh2)&&($canh2+$canh3>$canh1)){
		$ht=new HinhTamGiacThuong();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Di???n t??ch c???a h??nh tam gi??c th?????ng ".$ht->getTen()." l?? : ".$ht->tinh_DT()." \n".
				"Chu vi c???a h??nh tam gi??c th?????ng ".$ht->getTen()." l?? : ".$ht->tinh_CV();
		}else{
			$str ="Kh??ng ph???i l?? tam gi??c";
		}
	}
	if(isset($_POST['hinh']) && ($_POST['hinh'])=="htcn"){
		$ht=new HinhChuNhat();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Di???n t??ch c???a h??nh tam gi??c th?????ng ".$ht->getTen()." l?? : ".$ht->tinh_DT()." \n".
				"Chu vi c???a h??nh tam gi??c th?????ng ".$ht->getTen()." l?? : ".$ht->tinh_CV();
	}
}
?>
<form action="" method="post">
<fieldset>
	<legend>T??nh chu vi v?? di???n t??ch c??c h??nh ????n gi???n</legend>
	<table border='0'>
		<tr>
			<td>Ch???n h??nh</td>
			<td><input type="radio" name="hinh" value="hv" 
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hv") echo 'checked'?>/>H??nh vu??ng
				<input type="radio" name="hinh" value="ht"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="ht") echo 'checked'?>/>H??nh tr??n
                <input type="radio" name="hinh" value="htgd"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgd") echo 'checked'?>/>H??nh tam gi??c ?????u
                <input type="radio" name="hinh" value="htgt"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgt") echo 'checked'?>/>H??nh tam gi??c th?????ng
                <input type="radio" name="hinh" value="htcn"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htcn") echo 'checked'?>/>H??nh ch??? nh???t
			</td>
		</tr>
		<tr>
			<td>Nh???p t??n:</td>
			<td><input type="text"  name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>"/></td>
		</tr>
		<tr>
			<td>Nh???p ????? d??i:</td>
			<td><input type="text"  name="dodai" value="<?php if(isset($_POST['dodai'])) echo $_POST['dodai'];?>"/></td>
		</tr>
		<tr><td>K???t qu???:</td>
			<td><textarea name="ketqua" cols="70" rows="4" disabled="disabled"><?php echo $str;?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="tinh" value="T??NH"/></td>
		</tr>
	</table>
</fieldset>
</form>
</body>
</html>