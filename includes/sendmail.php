<?php 
include '../admincp/config.php';
         if(isset($_POST['sendmes'])){
        	include('lib/PHPMailerAutoload.php');
        	$mail = new PHPMailer;
        	$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'betestdemo@gmail.com';                 // SMTP username
			$mail->Password = 'perfecta123';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;    
			$mail->isHTML(true);
			$mail->setFrom('betestdemo@gmail.com', ''.$_POST['inname']);
			$mail->addAddress('cuongtiendx@gmail.com', '');
			$mail->Subject = ''.$_POST['intitle'];
			$mail->Body    =  'Họ tên: '.$_POST['inname'].'<br>'.'Email: '.$_POST['inmail'].'<br>'.'Nộidung: '.$_POST['inmes'];
			$mail->setLanguage('vi', 'lib/language/phpmailer.lang-vi.php');
			    
			if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
     header('Location: ' . $_SERVER['HTTP_REFERER']);
}
        }elseif(isset($_POST['sendmail'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $sql = "insert into mail (ho_ten,sdt,mail) values('$name','$phone','$email')";
    mysql_query($sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }elseif(isset($_POST['dangky'])){
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $sql = "insert into member (hoten,sdt,email) values('$hoten','$sdt','$email')";
    mysql_query($sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>