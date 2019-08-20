<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<center>

<?php include('dom.php');?>
    <form action="" method="post">
    <div class="enter_url" style="height:50px;width:70%;margin-top:50px;">
    
    <input type="text" name="web" placeholder="Website URL" size="45" style="height:30px;width:70%;" pattern="https://.*" required>

<button value="Analyise" style="background-color:skyblue;height:30px;">Analyise</button>
    </div>

    <?php
include 'title-tag.php';
include 'meta-description.php';
include 'headingcheck.php'; 
?>
    </form>
    
<br/>
</center>
</body>
</html>