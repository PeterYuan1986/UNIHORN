<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

@$filepath = @fopen("Export_Unihorn_test (1) - Tracking Numbers (3).csv", 'r');
@$content = fgetcsv($filepath);

if (@$content && @sizeof(@$content) == 31) {
    try {
        $indexofcontent = 0;
        $tosend_array = [];
        while (@$content = fgetcsv($filepath)) {    //每次读取CSV里面的一行内容    
            foreach (@$content as $value) {
                $value=$value.'\t';
                print($value);
            }
//            print_r($content);
////            $sql = "UPDATE daifaorders SET carrier='" . $content[24] . "', service='" . $content[25] . "', tracking='" . $content[3] . "', cost='" . str_replace('$', '', $content[4]) . "' WHERE (cmpid='" . $cmpid . "') AND orderid='" . $content[27] . "'";
////            $result = mysqli_query($conn, $sql);
//            if ($_POST['checkbox'] != NULL) {
//                $pattern = '/(([a-zA-Z0-9]|\-|\.|\s|[()]|\/)+\*)/';  //匹配inote里的整数
//                preg_match_all($pattern, $content[28], $matchsku);
//                $pattern = '/(\*\d+(;|；))/';  //匹配inote里的整数
//                preg_match_all($pattern, $content[28], $match);
//                for ($ind = 0; $ind < count($matchsku[0]); $ind++) {
//                    $prex = str_replace("*", "", $matchsku[0][$ind]);
//                    $prey = str_replace("*", "", $match[0][$ind]);
//                    $prey = str_replace(";", "", $prey);
//                    $prey = str_replace("；", "", $prey);
//                    $prey = str_replace("?", "", $prey);
//                    $tosend[$indexofcontent]['ordernumber'] = $content[27];
//                    $tosend[$indexofcontent]['marketplacesku'] = $prex;
//                    $tosend[$indexofcontent]['amount'] = $prey;
//                    $tosend[$indexofcontent]['market'] = $_POST['mkt'];
//                    $tosend[$indexofcontent]['tracking'] = $content[3];
//                    $tosend[$indexofcontent]['ship'] = $content[24];
//                    if (array_key_exists($prex, $tosend_array)) {
//                        @$tosend_array[$prex] += $prey;
//                    } else {
//                        @$tosend_array[$prex] = $prey;
//                    }
//                    $indexofcontent++;
//                }
//            }
        }
/*        if ($_POST['checkbox'] != NULL) {
            $_SESSION['ordertosend'] = $tosend;
            $_SESSION['tosend_array'] = $tosend_array;
            $_SESSION['warehouse'] = 'nc';
        }

        if ($result) {
            $sql = "SELECT cost, fee FROM daifaorders where (cmpid='" . $cmpid . "') AND batch='" . $batch . "'";
            $result = mysqli_query($conn, $sql);
            while ($arr = mysqli_fetch_array($result)) {
                $data[] = $arr;
            }
            $totalcost = 0;
            $totalfee = 0;
            for ($index = 0; $index < @count($data); $index++) {
                $totalcost = $totalcost + $data[$index][0];
                $totalfee = $totalfee + $data[$index][1];
            }
            $sql = "UPDATE daifa SET time=CURRENT_TIME, status='SHIPPED', shippingcost='" . $totalcost . "', servicefee='" . $totalfee . "' WHERE (cmpid='" . $cmpid . "') AND batchname='" . $batch . "'";
            $result = mysqli_query($conn, $sql);
            echo "<script> alert('文件上传成功！')</script>";
            if ($_POST['checkbox'] == NULL) {
                print '<script> location.replace("data-table.php"); </script>';
            }
        } else {
            echo "<script> alert('文件上传不成功，请重新上传！')</script>";
            unset($_SESSION['ordertosend']);
        }*/
    } catch (Exception $ex) {
        print($ex);
    }
  
 
}