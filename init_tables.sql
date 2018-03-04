CREATE TABLE DisasterList (
      ID    NUMBER(38) PRIMARY KEY,
      Name VARCHAR(35) UNIQUE,
      nCommentID NUMBER,
      nPictureSetID NUMBER,
      nPictureID NUMBER
);

CREATE TABLE Post (
  CommentID NUMBER(38) PRIMARY KEY,
  DisasterID NUMBER(38) PRIMARY KEY,
  Title VARCHAR(35),
  Category VARCHAR(35),
  Subcategory VARCHAR (35),
  tag VARCHAR (35),
  PostText VARCHAR(1000),
  PictureSetID NUMBER(38),
  UserID NUMBER(38),
  GeoLocation VARCHAR (21),
  Upvotes NUMBER (5),
  Downvotes NUMBER (5),
  MyTime TIMESTAMP
);

CREATE TABLE Pictures (
  ID NUMBER(38) PRIMARY KEY,
  SetID NUMBER (38),
  image BLOB
);
