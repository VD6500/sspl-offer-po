<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <title>OFFER</title>
        <style>
            table,tr,th, td{
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="container" style="border: 4px solid;">
            <div class="container" style="padding: 2px; border: 2px solid;margin: 2px;text-align: center;font-size: 12PX;">
                <!--<p style="text-align: center;font-size: 12PX;">-->
                <div class="row" >
                    <div class="col " style="padding: 10px;margin:1px; font-size: 12PX;">
                        <strong style="font-size: 18PX;">
                        SUDHIR SWITCHGEARS PVT LTD
                        </strong>
                    </div>
            
                    <div class="col" style="padding: 10px;margin:1px; font-size: 12PX;">
                        305/6,APEEJAY HOUSE,
                        130. MUMBAI SAMACHAR MARG,FORT
                        MUMBAI,MAHARASHTRA-400023,INDIA<br>
                        GSTIN/27AAACS5777R1ZF<br>
                        
                        EMAIL:
                        <a href = "mailto: joe@sudhirswitchgears.com">
                            joe@sudhirswitchgears.com
                        </a>
                        <!--</p>-->
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px;border: 2px solid;margin:1px; font-size: 11PX;">
                <div class="col">
                    Our Ref no:    <strong style="font-size: 10PX;"> <?php echo $_GET["ref"]; ?></strong><br>
                </div>
                <div class="col" style="text-align: right;">
                    Date:           <strong style="font-size: 10PX;"><?php echo $_GET["date"]; ?></strong><br>
                </div>
            </div>
            <div  >
            <p style="padding: 10px;font-size: 12PX;border: 2px solid;margin:1px;"><!--<div class="col-5">
                    M/s:-  <strong style="font-size: 10PX;"><?php echo $_GET["ms"]; ?></strong>
                </div>
                <div class="col">                
                    Location:       <strong style="font-size: 08PX;"><#?php echo $_GET["loca"]; ?></strong>
                </div>
                <div class="col">
                    Mr. / Ms.       <strong style="font-size: 08PX;"><#?php echo $_GET["mrms"]; ?></strong>
                </div>
                <div class="col">
                    Cell No:        <strong style="font-size: 08PX;"><#?php echo $_GET["cell"]; ?></strong>
                </div>-->
                M/s:-  <strong ><?php echo $_GET["ms"]; ?></strong>&nbsp;
                Location:       <strong ><?php echo $_GET["loca"]; ?></strong>&nbsp;
                Mr. / Ms.       <strong ><?php echo $_GET["mrms"]; ?></strong>&nbsp;
                Cell No:        <strong >+91-<?php echo $_GET["cell"]; ?></strong>
            </p>    
            </div>
            <div >
                <p style="padding: 10px;font-size: 12PX;border: 2px solid;margin:1px;">
                        <strong > 
                            SUB: OFFER FOR RELAYS
                        </strong>
                        <br>
                        <strong> 
                            REF: YOUR ENQ/TENDER NO :&nbsp;<?php echo $_GET["yref"]; ?> &nbsp;
                            dt:             <?php echo $_GET["dt"]; ?>&nbsp;
                            <!--Total-items: <?php echo $_GET["v"]; ?>-->
                            Total item:<input id="item" type="number" value="0" onkeyup="number()">
                        </strong>
                
                </p>
        </div>
        
        <div style="padding: 10px;border: 2px solid;margin:2px;font-size: 12PX;">    
            <div contenteditable="true">
                    DEAR SIR/ MADAM,<br>
                    THANKS FOR YOUR ENQUIRY FOR <strong>GE</strong> MAKE (FORMALY ALSTOM/AREVA) RELAYS & ARE PLEASED TO QUOTE AS UNDER:
                    <div style="padding: 00px;border: 0px solid;margin:0px;font-size: 12PX;"contenteditable="true"id="demo">
                        <script>
                            let text = "";
                            function number()
                            {
                            
                            
                            var x = document.getElementById("item").value;
                            var sum=0;
                            for (let i = 0; i < x;i++) {
                                var m=prompt("MODEL","VAJH13");
                                var q=prompt("QUANTITY","01");
                                var add=parseInt(prompt("Price","4080"));
                                var d=prompt("DELIVERY","4-6 WKS/ EXSTOCK");
                            //text += "<strong>"+(i+1) +" <#?php #echo $_GET[$a+$I]; ?>  </strong> Relay as per below specs.. <strong><#?php #echo //$_GET["quan"]; ?></strong> unit <strong>Price Rs. <#?php #echo $_GET["pri"]; ?>/- <#?php #echo $_GET["deli"]; ?></strong><br>";
                            sum=(sum+add);
                            text+="<strong>"+(i+1)+"."+m+"</strong> Relay as per below specs.. <strong>"+q+"</strong> unit <strong>Price Rs. "+ add +"/- "+d+" </strong><br>";
                                
                            }
                            text+="<strong>TOTAL SUM="+sum+"/-<strong>";
                            document.getElementById("demo").innerHTML = text;
                           
                        }
                        </script>
 <!--<#?php
$conn = mysqli_connect("localhost", "root", "","sspl");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$v='vajh13yf0000bba';
$sql = "SELECT * FROM `i30` where `model no`='".$v."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row['model no'] ."<br> ".$row['des1'] ."<br> ".$row['type']."<br> ".$row['case size']."<br> ".$row['application']."<br> ".$row['aux_current_voltage']."<br> ".$row['contacts']."<br> ".$row['total burden']." <br>".$row['flag']."<br> ".$row['mounting']."<br> ".$row['name plate']."<br> ".$row['outline drawing']."<br>".$row['writing diagram']."<br><br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>   -->                        
                    </div >
                    </div>               
        </div>
        <div class="row" style="text-align:left;font-size: 12PX;">
            <div class="col">
                <p style="margin:2px;font-size: 12PX;text-align: left;"contenteditable="true">
                    <strong>TERMS & CONDITION</strong><br> 
                    PRICES   : <?php echo $_GET["price"]; ?><br>
                    DELIVERY : AS ABOVE :-EX-STOCK ITEM ARE SUBJECT TO PRIOR SALES<br>
                    TAX      : GST 18% EXTRA AS APPLICABLE.<br>
                    DISCOUNT : LESS <?php echo $_GET["disc"]; ?>% ON ABOVE PRICES.<br>
                    INSURENCE: IN YOUR SCOPE ; YOU HAVE TO INSURE THE CONSIGNMENT IF REQUIRED.
                </p>
                
                <strong>BEST REGARDS,<br>
                    JOE FERNANDES.<br>
                    Cell     : 09324287650
                </strong>
            </div>
            <div class="col">
                <p style="margin:2px;font-size: 12PX;text-align: left;"contenteditable="true">
                    <br>PAYMENT  : <?php echo $_GET["pay"]; ?><br>
                    VALIDITY : <?php echo $_GET["validity"]; ?><br>
                    HSNCODE  : 85364900<br>
                    PLEASE FEEL FREE TO CONTACT US FOR ANY CLARIFICATION REQUIRED. 
                    LOOKING FORWARD FOR YOUR VALUED ORDER.
                </p> 
            </div>
        </div>
    </div>
</body>
</html>