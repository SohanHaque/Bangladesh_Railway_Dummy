<?php
$a[] = "Kamlapur";
$a[] = "Dhaka Airport";
$a[] = "Nayaranganj";
$a[] = "Gazipur";
$a[] = "Tangail";
$a[] = "GopalGonj";
$a[] = "Bhairab Bazar";
$a[] = "Faridpur";
$a[] = "Narshangdi";
$a[] = "Tongi";
$a[] = "Tejgao";
$a[] = "Joydebpur";
$a[] = "Kishorganj";
$a[] = "Rajbari";
$a[] = "Akkelpur";
$a[] = "Joypurhat";
$a[] = "Sonatola";
$a[] = "Nator";
$a[] = "Pabna";
$a[] = "Ishwardi";
$a[] = "Ullapara";
$a[] = "Hili";
$a[] = "Brammanbaria";
$a[] = "Santahar";
$a[] = "Panchabibi";
$a[] = "Bogra";
$a[] = "Raninagar";
$a[] = "Singra";
$a[] = "Faridpur";
$a[] = "Sirajgong";
$a[] = "Rajshahi";
$a[] = "Ahasanganj";
$a[] = "Parbatipur";
$a[] = "Dinajpur";
$a[] = "Gaibandha";
$a[] = "Lalmonirhat";
$a[] = "Chapai Nawabganj";
$a[] = "Panchagarh";
$a[] = "Pirganj";
$a[] = "Mymensingh";
$a[] = "Jamalpur";
$a[] = "Gaforganj";
$a[] = "Feni";
$a[] = "Comilla";
$a[] = "Chadpur";
$a[] = "Laksam";
$a[] = "Chittagong";
$a[] = "Khulna";
$a[] = "Jasor";
$a[] = "Chuadanga";
$a[] = "Kustia";
$a[] = "Noapara";
$a[] = "Sylhet";
$a[] = "Srimangal";
$a[] = "Saistagang";
$a[] = "Daulatpur";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>