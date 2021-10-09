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
		$str= "Diện tích hình vuông ".$hv->getTen()." là : ".$hv->tinh_DT()." \n".
		 		"Chu vi của hình vuông ".$hv->getTen()." là : ".$hv->tinh_CV();
	}
	if(isset($_POST['hinh']) && ($_POST['hinh'])=="ht"){
		$ht=new HinhTron();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Diện tích của hình tròn ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
				"Chu vi của hình tròn ".$ht->getTen()." là : ".$ht->tinh_CV();
	}
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="htgd"){
		$ht=new HinhTamGiacDeu();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Diện tích của hình tam giác đều ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
				"Chu vi của hình tam giác đều ".$ht->getTen()." là : ".$ht->tinh_CV();
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
		$str= "Diện tích của hình tam giác thường ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
				"Chu vi của hình tam giác thường ".$ht->getTen()." là : ".$ht->tinh_CV();
		}else{
			$str ="Không phải là tam giác";
		}
	}
	if(isset($_POST['hinh']) && ($_POST['hinh'])=="htcn"){
		$ht=new HinhChuNhat();
		$ht->setTen($_POST['ten']);
		$ht->setDodai($_POST['dodai']);
		$str= "Diện tích của hình tam giác thường ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
				"Chu vi của hình tam giác thường ".$ht->getTen()." là : ".$ht->tinh_CV();
	}
}
?>
<form action="" method="post">
<fieldset>
	<legend>Tính chu vi và diện tích các hình đơn giản</legend>
	<table border='0'>
		<tr>
			<td>Chọn hình</td>
			<td><input type="radio" name="hinh" value="hv" 
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hv") echo 'checked'?>/>Hình vuông
				<input type="radio" name="hinh" value="ht"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="ht") echo 'checked'?>/>Hình tròn
                <input type="radio" name="hinh" value="htgd"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgd") echo 'checked'?>/>Hình tam giác đều
                <input type="radio" name="hinh" value="htgt"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgt") echo 'checked'?>/>Hình tam giác thường
                <input type="radio" name="hinh" value="htcn"
					<?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htcn") echo 'checked'?>/>Hình chữ nhật
			</td>
		</tr>
		<tr>
			<td>Nhập tên:</td>
			<td><input type="text"  name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>"/></td>
		</tr>
		<tr>
			<td>Nhập độ dài:</td>
			<td><input type="text"  name="dodai" value="<?php if(isset($_POST['dodai'])) echo $_POST['dodai'];?>"/></td>
		</tr>
		<tr><td>Kết quả:</td>
			<td><textarea name="ketqua" cols="70" rows="4" disabled="disabled"><?php echo $str;?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="tinh" value="TÍNH"/></td>
		</tr>
	</table>
</fieldset>
</form>
</body>
</html>