
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/formstyle.css'?>" /> 

 
  <form id="contact" action="" method="post">
    <h3>Quick Recipes</h3>
    <h4>Write your recipes and get feedback !</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your recipes name  " type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Cooking Time" type="number" tabindex="3" required>
    </fieldset>
     <fieldset>
      <textarea placeholder="Type your Ingrediants Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Recipes Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Add Recipes</button>
    </fieldset>
  </form>
 
 
