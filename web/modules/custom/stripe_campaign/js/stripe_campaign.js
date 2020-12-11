/**
 * @file
 * Provides stripe attachment logic.
 */

(function ($, window, Drupal, drupalSettings, Stripe) {

  'use strict';

  /**
   * Attaches the stripe behavior
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   */
  Drupal.behaviors.stripeCampaign = {
    attach: function (context, settings) {

      $('#edit-other-amount').once('campaign').each(function(){
        $(this).keydown(function() {
          $("input[id^='edit-amount-']").prop("checked", false);
        });
      });

      $('.form-item-stripe').on('drupalStripe.elementCreated', function(event, type, element, elements) {
        // Do something on card.
        console.log('Stripe elements instance: ', elements);
        console.log('Stripe ' + type + ' element intance:', element);
        element.on('ready', function(e) {
          // Add an event handler
        });
      });
    }
  };

})(jQuery, window, Drupal, drupalSettings, Stripe);
