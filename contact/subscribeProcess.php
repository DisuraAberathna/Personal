<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$responseObject = new stdClass();

if (isset($_POST["email"])) {

    $email = $_POST["email"];

    if (!empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $connection = new mysqli("localhost", "root", "Disura@2005", "personal");
            $subscriber_rs = $connection->query("SELECT `id` FROM `subscribers` WHERE `email` = '" . $email . "'");
            $subscriber_num = $subscriber_rs->num_rows;

            if ($subscriber_num == 0) {
                $mail = new PHPMailer;
                $mail->IsSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'disurachathwara005@gmail.com';
                $mail->Password = 'iaiusvroupxdedqm';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom('disurachathwara005@gmail.com', 'Subscribe Message.');
                $mail->addReplyTo('disurachathwara005@gmail.com', 'Subscribe Message.');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'Thank You for Subscribe my Personal Website.';
                $bodyContent = '<body class="clean-body u_body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #151414; color: #ffffff;">
    <table id="u_body" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #151414; width: 100%;" cellpadding="0"
        cellspacing="0">
        <tbody>
            <tr style="vertical-align: top">
                <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                    <div class="u-row-container" style="padding: 0px; background-color: transparent">
                        <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                            <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent;">

                                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 0px;" align="left">
                                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                <tr>
                                                                    <td style="padding-right: 0px; padding-left: 0px;" align="center">
                                                                        <img align="center" border="0" src="https://disurachathwara.000webhostapp.com/resources/img/logo.png" alt="image" title="image" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: inline-block !important; border: none; height: auto; float: none; width: 100%; max-width: 400px;"
                                                                            width="400" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent">
                        <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                            <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="background-color: #ffffff; height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">

                                            <table id="u_content_heading_2" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 60px 30px 0px 30px;" align="left">
                                                            <h1 class="v-line-height v-font-size" style="text-align: center; margin: 0px; line-height: 140%;">
                                                                <strong style="color: black; font-size: 20px;">Thank
                                                                    You For Subscribe My Personal Website!</strong>
                                                            </h1>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_text_1" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 30px 60px 30px;" align="left">
                                                            <div class="v-line-height v-font-size" style="color: #747474; line-height: 180%; text-align: center; word-wrap: break-word;">
                                                                <p style="font-size: 14px; line-height: 180%">
                                                                    You will receive email updates about offers and discounts and information about new events. Also, thank you for subscribing to my personal website.
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-row-container" style="padding: 0px; background-color: transparent">
                        <div class="u-row" style="margin: 0 auto; min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; background-color: transparent;">
                            <div style="border-collapse: collapse; display: table; width: 100%; height: 100%; background-color: transparent;">
                                <div class="u-col u-col-100" style="max-width: 320px; min-width: 600px; display: table-cell; vertical-align: top;">
                                    <div style="height: 100%; width: 100% !important; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                        <div style="box-sizing: border-box; height: 100%; padding: 0px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-right: 0px solid transparent; border-bottom: 0px solid transparent; border-radius: 0px; -webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                            <table id="u_content_text_2" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 40px 60px 10px;" align="left">
                                                            <div class="v-line-height v-font-size" style="color: #ecf0f1; line-height: 160%; text-align: center; word-wrap: break-word;">
                                                                <p style="font-size: 14px; line-height: 160%">
                                                                    If you have any questions, please email me at
                                                                    <a style="color: #dc3545; text-decoration: none;" href="#">disura2005@gmail.com</a>&nbsp;or visit my FAQS, you can reply during my operating hours. I can answer questions.
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 20px 0px;" align="left">
                                                            <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; border-top: 1px solid #bbbbbb; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                                                <tbody>
                                                                    <tr style="vertical-align: top">
                                                                        <td style="word-break: break-word; border-collapse: collapse !important; vertical-align: top; font-size: 0px; line-height: 0px; mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                                                                            <span>&#160;</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px;" align="left">
                                                            <div align="center">
                                                                <div style="display: table; max-width: 300px">
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 15px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://web.facebook.com/profile.php?name=Disura%20Aberathna" title="Facebook" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/facebook-logo.png" alt="Facebook" title="Facebook" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important; background-color: #ecf0f1; border-radius: 6px;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 15px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://twitter.com/DisuraAberathna" title="Twitter" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/twitter-logo.png" alt="Twitter" title="Twitter" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 15px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://www.linkedin.com/company/unlayer/mycompany/" title="LinkedIn" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/linkedin-logo.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 15px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://wa.me/760052864" title="Whatsapp" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/whatsapp-logo.png" alt="Whatsapp" title="Whatsapp" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 15px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://www.instagram.com/__disura_05__/" title="Instagram" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/instagram-logo.png" alt="Instagram" title="Instagram" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important; height: 32px !important; display: inline-block; border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; margin-right: 0px;">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td align="left" valign="middle" style="word-break: break-word; border-collapse: collapse !important; vertical-align: top;">
                                                                                    <a href="https://github.com/DisuraAberathna" title="Github" target="_blank">
                                                                                        <img src="https://disurachathwara.000webhostapp.com/resources/img/social-media-icons/github-logo.png" alt="Github" title="Github" width="32" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; clear: both; display: block !important; border: none; height: auto; float: none; max-width: 32px !important;"
                                                                                        />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table id="u_content_menu_1" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px;" align="left">
                                                            <div class="menu" style="text-align: center">
                                                                <a href="https://disurachathwara.000webhostapp.com/index.php" target="_self" style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px; text-decoration: none;" class="v-padding v-font-size">
                                                                    Home
                                                                </a>
                                                                <span style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px;" class="v-padding v-font-size hide-mobile">
                                                                    |
                                                                </span>
                                                                <a href="https://disurachathwara.000webhostapp.com/services.php" target="_self" style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px; text-decoration: none;" class="v-padding v-font-size">
                                                                    Service
                                                                </a>
                                                                <span style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px;" class="v-padding v-font-size hide-mobile">
                                                                    |
                                                                </span>
                                                                <a href="https://disurachathwara.000webhostapp.com/about.php" target="_self" style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px; text-decoration: none;" class="v-padding v-font-size">
                                                                    About Me
                                                                </a>
                                                                <span style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px;" class="v-padding v-font-size hide-mobile">
                                                                    |
                                                                </span>
                                                                <a href="https://disurachathwara.000webhostapp.com/contact.php" target="_self" style="padding: 5px 15px; display: inline-block; color: #ecf0f1; font-size: 14px; text-decoration: none;" class="v-padding v-font-size">
                                                                    Contact Me
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="v-container-padding-padding" style="overflow-wrap: break-word; word-break: break-word; padding: 10px 10px 60px;" align="left">
                                                            <div class="v-line-height v-font-size" style="color: #ecf0f1; line-height: 160%; text-align: center; word-wrap: break-word;">
                                                                <p style="font-size: 14px; line-height: 160%">You have received this email as a <b>Subscriber</b> of <a href="#" style="color: #dc3545; text-decoration: none;">&nbsp;Disura
                                                                        Chathwara&apos;s</a>&nbsp;Personal Website.
                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</body>';
                $mail->Body = $bodyContent;

                if (!$mail->send()) {
                    $responseObject->msg = 'Email Sending Failed.';
                } else {
                    $connection->query("INSERT INTO `subscribers` (`email`, `status`) VALUES ('" . $email . "', '1')");
                    $responseObject->msg = 'Success';
                }
            } else {
                $responseObject->msg = "You Already Subscribed.";
            }
        } else {
            $responseObject->msg = "Invalid Email Address.";
        }
    } else {
        $responseObject->msg = "Email Field Should Not be Empty.";
    }
} else {
    $responseObject->msg = "Something Went Wrong.";
}

echo json_encode($responseObject);
