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
  Drupal.behaviors.stripeExamples = {
    attach: function (context, settings) {

      $('.form-item-stripe').on('drupalStripe.elementCreate', function(event, type, options) {
        console.log('Stripe ' + type + ' create options:', options);
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
