<?php
    require_once('connect.php');
    //把传递过来的信息入库，在入库之前对所有信息进行校验。
    //print_r($_POST);
    if (!(isset($_POST['title'])&&(!empty($_POST['title'])))) {
    	echo '{"必须填写标题"}';
    }
    if (!(isset($_POST['tag'])&&(!empty($_POST['tag'])))) {
    	echo '{"必须填写标签"}';
    }
    if (!(isset($_POST['question'])&&(!empty($_POST['question'])))) {
    	echo '{"必须填写内容"}';
    }
    $title = $_POST['title'];
    $tag = $_POST['tag'];
    $username = $_POST['username'];
    $question = $_POST['question'];
    $dateline = time();
    $insertsql = "insert into question(title,tag,username,question,dateline) values('$title','$tag','$username','$question','$dateline')";
    if($mysqli->query($insertsql)){
    	echo "<script>alert('问题发布成功');window.location.href='ask.html';</script>";
    }else{
    	"<script>alert('问题发布失败');window.location.href='ask.html';</script>";
    }
    