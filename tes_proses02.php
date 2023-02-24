<?php 
if (isset($_POST['Pilih'])) {
	echo "Band Favorit Anda adalah :<br>";
}
$band=[
'band01'=>'Padi',
'band02'=>'Sheila On 7',
'band03'=>'Dewa 19',
'band04'=>'Jikustik',
'band05'=>'Bon Jovi',
'band06'=>'ColdPlay',
'band07'=>'Oasis',
'band08'=>'Metallica',
'band09'=>'Kotak',
'band10'=>'Cokelat',
'band11'=>'Kahitna',
'band12'=>'GNR'
];

foreach ($band as $data) {
	if(isset($_POST['band01')){
	echo $data.$_POST['band01']."<br>";
	}
}
 ?>