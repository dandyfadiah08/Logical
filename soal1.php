<?php
// // NO1
// // Soal a. $data = array(10,20,20,10,10,30,50,10,20);
// // Soal b. $data = array(6,5,2,3,5,2,2,1,1,5,1,3,3,3,5);
// // Soal c. $data = array(1,1,3,1,2,1,3,3,3,3);
// $jenis[]=null;
// $cek="";
// $i=0;
// for($j=0;$j<count($data);$j++)
// {
//     $index2=array_search($data[$j],$jenis);
//     if($index2 == "")
//     {    
//         $jenis[$i]=$data[$j];
//         $i++;
//     }
// }

// cari($data, $jenis);

// function cari($data, $data2)
// {
//     $angka = array();
//     $sum_array = array();
//     $sum=0;
//     $hasil=0;
//     for($K=0;$K<count($data2);$K++)
//     {    
//         $angka[$data2[$K]]=cariyangsama($data,$data2[$K]);
        
//     }
//     foreach($angka as $key=>$isi){
//         if($isi >=2 ){
//             $sum =  floor($isi/2);
//             array_push($sum_array,$sum);
//         }
//     }
//     foreach($sum_array as $key=>$jumlah){
//         $hasil=$hasil + $jumlah;
//     }
//     print_r($hasil);
// }

// function cariyangsama($data,$dupval) {
//     $nb= 0;
//     foreach($data as $key => $val)
//     if ($val==$dupval) $nb++;
//     return $nb;
// }    
// NO2
// Soal a $input="Saat meng*ecet tembo, Agung di_antu oleh Raihan";
 //Soal b $input="Berapa u(mur minima[ untuk !mengurus ktp?";
// Soal c $input="Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda";
// $array = explode(" ", $input);
// $finish=0;
// $val="/^[a-zA-Z,-?]*$/";
//     foreach($array as $key=>$value){
//         if (preg_match($val,$value)) {
//             $finish++;
//         }
//     }
print_r($finish++);
?>