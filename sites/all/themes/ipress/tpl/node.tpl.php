<?php

/**
 * @file
 * Default theme implementation to display a node.
 */
?>

  <?php if ($teaser): ?>
<!--<?php if ($display_submitted): ?>
 <?php print $user_picture; ?><?php print $name; ?>
<?php endif; ?>-->
  <?php endif; ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); 
  $content['field_image']['#label_display']='hidden';?>
  <?php if ( ($teaser) ): ?>
     <h2 class="nodeTitle">
        <a href="<?php print $node_url; ?>">
              <?php $s=strlen($title);
                        if($s>55): ?>
                 <?php print substr($title,0,55)."...";?>
                 <?php else:?>
                 <?php print $title; ?>
               <?php endif?>
        </a>
     </h2>
<?php endif;?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <!-- <div class="submitted">
      <?php print $submitted; ?>
    </div> -->
  <?php endif; ?>

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>

