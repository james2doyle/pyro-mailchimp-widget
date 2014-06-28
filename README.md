pyro-mailchimp-widget
=====================

A small widget for PyroCMS. Allows you to use "naked" MailChimp forms on any area of your site.

![screenshot](https://github.com/james2doyle/pyro-mailchimp-widget/raw/master/screenshot.png)

### Creating a Form

Create a [form on MailChimp](http://kb.mailchimp.com/article/how-can-i-add-my-signup-form-on-my-website#embedform). Copy the parts of the form output and paste them into the relevant fields in the widget.

### Styling

```css
.pyro-widget-mailchimp {
  /* the wrapper div on the form */
}
#mc-embedded-subscribe-form {
  /* the form element */
}
#mce-email {
  /* email input field */
}
#mc-embedded-subscribe {
  /* input submit button */
}
```

### Widget display

You can always edit the `view/display.php` and modify it to fit your desires.