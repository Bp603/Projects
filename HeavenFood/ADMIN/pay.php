<!DOCTYPE html>

<head>
    <style>
        .all {
            border-radius: 2px;
            border: 5px double;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 20px;
            width: 60%;
        }

        .b {
            border-top: 2px solid #999;
            border-bottom: 2px solid #999;
        }
    </style>
</head>

<body>
</body>

</html>
<?php

include 'Config.php';

if (isset($_REQUEST['pid'])) {
    $sql = "select * from PAYMENT where PID = {$_REQUEST['pid']}";

    $res = mysqli_query($lk, $sql);
    $cnt = mysqli_num_rows($res);

    if ($cnt > 0) {
        while ($ans = mysqli_fetch_assoc($res)) {

?>
            <center>
                <div class="all">
                    <div id="container">

                        <div id="image" style="float:left;">
                            <img src="../IMAGE/LOGO11-.png" align="left" height="70px" />
                        </div>

                        <div id="texts" style="float:left;">
                            <h1> The Heaven Food </h1>
                        </div>

                        <div id="texts" style="float:right;">
                            <p> heavenfood2021@gmail.com </p>
                            <p> 108,Shiv Velly,Kamrej - 395326 </p>
                            <p> </p>
                        </div>

                    </div>
                    <hr width="100%">

                    <div id="container">

                        <div style="text-align: left;">

                            <H3>Name : <?php echo $ans['NAME'];  ?></H3>

                            <H3>E-Mail : <?php echo $ans['EMAIL'];  ?></H3>

                            <H3>Contact : <?php echo $ans['CONTACT'];  ?></H3>

                            <h3>Bill Date : <?php echo substr($ans['DATE'], 0, 11); ?> </h3>

                            <h3>Bill Time : <?php echo substr($ans['DATE'], 11); ?> </h3>

                        </div>
                    </div>

                    <hr width="100%">

                    <table style="width: 80%; text-align: left;" id="example1" class="table" border="2px">

                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Iteam Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>


                        <tbody>

                            <?php

                            if ($ans['TYPE'] ==  "order") {

                                $sql = "select * from ORDRDLT where OID = {$ans['OID']}";
                                $res = mysqli_query($lk, $sql);
                                $cnt = mysqli_num_rows($res);

                                if ($cnt > 0) {

                                    $total = 0;
                                    $tax = 0;
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) {


                            ?>

                                        <tr>
                                            <TD><?php echo $i++; ?></TD>
                                            <TD><?php echo $row['MNAME'] ?></TD>
                                            <TD><?php echo $row['QNTY'] ?></TD>
                                            <TD><?php echo $row['PRICE'] ?></TD>
                                            <TD><?php echo $row['TOTAL'] ?></TD>
                                        </tr>
                                    <?php

                                    }
                                    ?>

                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Total</td>
                                        <td>₹ <?php echo $ans['AMOUNT'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Tax [5%]</td>
                                        <?php $tax =  ($ans['AMOUNT'] * 5) / 100; ?>
                                        <td>₹<?php echo $tax; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Amount</td>
                                        <td>₹ <?php echo $ans['AMOUNT'] + $tax; ?></td>
                                    </tr>
                            <?php
                                }
                            }

                            ?>

                            <?php

                            if ($ans['TYPE'] ==  "parcel") {

                                $sql = "select * from PARCELDLT where PID = {$ans['OID']}";
                                $res = mysqli_query($lk, $sql);
                                $cnt = mysqli_num_rows($res);

                                if ($cnt > 0) {

                                    $total = 0;
                                    $tax = 0;
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($res)) {


                            ?>

                                        <tr>
                                            <TD><?php echo $i++; ?></TD>
                                            <TD><?php echo $row['MNAME'] ?></TD>
                                            <TD><?php echo $row['QNTY'] ?></TD>
                                            <TD><?php echo $row['PRICE'] ?></TD>
                                            <TD><?php echo $row['TOTAL'] ?></TD>
                                        </tr>
                                    <?php

                                    }
                                    ?>

                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Total</td>
                                        <td>₹ <?php echo $ans['AMOUNT'] ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Tax [5%]</td>
                                        <?php $tax =  ($ans['AMOUNT'] * 5) / 100; ?>
                                        <td>₹<?php echo $tax; ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td>Amount</td>
                                        <td>₹ <?php echo $ans['AMOUNT'] + $tax; ?></td>
                                    </tr>
                            <?php
                                }
                            }

                            ?>

                        </tbody>


                    </table>

        <?php
        }
    }
}

        ?>
        <h2> Thank You For Visit Us </h2>

        <div id="container">

            <div id="texts">
                <strong>
                    <pre style="font-family: Arial, Helvetica, sans-serif;">If Any fault Or Eroor In Invoice. Plz Contact Us                     Welcome Again                   9904459745</pre>
                </strong>
            </div>

        </div>
        <hr width="100%">

                </div>
            </center>