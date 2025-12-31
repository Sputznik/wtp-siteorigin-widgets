<?php
  $html_prompt     = $instance['html_prompt'] ? $instance['html_prompt'] : "";
  $markdown_prompt = $instance['markdown_prompt'] ? $instance['markdown_prompt'] : "";
?>
<div class="wtp-ai-prompt prompt-code" data-behaviour="wtp-ai-prompt">
  <div class="wtp-html-prompt"><?php echo $html_prompt; ?></div>
  <div class="wtp-markdown-prompt" style="display:none;"><?php echo $markdown_prompt; ?></div>
  <button type="button" class="copy-wtp-markdown-prompt">Copy Prompt</button>
</div>
