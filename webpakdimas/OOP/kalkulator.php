<html>
<body>
 
<form method="post">
angka 1 <input type="text" name="a">
angka 2 <input type="text" name="b">
</p>
<input type="submit" name="proses" value="proses">
</form>
<?php
$digit1=$_POST['a'];
$digit2=$_POST['b'];
$proses=$_POST['proses'];
 
class kalkulator{
    private $angka1;
    private $angka2;
    public $proses;
 
    function kalkulator($x,$y){
        $this->angka1=$x;
        $this->angka2=$y;
    }
 
    function getAngka1(){
        return $this->angka1;
    }
 
    function getAngka2(){
        return $this->angka2;
    }
 
    function tambah (){
        if($this->angka1!='' && $this->angka2!=''){
            $hasil= $this->angka1 + $this->angka2;
            return $hasil;
        }
    }
    function kurang (){
        if($this->angka1!='' && $this->angka2!=''){
            $hasil= $this->angka1 - $this->angka2;
            return $hasil;
        }
    }
    function kali (){
        if($this->angka1!='' && $this->angka2!=''){
            $hasil= $this->angka1 * $this->angka2;
            return $hasil;
        }
    }
 
}
    $operasi= new kalkulator($digit1,$digit2);
    echo " maka hasil penjumlahannya adalah: ".$operasi->tambah();
    echo " <br>maka hasil pengurangan adalah: ".$operasi->kurang();
    echo " <br>maka hasil perkalian adalah: ".$operasi->kali();
    echo "<br>angka1= ".$operasi->getAngka1();
    echo "<br>angka2= ".$operasi->getAngka2();
 
?>
</body>
</html>