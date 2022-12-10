<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../assignment/style.css'>
    <title>form</title>
    <style>
        form 
        {  
            
            border-radius: 10px;
            width: 650px;
            margin-left: 25%;
            background-color: rgb(169, 207, 71);
        }
       
        input[type=submit] 
        {
            width: 150px;
            line-height: 30px;
            font-weight: 80px;
            background-color: rgb(72, 86, 9);
            color: rgb(247, 235, 203);
            font-size: 20px;  
            border-radius: 50px;
            border: 0px solid;
            font-style:initial;
        }
        textarea
        {
            border: none;
            border-radius: 7px;
            box-shadow: 1px 2px gray;
        }

        .tbl1 input {
            border: none;
            width: 500px;
            line-height: 40px;
            border-radius: 7px;
            box-shadow: 1px 2px gray;
        }
        .tbl2 input {
            border: none;
            width: 500px;
            line-height: 40px;
            border-radius: 7px;
            box-shadow: 1px 2px gray;
        }
        
        .tbl3 input[type=radio] 
        {
            width: 50px;
            line-height: 20%;
            background-color: rgb(62, 62, 67);
            height: 25px;
        }

        .tbl3 input[type=text] 
        {
            border:none;
            width: 490px;
            line-height: 35px;
            box-shadow: 1px 2px rgb(156, 152, 140);
            border-radius: 7px;
        }
        table tr td
        { 
            font-size: 15px;
            font-weight: bold;
        }
        h2
        {   
            font-weight: bolder;
        }
        fieldset{
      
            border: none;
        }
    </style>
</head>
<body>
    <form>
        <fieldset>
            <h2>Step 1: Youre details</h2>
            <table class="tbl1" border="0px" align="center" cellpadding="6" cellspacing="1" >

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="email" placeholder="first and last name" required></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="example@gmail.com" required></td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="number" name="phone" placeholder="+911234567890" required></td>
                </tr>
            </table>
       
            <h2>Step 2: Delivery address </h2>

            <table class="tbl2" border="0px solid" cellpadding="5" cellspacing="0" align="center">
                <tr>
                    <td>Address
                    <td><textarea name="address" rows="4" cols="65"></textarea></td>
                </tr>

                <tr>
                    <td>Post code</td>
                    <td><input type="code" name="code"required></td>
                </tr>

                <tr>
                    <td>Country</td>
                    <td><input type="text" name="phone"required></td>
                </tr>
            </table>
            <h2>Step 3: Card details </h2>

            <table class="tbl3" border="0px solid" cellpadding="5" cellspacing="0" align="center">
                <tr>
                    <td>Card type </td>   
                    <td><input type="radio" name="cardtype"><img src="img/visa.jpg" height="15px" width="30px">VISA
                    <input type="radio" name="cardtype"><img src="img/amex.png" height="15px" width="30px">AmEx
                    <input type="radio" name="cardtype"><img src="img/mastercard.png" height="15px" width="30px">Mastercard</td>
                </tr>

                <tr>
                    <td>Card number </td>
                    <td><input type="text" name="cno"required></td>
                </tr>

                <tr>
                    <td>Security code </td>
                    <td><input type="text" name="code"required></td>
                </tr>
                <tr>
                    <td>Name on card  </td>
                    <td><input type="text" name="card" placeholder="Exact name as on the card " required></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" value="BUY IT!" name="submit" ></center></td> 
                </tr>
                
            </table>
            
            
        </fieldset>
    </form>
</body>
</html>