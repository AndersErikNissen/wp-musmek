<?php
$data = get_section_data( 'section_faq_', get_the_ID() );

if ( $data ) : 
  
$questions = array_filter( $data['questions'], function( $value ) {
  return !empty( $value['question'] );
} ); 

if ( count( $questions ) > 0 ) : ?>

<section class="section-faq" itemscope itemtype="https://schema.org/FAQPage">
  <div class="cols-6">
    <?php if ( !empty( $data['title'] ) ) : ?>
      <h2 class="h2 text-center">
        <?= $data['title']; ?>
      </h2>
    <?php endif; ?>

    <ul class="section-faq__questions">
      <?php foreach( $data['questions'] as $question ) :
        if ( empty( $question['question'] ) || empty( $question['answer'] ) ) continue; ?>

        <li class="section-faq__question js-faq-question" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <div class="section-faq__question-header js-faq-question-trigger">
            <h3 class="p-large" itemprop="name">
              <?= $question['question'] ?>
            </h3>

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 11.4953V8.5514H8.41076V0H11.5892V8.5514H20V11.4953H11.5892V20H8.41076V11.4953H0Z" fill="currentColor"/>
            </svg>
          </div>

          <div class="section-faq__question-content" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p itemprop="text">
              <?= $question['answer']; ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<?php endif; endif;