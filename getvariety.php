<?php
  session_start();
?>
<?php
include "config.php";
$q = $_GET['q'];

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

    $sql = "SELECT varietyID,varietyName,harvestRate,varietyPic,price,name FROM variety,crop WHERE variety.cropID LIKE '$q' AND crop.cropID = variety.cropID";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                        // output data of each row
                    $row=".";
                        while($row = $result->fetch_assoc()) {
                            // echo "<br>". "Name: " . $row["varietyName"]. "<br>" . " harvestRate: ".$row["harvestRate"]."%"."<br>"."Current Price: ". $row["price"]. "<br>";
                            $variety_Path = $row["varietyPic"];
                            $varietyID = $row["varietyID"];
                            $name = $row["name"];
                            $_SESSION['cropName']="$name";
        
        ?>
        <div class="row">
            <form method = "GET" action ="4.php">
                
                <input type="image" src="<?php echo "$variety_Path"; ?>" onClick="myFunction();"  class = "tile" alt="Avatar" style="width:50%; height:50%; margin-bottom: 10px;"  />
                <input type="hidden" name="varietyID" value="<?php echo "$varietyID"; ?>">
            </form>
        <?php echo $row["varietyName"] ?><br><br><br><br>
        </div>

      <?php
            }
        } else {
            echo "No varietys found!";
            
        }
      
      
      
?>
<script>
                // function myFunction() {
                //     alert(' <?php echo $row["varietyID"] ?>');
                //     $_SESSION['variety_ID']="$varietyID";
                //     $_SESSION['cropName']="$name";
                    
                //     // window.open("4.php");
                //     // this.exit;
                // }


</script>
