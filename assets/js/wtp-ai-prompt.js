jQuery( '[data-behaviour=wtp-ai-prompt]' ).each( function(){
  var $prompt           = jQuery( this ),
      $copy_btn         = $prompt.find(".copy-wtp-markdown-prompt"),
      markdown_prompt   = $prompt.find(".wtp-markdown-prompt").text();

  $copy_btn.click( function(){
    navigator.clipboard.writeText(markdown_prompt).then(function() {
      alert('Copied!');
    }, function(err) {
      console.error('Failed to copy.');
      console.error(err);
    });
  });

});
