<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beli Pulsa Murah Meriah</title>
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    
    <script src="belip.js" type="text/javascript"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
   <form method="post"><label for="notelp">No Telp</label>
       <input type="text" name="notelp" class="telp" required="required"><br/>
       <div class="errtelp"></div>
       <label for="nominal">Nominal</label>
       <select name="nominal" id="nominal" required="required">
       <option class="no">Pilih</option>
       <option value="1" class="jh">Rp 3.000</option>
       <option value="2">Rp 5.000</option>
       <option value="3">Rp 10.000</option>
       <option value="4" class="jj">Rp 15.000</option>
       <option value="5">Rp 20.000</option>
       <option value="6">Rp 25.000</option>
       <option value="7" class="af">Rp 30.000</option>
      <option value="8" class="gg">Rp 40.000</option>
       <option value="9">Rp 50.000</option>
       <option value="10" class="po">Rp 60.000</option>
        <option value="11" class="wq">Rp 75.000</option>
       <option value="12">Rp 100.000</option>
       </select>
       <div class="errnomi"></div>
       <br/>
       <label for="bank">Metode Pembayaran</label>
       <select name="bank" id="bank" required="required">
       <option class="no">Pilih</option>
       <option value="101">BNI</option>
       <option value="101">PayPal</option>
       </select>
     <div class="errbank"></div>
       <button type="button" class="btn btn-primary klik">Beli Sekarang</button>
   </form> 
</body>
</html>