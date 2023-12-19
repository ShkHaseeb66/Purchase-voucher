<?php
include("connection.php");

 $sql = "SELECT * FROM voucher";
 $result = mysqli_query($conn, $sql);

 
 if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . " - Name: " . $row["item"] . " " . $row["Qty"] . " " . $row["Category"] . " " . $row["unit"] . " " . $row["rate"] . " " . $row["gst"] . " " . $row["total"] . "<br>";
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            <?php while($row = $result->fetch_assoc()){
                     $id = $row['id'];
                    $item = $row['item'];
                    $Qty = $row['Qty'];
                    $Category = $row['Category'];
                     $unit = $row['unit']; 
                     $rate = $row['rate']; $Gst = $row['gst'];
                    $total = $row['total'];
                    ?>
                <label >Item</label>
                <br>
                <input type="hidden" name="id" value="<?php $row["id"]?>">
                <select name="item" id="" style="width:100%" class="form-control" value="<?php $row["item"]?>">
              
                    <option value=""><?=$name?></option>
                </select>
            </div>
            <div class="col-lg-2">
                <label for="">Category</label>
                <br>
                <input type="text" class="form-control"  value="<?php $row["category"]?>">
            </div>
            <div class="col-lg-2">
                <label for="">Unit</label>
                <br>
                <input type="text" class="form-control" value="<?php $row["unit"]?>">
            </div><div class="col-lg-2">
                <label for="">Rate</label>
                <br>
                <input type="text" class="form-control" value="<?php $row["rate"]?>">
            </div><div class="col-lg-1">
                <label for="">GST%</label>
                <br>
                <input type="text" class="form-control" value="<?php $row["gst"]?>">
            </div><div class="col-lg-1">
                <label for="">Total</label>
                <br>
                <input type="text" class="form-control" value="<?php $row["total"]?>">
            </div>
        </div>
    </div>
    </section>
    <?php }?>

</body>
</html>

