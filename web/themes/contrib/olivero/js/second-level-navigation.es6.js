(() => {
  const { isDesktopNav } = drupalSettings.olivero;
  const secondLevelNavMenus = document.querySelectorAll(
    '.primary-nav__menu-item--has-children',
  );

  /**
   * Shows and hides the specified menu item's second level submenu.
   *
   * @param {element} topLevelMenuITem - the <li> element that is the container for the menu and submenus.
   * @param {boolean} [toState] - Optional state where we want the submenu to end up.
   */
  function toggleSubNav(topLevelMenuITem, toState) {
    const button = topLevelMenuITem.querySelector(
      '.primary-nav__button-toggle, .primary-nav__menu-link--button',
    );
    const state =
      toState !== undefined
        ? toState
        : button.getAttribute('aria-expanded') !== 'true';

    if (state) {
      button.setAttribute('aria-expanded', 'true');
      topLevelMenuITem
        .querySelector('.primary-nav__menu--level-2')
        .classList.add('is-active');
    } else {
      button.setAttribute('aria-expanded', 'false');
      topLevelMenuITem
        .querySelector('.primary-nav__menu--level-2')
        .classList.remove('is-active');
    }
  }

  drupalSettings.olivero.toggleSubNav = toggleSubNav;

  // Add hover and click event listeners onto each subnav parent and it's button.
  secondLevelNavMenus.forEach(el => {
    const button = el.querySelector(
      '.primary-nav__button-toggle, .primary-nav__menu-link--button',
    );

    button.removeAttribute('aria-hidden');
    button.removeAttribute('tabindex');

    button.addEventListener('click', e => {
      const topLevelMenuITem = e.currentTarget.parentNode;
      toggleSubNav(topLevelMenuITem);
    });

    el.addEventListener('mouseover', e => {
      if (isDesktopNav()) {
        toggleSubNav(e.currentTarget, true);
      }
    });

    el.addEventListener('mouseout', e => {
      if (isDesktopNav()) {
        toggleSubNav(e.currentTarget, false);
      }
    });
  });

  /**
   * Close all second level subnav menus.
   */
  function closeAllSubNav() {
    secondLevelNavMenus.forEach(el => {
      toggleSubNav(el, false);
    });
  }

  drupalSettings.olivero.closeAllSubNav = closeAllSubNav;

  /**
   * Checks if any subnavigation items are currently active.
   * @return {boolean} If subnav is currently open.
   */
  function areAnySubnavsOpen() {
    let subNavsAreOpen = false;

    secondLevelNavMenus.forEach(el => {
      const button = el.querySelector('.primary-nav__button-toggle');
      const state = button.getAttribute('aria-expanded') === 'true';

      if (state) {
        subNavsAreOpen = true;
      }
    });

    return subNavsAreOpen;
  }

  drupalSettings.olivero.areAnySubnavsOpen = areAnySubnavsOpen;

  // Ensure that desktop submenus close when ESC key is pressed.
  document.addEventListener('keyup', e => {
    if (e.keyCode === 27 && isDesktopNav()) {
      closeAllSubNav();
    }
  });
})();
