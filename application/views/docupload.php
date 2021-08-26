<html>

<head>
    <title>Upload File Eplant</title>

    <style>
        body {
          /*background-color: #f8f9fa;*/
/*
          font-size: 16px;*/
          font-style: normal;
          font-weight: 400;
          font-family: "poppins", sans-serif; 
          /*font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";*/
          line-height: 1.5;
         
          overflow-x: hidden;
            }

        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
          color: #273238;
          font-family: inherit;
          font-weight: 500;
          line-height: 1.2; 
      }

      .clearfix::after {
        content: "";
        clear: both;
        display: table;
        }

      .div-w-50 {
          width: 49%;
          float: left;
          padding-top: 10px;
        }

        .div-w-70 {
          width: 69%;
          float: left;
          padding-top: 10px;
        }

        .div-w-30 {
          width: 29%;
          float: left;
          padding-top: 10px;
        }

        .div-w-80 {
          width: 79%;
          float: left;
          padding-top: 10px;
        }

        .div-w-20 {
          width: 19%;
          float: left;
          padding-top: 10px;
        }

        

        .container-fluid {
          width: 95%;

          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
        }

        .title-form {
          width: 95%;

          padding-right: 15px;
          padding-left: 15px;
          margin-right: auto;
          margin-left: auto;
        }        

        .kotakabu1 {
            border: 1px solid #ccc;
        }

        .kotakabu2 {
            border: 2px solid #ccc;
        }

        .kotakabu3 {
            border: 3px solid #ccc;
        }

        input[type=text], select {
          width: 100%;
          display: inline-block;
          border: 2px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          padding-left: 5px;
          font-size:16px;
        }

         label {
          width: 100%;
          padding-left: 5px;
          font-size:18px;
        }

        .tbl-upload {
            background-color: #009b84;
            border: none;
            color: white;
            padding: 6px 8px;
            margin: 4px 2px;
            cursor: pointer;
            font-size:14px;
            font-weight: bold;
        }

        .tbl-refresh {
            background-color:#88c241;
            border: none;
            color: white;
            padding: 6px 8px;
            margin: 4px 2px;
            cursor: pointer;
            font-size:14px;
            font-weight: bold;
        }


        .tbl-delete {
            background-color:#6c757d;
            border: none;
            color: white;
            padding: 6px 8px;
            margin-top: 5px;
            margin-left: 10px;
            margin-bottom: -10px;
            cursor: pointer;
            font-size:14px;
            font-weight: bold;
        }

        .tbl-unduh {
            background-color:#4CAF50;
            border: none;
            color: white;
            padding: 6px 8px;
            margin-top: 5px;
            margin-left: 10px;
            margin-bottom: -10px;
            cursor: pointer;
            font-size:14px;
            font-weight: bold;
        }

        #table1 {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 90%;
      margin:auto;

    }

        #table1 th {
            padding: 8px;
            text-align: center;
            background-color:#009b84;
            color: white;
        }

        #table1 td, #table1 th {
          border: 1px solid #ddd;
          }

        #table1 tr {
          border: 1px solid #ddd;
          padding:2px;
        }

        #table1 td {
          padding-left: 5px;
          padding-bottom: 0px; 
        }


        #table1 tr:nth-child(even){background-color: #f2f2f2;}

        #table1 tr:hover {background-color: #ddd;}

        
   



</style>
</head>

<body>
<div class="title-form ">

    <img src="<?php echo base_url();?>images/open-in-browser.png" style="width:24px;height:24px; float: left; margin-top:auto; margin-right: 10px;" > 
    <h2>Upload File</h2>
</div>
    
<div class="container-fluid kotakabu2" >
    

        <form action="<?php echo base_url();?>docupload/uploadSubmit" method="post" enctype="multipart/form-data">
            <div class="clearfix">
                <div class="div-w-50 ">
                    <div class="clearfix">
                        <div class="div-w-20 ">
                            <label for="type" >Doc Type</label>
                        </div>
                        <div class="div-w-80 ">
                            <input type="text" id="DOCTYPE" name="DOCTYPE" value="<?php echo $doctype; ?>" placeholder="Doc Type"  required readonly>
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="div-w-20 ">
                            <label for="ID">Doc ID</label>
                        </div>
                        <div class="div-w-80 ">
                            <input type="text" id="DOCID" name="DOCID" value="<?php echo $docid; ?>" placeholder="Doc ID" required readonly>
                        </div>
                    </div>
                </div>


                 <div class="div-w-50 ">
                    <div class="clearfix">
                        <div class="div-w-20 ">
                            <label for="docum">Pilih File</label>
                        </div>
                        <div class="div-w-80 ">
                            <input type="file" name="fileUpload" id="fileUpload" onchange="setFileUploadName(this.value)" required>
                            <input type="hidden" name="fileuploadname" id="fileuploadname" required readonly>   
                        </div>
                    </div>

                    <div class="clearfix">
                        <div class="div-w-20 ">
                            <label for="ID"> </label>
                        </div>
                        <div class="div-w-80 ">
                            <button type="submit" name="submitupload" id="submit"  class="tbl-upload">Upload</button>
                            <button type="button" name="refreshbutton" class="tbl-refresh" onClick='window.location.reload()'>Refresh</button>
                        </div>
                    </div>
                </div>

                
            </div>
        </form>

    
</div>

<div style="margin-top: 10px;" >

        <?php if($content_table == "empty" or !isset($content_table)){ ?>
          <div style="width:90%; text-align: center;">
           <h3>No File Exist</h3> 
         </div>
        <?php } else { ?>
            <table id="table1" >
                        <thead>
                            <tr >
                                <th>Nama File</th>
                                <th width="17%">Last Edit</th>
                                <th width="10%">Size</th>
                                <th style="width: 160px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($file_data as $row) { ?>
                            <tr>
                                <td> <?php echo $row["FILENAME"]; ?></td>
                                <td> <?php echo $row["UPDATEDATE"]; ?> </td>
                                <td style="text-align: right;"> <?php echo $row["FILESIZE"]." KB"; ?> </td>
                                <td>  
                                <div style= "float : left;">
                                    <form action="<?php echo base_url();?>DocUpload/download/<?php echo $row["ID"]; ?>" method="post">
                                        <input type = "hidden" name="ID" value="<?php echo $row["ID"]; ?>" >
                                        <input type="submit" name="delete" value ="Unduh" class="tbl-unduh">
                                    </form>
                                </div>
                                <div style= "float : left;">
                                    <form action="<?php echo base_url();?>DocUpload/deleteFile" method="post">
                                        <input type = "hidden" name="ID" value="<?php echo $row["ID"]; ?>" >
                                        <input type="submit" name="delete" value ="Hapus" class="tbl-delete" onclick="return cekhapus()">
                                    </form>
                                </div>
                                </td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>


        <?php } ?>

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