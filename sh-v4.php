<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <title>OFFER</title>
        
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
                            akshay@sudhirswitchgears.com
                        </a>
                       
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px;border: 2px solid;margin:1px; font-size: 11PX;"  contenteditable="true">
                <div class="col" style="contenteditable="true">
                    Our Ref no:    <strong style="font-size: 12PX;"> <?php echo $_GET["ref"]; ?></strong><br>
                </div>
                <div class="col" style="text-align: right;"contenteditable="true"">
                    Date:           <strong style="font-size: 12PX;"><?php echo $_GET["date"]; ?></strong><br>
                </div>
            </div> 
            <div contenteditable="true">
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
                            SUB: OFFER FOR FLAMEPROOF/WEATHERPROOF EQUIPMENTS
                        </strong>
                        <br>
                        <strong> 
                            REF: YOUR ENQ/TENDER NO :&nbsp;<?php echo $_GET["yref"]; ?> &nbsp;
                             dt: <?php echo $_GET["dt"]; ?>&nbsp;
                           Total item:<input id="item" type="number" value="0" onkeyup="number()">
                        </strong>
                
                </p>
        </div>
        
        <div style="padding: 10px;border: 2px solid;margin:2px;font-size: 12PX;">    
            <div contenteditable="true">
                    DEAR SIR/ MADAM,<br>
                    THANKS FOR YOUR ENQUIRY FOR <strong>SUDHIR</strong> MAKE <strong>FLAMEPROOF/WEATHERPROOF EQUIPMENTS</strong>, WE ARE PLEASED TO QUOTE AS UNDER:
                     <div style="padding: 00px;border: 0px solid;margin:0px;font-size: 12PX;"contenteditable="true"id="demo">
                        <script>
                            let text = "";
                            function number()
                            {
                            
                            
                            var x = document.getElementById("item").value;
                            var sum=0;
                            for (let i = 0; i < x;i++) {
                                var m=prompt("PRODUCT for item no:"+(i+1),"WELL GLASS");
                                var q=prompt("QUANTITY for item no:"+(i+1),"01");
                                var add=parseInt(prompt("UNIT PRICE for item no:"+(i+1),"5000"));
                                var d=prompt("HSN CODE for item no:"+(i+1),"82590000");
                            //text += "<strong>"+(i+1) +" <#?php #echo $_GET[$a+$I]; ?>  </strong> Relay as per below specs.. <strong><#?php #echo //$_GET["quan"]; ?></strong> unit <strong>Price Rs. <#?php #echo $_GET["pri"]; ?>/- <#?php #echo $_GET["deli"]; ?></strong><br>";
                            
                            sum=(sum+(add*q));
                            text+="<strong>"+(i+1)+". "+d+"<br>"+m+"</strong> Product as per below specs.. <strong>"+q+"</strong> qty <strong>Unit Price Rs. "+ add +"/- ITEM SUMMATION Rs. "+(add*q)+"/- </strong><br>";
                                
                            }
                            text+="<strong><strong>TOTAL SUM="+sum+"/-</strong></strong>";
                            document.getElementById("demo").innerHTML = text;
                           
                        }
                        </script>
                       
                    </div >
                    </div>               
        </div>
        <div class="row" style="text-align:left;font-size: 12PX;">
            <div class="col">
                <p style="margin:2px;font-size: 12PX;text-align: left;"contenteditable="true"">
                    <strong>TERMS & CONDITION</strong><br> 
                    PRICES   : PRICES EX OUR WORKS.<br>
                    PACKING & FORWARDING  : WILL BE CHARGED EXTRA @ 3% .<br>
		    FREIGHT : TO PAY <br> 
                    TAX      : GST 18% EXTRA AS APPLICABLE.<br>
                    
                </p>
                
                <strong>BEST REGARDS,<br>
                    AKSHAY AGARWAL.<br>
                    Cell     : 9821021360
                </strong>
            </div>
            <div class="col">
                <p style="margin:2px;font-size: 12PX;text-align: left;"contenteditable="true">
                    <br>
		    DELIVERY : WITHIN 7/8 WEEKS FROM THE DATE OF RECEIPT OF ORDER.<br>
		    PAYMENT  : 25% ADVANCE & BALANCE AGAINST PRO INV.<br>
                    VALIDITY : 07 DAYS THEREAFTER KINDLY CHECK WITH US.<br>
                    INSPECTION: CAN BE HAD AT OUR WORKS BEFORE DISPATCH IF REQUIRED.
                </p> 
            </div>
        </div>
    </div>
</body>
</html>

