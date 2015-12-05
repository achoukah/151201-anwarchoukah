<?php snippet('header')?>

<style type="text/css">

</style>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html()?></h1>

      <form action="<?php echo $page->url()?>" method="post">

         <label<?php e($form->hasError('_from'), ' class="erroneous"')?> for="email">E-Mail</label>
         <input type="email" name="_from" id="email" value="<?php $form->echoValue('_from')?>" required/>

         <label for="subject">Subject</label>
         <input name="subject" id="subject" required><?php $form->echoValue('subject')?></input>

         <label for="message">Message</label>
         <textarea name="message" id="message" required><?php $form->echoValue('message')?></textarea>

         <label class="uniform__potty" for="website">Please leave this field blank</label>
         <input type="text" name="website" id="website" class="uniform__potty" />

<?php if ($form->hasMessage()):?>
            <div class="message <?php e($form->successful(), 'success', 'error')?>">
<?php $form->echoMessage()?>
</div>
<?php endif;?>

            <button type="submit" name="_submit" value="<?php echo $form->token()?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

      </form>

</div>

</main>

<?php snippet('footer')?>