<?php
    include("funcoes.php");
    startCounter();
    /*/ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);*/

    if(isset($_GET['vtexId']) && strlen($_GET['vtexId'])>4){
        //$pedido = 'SVR-818862668265-01';
        $pedido = $_GET['vtexId'];
        $homepage = file_get_contents('https://api.glasses4you.com.br/api/order/getByVtexId?vtexId='.$pedido);
        $content = json_decode($homepage);

        //print_r($content);
        $array = $content->data;
        $vtexId = $array->vtexId;
        $clienteNameArr = $array->customer->firstName . ' ' . $array->customer->lastName;
        $seller = explode("-", $vtexId);
        //echo "pedido " . $vtexId ."<br />";
        //echo "seller " . $seller[0] ."<br />";

        foreach($array->skusOrder as $value){
            //echo "Aqui: " .$value->sku->product->name . " - " . $value->sku->product->category->name . "(".$value->sku->product->category->id.")<br />";
            if($value->sku->product->category->id == 17){
                $eLente = "sim";
            }else{

            }
        }
        $sellerGetData = file_get_contents('https://api.glasses4you.com.br/api/seller/search?code='.$seller[0]);
        $sellerContent = json_decode($sellerGetData);
        $sellerData = $sellerContent->data[0];
/*        echo $sellerData->name."<br />";
        echo $sellerData->domain."<br />";
        echo '<img src="https://'.$sellerData->domain.'/template/logo/'.$sellerData->template->logo.'"><br />';
        echo str_replace("#", "", $sellerData->template->primaryColor);*/
        //echo $sellerData->template->secondaryColor .'<br />';

        $primaryColor = str_replace("#", "", $sellerData->template->primaryColor);
        $secondaryColor = str_replace("#", "", $sellerData->template->secondaryColor);
        $clientName = str_replace(" ", "%20",$clienteNameArr);
        $orderNumber = $vtexId;
        $sellerName = str_replace(" ", "%20",$sellerData->name);
        //$domainSeller = '"'.$sellerData->domain.'"';
        //$logoSeller = '"'.$sellerData->template->logo.'"';
        $domainSeller = $sellerData->domain;
        $logoSeller = str_replace(" ", "%20",$sellerData->template->logo);

        if($eLente=="sim"){
            $urlContent = 'http://www.glasses4you.com.br/emailTrans/email-transacional-lentes-receita.php?primaryColor='.$primaryColor.'&secondaryColor='.$secondaryColor.'&clientName='.$clientName.'&orderNumber='.$orderNumber.'&sellerName='.$sellerName.'&domainSeller='.$domainSeller.'&logoSeller='.$logoSeller.'&dados=sim';
            $emailContent = file_get_contents($urlContent);
            //include($urlContent);
            echo $emailContent;
            //echo "<br />#######<br />";
            //echo $urlContent;
        }
    }/*
    }else{
        $erro = json_encode(array("success"=>true,"erro"=>"Nenhuma paramentro encontrado"));
        echo $erro;
    }*/
    endCounter();
?>