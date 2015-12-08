<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ONLINE MANUSCRIPT SUBMISSION FORM</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	/*  

	<-----------------------------------------
	| Furkan KONYALI        	             |
	| E-Mail: furkan.konyali@gmail.com       |
	| All Right Reserved                     |
	----------------------------------------->
	
	*/
		input{margin-bottom: 10px;}
		select{margin-bottom: 10px;}
		textarea{margin-bottom: 10px;}
		.btn-primary{margin-bottom: 10px;}
		.inputs{}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
  
  function inputUpdate(val){
    var form   = $('#author-form'),
        inputs = $('.form-group', form);
   
    inputs.html("");
    for (var i = 2; i < val+2; i++) {
        inputs.append('<div style="clear:both;"></div><label for="text" class="col-sm-3 control-label">Author'+i+' Name and Surname <span class="label label-danger">*</span></label><div class="col-sm-5"><input type="text" name="autorns'+i+'" class="form-control required" style="margin-top: 7px;" /></div><div style="clear:both"></div><label for="text" class="col-sm-3 control-label">E-Mail Address<span class="label label-danger">*</span></label><div class="col-sm-5"><input type="text" name="mail'+i+'" class="form-control required"></div><div style="clear:both"></div>')
    }
  }

var authorInput = $('#author-input');
authorInput.closest("#author-form").append('<div class="form-group"></div>');
  
authorInput.focus(function(e){
  var self = $(this);
  $(document).on('keydown', function(e){
    if( e.keyCode == 13 ){
      inputUpdate( parseInt(self.val()) );
      return false;
    }
  })
}) 

authorInput.blur(function(){
  var self = $(this);
  inputUpdate(  parseInt(self.val()) );
});
  
  
 // form post control
  $("#form1").submit(function() {
    var formGroup = $('.form-group', this);
    formGroup.each(function(){
      var self = $(this);
      $('.required', this).each(function(){
        if( !$(this).val() ){
          self.addClass('has-error');
        }else {
          self.removeClass('has-error');
        }
      })
    })
  });
  
})
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
			<h2 id="forms-example">ONLINE MANUSCRIPT SUBMISSION FORM</h2>
		</div>
		<form id="form1" action="" method="post" enctype="multipart/form-data">
			<!-- onsubmit="return false;" -->
		<div class="form-group">
			<label for="section" class="col-sm-3 control-label">Title <span class="label label-danger">*</span></label>
			<div class="col-sm-5">
				<select id="section" name="title" class="form-control required">
					<option value="Prof.Dr." selected="">Prof.Dr.</option>
					<option value="Prof.">Prof.</option>
					<option value="Assoc.Prof.Dr.">Assoc.Prof.Dr.</option>
					<option value="Assist.Prof.Dr">Assist.Prof.Dr</option>
					<option value="Dr.">Dr.</option>
					<option value="Res. Assist.">Res. Assist.</option>
					<option value="Lecturer">Lecturer</option>
					<option value="Mr.">Mr.</option>
					<option value="Mrs.">Mrs.</option>
					<option value="Mathematician">Mathematician</option>
				</select>
			</div>
		</div><div style="clear:both"></div>
		<div class="form-group">
			<label for="text" class="col-sm-3 control-label">Author1 Name and Surname (Corresponding Author) <span class="label label-danger">*</span></label>
			<div class="col-sm-5">
				<!--<form action="" method="get">-->
					<input type="text" name="ynamesurname" class="form-control required">
				<!--</form>-->
			</div>
		</div>
		<div style="clear:both"></div>
		<div class="form-group">
			<label for="text" class="col-sm-3 control-label">E-Mail Address <span class="label label-danger">*</span></label>
			<div class="col-sm-5">
				<!--<form action="" method="get">-->
					<input type="text" name="ymail" class="form-control required">
				<!--</form>-->
			</div>
		</div><div style="clear:both"></div>
		<div id="author-form" class="form-group">
			<label for="text" class="col-sm-3 control-label">Number of CoAuthor <span class="label label-danger">*</span></label>
			<div class="col-sm-5">
				<!--<form action="" method="get">-->
					<input type="text" name="sayi" id="author-input" class="form-control required">
				<!--</form>-->
			</div>
		</div>
			<div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Manuscript Type <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<select id="section" name="manutype" class="form-control required">
						<option value="1.Research" selected="">1.Research</option>
						<option value="2.Review">2.Review</option>
						<option value="3.Erratum">3.Erratum</option>
						<option value="4.Letter tp the Editor">4.Letter tp the Editor</option>
					</select>
				</div><div style="clear:both"></div>
				<label for="text" class="col-sm-3 control-label">Manuscript Title <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<input type="text" name="mtitle" class="form-control required">
				</div>
				<div style="clear:both"></div>
				<label for="text" class="col-sm-3 control-label">Abstract <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<textarea name="abstract" class="form-control" rows="5" id="comment"></textarea>									
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Keywords <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<input type="text" name="keywords" class="form-control required">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">AMS Classification (AMS 2010) <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<input type="text" name="ams" class="form-control required">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Select to Editor <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<select id="section" name="editor" class="form-control required">
						<option value="Kazım ILARSLAN" selected="">Kazım ILARSLAN</option>
						<option value="Levent KULA">Levent KULA</option>
						<option value="Cihan ÖZGÜR">Cihan ÖZGÜR</option>
						<option value="Erdal ÖZÜSAĞLAM">Erdal ÖZÜSAĞLAM</option>
					</select>
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Comments to Editor <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<input type="text" name="comment" class="form-control required">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Validation Code </label>
				<div class="col-sm-5">
					<?php 
						@@session_start();
						$kod=$_SESSION['kod'];
						echo "<img src='capcta.php' style='margin-bottom:10px;'/>";
					?>
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Please Enter Validation Code Here <span class="label label-danger">*</span></label>
				<div class="col-sm-5">
					<input type="text" name="code" class="form-control required">
					
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group"> <!-- TEX,PDF -->
				<label for="ozet_doc" class="col-sm-3 control-label">Submit Manuscript File (File type tex, pdf)<span class="label label-danger">*</span></label>
					<div class="col-sm-9">
						<a class='btn btn-primary ' href='javascript:;'>Choose File
						<input type="file" accept=".tex, .pdf" name="ozet_doc" id="ozet_doc" class="form-control required_file" size="100" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  onchange='$("#upload-file-info").html($(this).val());'>
						</a>&nbsp;
						<span class='label label-info' id="upload-file-info"></span>										
					</div>
			</div><div style="clear:both"></div>
			<div class="form-group"> <!-- PDF -->
				<label for="ozet_pdf" class="col-sm-3 control-label">Submit Supplementary File (File type jpg,eps,png,pdf)<span class="label label-danger">*</span></label>
					<div class="col-sm-9">
						<a class='btn btn-primary ' href='javascript:;'>Choose File
							<input type="file" accept=".pdf, .jpg, .eps, .png" name="ozet_pdf" id="ozet_pdf" class="form-control required_file" size="100" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;'  onchange='$("#upload-file-info1").html($(this).val());'>
						</a>&nbsp;
						<span class='label label-info' id="upload-file-info1"></span>
					</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Suggested Reviewers (You must add at least three possible reviewers who are specialist on this topic) </label>
				<div class="col-sm-5">
					<!--<form action="">
					<input type="radio" name="onay" value="yes">Yes
					<input type="radio" name="onay" value="no" checked="checked">No
					</form>-->
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">1-Title, Name and Surname </label>
				<div class="col-sm-5">
					<input type="text" name="namesurname" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">E-Mail Address </label>
				<div class="col-sm-5">
					<input type="text" name="email" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Interest Field </label>
				<div class="col-sm-5">
					<input type="text" name="field" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">2-Title, Name and Surname </label>
				<div class="col-sm-5">
					<input type="text" name="ikinamesurname" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">E-Mail Address </label>
				<div class="col-sm-5">
					<input type="text" name="ikiemail" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Interest Field </label>
				<div class="col-sm-5">
					<input type="text" name="ikifield" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">3-Title, Name and Surname </label>
				<div class="col-sm-5">
					<input type="text" name="ucnamesurname" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">E-Mail Address </label>
				<div class="col-sm-5">
					<input type="text" name="ucemail" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label">Interest Field </label>
				<div class="col-sm-5">
					<input type="text" name="ucfield" class="form-control">
				</div>
			</div><div style="clear:both"></div>
			<div class="form-group">
				<label for="text" class="col-sm-3 control-label"> </label>
				<div class="col-sm-5">
					<input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;Send&nbsp;&nbsp;&nbsp;&nbsp;" class="btn btn-primary">
				</div>
			</div>
		</form>
		<?php
		error_reporting(0);
		if($_POST){
			$unvan=$_POST["title"];
			$isimsoyisim=$_POST["ynamesurname"];
			$kendimail=$_POST["ymail"];
			//Numberof Co Author kısmı
			$sayi=$_POST["sayi"];
			for($i=2; $i<$sayi+2;$i++){
				$coauthorns[]=$_POST["autorns".$i];
				$coauthormail[]=$_POST["mail".$i];
			}
			$manuscripttype=$_POST["manutype"];
			$manuscripttitle=$_POST["mtitle"];
			$abstract=$_POST["abstract"];
			$keywords=$_POST["keywords"];
			$ams=$_POST["ams"];
			$editor=$_POST["editor"];
			$comment=$_POST["comment"];
			$kntrl=$_POST['code'];
			
			$ozet_doc=$_FILES["ozet_doc"]["name"];
			$ozet_pdf=$_FILES["ozet_pdf"]["name"];
			$namesurname=$_POST["namesurname"];
			$email=$_POST["email"];
			$field=$_POST["field"];
			$ikinamesurname=$_POST["ikinamesurname"];
			$ikiemail=$_POST["ikiemail"];
			$ikifield=$_POST["ikifield"];
			$ucnamesurname=$_POST["ucnamesurname"];
			$ucemail=$_POST["ucemail"];
			$ucfield=$_POST["ucfield"];
			if(!$unvan || !$isimsoyisim || !$kendimail || !$manuscripttype || !$manuscripttitle || !$abstract || !$keywords || !$ams || !$editor || !$comment || !$kntrl || !$ozet_doc || !$ozet_pdf){
				echo "<script>alert('Boş alanları doldurunuz.')</script>";
				//Captha kontrol kısmı
				if($kntrl==$kod){
				echo "";
				}else{echo "<script>alert('Validation Code Error')</script>";}
			}else{
				$klasor="dosyalar";
				$zaman=time().rand();
				$zamaniki=time().rand();
				$uzanti=explode(".", $_FILES['ozet_doc']['name']);
				$uzanti=end($uzanti);
				$uzantiiki=explode(".", $_FILES['ozet_pdf']['name']);
				$uzantiiki=end($uzantiiki);
				$adi=$zaman.'.'.$uzanti;
				$adiiki=$zamaniki.'.'.$uzantiiki;
				move_uploaded_file($_FILES['ozet_doc']['tmp_name'], $klasor.'/'.$adi);
				move_uploaded_file($_FILES['ozet_pdf']['tmp_name'], $klasor.'/'.$adiiki);

				include("PHPMailerAutoload.php");
				$host="mail.iejgeo.com";
				$username="duyuru@iejgeo.com";
				$password="Erdalo10@";
				$mail = new PHPMailer();
				$mail->charset="UTF-8";
				
					echo $unvan." ".$isimsoyisim."</br> E-Mail: "
					.$kendimail."</br> Authors: ";
					for($i=0;$i<$sayi;$i++){echo $coauthorns[$i]." ";} echo"</br> Mail: ";
					for($i=0;$i<$sayi;$i++){echo $coauthormail[$i]." ";} echo"</br>Manuscript Type: "
					.$manuscripttype."</br> Manuscript Title: "
					.$manuscripttitle."</br> Abstract: "
					.$abstract."</br> Keywords: "
					.$keywords."</br> AMS Classification (AMS 2010): "
					.$ams."</br> Select to Editor: "
					.$editor."</br> Comments to Editor: "
					.$comment."</br> 1-Title, Name and Surname: "
					.$namesurname."</br> E-Mail Address: "
					.$email."</br> Interest Field: "
					.$field."</br> 2-Title, Name and Surname: "
					.$ikinamesurname."</br> E-Mail Address: "
					.$ikiemail."</br> Interest Field: "
					.$ikifield."</br> 3-Title, Name and Surname: "
					.$ucnamesurname."</br> E-Mail Address: "
					.$ucemail."</br> Interest Field: "
					.$ucfield;
					$body="deneme mesaj";
				$mail->SMTPAunth=true;
				$mail->Host=$host;
				$mail->username=$username;
				$mail->Password=$password;
				$mail->Port=587;
				$mail->SetFrom('furkan_kon@hotmail.com','Konu');
				$mail->Subject="Konu";
				$mail->AddAddress($username,'Furkan Konyalı');
				$mail->AddAttachment($klasor.'/'.$adi);
				$mail->MsgHTML($body);
				if($mail->Send()){
					echo "<script>alert('Mail gönderildi')</script>";
				}else{
					echo "<script>alert('Gönderilmedi. Hata')</script>";
				}
			}
		}
		//Veritabanı işlemleri
		//require("config.php");	
		//$sql="INSERT INTO yazarlar(id,yazarlar,ymail,baslik,editor,abstract,keywords,hakemler,mail) VALUES('','$json','$json2','')";

?>
		<!--</div>-->
	</div>
</body>
</html>
