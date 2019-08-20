<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <center>
        <div class="header">

            <div class="header_background">

                <span class="heading_txt">&nbsp;&nbsp;Heading Tag</span>



                <?php 
                   $h1 = $html->find('h1',0)->innertext;
                   if($h1==true){
                    echo   "<span class='good_txt'>Good </span>";
                }
                else{
                    echo   "<span class='bad_txt'>Bad </span>";
                } 
?>



                <span style="clear:both;">&nbsp;</span>

            </div>

            <table style="border-collapse: collapse;border:2px solid black;margin:25px;">
                <tr>
                    <th style="border:1px solid black;background-color:#E685EB;color:white;">Heading</th>
                    <th style="border:1px solid black;background-color:#E685EB;color:white;"> Lenght</th>
                </tr>

                <tr>
                    <td>H1</td>
                    </td>

                    <td>
                        <?PHP //find all h1
foreach($html->find('h1') as $i=> $element) {
    $h1 [$count++]= $element->plaintext;  
    }
    $num=count($h1);
    echo $num."<br>"; ?>
                    </td>

                </tr>
                <tr>
                    <td>H2</td>
                    </td>

                    <td><?php //find all H2
    foreach($html->find('h2') as $i=> $element) {
    $h2 [$count++]= $element->plaintext;  
    }
    $num2=count($h2);
    echo $num2."<br>";
    ?>
                    </td>

                </tr>
                <tr>
                    <td>H3</td>
                    </td>

                    <td><?php //find All H3
        foreach($html->find('h3') as $i=> $element) {
        $h3 [$count++]= $element->plaintext;  
    }
        $num3=count($h3);
        echo $num3."<br>";
        ?>
                    </td>

                </tr>

                <tr>
                    <td>H4</td>
                    </td>

                    <td><?php //find All H4
            foreach($html->find('h4') as $i=> $element) {
            $h4 [$count++]= $element->plaintext;  
            }   
                $num4=count($h4);
                echo $num4."<br>"; ?></td>


                </tr>
                <tr>
                    <td>H5</td>
                    </td>

                    <td><?php //find All H5
                    foreach($html->find('h5') as $i=> $element) {
                    $h5 [$count++]= $element->plaintext;  
                        }
                        $num5=count($h5);
                        echo $num5."<br>"; ?></td>

                </tr>

                <tr>
                    <td>H6</td>
                    </td>

                    <td><?php //find All H6
                                foreach($html->find('h6') as $i=> $element) {
                                 $h6 [$count++]= $element->plaintext;  
                            }
                                $num6=count($h6);
                                echo $num6."<br>"; ?></td>

                </tr>
            </table>

            <div class="footer">

                <span style="color:green;margin:120px;text-align:center;">
                    <?php 
 $h1 = $html->find('h1',0)->innertext;
if($h1==true){
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