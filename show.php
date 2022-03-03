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
            <div class="row" style="padding: 10px;border: 2px solid;margin:1px; font-size: 14PX;">
                <div class="col">
                    Our Ref no:    <strong style="font-size: 12PX;"> <?php echo $_GET["ref"]; ?></strong><br>
                </div>
                <div class="col" style="text-align: right;">
                    Date:           <strong style="font-size: 12PX;"><?php echo $_GET["date"]; ?></strong><br>
                </div>
            </div>
            <div class="row" style="padding: 10px;font-size: 14PX;border: 2px solid;margin:2px;">
                <div class="col">
                    M/s:-           <strong style="font-size: 12PX;"><?php echo $_GET["ms"]; ?></strong>
                </div>
                <div class="col">                
                    Location:       <strong style="font-size: 12PX;"><?php echo $_GET["loca"]; ?></strong>
                </div>
                <div class="col">
                    Mr. / Ms.       <strong style="font-size: 12PX;"><?php echo $_GET["mrms"]; ?></strong>
                </div>
                <div class="col">
                    Cell No:        <strong style="font-size: 12PX;"><?php echo $_GET["cell"]; ?></strong>
                </div>
            </div>
            <div class="row"style="padding: 5px;border: 2px solid;font-size: 12PX;margin:2px;">
                <div class="col">
                        <strong> 
                            SUB: OFFER FOR RELAYS
                        </strong>
                        <br>
                        <strong> 
                            REF: YOUR ENQ/TENDER NO :&nbsp;<strong style="font-size: 12PX;"> <?php echo $_GET["yref"]; ?></strong> &nbsp;
                            dt:             <strong style="font-size: 12PX;"><?php echo $_GET["dt"]; ?></strong>&nbsp;
                            Total item:
                        <input id="item" type="number" value="3" onkeyup="number()">
                    </strong>
                
            </div>
        </div>
        <div class="row"style="padding: 10px;border: 2px solid;margin:2px;font-size: 12PX;">
            <div class="col">
                
                    
                    DEAR SIR/ MADAM,<br>
                    THANKS FOR YOUR ENQUIRY FOR <strong>GE</strong> MAKE (FORMALY ALSTOM/AREVA) RELAYS & ARE PLEASED TO QUOTE AS UNDER:
                    <p style="padding: 10px;border: 2px solid;margin:2px;font-size: 12PX;"contenteditable="true"id="demo"></p>
                        <script>
                            function number()
                            {
                            let text = "";
                            var x = document.getElementById("item").value;

                            for (let i = 0; i < x;i++) {
                            text += (i+1) +"<strong> VAJH13</strong> Relay as per below specs.. <strong>14 Nos.</strong> unit <strong>Price Rs. 2990/- 4-6 WKS/ EXSTOCK</strong><br>";
                            }
                            document.getElementById("demo").innerHTML = text;
                        }
                        </script>
                        
                        <br>
                        <br>
                    </p>   
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