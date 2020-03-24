<script type="application/ld+json">
  {
  "@context":"https://schema.org",
  "@type":"Review",
  "author": {
    "@type":"Person",
    "name":"<?php print $writer; ?>",
    "sameAs":""
  },
  "url": "<?php print $_SERVER['SERVER_NAME'].'/'.drupal_get_path_alias(); ?>",
  "datePublished":"<?php print Date('d/m/Y', $node->created); ?>",
  "publisher": {
    "@type":"Organization",
        "name":"<?php print $site_name; ?>",
        "sameAs":"<?php print $_SERVER['SERVER_NAME']; ?>"
  },
  "description":"<?php print strip_tags($desc); ?>",
  "inLanguage":"en",
  "itemReviewed": {
    "@type":"Organization",
    "name": "<?php print $casino_name; ?>",
    "sameAs": "<?php print $website; ?>",
    "image": "<?php print $casino_logo; ?>",
    "telephone": "<?php print $telephone; ?>"
  },
    "reviewRating": {
       "@type":"Rating",
       "worstRating":1,
       "bestRating":10,
       "ratingValue":<?php print $rating; ?>
    }
  }
</script>
