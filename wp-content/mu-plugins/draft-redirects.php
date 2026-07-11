<?php
add_action("template_redirect", function() {
  $slugs = ["academy","courses","resource","catalogue","calculations-2",
            "process-heating","hot-water-consumption","waste-to-energy-technology",
            "privacy-policy-2"];
  $uri = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), "/");
  if (in_array($uri, $slugs)) {
    wp_redirect(home_url("/"), 302);
    exit;
  }
});