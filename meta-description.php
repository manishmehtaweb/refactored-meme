<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <center>
        <div class="header">

            <div class="header_background">

                <span class="heading_txt">&nbsp;&nbsp;Meta Description</span>



                <?php 
                   $meta_description=array();
                   $meta_description = $html->find("meta[name='description']", 0)->content;

                   if($meta_description==true){
                    echo   "<span class='good_txt'>Good </span>";
                }
                else{
                    echo   "<span class='bad_txt'>Bad </span>";
                } 
?>



                <span style="clear:both;">&nbsp;</span>

            </div>

            <p class='title_result'>
                <?php
if($meta_description==true){
    echo   $meta_description;
}
else{
    echo   "Meta Descriptoin Not Found! ";
} 
?>
            </p>

            <table style="border-collapse: collapse;">

                <tr style="border:1px solid black;border-collapse: collapse;">
                    <td style="border:1px solid black;">Length &nbsp;&nbsp;</td>
                    <td><?php echo strlen($meta_description);  ?> &nbsp;&nbsp;</td>
                </tr>

            </table>

            <div class="footer">

                <span style="color:green;margin:120px;text-align:center;">
                    <?php if($meta_description==true){
    echo   "Well Done!";
}
else{
    echo "<span style='color:red;'>Error</span>";
} 
?>
                </span>
                <span style="clear:both;">&nbsp;</span>
            </div>

        </div>
    </center>
</body>

</html>