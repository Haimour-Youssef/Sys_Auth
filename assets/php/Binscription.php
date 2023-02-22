<?php

namespace authentification;

use authentification\Generate;

include "crud.php";
include "generate.php";
include "mailer.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
   http_response_code(405);
   echo json_encode(['message' => 'Methode non autorisee']);
   exit;
}

$generate = new Generate();
$password = $generate->random(8);
$crud = new Crud();
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST["email"];
$array = array(':fname' => $fname, ':lname' => $lname, ':email' => $email, ':password' => $password, ':status' => false);
if ($crud->createOrUpdate("insert into plateforme_icns (fname,lname,email,password,status) value (:fname,:lname,:email,:password,:status)", $array) == "true") {

   $code = "<!DOCTYPE html>
         <html lang='en' xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:v='urn:schemas-microsoft-com:vml'>
         
         <head>
           <title></title>
           <meta content='text/html; charset=utf-8' http-equiv='Content-Type' />
           <meta content='width=device-width, initial-scale=1.0' name='viewport' />
           <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
           <style>
           * {
             box-sizing: border-box;
           }
         
           body {
             margin: 0;
             padding: 0;
           }
         
           a[x-apple-data-detectors] {
             color: inherit !important;
             text-decoration: inherit !important;
           }
         
           #MessageViewBody a {
             color: inherit;
             text-decoration: none;
           }
         
           p {
             line-height: inherit
           }
         
           .desktop_hide,
           .desktop_hide table {
             mso-hide: all;
             display: none;
             max-height: 0px;
             overflow: hidden;
           }
         
           @media (max-width:620px) {
             .desktop_hide table.icons-inner {
               display: inline-block !important;
             }
         
             .icons-inner {
               text-align: center;
             }
         
             .icons-inner td {
               margin: 0 auto;
             }
         
             .row-content {
               width: 100% !important;
             }
         
             .mobile_hide {
               display: none;
             }
         
             .stack .column {
               width: 100%;
               display: block;
             }
         
             .mobile_hide {
               min-height: 0;
               max-height: 0;
               max-width: 0;
               overflow: hidden;
               font-size: 0px;
             }
         
             .desktop_hide,
             .desktop_hide table {
               display: table !important;
               max-height: none !important;
             }
           }
           </style>
         </head>
         
         <body style='margin: 0; background-color: #d9dffa; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;'>
           <table border='0' cellpadding='0' cellspacing='0' class='nl-container' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa;' width='100%'>
             <tbody>
               <tr>
                 <td>
                   <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                     <tbody>
                       <tr>
                         <td>
                           <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa; color: #000000; border-radius: 0; width: 600px;' width='600'>
                             <tbody>
                               <tr>
                                 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
                                   <table border='0' cellpadding='10' cellspacing='0' class='divider_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div align='center' class='alignment'>
                                           <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                             <tr>
                                               <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 1px solid #d9dffa;'><span> </span></td>
                                             </tr>
                                           </table>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </td>
                       </tr>
                     </tbody>
                   </table>
                   <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa; background-size: auto;' width='100%'>
                     <tbody>
                       <tr>
                         <td>
                           <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; background-size: auto; width: 600px;' width='600'>
                             <tbody>
                               <tr>
                                 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 50px; padding-right: 50px; vertical-align: top; padding-top: 30px; padding-bottom: 20px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
                                   <table border='0' cellpadding='10' cellspacing='0' class='text_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div style='font-family: Verdana, sans-serif'>
                                           <div class='' style='font-size: 14px; mso-line-height-alt: 16.8px; color: #000000; line-height: 1.2; font-family: '.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;'>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 15.6px;'><span style='font-size:13px;'>Bonjour,</span></p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 16.8px;'> </p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 15.6px;'><span style='font-size:13px;'>Merci de vous être inscrit(e) à :</span></p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 16.8px;'> </p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 15.6px;'><span style='font-size:13px;'>'Les infections respiratoires <strong>« cas cliniques »</strong>.'</span></p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 16.8px;'> </p>
                                             <p style='margin: 0; font-size: 13px; mso-line-height-alt: 15.6px;'><span style='font-size:13px;'>Vous trouverez ci-après les informations sur cette réunion.</span></p>
                                           </div>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='0' cellspacing='0' class='divider_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad' style='padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px;'>
                                         <div align='center' class='alignment'>
                                           <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                             <tr>
                                               <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 1px solid #BBBBBB;'><span> </span></td>
                                             </tr>
                                           </table>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='10' cellspacing='0' class='paragraph_block block-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div style='color:#000000;font-size:13px;font-family:'.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;mso-line-height-alt:15.6px;'>
                                           <p style='margin: 0;'><strong>MANIÈRES DE REJOINDRE LE WEBINAIRE</strong></p>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='10' cellspacing='0' class='paragraph_block block-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div style='color:#000000;font-size:12px;font-family:'.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;mso-line-height-alt:14.399999999999999px;'>
                                           <p style='margin: 0;'><strong>1. Veuillez cliquer sur le bouton ci-dessous pour rejoindre le Webinaire :</strong></p>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='0' cellspacing='0' class='button_block block-5' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad' style='padding-bottom:20px;padding-left:10px;padding-right:10px;padding-top:20px;text-align:left;'>
                                         <div align='left' class='alignment'>
                                           <!--[if mso]><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='###' style='height:42px;width:201px;v-text-anchor:middle;' arcsize='39%' stroke='false' fillcolor='#773dbd'><w:anchorlock/><v:textbox inset='5px,0px,0px,0px'><center style='color:#ffffff; font-family:Verdana, sans-serif; font-size:13px'><![endif]--><a href='###' style='text-decoration:none;display:inline-block;color:#ffffff;background-color:#773dbd;border-radius:16px;width:auto;border-top:0px solid TRANSPARENT;font-weight:undefined;border-right:0px solid TRANSPARENT;border-bottom:0px solid TRANSPARENT;border-left:0px solid TRANSPARENT;padding-top:8px;padding-bottom:8px;font-family:'.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;font-size:13px;text-align:center;mso-border-alt:none;word-break:keep-all;' target='_blank'><span style='padding-left:25px;padding-right:20px;font-size:13px;display:inline-block;letter-spacing:normal;'><span dir='ltr' style='word-break: break-word;'><span data-mce-style='' dir='ltr' style='line-height: 26px;'><strong>REJOINDRE LE WEBINAIRE</strong></span></span></span></a>
                                           <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='10' cellspacing='0' class='paragraph_block block-6' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div style='color:#000000;font-size:12px;font-family:'.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;mso-line-height-alt:14.399999999999999px;'>
                                           <p style='margin: 0;'><strong>2. Veuillez utiliser le code ci-dessous pour accéder:</strong></p>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='0' cellspacing='0' class='heading_block block-7' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad' style='width:100%;text-align:center;padding-top:10px;padding-bottom:10px;'>
                                         <h1 style='margin: 0; color: #000000; font-size: 23px; font-family: '.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif; line-height: 120%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;'><span class='tinyMce-placeholder'>$password</span></h1>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='0' cellspacing='0' class='paragraph_block block-8' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad' style='padding-top:30px;padding-right:10px;padding-bottom:10px;padding-left:10px;'>
                                         <div style='color:#000000;font-size:12px;font-family:'.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif;font-weight:400;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;mso-line-height-alt:14.399999999999999px;'>
                                           <p style='margin: 0;'><strong>Pour préserver la sécurité de ce Webinaire, ne partagez pas ce lien de manière publique.</strong></p>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='0' cellspacing='0' class='text_block block-9' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad' style='padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:40px;'>
                                         <div style='font-family: Verdana, sans-serif'>
                                           <div class='' style='font-size: 14px; font-family: '.'Lucida Sans Unicode'.', '.'Lucida Grande'.', '.'Lucida Sans'.', Geneva, Verdana, sans-serif; mso-line-height-alt: 16.8px; color: #000000; line-height: 1.2;'>
                                             <p style='margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 16.8px;'><span style='font-size:13px;'><strong>Merci !</strong></span></p>
                                           </div>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </td>
                       </tr>
                     </tbody>
                   </table>
                   <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-3' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                     <tbody>
                       <tr>
                         <td>
                           <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa; color: #000000; border-radius: 0; width: 600px;' width='600'>
                             <tbody>
                               <tr>
                                 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
                                   <table border='0' cellpadding='10' cellspacing='0' class='divider_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div align='center' class='alignment'>
                                           <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                             <tr>
                                               <td class='divider_inner' style='font-size: 1px; line-height: 1px; border-top: 1px solid #d9dffa;'><span> </span></td>
                                             </tr>
                                           </table>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </td>
                       </tr>
                     </tbody>
                   </table>
                   <table align='center' border='0' cellpadding='0' cellspacing='0' class='row row-4' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                     <tbody>
                       <tr>
                         <td>
                           <table align='center' border='0' cellpadding='0' cellspacing='0' class='row-content stack' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #d9dffa; color: #000000; width: 600px;' width='600'>
                             <tbody>
                               <tr>
                                 <td class='column column-1' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 10px; padding-right: 10px; vertical-align: top; padding-top: 10px; padding-bottom: 20px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;' width='100%'>
                                   <table border='0' cellpadding='10' cellspacing='0' class='image_block block-1' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div align='center' class='alignment' style='line-height:10px'><a href='http://www.example.com/' style='outline:none' tabindex='-1' target='_blank'><img alt='Your Logo' src='assets\php\images\Logo_Sanofi_2022.png' style='display: block; height: auto; border: 0; width: 145px; max-width: 100%;' title='Your Logo' width='145' /></a></div>
                                       </td>
                                     </tr>
                                   </table>
                                   <table border='0' cellpadding='10' cellspacing='0' class='text_block block-2' role='presentation' style='mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;' width='100%'>
                                     <tr>
                                       <td class='pad'>
                                         <div style='font-family: sans-serif'>
                                           <div class='' style='font-size: 14px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; mso-line-height-alt: 16.8px; color: #773dbd; line-height: 1.2;'>
                                             <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>Information médicale : Infomed.maroc@sanofi.com,</p>
                                             <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>Tel : 661 23 36 99 <br />Pharmacovigilance : pharmacovigilance.maroc@sanofi.com,</p>
                                             <p style='margin: 0; text-align: center; mso-line-height-alt: 16.8px;'>Tel : 522669000</p>
                                           </div>
                                         </div>
                                       </td>
                                     </tr>
                                   </table>
                                 </td>
                               </tr>
                             </tbody>
                           </table>
                         </td>
                       </tr>
                     </tbody>
                   </table>
                 </td>
               </tr>
             </tbody>
           </table><!-- End -->
         </body>
         
         </html>";

   sendmeil($email, $code);
} else {
   // unset($_SESSION['cobon']);
   // session_destroy();
   //  notif inserted
   echo "false";
}