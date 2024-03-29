<div class="content-form">
  <form class="form form--invalid" action="form1.php" method="POST" id="form_question"> 
    <h2 class ="write_us-title">WRITE US</h2>
    <ul class="form-input">    
      <li>
        <?php $classname = isset($errors['subject']) ? "form_li_invalid" : "form_li-s" ;
        $value = isset($form['subject']) ? $form['subject'] : ""; ?>  
        <label class="form_label" for="subject">Subject<span class="red">*</span>:</label>
        <div class="custom-select">  
        <style>            
            .color-gray {color: #B3B3B3;}
        </style>
          <select  class="<?=$classname;?> form_li-select color-gray" id="subject" name="subject" value="<?=$value;?>" onchange="this.setAttribute('data-selected', true)">
                        <option id="option" disabled selected hidden >Select subject</option>
                        <option value="1" <?php if (isset($form['subject']) && $form['subject']=="Building Credit History") echo "selected";?>>Building Credit History</option>
                        <option value="Bad Credit" <?php if (isset($form['subject']) && $form['subject']=="Bad Credit") echo "selected";?>>Bad Credit</option>
                        <option value="3" <?php if (isset($form['subject']) && $form['subject']=="Credit Cards for Business") echo "selected";?>>Credit Cards for Business</option>
                        <option value="4" <?php if (isset($form['subject']) && $form['subject']=="General") echo "selected";?>>General</option>
                        <option value="5" <?php if (isset($form['subject']) && $form['subject']=="Balance Transfer") echo "selected";?>>Balance Transfer</option>
                        <option value="6" <?php if (isset($form['subject']) && $form['subject']=="Credit Card Rewards") echo "selected";?>>Credit Card Rewards</option>
                        <option value="7" <?php if (isset($form['subject']) && $form['subject']=="Good Credit") echo "selected";?>>Good Credit</option>
          </select>

          <script>            
              $('#subject').change(function(){
                if (!$(this).val()) $(this).addClass('color-gray');
                else $(this).removeClass('color-gray');
                });
                if ($('#subject').val()) $('#subject').removeClass('color-gray');
          </script>        
          <span class="arrow"><i class="arrow-down"></i></span>
          </div>                    
      </li>
      <li>
            <?php $classname = isset($errors['email']) ? "form_li_invalid" : "form_li" ;
            $value = isset($form['email']) ? $form['email'] : ""; ?>  
        <label class="form_label" for="email">Email<span class="red">*</span>:</label>
        <input class="<?=$classname;?>" type="email" id="email"  name="email"  value="<?=$value;?>">        
      </li>
      <li>
            <?php $classname = isset($errors['name']) ? "form_li_invalid" : "form_li" ;
            $value = isset($form['name']) ? $form['name'] : ""; ?> 
        <label class="form_label" for="name">Name<span class="red">*</span>:</label>
        <input class="<?=$classname;?>" type="text" id="name" name="name"  value="<?=$value;?>">
      </li>     
      <li>           
        <label class="form_label" for="phone">Phone number:</label>
        <input class="form_li" type="tel" id="phone" name="phone">
            <script type=""> 
              $(function(){
                $("#phone").mask("1-999-999-9999", {placeholder: "X" });
              });  
            </script>
      </li>
      <li>
            <?php $classname = isset($errors['question']) ? "form_li_invalid-text" : "form_li-text" ;
            $value = isset($form['question']) ? $form['question'] : ""; ?>
        <label class="form_label" for="question">Question<span class="red">*</span>:</label>
        <textarea class="<?=$classname;?>" rows="6" id="question" name="question" ><?=$value;?></textarea>
      </li>      
      <li>
        <div><span class="red">* required fields</span></div>
        <input class="form_send popup" type="submit" name="send" value="SEND" id="myBtn" onclick="this.className = (this.className == 'color-gray' ? 'square-new' : 'color-gray')">
        <script>
          
            
        </script>
      </li>
    </ul>
  </form>  
</div>   
  <?php  
   if (isset($clean)) {
    $to = "resume@ooo-modern.ru";
    //$to = "nickolay.isaeff@gmail.com";
    $letter = $_POST['subject'];
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
    $msg = "Email: ".$_POST['email']."\n";$msg .="Name: ".$_POST['name']."\n";$msg .= "Question: ".$_POST['question']."\n";$msg .= "Phone Number: ".$_POST['phone']."\n";
    mail($to, $letter, $msg, $headerss);    
    } 
    $classname = (isset($clean)) ? "modal" : "modal-none" ;
    $value = isset($form['question']) ? $form['question'] : ""; ?>   
    <div id="myModal" class="<?=$classname;?>">      
    <!-- Modal content -->
    <div class="modal-content">
    <span class="close"></span>
    <b class="red">Thanks for your question!</b>  
    <p>Our experts will reply you by email as soon as possible.</p>
    </div>
    <script src="/js/modal.js"></script> 
    </div>         
    
           
   