/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function () {
  var settingsElement = document.querySelector('head > script[type="application/json"][data-drupal-selector="drupal-settings-json"], body > script[type="application/json"][data-drupal-selector="drupal-settings-json"]');

  window.drupalSettings = {};

  if (settingsElement !== null) {
    window.drupalSettings = JSON.parse(settingsElement.textContent);
  }
})();;
window.drupalTranslations = {"strings":{"":{"Image":"Image","Link":"Link","Unlink":"Link entfernen","Edit Link":"Link bearbeiten","Home":"Startseite","Next":"Weiter","closed":"geschlossen","Cancel":"Abbrechen","Edit":"Bearbeiten","Save":"Speichern","Open":"Ge\u00f6ffnet","Sunday":"Sonntag","Monday":"Montag","Tuesday":"Dienstag","Wednesday":"Mittwoch","Thursday":"Donnerstag","Friday":"Freitag","Saturday":"Samstag","Continue":"Weiter","Done":"Fertig","OK":"OK","Prev":"Vorheriges","Mon":"Mo.","Tue":"Di.","Wed":"Mi.","Thu":"Do.","Fri":"Fr.","Sat":"Sa.","Sun":"So.","May":"Mai","Close":"Schlie\u00dfen","Show":"Anzeigen","Today":"Heute","Jan":"Jan.","Feb":"Febr.","Mar":"M\u00e4rz","Apr":"Apr.","Jun":"Juni","Jul":"Juli","Aug":"Aug.","Sep":"Sep","Oct":"Okt.","Nov":"Nov.","Dec":"Dez.","Extend":"Erweitern","Su":"So","Mo":"Mo","Tu":"Di","We":"Mi","Th":"Do","Fr":"Fr","Sa":"Sa","Changed":"Ge\u00e4ndert","Loading...":"Wird geladen...","Please wait...":"Bitte warten...","Hide":"Ausblenden","Not promoted":"nicht auf der Startseite","mm\/dd\/yy":"dd.mm.yy","Quick edit":"Direktbearbeitungsmodus","By @name on @date":"Von @name am @date","By @name":"Von @name","Not in menu":"Nicht im Men\u00fc","Alias: @alias":"Alias: @alias","No alias":"Kein Alias","@label":"@label","New revision":"Neue Revision","Drag to re-order":"Ziehen, um die Reihenfolge zu \u00e4ndern","Changes made in this table will not be saved until the form is submitted.":"\u00c4nderungen in dieser Tabelle werden nicht gespeichert, bis dieses Formular abgesendet wurde.","Discard changes":"\u00c4nderungen verwerfen","Show description":"Beschreibung anzeigen","Saving":"Wird gespeichert","No revision":"Keine Revision","Not restricted":"Uneingeschr\u00e4nkt","(active tab)":"(aktiver Reiter)","An AJAX HTTP error occurred.":"Ein AJAX-HTTP-Fehler ist aufgetreten.","HTTP Result Code: !status":"HTTP-R\u00fcckgabe-Code: !status","An AJAX HTTP request terminated abnormally.":"Eine AJAX-Anfrage ist abnormal beendet worden.","Debugging information follows.":"Im Folgenden finden Sie Debugging-Informationen.","Path: !uri":"Pfad: !uri","StatusText: !statusText":"Statustext: !statusText","ResponseText: !responseText":"Antworttext: !responseText","ReadyState: !readyState":"ReadyState: !readyState","Restricted to certain pages":"Auf bestimmte Seiten eingeschr\u00e4nkt","The block cannot be placed in this region.":"Der Block kann nicht in dieser Region abgelegt werden.","Hide summary":"Zusammenfassung ausblenden","Edit summary":"Zusammenfassung bearbeiten","Collapse":"Zusammenklappen","Show row weights":"Zeilenreihenfolge anzeigen","Hide row weights":"Zeilenreihenfolge ausblenden","Hide description":"Beschreibung ausblenden","You have unsaved changes":"Es gibt ungespeicherte \u00c4nderungen","Needs to be updated":"Aktualisierung erforderlich","Does not need to be updated":"Keine Aktualisierung erforderlich","Show all columns":"Alle Spalten zeigen","Show table cells that were hidden to make the table fit within a small screen.":"Zeige die Tabellenzellen, die ausgeblendet wurden, um die Tabelle auf kleinen Bildschirmen anzeigen zu k\u00f6nnen.","List additional actions":"Weitere Aktionen auflisten","Flag other translations as outdated":"Andere \u00dcbersetzungen als veraltet kennzeichnen","Do not flag other translations as outdated":"Andere \u00dcbersetzungen nicht als veraltet kennzeichnen","opened":"ge\u00f6ffnet","Horizontal orientation":"Horizontale Ausrichtung","Vertical orientation":"Vertikale Ausrichtung","Tray orientation changed to @orientation.":"Ausrichtung der aufklappbaren Einstellungsleiste in  @orientation ge\u00e4ndert.","You have unsaved changes.":"Es sind nicht gespeicherte \u00c4nderungen vorhanden.","@action @title configuration options":"@action @title Konfigurationseinstellungen","Tabbing is no longer constrained by the Contextual module.":"Das Verwenden der Tabulatortaste wird nicht l\u00e4nger vom Contextual-Modul eingeschr\u00e4nkt.","Tabbing is constrained to a set of @contextualsCount and the edit mode toggle.":"Tabulatornavigation ist auf eine Gruppe von @contextualsCount und den Bearbeitungsmodusumschalter beschr\u00e4nkt.","Press the esc key to exit.":"Zum Beenden die Escape-Taste dr\u00fccken.","@count contextual link\u0003@count contextual links":"@count Kontextlink\u0003@count Kontextlinks","!tour_item of !total":"!tour_item von !total","End tour":"Tour beenden","Discard changes?":"\u00c4nderungen verwerfen?","The toolbar cannot be set to a horizontal orientation when it is locked.":"Die Toolbar kann nicht horizontal angeordnet werden, wenn Sie gesperrt ist.","Could not load the form for \u003Cq\u003E@field-label\u003C\/q\u003E, either due to a website problem or a network connection problem.\u003Cbr\u003EPlease try again.":"Das Formular f\u00fcr das Feld \u003Cq\u003E@field-label\u003C\/q\u003E kann entweder wegen eines Problems auf der Website oder wegen einem Problem mit Ihrer Netzwerkverbindung nicht geladen werden. Bitte versuchen Sie es noch einmal.","Your changes to \u003Cq\u003E@entity-title\u003C\/q\u003E could not be saved, either due to a website problem or a network connection problem.\u003Cbr\u003EPlease try again.":"Die \u00c4nderungen an \u003Cq\u003E@entity-title\u003C\/q\u003E konnten nicht gespeichert werden, entweder durch ein Website-Problem oder ein Problem mit der Netzwerkverbindung.\u003Cbr\u003EBitte versuchen Sie es erneut.","Changing the text format to %text_format will permanently remove content that is not allowed in that text format.\u003Cbr\u003E\u003Cbr\u003ESave your changes before switching the text format to avoid losing data.":"Das \u00c4ndern des Textformats in %text_format entfernt dauerhaft Inhalt, der in diesem Textformat nicht erlaubt ist.\u003Cbr\u003E\u003Cbr\u003ESpeichern Sie Ihre \u00c4nderungen bevor Sie das Textformat umstellen, um Datenverlust zu vermeiden.","Change text format?":"Textformat \u00e4ndern?","Rich Text Editor, !label field":"Rich-Text-Editor, !label Feld","Tray \u0022@tray\u0022 @action.":"Aufklappbare Einstellungsleiste \u201e@tray\u201c @action.","Tray @action.":"Aufklappbare Einstellungsleiste @action.","Hide lower priority columns":"Niedrig priorisierte Spalten ausblenden","The response failed verification so will not be processed.":"Die Verifizierung der Antwort ist fehlgeschlagen, deshalb wird die Verarbeitung nicht fortgef\u00fchrt.","The callback URL is not local and not trusted: !url":"Die Callback-URL ist nicht lokal und nicht vertrauensw\u00fcrdig: !url","CustomMessage: !customMessage":"Benutzerdefinierte Nachricht: !customMessage","Network problem!":"Netzwerkproblem!","Authored on @date":"Bearbeitet am @date","1 block is available in the modified list.\u0003@count blocks are available in the modified list.":"1 Block ist in der \u00fcberarbeiteten Liste verf\u00fcgbar.\u0003@count Bl\u00f6cke sind in der \u00fcberarbeiteten Liste verf\u00fcgbar."},"Long month name":{"January":"Januar","February":"Februar","March":"M\u00e4rz","April":"April","May":"Mai","June":"Juni","July":"Juli","August":"August","September":"September","October":"Oktober","November":"November","December":"Dezember"}},"pluralFormula":{"1":0,"default":1}};;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

window.Drupal = { behaviors: {}, locale: {} };

(function (Drupal, drupalSettings, drupalTranslations, console, Proxy, Reflect) {
  Drupal.throwError = function (error) {
    setTimeout(function () {
      throw error;
    }, 0);
  };

  Drupal.attachBehaviors = function (context, settings) {
    context = context || document;
    settings = settings || drupalSettings;
    var behaviors = Drupal.behaviors;

    Object.keys(behaviors || {}).forEach(function (i) {
      if (typeof behaviors[i].attach === 'function') {
        try {
          behaviors[i].attach(context, settings);
        } catch (e) {
          Drupal.throwError(e);
        }
      }
    });
  };

  Drupal.detachBehaviors = function (context, settings, trigger) {
    context = context || document;
    settings = settings || drupalSettings;
    trigger = trigger || 'unload';
    var behaviors = Drupal.behaviors;

    Object.keys(behaviors || {}).forEach(function (i) {
      if (typeof behaviors[i].detach === 'function') {
        try {
          behaviors[i].detach(context, settings, trigger);
        } catch (e) {
          Drupal.throwError(e);
        }
      }
    });
  };

  Drupal.checkPlain = function (str) {
    str = str.toString().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    return str;
  };

  Drupal.formatString = function (str, args) {
    var processedArgs = {};

    Object.keys(args || {}).forEach(function (key) {
      switch (key.charAt(0)) {
        case '@':
          processedArgs[key] = Drupal.checkPlain(args[key]);
          break;

        case '!':
          processedArgs[key] = args[key];
          break;

        default:
          processedArgs[key] = Drupal.theme('placeholder', args[key]);
          break;
      }
    });

    return Drupal.stringReplace(str, processedArgs, null);
  };

  Drupal.stringReplace = function (str, args, keys) {
    if (str.length === 0) {
      return str;
    }

    if (!Array.isArray(keys)) {
      keys = Object.keys(args || {});

      keys.sort(function (a, b) {
        return a.length - b.length;
      });
    }

    if (keys.length === 0) {
      return str;
    }

    var key = keys.pop();
    var fragments = str.split(key);

    if (keys.length) {
      for (var i = 0; i < fragments.length; i++) {
        fragments[i] = Drupal.stringReplace(fragments[i], args, keys.slice(0));
      }
    }

    return fragments.join(args[key]);
  };

  Drupal.t = function (str, args, options) {
    options = options || {};
    options.context = options.context || '';

    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.strings && drupalTranslations.strings[options.context] && drupalTranslations.strings[options.context][str]) {
      str = drupalTranslations.strings[options.context][str];
    }

    if (args) {
      str = Drupal.formatString(str, args);
    }
    return str;
  };

  Drupal.url = function (path) {
    return drupalSettings.path.baseUrl + drupalSettings.path.pathPrefix + path;
  };

  Drupal.url.toAbsolute = function (url) {
    var urlParsingNode = document.createElement('a');

    try {
      url = decodeURIComponent(url);
    } catch (e) {}

    urlParsingNode.setAttribute('href', url);

    return urlParsingNode.cloneNode(false).href;
  };

  Drupal.url.isLocal = function (url) {
    var absoluteUrl = Drupal.url.toAbsolute(url);
    var protocol = window.location.protocol;

    if (protocol === 'http:' && absoluteUrl.indexOf('https:') === 0) {
      protocol = 'https:';
    }
    var baseUrl = protocol + '//' + window.location.host + drupalSettings.path.baseUrl.slice(0, -1);

    try {
      absoluteUrl = decodeURIComponent(absoluteUrl);
    } catch (e) {}
    try {
      baseUrl = decodeURIComponent(baseUrl);
    } catch (e) {}

    return absoluteUrl === baseUrl || absoluteUrl.indexOf(baseUrl + '/') === 0;
  };

  Drupal.formatPlural = function (count, singular, plural, args, options) {
    args = args || {};
    args['@count'] = count;

    var pluralDelimiter = drupalSettings.pluralDelimiter;
    var translations = Drupal.t(singular + pluralDelimiter + plural, args, options).split(pluralDelimiter);
    var index = 0;

    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.pluralFormula) {
      index = count in drupalTranslations.pluralFormula ? drupalTranslations.pluralFormula[count] : drupalTranslations.pluralFormula.default;
    } else if (args['@count'] !== 1) {
      index = 1;
    }

    return translations[index];
  };

  Drupal.encodePath = function (item) {
    return window.encodeURIComponent(item).replace(/%2F/g, '/');
  };

  Drupal.deprecationError = function (_ref) {
    var message = _ref.message;

    if (drupalSettings.suppressDeprecationErrors === false && typeof console !== 'undefined' && console.warn) {
      console.warn('[Deprecation] ' + message);
    }
  };

  Drupal.deprecatedProperty = function (_ref2) {
    var target = _ref2.target,
        deprecatedProperty = _ref2.deprecatedProperty,
        message = _ref2.message;

    if (!Proxy || !Reflect) {
      return target;
    }

    return new Proxy(target, {
      get: function get(target, key) {
        for (var _len = arguments.length, rest = Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
          rest[_key - 2] = arguments[_key];
        }

        if (key === deprecatedProperty) {
          Drupal.deprecationError({ message: message });
        }
        return Reflect.get.apply(Reflect, [target, key].concat(rest));
      }
    });
  };

  Drupal.theme = function (func) {
    if (func in Drupal.theme) {
      var _Drupal$theme;

      for (var _len2 = arguments.length, args = Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
        args[_key2 - 1] = arguments[_key2];
      }

      return (_Drupal$theme = Drupal.theme)[func].apply(_Drupal$theme, args);
    }
  };

  Drupal.theme.placeholder = function (str) {
    return '<em class="placeholder">' + Drupal.checkPlain(str) + '</em>';
  };
})(Drupal, window.drupalSettings, window.drupalTranslations, window.console, window.Proxy, window.Reflect);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

if (window.jQuery) {
  jQuery.noConflict();
}

document.documentElement.className += ' js';

(function (Drupal, drupalSettings) {
  var domReady = function domReady(callback) {
    if (document.readyState !== 'loading') {
      callback();
    } else {
      var listener = function listener() {
        callback();
        document.removeEventListener('DOMContentLoaded', listener);
      };
      document.addEventListener('DOMContentLoaded', listener);
    }
  };

  domReady(function () {
    Drupal.attachBehaviors(document, drupalSettings);
  });
})(Drupal, window.drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal) {
  Drupal.theme.checkbox = function () {
    return '<input type="checkbox" class="form-checkbox form-boolean form-boolean--type-checkbox"/>';
  };
})(Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = function (callback, thisArg) {
    thisArg = thisArg || window;

    for (var i = 0; i < this.length; i++) {
      callback.call(thisArg, this[i], i, this);
    }
  };
}

if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
};
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function () {
  window.drupalSettings = window.drupalSettings || {};
  window.drupalSettings.olivero = window.drupalSettings.olivero || {};
  document.documentElement.classList.add('js');

  function isDesktopNav() {
    var navButtons = document.querySelector('.mobile-buttons');
    return window.getComputedStyle(navButtons).getPropertyValue('display') === 'none';
  }

  drupalSettings.olivero.isDesktopNav = isDesktopNav;
  var wideNavButton = document.querySelector('.nav-primary__button');
  var siteHeaderFixable = document.querySelector('.site-header__fixable');

  function wideNavIsOpen() {
    return wideNavButton.getAttribute('aria-expanded') === 'true';
  }

  function showWideNav() {
    if (isDesktopNav()) {
      wideNavButton.setAttribute('aria-expanded', 'true');
      siteHeaderFixable.classList.add('is-expanded');
    }
  }

  function hideWideNav() {
    if (isDesktopNav()) {
      wideNavButton.setAttribute('aria-expanded', 'false');
      siteHeaderFixable.classList.remove('is-expanded');
    }
  }

  if ('IntersectionObserver' in window && 'IntersectionObserverEntry' in window && 'intersectionRatio' in window.IntersectionObserverEntry.prototype) {
    var fixables = document.querySelectorAll('.fixable');

    function toggleDesktopNavVisibility(entries) {
      if (!isDesktopNav()) return;
      entries.forEach(function (entry) {
        if (entry.intersectionRatio < 1) {
          fixables.forEach(function (el) {
            return el.classList.add('js-fixed');
          });
        } else {
          fixables.forEach(function (el) {
            return el.classList.remove('js-fixed');
          });
        }
      });
    }

    function getRootMargin() {
      var rootMarginTop = 72;
      var _document = document,
          body = _document.body;

      if (body.classList.contains('toolbar-fixed')) {
        rootMarginTop -= 39;
      }

      if (body.classList.contains('toolbar-horizontal') && body.classList.contains('toolbar-tray-open')) {
        rootMarginTop -= 40;
      }

      return "".concat(rootMarginTop, "px 0px 0px 0px");
    }

    function monitorNavPosition() {
      var primaryNav = document.querySelector('.site-header');
      var options = {
        rootMargin: getRootMargin(),
        threshold: [0.999, 1]
      };
      var observer = new IntersectionObserver(toggleDesktopNavVisibility, options);
      observer.observe(primaryNav);
    }

    wideNavButton.addEventListener('click', function () {
      if (!wideNavIsOpen()) {
        showWideNav();
      } else {
        hideWideNav();
      }
    });
    siteHeaderFixable.querySelector('.site-header__inner').addEventListener('focusin', showWideNav);
    document.querySelector('.skip-link').addEventListener('click', hideWideNav);
    monitorNavPosition();
  }

  document.addEventListener('keyup', function (e) {
    if (e.keyCode === 27) {
      if ('toggleSearchVisibility' in drupalSettings.olivero && 'searchIsVisible' in drupalSettings.olivero && drupalSettings.olivero.searchIsVisible()) {
        drupalSettings.olivero.toggleSearchVisibility(false);
      } else {
          hideWideNav();
        }
    }
  });
})();;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function () {
  function isNavOpen(navWrapper) {
    return navWrapper.classList.contains('is-active');
  }

  function toggleNav(props, state) {
    var value = !!state;
    props.navButton.setAttribute('aria-expanded', value);

    if (value) {
      props.body.classList.add('js-overlay-active');
      props.body.classList.add('js-fixed');
      props.navWrapper.classList.add('is-active');
    } else {
      props.body.classList.remove('js-overlay-active');
      props.body.classList.remove('js-fixed');
      props.navWrapper.classList.remove('is-active');
    }
  }

  function init(props) {
    props.navButton.setAttribute('aria-controls', props.navWrapperId);
    props.navButton.setAttribute('aria-expanded', 'false');
    props.navButton.addEventListener('click', function () {
      toggleNav(props, !isNavOpen(props.navWrapper));
    });
    document.addEventListener('keyup', function (e) {
      if (e.key === 'Escape') {
        if (props.settings.olivero.areAnySubnavsOpen()) {
          props.settings.olivero.closeAllSubNav();
        } else {
          toggleNav(props, false);
        }
      }
    });
    props.overlay.addEventListener('click', function () {
      toggleNav(props, false);
    });
    props.overlay.addEventListener('touchstart', function () {
      toggleNav(props, false);
    });
    props.navWrapper.addEventListener('keydown', function (e) {
      if (e.key === 'Tab') {
        if (e.shiftKey) {
          if (document.activeElement === props.firstFocusableEl && !props.settings.olivero.isDesktopNav()) {
            props.navButton.focus();
            e.preventDefault();
          }
        } else if (document.activeElement === props.lastFocusableEl && !props.settings.olivero.isDesktopNav()) {
          props.navButton.focus();
          e.preventDefault();
        }
      }
    });
    window.addEventListener('resize', function () {
      if (props.settings.olivero.isDesktopNav()) {
        toggleNav(props, false);
        props.body.classList.remove('js-overlay-active', 'js-fixed');
      }
    });
  }

  Drupal.behaviors.oliveroNavigation = {
    attach: function attach(context, settings) {
      var navWrapperId = 'header-nav';
      var navWrapper = context.querySelector("#".concat(navWrapperId, ":not(.").concat(navWrapperId, "-processed)"));

      if (navWrapper) {
        navWrapper.classList.add("".concat(navWrapperId, "-processed"));
        var navButton = context.querySelector('.mobile-nav-button');
        var body = context.querySelector('body');
        var overlay = context.querySelector('.overlay');
        var focusableNavElements = navWrapper.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
        var firstFocusableEl = focusableNavElements[0];
        var lastFocusableEl = focusableNavElements[focusableNavElements.length - 1];
        init({
          settings: settings,
          navWrapperId: navWrapperId,
          navWrapper: navWrapper,
          navButton: navButton,
          body: body,
          overlay: overlay,
          firstFocusableEl: firstFocusableEl,
          lastFocusableEl: lastFocusableEl
        });
      }
    }
  };
})();;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function () {
  var isDesktopNav = drupalSettings.olivero.isDesktopNav;
  var secondLevelNavMenus = document.querySelectorAll('.primary-nav__menu-item--has-children');

  function toggleSubNav(topLevelMenuITem, toState) {
    var button = topLevelMenuITem.querySelector('.primary-nav__button-toggle, .primary-nav__menu-link--button');
    var state = toState !== undefined ? toState : button.getAttribute('aria-expanded') !== 'true';

    if (state) {
      button.setAttribute('aria-expanded', 'true');
      topLevelMenuITem.querySelector('.primary-nav__menu--level-2').classList.add('is-active');
    } else {
      button.setAttribute('aria-expanded', 'false');
      topLevelMenuITem.querySelector('.primary-nav__menu--level-2').classList.remove('is-active');
    }
  }

  drupalSettings.olivero.toggleSubNav = toggleSubNav;
  secondLevelNavMenus.forEach(function (el) {
    var button = el.querySelector('.primary-nav__button-toggle, .primary-nav__menu-link--button');
    button.removeAttribute('aria-hidden');
    button.removeAttribute('tabindex');
    button.addEventListener('click', function (e) {
      var topLevelMenuITem = e.currentTarget.parentNode;
      toggleSubNav(topLevelMenuITem);
    });
    el.addEventListener('mouseover', function (e) {
      if (isDesktopNav()) {
        toggleSubNav(e.currentTarget, true);
      }
    });
    el.addEventListener('mouseout', function (e) {
      if (isDesktopNav()) {
        toggleSubNav(e.currentTarget, false);
      }
    });
  });

  function closeAllSubNav() {
    secondLevelNavMenus.forEach(function (el) {
      toggleSubNav(el, false);
    });
  }

  drupalSettings.olivero.closeAllSubNav = closeAllSubNav;

  function areAnySubnavsOpen() {
    var subNavsAreOpen = false;
    secondLevelNavMenus.forEach(function (el) {
      var button = el.querySelector('.primary-nav__button-toggle');
      var state = button.getAttribute('aria-expanded') === 'true';

      if (state) {
        subNavsAreOpen = true;
      }
    });
    return subNavsAreOpen;
  }

  drupalSettings.olivero.areAnySubnavsOpen = areAnySubnavsOpen;
  document.addEventListener('keyup', function (e) {
    if (e.keyCode === 27 && isDesktopNav()) {
      closeAllSubNav();
    }
  });
})();;
