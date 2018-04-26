 <?php date_default_timezone_set('Asia/Ho_Chi_Minh'); ?>   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Quản trị</title>
<!--     <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>  -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/bootstrap-tagsinput.css" rel="stylesheet">
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
  <script src="dist/jquery.table2excel.min.js"></script>
<script src="js/bootstrap-tagsinput.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- <link rel="stylesheet" href="dist/summernote.css">
  <script type="text/javascript" src="dist/summernote.min.js"></script>
  <script type="text/javascript">
       $(function() {
      $('.summernote').summernote({
        height: 200
      });
    });
  </script> -->
    <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">

function BrowseServer( startupPath, functionData )
{
  // You can use the "CKFinder" class to render CKFinder in a page:
  var finder = new CKFinder();

  // The path for the installation of CKFinder (default = "/ckfinder/").
  finder.basePath = '../';

  //Startup path in a form: "Type:/path/to/directory/"
  finder.startupPath = startupPath;

  // Name of a function which is called when a file is selected in CKFinder.
  finder.selectActionFunction = SetFileField;

  // Additional data to be passed to the selectActionFunction in a second argument.
  // We'll use this feature to pass the Id of a field that will be updated.
  finder.selectActionData = functionData;

  // Name of a function which is called when a thumbnail is selected in CKFinder.
  finder.selectThumbnailActionFunction = ShowThumbnails;

  // Launch CKFinder
  finder.popup();
}

// This is a sample function which is called when a file is selected in CKFinder.
function SetFileField( fileUrl, data )
{
  document.getElementById( data["selectActionData"] ).value = fileUrl;
}

// This is a sample function which is called when a thumbnail is selected in CKFinder.
function ShowThumbnails( fileUrl, data )
{
  // this = CKFinderAPI
  var sFileName = this.getSelectedFile().name;
  document.getElementById( 'thumbnails' ).innerHTML +=
      '<div class="thumb">' +
        '<img src="' + fileUrl + '" />' +
        '<div class="caption">' +
          '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
        '</div>' +
      '</div>';

  document.getElementById( 'preview' ).style.display = "";
  // It is not required to return any value.
  // When false is returned, CKFinder will not close automatically.
  return false;
}

  </script>