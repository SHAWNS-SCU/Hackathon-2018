<?php
$conn = oci_connect("anagdev", "hackathon", "//dbserver.engr.scu.edu/db11g");
if ($conn){
  print "connected to Oracle";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $category = $_POST['category'];
  $subcategory = $_POST['subcategory'];
  $tag = $_POST['tag'];
  $post = $_POST['post'];
  $textfield = $_POST['textfield'];
  $title = $_POST['title'];
  $picture = $_POST['picture'];
  $geo = $_POST['geo'];
  $sql = oci_parse($conn, 'select CURRENT_TIMESTAMP from DUAL where :title = Title');
  oci_execute($sql);
  oci_fetch($sql);
  $time = oci_result($sql);

  $sql = oci_parse($conn, 'INSERT INTO Post (CommentID, Title, Category, Subcategory, tag, PostText, PictureSetID, UserID, GeoLocation, Upvotes, Downvotes, MyTime)
                              VALUES (:commentID, :title, :category, :subcategory, :tag, :postText, :pictureSetID, :userID, :geoLocation, :upvotes, :downvotes, :myTime)');
  oci_bind_by_name($sql, )



}
?>
