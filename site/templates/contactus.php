<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. * 
 * This default template must not be removed. It is used whenever Kirby cannot find a template with the name of the content file.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */





?>
<?php snippet('header') ?>

<main>
  <?php snippet('intro') ?>

  <form class="contact-form" method="post" action="/send-contact">
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">This email will not be shared, will be used for reaching you.</small>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" name="subject" aria-describedby="subjectDesc" placeholder="Enter the subject" required>
      <small id="subjectDesc" class="form-text text-muted">This is the subject about what you're looking to talk about.</small>
    </div>
    <div class="form-group">
      <label for="message">Message:</label>
      <textarea type="email" class="form-control" id="message" name="message" aria-describedby="messageHelp" placeholder="Enter the message" required></textarea>
      <small id="messageHelp" class="form-text text-muted">Is pretty much the message you want to send to us.</small>
    </div>
    <input type="hidden" name="to" value="<?= $page->contact()->text() ?>">
    <button type="submit" class="btn btn-primary">Send</button>
  </form>
</main>

<?php snippet('footer') ?>
