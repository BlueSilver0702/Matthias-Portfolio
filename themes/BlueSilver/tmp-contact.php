<?php
/*
Template Name: Contact Page
Page ID: 
*/
if (array_key_exists('aemail', $_POST)) {
    $to      = 'bluesilver0702@hotmail.com';
    $subject = $_POST['asubject'];
    $message = $_POST['amessage'];
    $headers = 'From: '. $_POST['aemail'] . "\r\n" .
        'Name: '. $_POST['aname'] . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);    
} 
get_header();
?>
            <div id="rt-transition" class="rt-visible">                                                                                                                                                             
                <div id="rt-main" class="mb12">
                    <div class="rt-grid-12">
                        <div class="rt-block component-block">
                            <div class="component-content">
                                <div class="item-page">
                                    <h2><a href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>"><font><font class="">Contact</font></font></a></h2>
                                    <div class="rt-center largemargintop largemarginbottom"><span class="promo2"><font><font>Use the form below to contact me</font></font></span><br></div>
                                    <div class="clear"> </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="rt-content-bottom">
                            <div class="rt-grid-12 rt-alpha rt-omega">
                                <div class="rt-block ">
                                    <div class="module-surround">
                                        <div class="module-content">
                                            <div class="mod_jt_contact_form ">
                                                <div class="jt_quick_contact_form">
                                                    <form id="jt_form_id" class="blocks" action="" method="post" novalidate="novalidate">
                                                        <p>
                                                            <label><font><font>Name:</font></font></label>
                                                            <input type="text" class="text" name="aname">
                                                        </p>
                                                        <p>
                                                            <label><font><font>E-mail:</font></font></label>
                                                            <input type="text" class="text" name="aemail">
                                                        </p>
                                                        <p>
                                                            <label><font><font>Subject:</font></font></label>
                                                            <input type="text" class="text" name="asubject">
                                                        </p>
                                                        <p class="area">
                                                            <label><font><font>Message:</font></font></label>
                                                            <textarea class="textarea" name="amessage"></textarea>
                                                        </p>
                                                        <p>
                                                            <label>&nbsp;</label>
                                                            <font><font><input type="submit" class="btn" value="Send" name="jtsend"></font></font>
                                                        </p>
                                                    </form>    
                                                </div>
                                                <div style="clear:both;"></div>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
<?php
get_footer();
?>