
<?php require_once('../plugin/contact-form/config.php'); ?>

<div class="page page-contact">
    
    <h1>Please give us a shout. We'd love to help.</h1>
    
    <div class="layout-50">
        
        <!-- Column Left -->
        <div class="layout-50-left">
            
            <!-- Entry -->
            <div class="margin-bottom-30">
            
                <h3>Evolution Studios</h3>
                <h4>Marko Doe &amp; Brandon Bay</h4>
                <p>
                    23 Madison Ave<br/>
                    Saratoga Springs<br/>
                    NY 12866
                </p>
            
            </div>
            <!-- /Entry -->
            
            <!-- Entry -->
            <div class="margin-bottom-30">

                <h3>Mark Doe</h3>
                <h4>Web Developer</h4>
                <p>
                    Tel.: 877 123 0123<br/>
                    Fax. 877 123 0124<br/>
                    E-mail: mark.doe@evolution.com
                </p> 
            
            </div>
            <!-- /Entry -->
           
            <!-- Entry -->
            <div class="margin-bottom-30">

                <h3>Brandon Bay</h3>
                <h4>Web Designer</h4>
                <p>
                    Tel.: 877 123 0223<br/>
                    Fax. 877 123 0224<br/>
                    E-mail: brandon.bay@evolution.com
                </p>  
            
            </div>
            <!-- /Entry -->
           
        </div>
        <!-- Column Left -->
        
        <!-- Column Right -->
        <div class="layout-50-right">
            
            <!-- Contact Form -->
            <form name="contact" id="contact" action="" method="post">

                <h3 class="margin-bottom-10">Contact Form</h3>

                <div class="margin-bottom-20">

                    <div class="form-line block">
                        <input type="text" name="contact-user-name" id="contact-user-name" value="<?php echo _def_data_name; ?>" onfocus="clearInput(this,'focus','<?php echo _def_data_name; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_name; ?>')"/>	
                    </div>
                    <div class="form-line block">
                        <input type="text" name="contact-user-email" id="contact-user-email" value="<?php echo _def_data_email?>" onfocus="clearInput(this,'focus','<?php echo _def_data_email; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_email; ?>')"/>	
                    </div>					
                    <div class="form-line block">
                        <textarea rows="0" cols="0" name="contact-message" id="contact-message" onfocus="clearInput(this,'focus','<?php echo _def_data_message; ?>')" onblur="clearInput(this,'blur','<?php echo _def_data_message; ?>')"><?php echo _def_data_message; ?></textarea>	
                    </div>

                    <div class="form-line">
                        <a href="javascript:submitContactForm();" class="button block" id="contact-send">Send</a>
                    </div>

                </div>
                
            </form>
            <!-- Contact Form -->
            
            <!-- Google Map -->
            <h3 class="margin-bottom-10">On The Map</h3>
            <div id="map"></div>
            <!-- /Google Map -->
          
        </div>
        <!-- /Column Right -->
       
    </div>
    
</div>