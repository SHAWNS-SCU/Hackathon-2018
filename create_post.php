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
  //$post = $_POST['post'];
  $textfield = $_POST['textfield'];
  $title = $_POST['title'];
  $picture = $_POST['picture'];
  $geo = $_POST['geo'];


  $sql = oci_parse($conn, 'select CURRENT_TIMESTAMP from DUAL');
  oci_execute($sql);
  $time = oci_fetch_array($sql)[0];


  $sql = oci_parse($conn, 'INSERT INTO Post (CommentID, Title, Category, Subcategory, tag, PostText, PictureSetID, UserID, GeoLocation, Upvotes, Downvotes, MyTime)
                              VALUES (:commentID, :title, :category, :subcategory, :tag, :postText, :pictureSetID, :userID, :geoLocation, :upvotes, :downvotes, :myTime)');
  oci_bind_by_name($sql, ":commentID", 0);
  oci_bind_by_name($sql, ":title", $title);
  oci_bind_by_name($sql, ":category", $category);
  oci_bind_by_name($sql, ":subcategory", $subcategory);
  oci_bind_by_name($sql, ":tag", $tag);
  oci_bind_by_name($sql, ":postText", $textfield);
  oci_bind_by_name($sql, ":pictureSetID", 0);
  oci_bind_by_name($sql, ":userID", 0);
  oci_bind_by_name($sql, ":geoLocation", 0);
  oci_bind_by_name($sql, ":upvotes", 0);
  oci_bind_by_name($sql, ":downvotes", 0);
  oci_bind_by_name($sql, ":myTime", $time);

  oci_execute($sql);


}
?>
