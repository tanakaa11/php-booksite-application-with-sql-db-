<?php
include_once 'header.php';
?>

<style>

  body{
  background-image: url(images/uwp2529892.jpeg);
  background-image: no-repeat;
 font-family: "Roboto", sans-serif;

  }

  .heading {
    text-align: center;
    font-size: 2.0em;
    letter-spacing: 1px;
    padding: 40px;
    color: white;
}

.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 350px;
  width: 250px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 350px;
  width: 250px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 5px;
  left: 20px;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}

.transparent-box {
  height: 350px;
  width: 250px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img { 
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}

.opacity-low {
  opacity: 0.5;
}


</style>



<html>
<head>
  <title>Bookstore</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
</head>
<body>
  <p class="heading">Books</p>
  <div class="gallery-image">
    <div class="img-box">
      <img src="images/OIP.jpg" alt=""  />
      <div class="transparent-box">
        <div class="caption">
          <p>The Book of UNSEEN WORLD</p>
          <p class="opacity-low">Jamilla Francis</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/R.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>The Lonely Grizzly</p>
          <p class="opacity-low">Moises Drakeford</p>
        </div>
      </div>
    </div>
     <div class="img-box">
      <img src="images/science-SMART-G1-textbk-cover-1.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Science Smart TextBook 1</p>
          <p class="opacity-low">David</p>
        </div>
      </div>
    </div>
     <div class="img-box">
      <img src="images/Cover Page.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Science Smart TextBook 1</p>
          <p class="opacity-low">David</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/9f3e67147f313c30d92111d862c5fcaa.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Superman</p>
          <p class="opacity-low">DC Comics</p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="images/Book.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>HEADKID</p>
          <p class="opacity-low">David Baddiel</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/Book2.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>DANDY</p>
          <p class="opacity-low">Harry Hills</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="images/Book3 (1).jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Bebe's Kids</p>
          <p class="opacity-low">Robin Harris'</p>
        </div>
      </div> 
    </div>
  </div>
</body>
</html>