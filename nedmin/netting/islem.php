<?php 

ob_start();
session_start();

include 'baglan.php';

if (isset($_POST['admingiris'])) {

	$admin_email=$_POST['admin_email'];
	$admin_password=md5($_POST['admin_password']);

	$kullanicisor=$db->prepare("SELECT * FROM adminuser where admin_email=:mail and admin_password=:password and admin_yetki=:yetki");
	$kullanicisor->execute(array(
		'mail' => $admin_email,
		'password' => $admin_password,
		'yetki' => 5
		));

	echo $say=$kullanicisor->rowCount();

	if ($say==1) {
				
		$_SESSION['admin_email']=$admin_email;
		header("Location:../production/index.php");
		exit;



	} else {

		header("Location:../production/login.php?durum=no");
		exit;
	}
	

}


if (isset($_POST['genelayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE settings SET
		settings_title=:settings_title,
		settings_desc=:settings_desc,
		settings_keys=:settings_keys,
		settings_author=:settings_author
		WHERE settings_id=1");

	$update=$ayarkaydet->execute(array(
		'settings_title' => $_POST['settings_title'],
		'settings_desc' => $_POST['settings_desc'],
		'settings_keys' => $_POST['settings_keys'],
		'settings_author' => $_POST['settings_author']
		));


	if ($update) {

		
		header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		header("Location:../production/genel-ayar.php?durum=no");
	}
	
}

if (isset($_POST['iletisimayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE settings SET
		settings_phone=:settings_phone,
		settings_mobile=:settings_mobile,
		settings_fax=:settings_fax,
		settings_email=:settings_email,
		settings_country=:settings_country,
		settings_town=:settings_town,
		settings_adress=:settings_adress,
		settings_webadress=:settings_webadress,
		settings_contact=:settings_contact,
		settings_mesai=:settings_mesai
		WHERE settings_id=1");

	$update=$ayarkaydet->execute(array(
		'settings_phone' => $_POST['settings_phone'],
		'settings_mobile' => $_POST['settings_mobile'],
		'settings_fax' => $_POST['settings_fax'],
		'settings_email' => $_POST['settings_email'],
		'settings_country' => $_POST['settings_country'],
		'settings_town' => $_POST['settings_town'],
		'settings_adress' => $_POST['settings_adress'],
		'settings_webadress' => $_POST['settings_webadress'],
		'settings_contact' => $_POST['settings_contact'],
		'settings_mesai' => $_POST['settings_mesai']
		));


	if ($update) {

		
		header("Location:../production/iletisim-ayar.php?durum=ok");

	} else {

		header("Location:../production/iletisim-ayar.php?durum=no");
	}
	
}




 if (isset($_POST['apiayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE settings SET
		settings_maps=:settings_maps,
		settings_analystic=:settings_analystic,
		settings_zopim=:settings_zopim
		WHERE settings_id=1");

	$update=$ayarkaydet->execute(array(
		'settings_maps' => $_POST['settings_maps'],
		'settings_analystic' => $_POST['settings_analystic'],
		'settings_zopim' => $_POST['settings_zopim']
		));


	if ($update) {

		
		header("Location:../production/api-ayar.php?durum=ok");

	} else {

		header("Location:../production/api-ayar.php?durum=no");
	}
	
}


if (isset($_POST['sosyalagayarkaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE settings SET
		settings_facebook=:settings_facebook,
		settings_instagram=:settings_instagram,
		settings_youtube=:settings_youtube,
		settings_twitter=:settings_twitter
		WHERE settings_id=1");

	$update=$ayarkaydet->execute(array(
		'settings_facebook' => $_POST['settings_facebook'],
		'settings_instagram' => $_POST['settings_instagram'],
		'settings_youtube' => $_POST['settings_youtube'],
		'settings_twitter' => $_POST['settings_twitter']
		));


	if ($update) {

		
		header("Location:../production/sosyalag-ayar.php?durum=ok");

	} else {

		header("Location:../production/sosyalag-ayar.php?durum=no");
	}
	
}

if (isset($_POST['hakkimizdakaydet'])) {
	
	//Tablo güncelleme işlemi kodları...
	$hakkimizdakaydet=$db->prepare("UPDATE about SET
		about_title=:about_title,
		about_minidesc=:about_minidesc,
		about_welcome=:about_welcome,
		about_content=:about_content,
		about_mission=:about_mission,
		about_vision=:about_vision,
		about_video=:about_video
		WHERE about_id=1");

	$update=$hakkimizdakaydet->execute(array(
		'about_title' => $_POST['about_title'],
		'about_minidesc' => $_POST['about_minidesc'],
		'about_welcome' => $_POST['about_welcome'],
		'about_content' => $_POST['about_content'],
		'about_mission' => $_POST['about_mission'],
		'about_vision' => $_POST['about_vision'],
		'about_video' => $_POST['about_video']
		));


	if ($update) {

		
		header("Location:../production/hakkimizda-ayar.php?durum=ok");

	} else {

		header("Location:../production/hakkimizda-ayar.php?durum=no");
	}
	
}

if (isset($_POST['kullaniciduzenle'])) {

	$admin_id=$_POST['admin_id'];

	$uploads_dir = '../../dimg';

	@$tmp_name = $_FILES['admin_photo']["tmp_name"];
	@$name = $_FILES['admin_photo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


	
	//Tablo güncelleme işlemi kodları...
	$ayarkaydet=$db->prepare("UPDATE adminuser SET
		admin_name=:admin_name,
		admin_phone=:admin_phone,
		admin_photo=:logo
		WHERE admin_id={$_POST['admin_id']}");

	$update=$ayarkaydet->execute(array(
		'admin_name' => $_POST['admin_name'],
		'logo' => $refimgyol,
		'admin_phone' => $_POST['admin_phone']
		));


	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");
		
		header("Location:../production/admin-update.php?admin_id=$admin_id&durum=ok");

	} else {

		header("Location:../production/admin-update.php?admin_id=$admin_id&durum=no");
	}
	
}






 ?>