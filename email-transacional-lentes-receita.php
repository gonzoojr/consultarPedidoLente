<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<page contentType="text/html" pageEncoding="UTF-8">
<?php
if(isset($_GET['dados']) && $_GET['dados']=="sim"){
	$primaryColor = str_replace("#", "", $_GET['primaryColor']);
	$clientName = $_GET['clientName'];
	$orderNumber = $_GET['orderNumber'];
	$sellerName = $_GET['sellerName'];
    $domain = $_GET['domainSeller'];
    $logo = $_GET['logoSeller'];
<<<<<<< HEAD
    //testando o GIT
=======
>>>>>>> 1ff1460... novoTeste
}else{
	$primaryColor = "";
	$clientName = "";
	$orderNumber = "";
	$sellerName = "";
    $domain = "";
    $logo = "";
}
?>
    <head>
        <title>Email Solicitação de Receita</title>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="pt-br" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
    </head>

    <body text="#999999">
        <div align="center" style="display:block; color: #000;">
            <font face="Trebuchet MS, Verdana, arial, freesans, garuda, helvetica, sans-serif" color="#999999">
                <table border="0" cellspacing="0" cellpadding="0" align="center" width="600">
                    <tr>
                        <td colspan="2" width="100%" style="text-align:center;">
                            <a href="https://<?=$domain;?>" taget="_blank"><img src="https://<?=$domain;?>/template/logo/<?=$logo;?>" style="max-width:250px; width:100%;"></a>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" style="padding:10px 40px 30px 40px;">
                            <br /> <br />
                            <b><font size="3" style="font-size: 13px;">Olá,</font> <font size="3" style="font-size: 12px;color: #<?=$primaryColor;?>;"><?=$clientName;?></font></b>
                            <br />
                            <br />
                            <font size="3" style="font-size: 13px;">
                                Tudo bem?
                            </font>
                            <br />
                            <br />
                            <font size="3" style="font-size: 13px;">
                                Recebemos a confirmação de pagamento do seu pedido
                                <font size="3" style="font-size: 12px;color: #<?=$primaryColor;?>;"><?=$orderNumber;?></font>. Agora precisamos da sua ajuda para prosseguirmos com a confecção de suas lentes de grau.
                            </font>
                            <br />
                            <br />
                            <font size="3" style="font-size: 13px;">
                                <b>O que precisamos:</b>
                            </font>
                            <br />
                            <font size="3" style="font-size: 13px;">
                                - Uma foto de sua receita médica
                            </font>
                            <br />
                            <font size="3" style="font-size: 13px;">
                                - Uma foto sua para tomada de medidas
                            </font>
                            <br />
                            <br />
                            <font size="3" style="font-size: 13px;">
                                <b>Como enviar?</b>
                            </font>
                            <br />
                            <font size="3" style="font-size: 13px;">
                                - Simplesmente responda a esse e-mail com ambas as fotos
                            </font>
                            <br />
                            <font size="3" style="font-size: 13px;">
                                - Ou se preferir, envie com o número de seu pedido
                                <font size="3" style="font-size: 12px;color: #<?=$primaryColor;?>;"><?=$orderNumber;?></font> por Whatsapp : (11) 9 9174-0670 =]
                            </font>
                        </td>
                    </tr>
                    <tr style="background: #<?=$primaryColor;?>;">
                        <td colspan="2" style="padding:10px 40px 10px 40px;">
                            <font size="2" style="font-size:12px;color:#fff; padding-left: 20px;">COMO TIRAR FOTOS PARA TOMADA DE MEDIDAS:</font>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:10px 40px 30px 40px;">
                            <br />
                            <font size="3" style="font-size: 13px;">
                                Tire uma foto frontal de seu rosto, como se fosse 3x4, segurando qualquer cartão magnético (crédito, débito, ticket, etc) abaixo do nariz com a tarja preta voltada para frente.
                            </font>
                            <br /><br />
                            <font size="3" style="font-size: 13px;">
                                A foto deve ficar assim:
                            </font>
                            <br />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="100%">
                            <div style="width: 50%; float: left; border: 1px solid #ccc; padding: 5px; margin-bottom:30px;">
                                <img src="http://www.glasses4you.com.br/email/foto-exemplo-medidas.jpg" width="100%" />
                            </div>
                            <div style="width: 45%; float: right;  padding: 5px; font-size:13px;">
                                <table>
                                    <tr style="background: #<?=$primaryColor;?>;">
                                        <td colspan="2" style="padding:10px 0; text-align:center;">
                                            <font size="2" style="font-size:12px;color:#fff; text-align:center;">DICAS:</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <br /> - Tire uma foto frontal de seu rosto, como se fosse 3x4, segurando qualquer cartão magnético (crédito, débito, ticket, etc) abaixo do nariz com a tarja preta voltada para frente.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <br /> - Tire a foto sem óculos
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <br /> - Mantenha-se olhando para a frente
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <br /> - Utilize o flash do seu celular para iluminar bem os seus olhos
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding:30px 0px 0px 0px; border-top:1px solid #ccc;">
                            <font size="2" style="font-size:14px;">
                                Se tiver alguma dúvida, estamos à disposição através deste e-mail ou do <b>4003-3598</b>.
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <font size="2" style="font-size:14px;">
                                Seus óculos somente seguirão para produção após o retorno e validação da sua receita e de suas medidas.
                            </font>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <font size="2" style="font-size:14px; padding-left: 20px;">
                                <br /> Estamos no aguardo!
                                <br />
                                <br />
                            </font>
                        </td>
                    </tr>
                    <tr style="background: #<?=$primaryColor;?>;">
                        <td colspan="2" style="padding:10px 0px; text-align:center;">
                            <font size="2" style="font-size:12px;color:#fff; padding-left: 20px;"><b><?=$sellerName;?></b></font>
                        </td>
                    </tr>
                </table>
            </font>
        </div>
    </body>
</html>