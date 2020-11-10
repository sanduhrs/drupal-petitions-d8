(() => {
  function toggleLogo(isChecked) {
    const headerInner = document.querySelector('.site-branding__inner');
    if (headerInner) {
      const currentLogo = headerInner.querySelector('.site-branding__logo');

      if (isChecked) {
        const logoHTML = `
        <a href="/" rel="home" class="site-branding__logo">
          <img src="/themes/contrib/olivero/logo.svg" alt="Home">
        </a>`;

        if (currentLogo) {
          headerInner.removeChild(currentLogo);
        }

        headerInner.innerHTML = logoHTML + headerInner.innerHTML;
      } else if (currentLogo) {
        headerInner.removeChild(currentLogo);
      }
    }

    sessionStorage.setItem('olivero.debug.toggleLogo', isChecked);
  }

  function toggleRequiredAttr(isChecked) {
    const requiredFormElements = document.querySelectorAll('[required]');

    if (isChecked) {
      requiredFormElements.forEach(el => {
        el.removeAttribute('required');
        el.setAttribute('data-required', 'true');
      });
    } else {
      document.querySelectorAll('[data-required="true"]').forEach(el => {
        el.removeAttribute('data-required');
        el.setAttribute('required', 'true');
      });
    }

    sessionStorage.setItem('olivero.debug.toggleRequiredAttr', isChecked);
  }

  function toggleEditableSiteName(isChecked) {
    const siteNameText = document.querySelector('.site-branding__name a');
    if (siteNameText) {
      siteNameText.contentEditable = isChecked;

      if (isChecked) {
        siteNameText.dataset.origtext = siteNameText.textContent;
        siteNameText.textContent = 'Edit Me!';
      } else if (siteNameText.dataset.origtext) {
        siteNameText.textContent = siteNameText.dataset.origtext;
      }
    }

    sessionStorage.setItem('olivero.debug.toggleEditableSiteName', isChecked);
  }

  function toggleRtl(isChecked) {
    const html = document.querySelector('html');

    if (isChecked) {
      html.setAttribute('dir', 'rtl');
    } else {
      html.setAttribute('dir', 'ltr');
    }

    sessionStorage.setItem('olivero.debug.toggleRtl', isChecked);
  }

  function toggleAlwaysOnMobileNav(isChecked) {
    const body = document.querySelector('body');

    if (isChecked) {
      body.classList.add('is-always-mobile-nav');
    } else {
      body.classList.remove('is-always-mobile-nav');
    }

    sessionStorage.setItem('olivero.debug.toggleAlwaysOnMobileNav', isChecked);
  }

  function handleChange(e) {
    // eslint-disable-next-line default-case
    switch (e.target.id) {
      case 'logo-toggle':
        toggleLogo(e.target.checked);
        break;
      case 'edit-name-toggle':
        toggleEditableSiteName(e.target.checked);
        break;
      case 'rtl-toggle':
        toggleRtl(e.target.checked);
        break;
      case 'nav-toggle':
        toggleAlwaysOnMobileNav(e.target.checked);
        break;
      case 'required-toggle':
        toggleRequiredAttr(e.target.checked);
        break;
    }
  }

  function init() {
    // Create and append the HTML to the DOM
    const debugElement = document.createElement('div');
    debugElement.classList.add('olivero-debug');
    debugElement.innerHTML = `
      <button class="olivero-debug__close">Close</button>
      <h2 class="visually-hidden">Theme debug options</h2>
      <div class="olivero-debug__row"><input id="logo-toggle" type="checkbox"><label for="logo-toggle">Logo</label></div>
      <div class="olivero-debug__row"><input id="edit-name-toggle" type="checkbox"><label for="edit-name-toggle">Editable Site Name</label></div>
      <div class="olivero-debug__row"><input id="rtl-toggle" type="checkbox"><label for="rtl-toggle">RTL</label></div>
      <div class="olivero-debug__row"><input id="nav-toggle" type="checkbox"><label for="nav-toggle">Always on mobile nav</label></div>
      <div class="olivero-debug__row"><input id="required-toggle" type="checkbox"><label for="required-toggle">Clear required attribute on form elements</label></div>
      <div class="description">Disable debug in <a href="${window.drupalSettings.path.baseUrl}admin/appearance/settings/olivero">Theme Settings</a>.</div>
    `;
    document.querySelector('body').appendChild(debugElement);
    document
      .querySelector('.olivero-debug')
      .addEventListener('change', handleChange);

    document
      .querySelector('.olivero-debug__close')
      .addEventListener('click', () => {
        document.querySelector('.olivero-debug').remove();
      });

    // Get values from sessionStorage, and make changes to DOM.
    if (sessionStorage.getItem('olivero.debug.toggleLogo') != null) {
      toggleLogo(sessionStorage.getItem('olivero.debug.toggleLogo') === 'true');
    }

    if (sessionStorage.getItem('olivero.debug.toggleRequiredAttr') === 'true') {
      toggleRequiredAttr(true);
    }

    if (
      sessionStorage.getItem('olivero.debug.toggleEditableSiteName') != null
    ) {
      toggleEditableSiteName(
        sessionStorage.getItem('olivero.debug.toggleEditableSiteName') ===
          'true',
      );
    }

    if (sessionStorage.getItem('olivero.debug.toggleRtl') != null) {
      toggleRtl(sessionStorage.getItem('olivero.debug.toggleRtl') === 'true');
    }

    if (
      sessionStorage.getItem('olivero.debug.toggleAlwaysOnMobileNav') != null
    ) {
      toggleAlwaysOnMobileNav(
        sessionStorage.getItem('olivero.debug.toggleAlwaysOnMobileNav') ===
          'true',
      );
    }

    // Ensure that the initial value of the checkboxes matches what's in the DOM.
    if (document.querySelector('.site-branding__logo')) {
      document.getElementById('logo-toggle').checked = true;
    }

    if (sessionStorage.getItem('olivero.debug.toggleRequiredAttr') === 'true') {
      document.getElementById('required-toggle').checked = true;
    }

    if (
      document.querySelector('.site-branding__name a') &&
      document.querySelector('.site-branding__name a').contentEditable ===
        'true'
    ) {
      document.getElementById('edit-name-toggle').checked = true;
    }

    if (document.querySelector('html').getAttribute('dir') === 'rtl') {
      document.getElementById('rtl-toggle').checked = true;
    }

    if (
      document.querySelector('body').classList.contains('is-always-mobile-nav')
    ) {
      document.getElementById('nav-toggle').checked = true;
    }
  }

  init();
})();
