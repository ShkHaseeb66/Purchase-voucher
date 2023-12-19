<?php
include("connection.php");
if(isset($_POST['submit'])){


$count = count($_POST['id']);

for($i=0; $i < $count ; $i++){ 
     $i_d = $_POST['id'][$i];
     $i_tem = $_POST['item'][$i];
     $Qty = $_POST['qty'][$i];
     $category = $_POST['category'][$i];
     $unit = $_POST['unit'][$i];
     $rate = $_POST['rate'][$i];
     $Gst = $_POST['gst'][$i];
     $total = $_POST['total'][$i];

     
        $sql="INSERT INTO voucher (item,Qty,category,unit,rate,gst,total) 
        VALUES ('$i_tem','$Qty','$category','$unit','$rate','$Gst','$total')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase-voucher</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

</head>
<body>
    <section style="margin-top:20px">
        <div class="container">
            <h1 class="heading">Purchase Voucher</h1>
            <div class="row">
                <div class="col-lg-8">
                   
                    <label for="date" >
                        DATE: MONTH/DAY/YEAR
                    </label>
                    <br>
                    <input type="date" style="padding: 10px" class="date-box" value="">
                </div>
                <div class="col-lg-2">
                    <label for="">PARTY</label>
                    <br>
                    <select name="" id=""class="form-control party" >
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                      </select>
                </div>
            </div>
            <form action="" method="post">
        <div class="container mb-3"  id="append" >
            <div class="row main-form" style="margin-top:20px ;">
            <div class="col-lg-1" style="border: 2px solid #fff; color:#ffff; font-weight:600">
                    <label for="">ID</label>
                    <input type="text" class="form-control id" name="id[]" id="id" value="1" readonly="">
            </div>
            <div class="col-lg-2 " style="border: 2px solid#fff;">
                    
                        <label for="" style="font-weight: 600; font-size: 20px;">Item</label>
                        <br>
                        <input type="text" name="item[]" id="item"  placeholder="Item" class="form-control">

                </div>


                <div class="col-lg-2"  style="border: 2px solid#fff;">

                    <label for="" class="qty">Qty</label>
                    <input type="text" class="form-control"name="qty[]" id="qty"  placeholder="Qty">
                        
                </div>
                
                <div class="col-lg-2" style="border: 2px solid#fff;">
                    <label for="" class="category">Category</label>
                    <input type="text" class="form-control" name="category[]" id="category"  placeholder="category">
                  </div>



                <div class="col-lg-1" style="border: 2px solid#fff;">
                            <label for="" class="unit">Unit</label>
                            <input type="text" class="form-control"name="unit[]" id="unit" placeholder="Unit">
                        
                        </div>
                         <div class="col-lg-1" style="border: 2px solid#fff;">
                            <label for="" class="rate">Rate</label>
                            <input type="text" class="form-control"name="rate[]" id="rate" placeholder="Rate">
                        
                        </div> <div class="col-lg-1" style="border: 2px solid#fff;">
                            <label for="" class="gst">GST%</label>
                            <input type="%" class="form-control"name="gst[]" id="gst" placeholder="Gst%">
                        
                        </div>
                        <div class="col-lg-1" style="border: 2px solid#fff;">
                            <label for="" class="total">Total</label>
                            <input type="text" class="form-control"name="total[]" id="total" placeholder="total">
                        
                        </div>
                        
                <div class="col-lg-1">
                     <button type="button" class="btn btn-success"  name="addrow" id="addrow" >
                      Add Row</button>
                 </div>
        </div>
       
        
        </div>
        <div>
            <button type="submit" class="btn btn-square btn-success col-12"
             name="submit" style="">
                Submit</button>
                </div>
        </div>
        </form>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstarp.min.js"></script>

<script>

varadrow=1;


    $("#addrow").click(function(){
        varadrow++;
        var length = $('.id').length;
        var i= parseInt (length) + parseInt(1);
        var newrow = $('#append').append('<div class="row main-form" id="row_'+varadrow+'" style="margin-top:20px ;">\
        <div  class="col-lg-1" style="border: 2px solid #fff; color:#ffff; font-weight:600">\
                    <label for="">ID</label>\
                    <input type="text" class="form-control id" name="id[]" id="id" value="'+varadrow+'" readonly="">\
                </div>\
                <div class="col-lg-2" style="border: 2px solid#fff;">\
                        <label for="" style="font-weight: 600; font-size: 20px;">Item</label>\
                        <br>\
                        <input type="text" name="item[]" id="item"  placeholder="Item">\
                </div>\
                <div class="col-lg-2"  style="border: 2px solid#fff;">\
                    <label for="" class="qty">Qty</label>\
                    <input type="text" class="form-control"name="Qty[]" id="qty"  placeholder="Qty">\
                </div>\
                <div class="col-lg-2" style="border: 2px solid#fff;">\
                    <label for="" class="category">Category</label>\
                    <input type="text" class="form-control" name="category[]" id="category"  placeholder="category">\
                </div>\
                    <div class="col-lg-1" style="border: 2px solid#fff;">\
                            <label for="" class="unit">Unit</label>\
                            <input type="text" class="form-control"name="unit[]" id="unit" placeholder="Unit">\
                        </div> <div class="col-lg-1" style="border: 2px solid#fff;">\
                            <label for="" class="rate">Rate</label>\
                            <input type="text" class="form-control"name="rate[]" id="rate" placeholder="Rate">\
                        </div> <div class="col-lg-1" style="border: 2px solid#fff;">\
                            <label for="" class="gst">GST%</label>\
                            <input type="%" class="form-control"name="gst[]" id="gst" placeholder="Gst%">\
                        </div>\
                        <div class="col-lg-1" style="border: 2px solid#fff;">\
                            <label for="" class="total">Total</label>\
                            <input type="text" class="form-control"name="total[]" id="total" placeholder="total">\
                        </div>\
            <div class="col-lg-1" id="row_${varaddrow}">\
                  <button type="button" class="btn btn-danger"  name="delete" id="delete" data-row="'+varadrow+'" class="removebtn">\
                   Delete Row</button>\
                  </div>\
            </div>\
        </div>\
        </div>\
        ');
       

        $(document).on("click", "#delete", function() {
        // $(this).closest(".main-form").remove();
        
         var row_id = $(this).attr('data-row');
            $("#row_"+row_id).remove();
        });


            });

            
  </script>
</body>
</html>