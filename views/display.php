<div class="pyro-widget-mailchimp">
  <?php if ($options['show_title'] == '1'): ?>
    <h3><?php echo $options['widget']['instance_title']; ?></h3>
  <?php endif ?>
  <form action="<?php echo $options['form_action'] ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
    <input type="email" value="" name="EMAIL" class="email" id="mce-email" placeholder="<?php echo $options['email_placeholder'] ?>" required="">
    <input type="submit" value="<?php echo $options['submit_value'] ?>" name="subscribe" id="mc-embedded-subscribe" class="button">
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px; width:0; height:0; overflow:hidden;"><input type="text" name="<?php echo $options['hidden_value'] ?>" tabindex="-1" value=""></div>
  </form>
</div>
