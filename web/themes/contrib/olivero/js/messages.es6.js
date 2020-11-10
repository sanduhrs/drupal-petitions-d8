/**
 * @file
 * Messages.
 */
(Drupal => {
  Drupal.behaviors.messages = {
    attach(context) {
      const messages = context.querySelectorAll(
        '.messages:not(.messages-processed)',
      );

      messages.forEach(el => {
        const messageContainer = el.querySelector('.messages__container');

        const closeBtnWrapper = document.createElement('div');
        closeBtnWrapper.setAttribute('class', 'messages__button');

        const closeBtn = document.createElement('button');
        closeBtn.setAttribute('type', 'button');
        closeBtn.setAttribute('class', 'messages__close');

        const closeBtnText = document.createElement('span');
        closeBtnText.setAttribute('class', 'visually-hidden');
        closeBtnText.innerText = Drupal.t('Close message');

        messageContainer.appendChild(closeBtnWrapper);
        closeBtnWrapper.appendChild(closeBtn);
        closeBtn.appendChild(closeBtnText);

        el.classList.add('messages-processed');

        closeBtn.addEventListener('click', () => {
          el.classList.add('hidden');
        });
      });
    },
  };
})(Drupal);
