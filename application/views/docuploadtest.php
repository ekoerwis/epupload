<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Eplant:Upload File</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	<style>
	* {
		margin:0px;
		padding:0px;
		font-size:14px;
		font-family:Arial, Helvetica, sans-serif;
	}
	body {
		background:#fff;
	}
	
	#wrapper {
		width:950px;
		height:650px;
		margin:auto;
	}
	
	#wrapper #header h4{
		height:30px;
		padding-top:12px;
	}
	
	h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
	  color: #273238;
	  font-family: inherit;
	  font-weight: 500;
	  line-height: 1.2; }

	.h1, h1 {
	  font-size: 2.5rem; }

	.h2, h2 {
	  font-size: 2rem; }

	.h3, h3 {
	  font-size: 1.75rem; }

	.h4, h4 {
	  font-size: 1.5rem; }

	.h5, h5 {
	  font-size: 1.25rem; }

	.h6, h6 {
	  font-size: 1rem;
	  line-height: 1.4; }
	  
	 #wrapper #form {
		
		background-color:#FFFFCC;
		padding:20px;
	}
	
.form-style-2{
	padding: 20px 12px 10px 20px;
	overflow:hidden;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-2-heading{
	font-weight: bold;
	font-style: italic;
	border-bottom: 2px solid #ddd;
	margin-bottom: 20px;
	font-size: 15px;
	padding-bottom: 3px;
}
.form-style-2 label{
	display: block;
	margin: 0px 0px 15px 0px;
}
.form-style-2 label > span{
	width: 100px;
	font-weight: bold;
	float: left;
	padding-top: 8px;
	padding-right: 5px;
}
.form-style-2 span.required{
	color:red;
}
.form-style-2 .tel-number-field{
	width: 40px;
	text-align: center;
}
.form-style-2 input.input-field, .form-style-2 .select-field{
	width: 58%;	
}
.form-style-2 input.input-field, 
.form-style-2 .tel-number-field, 
.form-style-2 .textarea-field, 
 .form-style-2 .select-field{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	border: 1px solid #C2C2C2;
	box-shadow: 1px 1px 4px #EBEBEB;
	-moz-box-shadow: 1px 1px 4px #EBEBEB;
	-webkit-box-shadow: 1px 1px 4px #EBEBEB;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	padding: 7px;
	outline: none;
}
.form-style-2 .input-field:focus, 
.form-style-2 .tel-number-field:focus, 
.form-style-2 .textarea-field:focus,  
.form-style-2 .select-field:focus{
	border: 1px solid #0C0;
}
.form-style-2 .textarea-field{
	height:100px;
	width: 55%;
}
.form-style-2 input[type=submit],
.form-style-2 input[type=button]{
	border: none;
	padding: 8px 15px 8px 15px;
	background: #FF8500;
	color: #fff;
	box-shadow: 1px 1px 4px #DADADA;
	-moz-box-shadow: 1px 1px 4px #DADADA;
	-webkit-box-shadow: 1px 1px 4px #DADADA;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
}
.form-style-2 input[type=submit]:hover,
.form-style-2 input[type=button]:hover{
	background: #EA7B00;
	color: #fff;
}

#wrapper .form-style-2 .content_left{
		width:360px;
		float:left;
		padding-top:20px;
		padding-bottom:20px;
		background-color:#FF3366;
	}
#wrapper .form-style-2 .content_right{
		width:420px;
		float:right;
		padding-top:20px;
		padding-bottom:20px;
		background-color:#eaeaea;
	}
	
	#wrapper #footer {
		height:526px;
		background-color:#280e04;
		color:#FFFFFF;
		padding-top:14px;
		padding-left:15px;
		font-size:18px;
	}	
</style>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<h4 class="hk-pg-title">Upload File</h4>
    </div>
	
	
	<div id="form">
	<form action="<?php echo base_url();?>docupload/uploadSubmit" method="post" enctype="multipart/form-data">
		<label for="ID" class="col-sm-2 col-form-label">Doc Type</label>
		<input type="text" id="DOCTYPE"  class="form-control form-control-sm" name="DOCTYPE" value="<?php echo $doctype; ?>" placeholder="Doc Type" required readonly>
		<label for="ID" class="col-sm-2 col-form-label">Doc ID</label>
		<input type="text" id="DOCID"  class="form-control form-control-sm" name="DOCID" value="<?php echo $docid; ?>" placeholder="Doc ID" required readonly>
		<input type="file" name="fileUpload" id="fileUpload" onchange="setFileUploadName(this.value)" required>
		<input type="hidden" name="fileuploadname" id="fileuploadname" readonly><br>
		<button type="submit" id="submit" class="btn btn-teal btn-sm mr-10">Upload</button>
		<button type="button" class="btn btn-sm btn-neon mr-10" onClick='window.location.reload()'>Refresh</button>
	</form>
	</div>
	
	<div class="form-style-2">
		<div class="form-style-2-heading">Upload File</div>
		<form action="" method="post">
			<div class="content_left">
			<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
			<label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
			</div>
			<div class="content_right">
			<input type="file" name="fileUpload" id="fileUpload" onchange="setFileUploadName(this.value)" class="input-field" required>
			
			<label><span></span><input type="submit" value="Submit" /></label>
			</div>
		</form>
	</div>
	
	
	<div id="footer">
	<?php 
		if($content_table == "empty" or !isset($content_table)){
	?>
		<h5>No File Exist</h5>
	<?php 
		} else { 
	?>
		<table id="datable_1" class="table table-hover table-sm table-bordered w-100  pb-10">
			<thead>
				<tr class="text-center bg-teal">
					<th class="text-white">Nama File</th>
					<th class="w-200p text-white">Last Edit</th>
					<th class="w-125p text-white">Size</th>
					<th class="w-150p text-white">Action</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			foreach ($file_data as $row) { 
			?>
				<tr>
					<td> <?php echo $row["FILENAME"]; ?></td>
					<td class="text-left"> <?php echo $row["UPDATEDATE"]; ?> </td>
					<td class="text-right"> <?php echo $row["FILESIZE"]." KB"; ?> </td>
					<td class="text-center">  
						<a href="<?php echo base_url(); ?>DocUpload/download/<?php echo $row["ID"]; ?>"> Unduh </a>
						| 
						<a href=" <?php echo base_url(); ?>DocUpload/deleteFile/<?php echo $row["ID"]; ?>" onclick="return cekhapus()"> Hapus </a> 
					</td>
				</tr>
			<?php 
			} 
		} 
		?>
	</div>
</div>
<script type="text/javascript">
    function setFileUploadName(ish){
        
        var pos = ish.lastIndexOf("\\")+1;
        var filenameval = ish.slice(pos);
        
        document.getElementById("fileuploadname").value = filenameval;
    }


    function cekhapus() {
        tanya = confirm("Anda Yakin Akan Menghapus File Ini?");
        
        if (tanya == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
	<!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>
</body>
</html>