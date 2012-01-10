<?php

function hook_node_info() {
  return array(
    'customtype' => array(
      'name' => t('Custom node type'),
      'base' => 'custom',
      'has_title' => TRUE,
      'title_label' => t('Custom node type title'),
      'has_body' => FALSE,
      'body_label' => t('Custom node type body'),
      'locked' => TRUE,

      /**
       * ----------------
       * Extra properties
       * ----------------
       */

      /**
       *  Submission form settings (core functional)
       *  ------------------------------------------
       *
       *  Preview before submitting
       *    node_preview_{$type}
       *    value <int>:
       *      0 => Disabled
       *      1 => Optional
       *      2 => Required
       */
      'node-preview' => 0,

      /**
       *  Publishing options (core functional)
       *  ------------------------------------
       *
       *  Default options
       *    node_options_{$type}
       *    value <array>:
       *      array('status', 'promote', 'sticky', 'revision')
       */
      'node-options' => array('status'),

      /**
       *  Display settings
       *  ----------------
       *
       *  Display author and date information
       *    node_submitted_{$type}
       *    value <int>:
       *      0 => Hide author and date information
       *      1 => Display author and date information
       */
      'node-submitted' => 0,

      /**
       *  Comment settings
       *  ----------------
       */
      'comment' => array(
        /**
         *  Default comment setting for new content
         *    comment_{$type}
         *    values <int>:
         *      0 => hidden
         *      1 => closed
         *      2 => open
         */
        'status' => 2,

        /**
         *  Threading
         *    comment_default_mode_{$type}
         *    values <int>:
         *      0 => don't show
         *      1 => show
         */
        'default-mode' => 1,

        /**
         *  Anonymous commenting settings
         * 	  comment_anonymous_{$type}
         *    value <int>:
         *      0 => Anonymous posters may not enter contact information
         *      1 => Anonymous posters may leave contact information
         *      2 => Anonymous posters must leave contact information
         */
        'anonymous' => 1,

        /**
         *  Comments per page
         *    comment_default_per_page_{$type}
         *    values <int>:
         *      10, 30, 50, 70, 90, 150, 200, 250, 300
         */
        'default-per-page' => 50,

        /**
         *  Show reply form on the same page as comments
         *    comment_form_location_{$type}
         *    values:
         *      0 => hide
         *      1 => show
         */
        'form-location' => 1,

        /**
         *  Preview comment
         *    comment_preview_{$type}
         *    values <int>:
         *      0 => disabled
         *      1 => optional
         *      2 => required
         */
        'preview' => 0,

        /**
         *  Allow comment title
         *    comment_subject_field_{$type}
         *    values <int>:
         *      0 => disallow
         *      1 => allow
         */
        'subject-field' => 0,
      ),
    ),
  );
}