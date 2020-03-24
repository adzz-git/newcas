<div class="faq" itemscope itemtype="https://schema.org/FAQPage">
  <?php if(!empty($node->field_question_a)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_a['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_a['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_b)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_b['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_b['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_c)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_c['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_c['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_d)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_d['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_d['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_e)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_e['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_e['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_f)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_f['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_f['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_g)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_g['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_g['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if(!empty($node->field_question_h)): ?>
    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
      <h3 class="font-m font-weight-bold m-0 p-3 border-bottom" itemprop="name"><?php print $node->field_question_h['und'][0]['value']; ?></h3>
      <div class="bg-gray p-3 hide" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
        <div itemprop="text">
          <?php print $node->field_answer_h['und'][0]['value']; ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
