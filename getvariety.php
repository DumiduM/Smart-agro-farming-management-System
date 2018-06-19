<?php
include "config.php";
$q = $_GET['q'];

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

    $sql = "SELECT varietyID,varietyName,harvestRate,varietyPic,price FROM variety WHERE cropID LIKE '$q'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                        // output data of each row
                    $row=".";
                        while($row = $result->fetch_assoc()) {
                            // echo "<br>". "Name: " . $row["varietyName"]. "<br>" . " harvestRate: ".$row["harvestRate"]."%"."<br>"."Current Price: ". $row["price"]. "<br>";
                            $variety_Path = $row["varietyPic"];
        
        ?>
        <div class="row">
        <input type="image" src="<?php echo "$variety_Path"; ?>" onClick="alert(' <?php echo $row["varietyID"] ?>');"  class = "tile" alt="Avatar" style="width:50%; height:50%; margin-bottom: 10px;"  />
        <?php echo $row["varietyName"] ?><br><br><br><br>
        </div>

      <?php
            }
        } else {
            echo "No varietys found!";
            
        }
      
      
      $_SESSION['variety_ID']="001";
?>