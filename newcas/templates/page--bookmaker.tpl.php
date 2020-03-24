<?php include_once('inc/header.inc'); ?>
<div class="bg-white">
	<?php include_once('inc/review_top.inc'); ?>
	<div id="review_content" class="pb-3 bg-gray pt-3">
		<div class="container">
      <div class="row">
        <div class="col-md-9">
					<div class="bg-white shadow-sm mb-4 rounded over-hidden">
						<h4 class="align-middle background-main border-bottom d-block font-m text-uppercase text-white">
							<span class="align-middle background-complimentary d-inline-block icon-dice mr-2 p-1 text-white"></span> <?php print t('Available Sports'); ?>
						</h4>
						<?php print render($page['content_c']); ?>
					</div>
					<div class="bg-white p-3 shadow-sm rounded over-hidden">
						<?php include_once('inc/bookie_review_main.inc'); ?>
					</div>
					<?php if(!$slim): ?>
					<div class="row">
						<div class="col-md-6 mt-4 mb-md-0">
							<div class="bg-white shadow-sm h-100 rounded over-hidden">
								<h4 class="align-middle background-main border-bottom d-block font-m text-uppercase text-white">
									<span class="align-middle background-complimentary d-inline-block icon-chart-bars mr-2 p-1 text-white"></span> <?php print t('general information'); ?>
								</h4>
								<?php include_once('inc/review_info.inc'); ?>
							</div>
						</div>
						<div class="col-md-6 mt-4 mb-md-0">
							<div class="bg-white shadow-sm h-100 rounded over-hidden">
								<h4 class="align-middle background-main border-bottom d-block font-m text-uppercase text-white">
									<span class="align-middle background-complimentary d-inline-block icon-sync mr-2 p-1 text-white"></span> <?php print t('transactions'); ?>
								</h4>
								<?php include_once('inc/review_pay.inc'); ?>
							</div>
						</div>
						<?php if(!empty($node->field_question_a)): ?>
							<div class="col-12 mt-4">
								<div class="bg-white shadow-sm rounded over-hidden">
									<h2 class="font-lg font-weight-bold color-main d-block text-uppercase p-2"><?php print $casino_name.' '.t('FAQ'); ?></h2>
									<?php include_once('inc/faq.inc'); ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
        </div>
        <div class="col-md-3 position-sticky sticky-top">
          <?php include_once('inc/bookie_review_side_top.inc'); ?>
        </div>
      </div>
		</div>
	</div>
</div>
<?php print $messages; ?>
<?php include_once('inc/footer.inc'); ?>
