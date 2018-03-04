
//Given Disaster Name
<?php
  //start session
  start_session();
?>

<?php
  $conn = oci_connect("anagdev", "hackathon", "//dbserver.engr.scu.edu/db11g");

  $sql = oci_parse($conn, 'SELECT CommentID, Title, Category, Subcategory, Tag, MyTime, Upvotes, Downvotes FROM DisasterList, Post WHERE Name = :name AND ID = DisasterID');
  oci_bind_by_name($sql, ":name", $_SESSION['name']);
  oci_execute($sql);
  while ($entry = oci_fetch_array($sql)){
    $commentID[] = $entry[0];
    $title[] = $entry[1];
    $category[] = $entry[2];
    $subcategory[] = $entry[3];
    $tag[] = $entry[4];
    $mytime[] = $entry[5];
    $Upvotes[] = $entry[6];
    $Downvotes[] = $entry[7];
  }
?>

//Given |DisasterName| and |Category|
<?php
  start_session();
?>

<?php

  $conn = oci_connect("anagdev", "hackathon", "//dbserver.engr.scu.edu/db11g");

  $sql = oci_parse($conn, 'SELECT CommentID, Title, Category, Subcategory, Tag, MyTime, Upvotes, Downvotes FROM DisasterList, Post WHERE Name = :name AND ID = DisasterID AND Category = :category');
  oci_bind_by_name($sql, ":name", $_SESSION['name']);
  oci_bind_by_name($sql, ":category", $_SESSION['category']);
  oci_execute($sql);
  while ($entry = oci_fetch_array($sql)){
    $commentID[] = $entry[0];
    $title[] = $entry[1];
    $subcategory[] = $entry[2];
    $tag[] = $entry[3];
    $mytime[] = $entry[4];
    $Upvotes[] = $entry[5];
    $Downvotes[] = $entry[6];
  }
?>

//Given |CommentID|
<?php
  start_session();
?>

<?php

  $conn = oci_connect("anagdev", "hackathon", "//dbserver.engr.scu.edu/db11g");

  $sql = oci_parse($conn, 'SELECT Title, Category, Subcategory, Tag, MyTime, Upvotes, Downvotes, PostText, PictureSetID, UserID, GeoLocation FROM DisasterList, Post WHERE Name = :name AND ID = DisasterID AND Category = :category');
  oci_bind_by_name($sql, ":name", $_SESSION['name']);
  oci_bind_by_name($sql, ":category", $_SESSION['category']);
  oci_execute($sql);
  while ($entry = oci_fetch_array($sql)){
    $commentID[] = $entry[0];
    $title[] = $entry[1];
    $subcategory[] = $entry[2];
    $tag[] = $entry[3];
    $mytime[] = $entry[4];
    $upvotes[] = $entry[5];
    $downvotes[] = $entry[6];
    $postText[] = $entry[7];
    $pictureSetID = $entry[8];
    $userID = $entry[9];
    $geoLocation = $entry[10];
  }
?>
