<?php

$to      = $_POST['email'];
$subject = 'Thank you for contacting Sunshine Kids';
$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = '    <table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"  style="font-family:Helvetica, Arial,serif;">
<tbody>
  <tr>
    <td><table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer">
<tbody>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
  <tr>
    <td valign="top" width="40">&nbsp;</td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<!-- =============================== Header ====================================== -->   
  <tr>
      <td height="75" class="spechide"></td>
      
      <!-- =============================== Body ====================================== -->
  </tr>
  <tr>
    <td class="movableContentContainer" valign="top">
        <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
  <tr>
    <td height="35"></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
  <tr>
    <td valign="top" align="center" class="specbundle"><div class="contentEditableContainer contentTextEditable">
                              <div class="contentEditable">
                              </div>
                            </div></td>
    <td valign="top" class="specbundle"><div class="contentEditableContainer contentTextEditable">
                              <div class="contentEditable">
                                <center><img src="http://sulley.cah.ucf.edu/~dig4104c_group04/img/logo1.png"/ style="width:50%;"></center>
                              </div>
                            </div></td>
  </tr>
</tbody>
</table>
</td>
  </tr>
</tbody>
</table>
      </div>
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
</table>
      </div>
      <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                        <tr><td height="55"></td></tr>
                        <tr>
                          <td align="left">
                            <div class="contentEditableContainer contentTecontentEditableContainer contentTextEditable">
                            <div class="contentEditable" align="center">
                              <h2 >' . $_POST['first_name'] . ' ' .  $_POST['last_name'] . ',</h2>
                              </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height="15"> </td></tr>

                          <tr>
                            <td align="left">
                              <div class="contentEditableContainer contentTextEditable">
                                <div class="contentEditable" align="left">
                                <p >Company Name: ' . $_POST['company'] . '</p>
                                  <p >Phone Number: ' . $_POST['phone'] . '</p>
                                  <p >Email: ' . $_POST['email'] . '</p>
                                  <p >Address: ' . $_POST['address'] . '</p>
                                  <p >Message: ' . $_POST['message'] . '</p>
                                  <p >Update Information: ' . $_POST['update'] . 'Request Newsletter: '. $_POST['news'] . '</p>
                                  </div>
                                </div>
                              </td>
                            </tr>
  
                            <tr><td height="55"></td></tr>
                            <tr><td height="20"></td></tr>
                          </table>
          </div>
          <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
  </td>
      </tr>
    </tbody>
  </table>
  </td>
      </tr>
      <tr><td height="88"></td></tr>
    </tbody>
  </table>
  
          </div>
          
          <!-- =============================== footer ====================================== -->
        
        </td>
      </tr>
    </tbody>
  </table>
  </td>
        <td valign="top" width="40">&nbsp;</td>
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
  </table>';

$result=mail($to, $subject, $message, $headers);
if ($result) { 
    echo '<script language="javascript"> alert("Your Message successfully sent, we will get back to you soon."); window.location.href="contactus.php"; </script>';
 } else {
    echo '<script language="javascript"> alert("Your Message was not sent, Please try again."); window.location.href="contactus.php"; </script>';
 }
?>