<!DOCTYPE html>
<html lang='en'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Log in</title>
	<!--<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
		<meta charset="UTF-8"> -->
	<title>My awesome CMS</title>
	<!-- Bootstrap -->
	<link href="http://localhost/ci/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/ci/css/admin.css" rel="stylesheet">
	<link href="http://localhost/ci/css/datepicker.css" rel="stylesheet">
		
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="http://localhost/ci/js/bootstrap.min.js"></script>
	<script src="http://localhost/ci/js/bootstrap-datepicker.js"></script>
		
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- TinyMCE -->
	<script type="text/javascript" src="http://localhost/ci/js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
		});
	</script>
	<!-- /TinyMCE -->
</head>

<body style="background: #555;">

	<div class="modal show" role="dialog">
		

<div class="modal-body">