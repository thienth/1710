<?php 
// const LOAI_DONG_VAT = 'hang so dong vat o ben ngoai';
// dinh nghia lop(doi tuong)
class DongVat{
	const LOAI_DONG_VAT = 'Con dong vat';
	static $chi = 'khong co chi';
	var $ten;
	var $tuoi;
	var $mauSac = 'vang';
	var $canNang = 0;

	static function diNgu(){
		echo "Dong vat di ngu";
	}

	function diChuyen(){
		$this->canNang -= 0.2;
		echo "$this->ten dang di chuyen, sau khi di chuyen so can nang = $this->canNang <br>";
	}

	function an($kg){
		$this->canNang += $kg;
		echo "Toi ten la $this->ten Toi dang an $kg kg thuc an, hien tai toi nang $this->canNang kg <br>";
		// $this->diChuyen();
	}
}

class ConHeo
{
	static $chi = 'dong vat co vu';
	const LOAI_DONG_VAT = 'Con heo';

	static function diNgu(){
		echo "Con heo di ngu";
	}
	
}
// khai bao bien thuoc ve lop
// $meo = new DongVat();
// $meo->ten = 'Trang';
// $meo->tuoi = 24;
// $meo->mauSac = 'den';
// $meo->an(1);
// $meo->an(1);
// $meo->an(1);

// $cho = new DongVat();
// $cho->ten = "Quang";
// $cho->an(5);
var_dump(DongVat::diNgu());

 ?>