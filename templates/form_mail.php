    <form class="form form--invalid" action="form1.php" method="POST" id="form_question"> 
    <h2 class ="write_us-title">WRITE US</h2>
    <ul class="form-input">
      <li>
            <?php $classname = isset($errors['subject']) ? "form_li_invalid" : "form_li" ;
            $value = isset($form['subject']) ? $form['subject'] : ""; ?>  
        <label class="form_label" for="subject">Subject<span class="red">*</span>:</label>
        <select class="<?=$classname;?> form_li-select" id="subject" name="subject" value="<?=$value;?>" required onchange="this.setAttribute('data-selected', true)">
                    <option disabled selected hidden><span class="select-subject">Select Subject</span></option>
                    <option>Building Credit History</option>
                    <option>Bad Credit</option>
                    <option>Credit Cards for Business</option>
                    <option>General</option>
                    <option>Balance Transfer</option>
                    <option>Credit Card Rewards</option>
                    <option>Good Credit</option>
        </select>
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
        <input class="form_send popup" type="submit" name="send" value="SEND" id="myBtn" onclick="btn_onclick()">
      </li>
    </ul>
  </form>     
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
    
           
   