/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/process/browser.js":
/*!*****************************************!*\
  !*** ./node_modules/process/browser.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),

/***/ "./node_modules/setimmediate/setImmediate.js":
/*!***************************************************!*\
  !*** ./node_modules/setimmediate/setImmediate.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, process) {(function (global, undefined) {
    "use strict";

    if (global.setImmediate) {
        return;
    }

    var nextHandle = 1; // Spec says greater than zero
    var tasksByHandle = {};
    var currentlyRunningATask = false;
    var doc = global.document;
    var registerImmediate;

    function setImmediate(callback) {
      // Callback can either be a function or a string
      if (typeof callback !== "function") {
        callback = new Function("" + callback);
      }
      // Copy function arguments
      var args = new Array(arguments.length - 1);
      for (var i = 0; i < args.length; i++) {
          args[i] = arguments[i + 1];
      }
      // Store and register the task
      var task = { callback: callback, args: args };
      tasksByHandle[nextHandle] = task;
      registerImmediate(nextHandle);
      return nextHandle++;
    }

    function clearImmediate(handle) {
        delete tasksByHandle[handle];
    }

    function run(task) {
        var callback = task.callback;
        var args = task.args;
        switch (args.length) {
        case 0:
            callback();
            break;
        case 1:
            callback(args[0]);
            break;
        case 2:
            callback(args[0], args[1]);
            break;
        case 3:
            callback(args[0], args[1], args[2]);
            break;
        default:
            callback.apply(undefined, args);
            break;
        }
    }

    function runIfPresent(handle) {
        // From the spec: "Wait until any invocations of this algorithm started before this one have completed."
        // So if we're currently running a task, we'll need to delay this invocation.
        if (currentlyRunningATask) {
            // Delay by doing a setTimeout. setImmediate was tried instead, but in Firefox 7 it generated a
            // "too much recursion" error.
            setTimeout(runIfPresent, 0, handle);
        } else {
            var task = tasksByHandle[handle];
            if (task) {
                currentlyRunningATask = true;
                try {
                    run(task);
                } finally {
                    clearImmediate(handle);
                    currentlyRunningATask = false;
                }
            }
        }
    }

    function installNextTickImplementation() {
        registerImmediate = function(handle) {
            process.nextTick(function () { runIfPresent(handle); });
        };
    }

    function canUsePostMessage() {
        // The test against `importScripts` prevents this implementation from being installed inside a web worker,
        // where `global.postMessage` means something completely different and can't be used for this purpose.
        if (global.postMessage && !global.importScripts) {
            var postMessageIsAsynchronous = true;
            var oldOnMessage = global.onmessage;
            global.onmessage = function() {
                postMessageIsAsynchronous = false;
            };
            global.postMessage("", "*");
            global.onmessage = oldOnMessage;
            return postMessageIsAsynchronous;
        }
    }

    function installPostMessageImplementation() {
        // Installs an event handler on `global` for the `message` event: see
        // * https://developer.mozilla.org/en/DOM/window.postMessage
        // * http://www.whatwg.org/specs/web-apps/current-work/multipage/comms.html#crossDocumentMessages

        var messagePrefix = "setImmediate$" + Math.random() + "$";
        var onGlobalMessage = function(event) {
            if (event.source === global &&
                typeof event.data === "string" &&
                event.data.indexOf(messagePrefix) === 0) {
                runIfPresent(+event.data.slice(messagePrefix.length));
            }
        };

        if (global.addEventListener) {
            global.addEventListener("message", onGlobalMessage, false);
        } else {
            global.attachEvent("onmessage", onGlobalMessage);
        }

        registerImmediate = function(handle) {
            global.postMessage(messagePrefix + handle, "*");
        };
    }

    function installMessageChannelImplementation() {
        var channel = new MessageChannel();
        channel.port1.onmessage = function(event) {
            var handle = event.data;
            runIfPresent(handle);
        };

        registerImmediate = function(handle) {
            channel.port2.postMessage(handle);
        };
    }

    function installReadyStateChangeImplementation() {
        var html = doc.documentElement;
        registerImmediate = function(handle) {
            // Create a <script> element; its readystatechange event will be fired asynchronously once it is inserted
            // into the document. Do so, thus queuing up the task. Remember to clean up once it's been called.
            var script = doc.createElement("script");
            script.onreadystatechange = function () {
                runIfPresent(handle);
                script.onreadystatechange = null;
                html.removeChild(script);
                script = null;
            };
            html.appendChild(script);
        };
    }

    function installSetTimeoutImplementation() {
        registerImmediate = function(handle) {
            setTimeout(runIfPresent, 0, handle);
        };
    }

    // If supported, we should attach to the prototype of global, since that is where setTimeout et al. live.
    var attachTo = Object.getPrototypeOf && Object.getPrototypeOf(global);
    attachTo = attachTo && attachTo.setTimeout ? attachTo : global;

    // Don't get fooled by e.g. browserify environments.
    if ({}.toString.call(global.process) === "[object process]") {
        // For Node.js before 0.9
        installNextTickImplementation();

    } else if (canUsePostMessage()) {
        // For non-IE10 modern browsers
        installPostMessageImplementation();

    } else if (global.MessageChannel) {
        // For web workers, where supported
        installMessageChannelImplementation();

    } else if (doc && "onreadystatechange" in doc.createElement("script")) {
        // For IE 6–8
        installReadyStateChangeImplementation();

    } else {
        // For older browsers
        installSetTimeoutImplementation();
    }

    attachTo.setImmediate = setImmediate;
    attachTo.clearImmediate = clearImmediate;
}(typeof self === "undefined" ? typeof global === "undefined" ? this : global : self));

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! ./../process/browser.js */ "./node_modules/process/browser.js")))

/***/ }),

/***/ "./node_modules/timers-browserify/main.js":
/*!************************************************!*\
  !*** ./node_modules/timers-browserify/main.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var scope = (typeof global !== "undefined" && global) ||
            (typeof self !== "undefined" && self) ||
            window;
var apply = Function.prototype.apply;

// DOM APIs, for completeness

exports.setTimeout = function() {
  return new Timeout(apply.call(setTimeout, scope, arguments), clearTimeout);
};
exports.setInterval = function() {
  return new Timeout(apply.call(setInterval, scope, arguments), clearInterval);
};
exports.clearTimeout =
exports.clearInterval = function(timeout) {
  if (timeout) {
    timeout.close();
  }
};

function Timeout(id, clearFn) {
  this._id = id;
  this._clearFn = clearFn;
}
Timeout.prototype.unref = Timeout.prototype.ref = function() {};
Timeout.prototype.close = function() {
  this._clearFn.call(scope, this._id);
};

// Does not start the time, just sets up the members needed.
exports.enroll = function(item, msecs) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = msecs;
};

exports.unenroll = function(item) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = -1;
};

exports._unrefActive = exports.active = function(item) {
  clearTimeout(item._idleTimeoutId);

  var msecs = item._idleTimeout;
  if (msecs >= 0) {
    item._idleTimeoutId = setTimeout(function onTimeout() {
      if (item._onTimeout)
        item._onTimeout();
    }, msecs);
  }
};

// setimmediate attaches itself to the global object
__webpack_require__(/*! setimmediate */ "./node_modules/setimmediate/setImmediate.js");
// On some exotic environments, it's not clear which object `setimmediate` was
// able to install onto.  Search each possibility in the same order as the
// `setimmediate` library.
exports.setImmediate = (typeof self !== "undefined" && self.setImmediate) ||
                       (typeof global !== "undefined" && global.setImmediate) ||
                       (this && this.setImmediate);
exports.clearImmediate = (typeof self !== "undefined" && self.clearImmediate) ||
                         (typeof global !== "undefined" && global.clearImmediate) ||
                         (this && this.clearImmediate);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

$(document).ready(function () {
  // Navigation Menu opener for small screens...
  $(".nav_trigger").click(function (e) {
    e.preventDefault();
    $("html").toggleClass("nav--on");
    $(".bar").toggleClass("animate");
  }); // Footer Navigation Menu opener for small screens...

  $(".footer_nav_trigger").click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass("nav--on");
  }); // Main Menu Dropdown opener.

  $(".drop_trigger").click(function (e) {
    e.preventDefault();
    $(this).parent().toggleClass("drop--on");
  }); // Documentation Screen...

  if ($('#docsScreen').length) {
    __webpack_require__(/*! ./docs.js */ "./resources/js/docs.js");
  }

  if (window.algolia_app_id != '') {
    __webpack_require__(/*! ./search.js */ "./resources/js/search.js");
  } // Handling scrolling to sections of the page...


  $('a[href*="#"]').not('[href="#"]').click(function (e) {
    e.preventDefault();

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 800);
      }
    }
  }); // Header Search Box...

  $(".header_content .search_box").click(function (e) {
    $(this).addClass("search--on");
  });
  $(document).mouseup(function (e) {
    var container = $(".header_content .search_box");

    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.removeClass("search--on");
    }
  });
});

/***/ }),

/***/ "./resources/js/docs.js":
/*!******************************!*\
  !*** ./resources/js/docs.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// $('.body_content').css('display', 'block');
__webpack_require__(/*! ./vendor/prism.js */ "./resources/js/vendor/prism.js");

var current = $('.docs_sidebar ul').find('li a[href="' + window.location.pathname + '"]');

if (current.length) {
  current.parent().parent().parent().addClass('sub--on');
  current.parent().addClass('active');
}

$(".docs_sidebar h2").click(function (e) {
  e.preventDefault();
  $(".navigation_contain ul li").removeClass("sub--on");
  $(this).parent().addClass("sub--on");
});
$('#version_switcher').change(function (e) {
  window.location = $('#version_switcher').val();
}); // $('.docs_main ul').first().appendTo('.docs_nav');

$('.docs_main blockquote p').each(function () {
  var str = $(this).html();
  var match = str.match(/\{(.*?)\}/);
  var img, color;

  if (match) {
    var type = match[1] || false;
  }

  if (type) {
    switch (type) {
      case "note":
        img = '/img/callouts/exclamation.min.svg';
        color = 'red';
        break;

      case "tip":
        img = '/img/callouts/lightbulb.min.svg';
        color = 'purple';
        break;

      case "laracasts":
      case "video":
        img = '/img/callouts/laracast.min.svg';
        color = 'blue';
        break;
    }

    $(this).before('<div class="icon ' + color + '"><img src="' + img + '"></div>');
    $(this).html(str.replace(/\{(.*?)\}/, ''));
    $(this).addClass('content');
    $(this).parent().addClass('callout');
  }
});

/***/ }),

/***/ "./resources/js/search.js":
/*!********************************!*\
  !*** ./resources/js/search.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var algoliasearch = __webpack_require__(/*! ./vendor/algoliasearch.js */ "./resources/js/vendor/algoliasearch.js");

var Hogan = __webpack_require__(/*! ./vendor/hogan.js */ "./resources/js/vendor/hogan.js");

__webpack_require__(/*! ./vendor/typeahead.js */ "./resources/js/vendor/typeahead.js");

var client = algoliasearch(window.algolia_app_id, window.algolia_search_key);
var index = client.initIndex('docs');
var templates = {
  suggestion: Hogan.compile($('#search_suggestion_template').html()),
  empty: Hogan.compile($('#search_empty_template').html()),
  footer: Hogan.compile($('#search_footer_template').html())
};
var $searchInput = $('.search_input');
var $article = $('.docs_main'); // Closes algolia results on blur

$searchInput.blur(function () {
  $(this).val('');
}); // typeahead datasets
// https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets

var datasets = [];
datasets.push({
  source: function searchAlgolia(query, cb) {
    index.search(query, {
      hitsPerPage: 5,
      tagFilters: [window.version]
    }, function searchCallback(err, content) {
      if (err) {
        throw err;
      }

      cb(content.hits);
    });
  },
  templates: {
    suggestion: templates.suggestion.render.bind(templates.suggestion),
    empty: templates.empty.render.bind(templates.empty),
    footer: templates.footer.render.bind(templates.footer)
  }
});
var typeahead = $searchInput.typeahead({
  hint: false
}, datasets);
var old_input = '';
typeahead.on('typeahead:selected', function changePage(e, item) {
  window.location.href = '/docs/' + item._tags[0] + '/' + item.link;
});
typeahead.on('keyup', function (e) {
  old_input = $(this).typeahead('val');

  if ($(this).val() === '' && old_input.length == $(this).typeahead('val')) {
    $article.css('opacity', '1');
    $searchInput.closest('#search-wrapper').removeClass('not-empty');
  } else {
    $article.css('opacity', '0.1');
    $searchInput.closest('#search-wrapper').addClass('not-empty');
  }

  if (e.keyCode === 27) {
    $article.css('opacity', '1');
  }
});
typeahead.on('typeahead:closed', function () {
  $article.css('opacity', '1');
});
typeahead.on('typeahead:closed', function (e) {
  // keep menu open if input element is still focused
  if ($(e.target).is(':focus')) {
    return false;
  }
});
$('#cross').click(function () {
  typeahead.typeahead('val', '').keyup();
  $article.css('opacity', '1');
});

/***/ }),

/***/ "./resources/js/vendor/algoliasearch.js":
/*!**********************************************!*\
  !*** ./resources/js/vendor/algoliasearch.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, setImmediate) {var require;var require;var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var require;var require;function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*! algoliasearch 3.7.7 | © 2014, 2015 Algolia SAS | github.com/algolia/algoliasearch-client-js */
(function (f) {
  var g;

  if (typeof window !== 'undefined') {
    g = window;
  } else if (typeof self !== 'undefined') {
    g = self;
  }

  g.ALGOLIA_MIGRATION_LAYER = f();
})(function () {
  var define, module, exports;
  return function e(t, n, r) {
    function s(o, u) {
      if (!n[o]) {
        if (!t[o]) {
          var a = typeof require == "function" && require;
          if (!u && a) return require(o, !0);
          if (i) return i(o, !0);
          var f = new Error("Cannot find module '" + o + "'");
          throw f.code = "MODULE_NOT_FOUND", f;
        }

        var l = n[o] = {
          exports: {}
        };
        t[o][0].call(l.exports, function (e) {
          var n = t[o][1][e];
          return s(n ? n : e);
        }, l, l.exports, e, t, n, r);
      }

      return n[o].exports;
    }

    var i = typeof require == "function" && require;

    for (var o = 0; o < r.length; o++) {
      s(r[o]);
    }

    return s;
  }({
    1: [function (require, module, exports) {
      module.exports = function load(src, opts, cb) {
        var head = document.head || document.getElementsByTagName('head')[0];
        var script = document.createElement('script');

        if (typeof opts === 'function') {
          cb = opts;
          opts = {};
        }

        opts = opts || {};

        cb = cb || function () {};

        script.type = opts.type || 'text/javascript';
        script.charset = opts.charset || 'utf8';
        script.async = 'async' in opts ? !!opts.async : true;
        script.src = src;

        if (opts.attrs) {
          setAttributes(script, opts.attrs);
        }

        if (opts.text) {
          script.text = '' + opts.text;
        }

        var onend = 'onload' in script ? stdOnEnd : ieOnEnd;
        onend(script, cb); // some good legacy browsers (firefox) fail the 'in' detection above
        // so as a fallback we always set onload
        // old IE will ignore this and new IE will set onload

        if (!script.onload) {
          stdOnEnd(script, cb);
        }

        head.appendChild(script);
      };

      function setAttributes(script, attrs) {
        for (var attr in attrs) {
          script.setAttribute(attr, attrs[attr]);
        }
      }

      function stdOnEnd(script, cb) {
        script.onload = function () {
          this.onerror = this.onload = null;
          cb(null, script);
        };

        script.onerror = function () {
          // this.onload = null here is necessary
          // because even IE9 works not like others
          this.onerror = this.onload = null;
          cb(new Error('Failed to load ' + this.src), script);
        };
      }

      function ieOnEnd(script, cb) {
        script.onreadystatechange = function () {
          if (this.readyState != 'complete' && this.readyState != 'loaded') return;
          this.onreadystatechange = null;
          cb(null, script); // there is no way to catch loading errors in IE8
        };
      }
    }, {}],
    2: [function (require, module, exports) {
      'use strict'; // this module helps finding if the current page is using
      // the cdn.jsdelivr.net/algoliasearch/latest/$BUILDNAME.min.js version

      module.exports = isUsingLatest;

      function isUsingLatest(buildName) {
        var toFind = new RegExp('cdn\\.jsdelivr\\.net/algoliasearch/latest/' + buildName.replace('.', '\\.') + // algoliasearch, algoliasearch.angular
        '(?:\\.min)?\\.js$'); // [.min].js

        var scripts = document.getElementsByTagName('script');
        var found = false;

        for (var currentScript = 0, nbScripts = scripts.length; currentScript < nbScripts; currentScript++) {
          if (scripts[currentScript].src && toFind.test(scripts[currentScript].src)) {
            found = true;
            break;
          }
        }

        return found;
      }
    }, {}],
    3: [function (require, module, exports) {
      'use strict';

      module.exports = loadV2;

      function loadV2(buildName) {
        var loadScript = require(1);

        var v2ScriptUrl = '//cdn.jsdelivr.net/algoliasearch/2/' + buildName + '.min.js';
        var message = '-- AlgoliaSearch `latest` warning --\n' + 'Warning, you are using the `latest` version string from jsDelivr to load the AlgoliaSearch library.\n' + 'Using `latest` is no more recommended, you should load //cdn.jsdelivr.net/algoliasearch/2/algoliasearch.min.js\n\n' + 'Also, we updated the AlgoliaSearch JavaScript client to V3. If you want to upgrade,\n' + 'please read our migration guide at https://github.com/algolia/algoliasearch-client-js/wiki/Migration-guide-from-2.x.x-to-3.x.x\n' + '-- /AlgoliaSearch  `latest` warning --';

        if (window.console) {
          if (window.console.warn) {
            window.console.warn(message);
          } else if (window.console.log) {
            window.console.log(message);
          }
        } // If current script loaded asynchronously,
        // it will load the script with DOMElement
        // otherwise, it will load the script with document.write


        try {
          // why \x3c? http://stackoverflow.com/a/236106/147079
          document.write('\x3Cscript>window.ALGOLIA_SUPPORTS_DOCWRITE = true\x3C/script>');

          if (window.ALGOLIA_SUPPORTS_DOCWRITE === true) {
            document.write('\x3Cscript src="' + v2ScriptUrl + '">\x3C/script>');
            scriptLoaded('document.write')();
          } else {
            loadScript(v2ScriptUrl, scriptLoaded('DOMElement'));
          }
        } catch (e) {
          loadScript(v2ScriptUrl, scriptLoaded('DOMElement'));
        }
      }

      function scriptLoaded(method) {
        return function log() {
          var message = 'AlgoliaSearch: loaded V2 script using ' + method;

          if (window.console && window.console.log) {
            window.console.log(message);
          }
        };
      }
    }, {
      "1": 1
    }],
    4: [function (require, module, exports) {
      'use strict';
      /*eslint no-unused-vars: [2, {"vars": "local"}]*/

      module.exports = oldGlobals; // put old window.AlgoliaSearch.. into window. again so that
      // users upgrading to V3 without changing their code, will be warned

      function oldGlobals() {
        var message = '-- AlgoliaSearch V2 => V3 error --\n' + 'You are trying to use a new version of the AlgoliaSearch JavaScript client with an old notation.\n' + 'Please read our migration guide at https://github.com/algolia/algoliasearch-client-js/wiki/Migration-guide-from-2.x.x-to-3.x.x\n' + '-- /AlgoliaSearch V2 => V3 error --';

        window.AlgoliaSearch = function () {
          throw new Error(message);
        };

        window.AlgoliaSearchHelper = function () {
          throw new Error(message);
        };

        window.AlgoliaExplainResults = function () {
          throw new Error(message);
        };
      }
    }, {}],
    5: [function (require, module, exports) {
      'use strict'; // This script will be browserified and prepended to the normal build
      // directly in window, not wrapped in any module definition
      // To avoid cases where we are loaded with /latest/ along with

      migrationLayer("algoliasearch"); // Now onto the V2 related code:
      //  If the client is using /latest/$BUILDNAME.min.js, load V2 of the library
      //
      //  Otherwise, setup a migration layer that will throw on old constructors like
      //  new AlgoliaSearch().
      //  So that users upgrading from v2 to v3 will have a clear information
      //  message on what to do if they did not read the migration guide

      function migrationLayer(buildName) {
        var isUsingLatest = require(2);

        var loadV2 = require(3);

        var oldGlobals = require(4);

        if (isUsingLatest(buildName)) {
          loadV2(buildName);
        } else {
          oldGlobals();
        }
      }
    }, {
      "2": 2,
      "3": 3,
      "4": 4
    }]
  }, {}, [5])(5);
});

(function (f) {
  if (( false ? undefined : _typeof(exports)) === "object" && typeof module !== "undefined") {
    module.exports = f();
  } else if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (f),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else { var g; }
})(function () {
  var define, module, exports;
  return function e(t, n, r) {
    function s(o, u) {
      if (!n[o]) {
        if (!t[o]) {
          var a = typeof require == "function" && require;
          if (!u && a) return require(o, !0);
          if (i) return i(o, !0);
          var f = new Error("Cannot find module '" + o + "'");
          throw f.code = "MODULE_NOT_FOUND", f;
        }

        var l = n[o] = {
          exports: {}
        };
        t[o][0].call(l.exports, function (e) {
          var n = t[o][1][e];
          return s(n ? n : e);
        }, l, l.exports, e, t, n, r);
      }

      return n[o].exports;
    }

    var i = typeof require == "function" && require;

    for (var o = 0; o < r.length; o++) {
      s(r[o]);
    }

    return s;
  }({
    1: [function (require, module, exports) {
      // Copyright Joyent, Inc. and other Node contributors.
      //
      // Permission is hereby granted, free of charge, to any person obtaining a
      // copy of this software and associated documentation files (the
      // "Software"), to deal in the Software without restriction, including
      // without limitation the rights to use, copy, modify, merge, publish,
      // distribute, sublicense, and/or sell copies of the Software, and to permit
      // persons to whom the Software is furnished to do so, subject to the
      // following conditions:
      //
      // The above copyright notice and this permission notice shall be included
      // in all copies or substantial portions of the Software.
      //
      // THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
      // OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
      // MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
      // NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
      // DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
      // OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
      // USE OR OTHER DEALINGS IN THE SOFTWARE.
      function EventEmitter() {
        this._events = this._events || {};
        this._maxListeners = this._maxListeners || undefined;
      }

      module.exports = EventEmitter; // Backwards-compat with node 0.10.x

      EventEmitter.EventEmitter = EventEmitter;
      EventEmitter.prototype._events = undefined;
      EventEmitter.prototype._maxListeners = undefined; // By default EventEmitters will print a warning if more than 10 listeners are
      // added to it. This is a useful default which helps finding memory leaks.

      EventEmitter.defaultMaxListeners = 10; // Obviously not all Emitters should be limited to 10. This function allows
      // that to be increased. Set to zero for unlimited.

      EventEmitter.prototype.setMaxListeners = function (n) {
        if (!isNumber(n) || n < 0 || isNaN(n)) throw TypeError('n must be a positive number');
        this._maxListeners = n;
        return this;
      };

      EventEmitter.prototype.emit = function (type) {
        var er, handler, len, args, i, listeners;
        if (!this._events) this._events = {}; // If there is no 'error' event listener then throw.

        if (type === 'error') {
          if (!this._events.error || isObject(this._events.error) && !this._events.error.length) {
            er = arguments[1];

            if (er instanceof Error) {
              throw er; // Unhandled 'error' event
            }

            throw TypeError('Uncaught, unspecified "error" event.');
          }
        }

        handler = this._events[type];
        if (isUndefined(handler)) return false;

        if (isFunction(handler)) {
          switch (arguments.length) {
            // fast cases
            case 1:
              handler.call(this);
              break;

            case 2:
              handler.call(this, arguments[1]);
              break;

            case 3:
              handler.call(this, arguments[1], arguments[2]);
              break;
            // slower

            default:
              len = arguments.length;
              args = new Array(len - 1);

              for (i = 1; i < len; i++) {
                args[i - 1] = arguments[i];
              }

              handler.apply(this, args);
          }
        } else if (isObject(handler)) {
          len = arguments.length;
          args = new Array(len - 1);

          for (i = 1; i < len; i++) {
            args[i - 1] = arguments[i];
          }

          listeners = handler.slice();
          len = listeners.length;

          for (i = 0; i < len; i++) {
            listeners[i].apply(this, args);
          }
        }

        return true;
      };

      EventEmitter.prototype.addListener = function (type, listener) {
        var m;
        if (!isFunction(listener)) throw TypeError('listener must be a function');
        if (!this._events) this._events = {}; // To avoid recursion in the case that type === "newListener"! Before
        // adding it to the listeners, first emit "newListener".

        if (this._events.newListener) this.emit('newListener', type, isFunction(listener.listener) ? listener.listener : listener);
        if (!this._events[type]) // Optimize the case of one listener. Don't need the extra array object.
          this._events[type] = listener;else if (isObject(this._events[type])) // If we've already got an array, just append.
          this._events[type].push(listener);else // Adding the second element, need to change to array.
          this._events[type] = [this._events[type], listener]; // Check for listener leak

        if (isObject(this._events[type]) && !this._events[type].warned) {
          var m;

          if (!isUndefined(this._maxListeners)) {
            m = this._maxListeners;
          } else {
            m = EventEmitter.defaultMaxListeners;
          }

          if (m && m > 0 && this._events[type].length > m) {
            this._events[type].warned = true;
            console.error('(node) warning: possible EventEmitter memory ' + 'leak detected. %d listeners added. ' + 'Use emitter.setMaxListeners() to increase limit.', this._events[type].length);

            if (typeof console.trace === 'function') {
              // not supported in IE 10
              console.trace();
            }
          }
        }

        return this;
      };

      EventEmitter.prototype.on = EventEmitter.prototype.addListener;

      EventEmitter.prototype.once = function (type, listener) {
        if (!isFunction(listener)) throw TypeError('listener must be a function');
        var fired = false;

        function g() {
          this.removeListener(type, g);

          if (!fired) {
            fired = true;
            listener.apply(this, arguments);
          }
        }

        g.listener = listener;
        this.on(type, g);
        return this;
      }; // emits a 'removeListener' event iff the listener was removed


      EventEmitter.prototype.removeListener = function (type, listener) {
        var list, position, length, i;
        if (!isFunction(listener)) throw TypeError('listener must be a function');
        if (!this._events || !this._events[type]) return this;
        list = this._events[type];
        length = list.length;
        position = -1;

        if (list === listener || isFunction(list.listener) && list.listener === listener) {
          delete this._events[type];
          if (this._events.removeListener) this.emit('removeListener', type, listener);
        } else if (isObject(list)) {
          for (i = length; i-- > 0;) {
            if (list[i] === listener || list[i].listener && list[i].listener === listener) {
              position = i;
              break;
            }
          }

          if (position < 0) return this;

          if (list.length === 1) {
            list.length = 0;
            delete this._events[type];
          } else {
            list.splice(position, 1);
          }

          if (this._events.removeListener) this.emit('removeListener', type, listener);
        }

        return this;
      };

      EventEmitter.prototype.removeAllListeners = function (type) {
        var key, listeners;
        if (!this._events) return this; // not listening for removeListener, no need to emit

        if (!this._events.removeListener) {
          if (arguments.length === 0) this._events = {};else if (this._events[type]) delete this._events[type];
          return this;
        } // emit removeListener for all listeners on all events


        if (arguments.length === 0) {
          for (key in this._events) {
            if (key === 'removeListener') continue;
            this.removeAllListeners(key);
          }

          this.removeAllListeners('removeListener');
          this._events = {};
          return this;
        }

        listeners = this._events[type];

        if (isFunction(listeners)) {
          this.removeListener(type, listeners);
        } else {
          // LIFO order
          while (listeners.length) {
            this.removeListener(type, listeners[listeners.length - 1]);
          }
        }

        delete this._events[type];
        return this;
      };

      EventEmitter.prototype.listeners = function (type) {
        var ret;
        if (!this._events || !this._events[type]) ret = [];else if (isFunction(this._events[type])) ret = [this._events[type]];else ret = this._events[type].slice();
        return ret;
      };

      EventEmitter.listenerCount = function (emitter, type) {
        var ret;
        if (!emitter._events || !emitter._events[type]) ret = 0;else if (isFunction(emitter._events[type])) ret = 1;else ret = emitter._events[type].length;
        return ret;
      };

      function isFunction(arg) {
        return typeof arg === 'function';
      }

      function isNumber(arg) {
        return typeof arg === 'number';
      }

      function isObject(arg) {
        return _typeof(arg) === 'object' && arg !== null;
      }

      function isUndefined(arg) {
        return arg === void 0;
      }
    }, {}],
    2: [function (require, module, exports) {
      // shim for using process in browser
      var process = module.exports = {};
      var queue = [];
      var draining = false;
      var currentQueue;
      var queueIndex = -1;

      function cleanUpNextTick() {
        draining = false;

        if (currentQueue.length) {
          queue = currentQueue.concat(queue);
        } else {
          queueIndex = -1;
        }

        if (queue.length) {
          drainQueue();
        }
      }

      function drainQueue() {
        if (draining) {
          return;
        }

        var timeout = setTimeout(cleanUpNextTick);
        draining = true;
        var len = queue.length;

        while (len) {
          currentQueue = queue;
          queue = [];

          while (++queueIndex < len) {
            currentQueue[queueIndex].run();
          }

          queueIndex = -1;
          len = queue.length;
        }

        currentQueue = null;
        draining = false;
        clearTimeout(timeout);
      }

      process.nextTick = function (fun) {
        var args = new Array(arguments.length - 1);

        if (arguments.length > 1) {
          for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
          }
        }

        queue.push(new Item(fun, args));

        if (queue.length === 1 && !draining) {
          setTimeout(drainQueue, 0);
        }
      }; // v8 likes predictible objects


      function Item(fun, array) {
        this.fun = fun;
        this.array = array;
      }

      Item.prototype.run = function () {
        this.fun.apply(null, this.array);
      };

      process.title = 'browser';
      process.browser = true;
      process.env = {};
      process.argv = [];
      process.version = ''; // empty string to avoid regexp issues

      process.versions = {};

      function noop() {}

      process.on = noop;
      process.addListener = noop;
      process.once = noop;
      process.off = noop;
      process.removeListener = noop;
      process.removeAllListeners = noop;
      process.emit = noop;

      process.binding = function (name) {
        throw new Error('process.binding is not supported');
      }; // TODO(shtylman)


      process.cwd = function () {
        return '/';
      };

      process.chdir = function (dir) {
        throw new Error('process.chdir is not supported');
      };

      process.umask = function () {
        return 0;
      };
    }, {}],
    3: [function (require, module, exports) {
      // Copyright Joyent, Inc. and other Node contributors.
      //
      // Permission is hereby granted, free of charge, to any person obtaining a
      // copy of this software and associated documentation files (the
      // "Software"), to deal in the Software without restriction, including
      // without limitation the rights to use, copy, modify, merge, publish,
      // distribute, sublicense, and/or sell copies of the Software, and to permit
      // persons to whom the Software is furnished to do so, subject to the
      // following conditions:
      //
      // The above copyright notice and this permission notice shall be included
      // in all copies or substantial portions of the Software.
      //
      // THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
      // OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
      // MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
      // NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
      // DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
      // OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
      // USE OR OTHER DEALINGS IN THE SOFTWARE.
      'use strict'; // If obj.hasOwnProperty has been overridden, then calling
      // obj.hasOwnProperty(prop) will break.
      // See: https://github.com/joyent/node/issues/1707

      function hasOwnProperty(obj, prop) {
        return Object.prototype.hasOwnProperty.call(obj, prop);
      }

      module.exports = function (qs, sep, eq, options) {
        sep = sep || '&';
        eq = eq || '=';
        var obj = {};

        if (typeof qs !== 'string' || qs.length === 0) {
          return obj;
        }

        var regexp = /\+/g;
        qs = qs.split(sep);
        var maxKeys = 1000;

        if (options && typeof options.maxKeys === 'number') {
          maxKeys = options.maxKeys;
        }

        var len = qs.length; // maxKeys <= 0 means that we should not limit keys count

        if (maxKeys > 0 && len > maxKeys) {
          len = maxKeys;
        }

        for (var i = 0; i < len; ++i) {
          var x = qs[i].replace(regexp, '%20'),
              idx = x.indexOf(eq),
              kstr,
              vstr,
              k,
              v;

          if (idx >= 0) {
            kstr = x.substr(0, idx);
            vstr = x.substr(idx + 1);
          } else {
            kstr = x;
            vstr = '';
          }

          k = decodeURIComponent(kstr);
          v = decodeURIComponent(vstr);

          if (!hasOwnProperty(obj, k)) {
            obj[k] = v;
          } else if (isArray(obj[k])) {
            obj[k].push(v);
          } else {
            obj[k] = [obj[k], v];
          }
        }

        return obj;
      };

      var isArray = Array.isArray || function (xs) {
        return Object.prototype.toString.call(xs) === '[object Array]';
      };
    }, {}],
    4: [function (require, module, exports) {
      // Copyright Joyent, Inc. and other Node contributors.
      //
      // Permission is hereby granted, free of charge, to any person obtaining a
      // copy of this software and associated documentation files (the
      // "Software"), to deal in the Software without restriction, including
      // without limitation the rights to use, copy, modify, merge, publish,
      // distribute, sublicense, and/or sell copies of the Software, and to permit
      // persons to whom the Software is furnished to do so, subject to the
      // following conditions:
      //
      // The above copyright notice and this permission notice shall be included
      // in all copies or substantial portions of the Software.
      //
      // THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
      // OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
      // MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
      // NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
      // DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
      // OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
      // USE OR OTHER DEALINGS IN THE SOFTWARE.
      'use strict';

      var stringifyPrimitive = function stringifyPrimitive(v) {
        switch (_typeof(v)) {
          case 'string':
            return v;

          case 'boolean':
            return v ? 'true' : 'false';

          case 'number':
            return isFinite(v) ? v : '';

          default:
            return '';
        }
      };

      module.exports = function (obj, sep, eq, name) {
        sep = sep || '&';
        eq = eq || '=';

        if (obj === null) {
          obj = undefined;
        }

        if (_typeof(obj) === 'object') {
          return map(objectKeys(obj), function (k) {
            var ks = encodeURIComponent(stringifyPrimitive(k)) + eq;

            if (isArray(obj[k])) {
              return map(obj[k], function (v) {
                return ks + encodeURIComponent(stringifyPrimitive(v));
              }).join(sep);
            } else {
              return ks + encodeURIComponent(stringifyPrimitive(obj[k]));
            }
          }).join(sep);
        }

        if (!name) return '';
        return encodeURIComponent(stringifyPrimitive(name)) + eq + encodeURIComponent(stringifyPrimitive(obj));
      };

      var isArray = Array.isArray || function (xs) {
        return Object.prototype.toString.call(xs) === '[object Array]';
      };

      function map(xs, f) {
        if (xs.map) return xs.map(f);
        var res = [];

        for (var i = 0; i < xs.length; i++) {
          res.push(f(xs[i], i));
        }

        return res;
      }

      var objectKeys = Object.keys || function (obj) {
        var res = [];

        for (var key in obj) {
          if (Object.prototype.hasOwnProperty.call(obj, key)) res.push(key);
        }

        return res;
      };
    }, {}],
    5: [function (require, module, exports) {
      'use strict';

      exports.decode = exports.parse = require(3);
      exports.encode = exports.stringify = require(4);
    }, {
      "3": 3,
      "4": 4
    }],
    6: [function (require, module, exports) {
      /**
       * This is the web browser implementation of `debug()`.
       *
       * Expose `debug()` as the module.
       */
      exports = module.exports = require(7);
      exports.log = log;
      exports.formatArgs = formatArgs;
      exports.save = save;
      exports.load = load;
      exports.useColors = useColors;
      exports.storage = 'undefined' != typeof chrome && 'undefined' != typeof chrome.storage ? chrome.storage.local : localstorage();
      /**
       * Colors.
       */

      exports.colors = ['lightseagreen', 'forestgreen', 'goldenrod', 'dodgerblue', 'darkorchid', 'crimson'];
      /**
       * Currently only WebKit-based Web Inspectors, Firefox >= v31,
       * and the Firebug extension (any Firefox version) are known
       * to support "%c" CSS customizations.
       *
       * TODO: add a `localStorage` variable to explicitly enable/disable colors
       */

      function useColors() {
        // is webkit? http://stackoverflow.com/a/16459606/376773
        return 'WebkitAppearance' in document.documentElement.style || // is firebug? http://stackoverflow.com/a/398120/376773
        window.console && (console.firebug || console.exception && console.table) || // is firefox >= v31?
        // https://developer.mozilla.org/en-US/docs/Tools/Web_Console#Styling_messages
        navigator.userAgent.toLowerCase().match(/firefox\/(\d+)/) && parseInt(RegExp.$1, 10) >= 31;
      }
      /**
       * Map %j to `JSON.stringify()`, since no Web Inspectors do that by default.
       */


      exports.formatters.j = function (v) {
        return JSON.stringify(v);
      };
      /**
       * Colorize log arguments if enabled.
       *
       * @api public
       */


      function formatArgs() {
        var args = arguments;
        var useColors = this.useColors;
        args[0] = (useColors ? '%c' : '') + this.namespace + (useColors ? ' %c' : ' ') + args[0] + (useColors ? '%c ' : ' ') + '+' + exports.humanize(this.diff);
        if (!useColors) return args;
        var c = 'color: ' + this.color;
        args = [args[0], c, 'color: inherit'].concat(Array.prototype.slice.call(args, 1)); // the final "%c" is somewhat tricky, because there could be other
        // arguments passed either before or after the %c, so we need to
        // figure out the correct index to insert the CSS into

        var index = 0;
        var lastC = 0;
        args[0].replace(/%[a-z%]/g, function (match) {
          if ('%%' === match) return;
          index++;

          if ('%c' === match) {
            // we only are interested in the *last* %c
            // (the user may have provided their own)
            lastC = index;
          }
        });
        args.splice(lastC, 0, c);
        return args;
      }
      /**
       * Invokes `console.log()` when available.
       * No-op when `console.log` is not a "function".
       *
       * @api public
       */


      function log() {
        // this hackery is required for IE8/9, where
        // the `console.log` function doesn't have 'apply'
        return 'object' === (typeof console === "undefined" ? "undefined" : _typeof(console)) && console.log && Function.prototype.apply.call(console.log, console, arguments);
      }
      /**
       * Save `namespaces`.
       *
       * @param {String} namespaces
       * @api private
       */


      function save(namespaces) {
        try {
          if (null == namespaces) {
            exports.storage.removeItem('debug');
          } else {
            exports.storage.debug = namespaces;
          }
        } catch (e) {}
      }
      /**
       * Load `namespaces`.
       *
       * @return {String} returns the previously persisted debug modes
       * @api private
       */


      function load() {
        var r;

        try {
          r = exports.storage.debug;
        } catch (e) {}

        return r;
      }
      /**
       * Enable namespaces listed in `localStorage.debug` initially.
       */


      exports.enable(load());
      /**
       * Localstorage attempts to return the localstorage.
       *
       * This is necessary because safari throws
       * when a user disables cookies/localstorage
       * and you attempt to access it.
       *
       * @return {LocalStorage}
       * @api private
       */

      function localstorage() {
        try {
          return window.localStorage;
        } catch (e) {}
      }
    }, {
      "7": 7
    }],
    7: [function (require, module, exports) {
      /**
       * This is the common logic for both the Node.js and web browser
       * implementations of `debug()`.
       *
       * Expose `debug()` as the module.
       */
      exports = module.exports = debug;
      exports.coerce = coerce;
      exports.disable = disable;
      exports.enable = enable;
      exports.enabled = enabled;
      exports.humanize = require(8);
      /**
       * The currently active debug mode names, and names to skip.
       */

      exports.names = [];
      exports.skips = [];
      /**
       * Map of special "%n" handling functions, for the debug "format" argument.
       *
       * Valid key names are a single, lowercased letter, i.e. "n".
       */

      exports.formatters = {};
      /**
       * Previously assigned color.
       */

      var prevColor = 0;
      /**
       * Previous log timestamp.
       */

      var prevTime;
      /**
       * Select a color.
       *
       * @return {Number}
       * @api private
       */

      function selectColor() {
        return exports.colors[prevColor++ % exports.colors.length];
      }
      /**
       * Create a debugger with the given `namespace`.
       *
       * @param {String} namespace
       * @return {Function}
       * @api public
       */


      function debug(namespace) {
        // define the `disabled` version
        function disabled() {}

        disabled.enabled = false; // define the `enabled` version

        function enabled() {
          var self = enabled; // set `diff` timestamp

          var curr = +new Date();
          var ms = curr - (prevTime || curr);
          self.diff = ms;
          self.prev = prevTime;
          self.curr = curr;
          prevTime = curr; // add the `color` if not set

          if (null == self.useColors) self.useColors = exports.useColors();
          if (null == self.color && self.useColors) self.color = selectColor();
          var args = Array.prototype.slice.call(arguments);
          args[0] = exports.coerce(args[0]);

          if ('string' !== typeof args[0]) {
            // anything else let's inspect with %o
            args = ['%o'].concat(args);
          } // apply any `formatters` transformations


          var index = 0;
          args[0] = args[0].replace(/%([a-z%])/g, function (match, format) {
            // if we encounter an escaped % then don't increase the array index
            if (match === '%%') return match;
            index++;
            var formatter = exports.formatters[format];

            if ('function' === typeof formatter) {
              var val = args[index];
              match = formatter.call(self, val); // now we need to remove `args[index]` since it's inlined in the `format`

              args.splice(index, 1);
              index--;
            }

            return match;
          });

          if ('function' === typeof exports.formatArgs) {
            args = exports.formatArgs.apply(self, args);
          }

          var logFn = enabled.log || exports.log || console.log.bind(console);
          logFn.apply(self, args);
        }

        enabled.enabled = true;
        var fn = exports.enabled(namespace) ? enabled : disabled;
        fn.namespace = namespace;
        return fn;
      }
      /**
       * Enables a debug mode by namespaces. This can include modes
       * separated by a colon and wildcards.
       *
       * @param {String} namespaces
       * @api public
       */


      function enable(namespaces) {
        exports.save(namespaces);
        var split = (namespaces || '').split(/[\s,]+/);
        var len = split.length;

        for (var i = 0; i < len; i++) {
          if (!split[i]) continue; // ignore empty strings

          namespaces = split[i].replace(/\*/g, '.*?');

          if (namespaces[0] === '-') {
            exports.skips.push(new RegExp('^' + namespaces.substr(1) + '$'));
          } else {
            exports.names.push(new RegExp('^' + namespaces + '$'));
          }
        }
      }
      /**
       * Disable debug output.
       *
       * @api public
       */


      function disable() {
        exports.enable('');
      }
      /**
       * Returns true if the given mode name is enabled, false otherwise.
       *
       * @param {String} name
       * @return {Boolean}
       * @api public
       */


      function enabled(name) {
        var i, len;

        for (i = 0, len = exports.skips.length; i < len; i++) {
          if (exports.skips[i].test(name)) {
            return false;
          }
        }

        for (i = 0, len = exports.names.length; i < len; i++) {
          if (exports.names[i].test(name)) {
            return true;
          }
        }

        return false;
      }
      /**
       * Coerce `val`.
       *
       * @param {Mixed} val
       * @return {Mixed}
       * @api private
       */


      function coerce(val) {
        if (val instanceof Error) return val.stack || val.message;
        return val;
      }
    }, {
      "8": 8
    }],
    8: [function (require, module, exports) {
      /**
       * Helpers.
       */
      var s = 1000;
      var m = s * 60;
      var h = m * 60;
      var d = h * 24;
      var y = d * 365.25;
      /**
       * Parse or format the given `val`.
       *
       * Options:
       *
       *  - `long` verbose formatting [false]
       *
       * @param {String|Number} val
       * @param {Object} options
       * @return {String|Number}
       * @api public
       */

      module.exports = function (val, options) {
        options = options || {};
        if ('string' == typeof val) return parse(val); // long, short were "future reserved words in js", YUI compressor fail on them
        // https://github.com/algolia/algoliasearch-client-js/issues/113#issuecomment-111978606
        // https://github.com/yui/yuicompressor/issues/47
        // https://github.com/rauchg/ms.js/pull/40

        return options['long'] ? _long(val) : _short(val);
      };
      /**
       * Parse the given `str` and return milliseconds.
       *
       * @param {String} str
       * @return {Number}
       * @api private
       */


      function parse(str) {
        str = '' + str;
        if (str.length > 10000) return;
        var match = /^((?:\d+)?\.?\d+) *(milliseconds?|msecs?|ms|seconds?|secs?|s|minutes?|mins?|m|hours?|hrs?|h|days?|d|years?|yrs?|y)?$/i.exec(str);
        if (!match) return;
        var n = parseFloat(match[1]);
        var type = (match[2] || 'ms').toLowerCase();

        switch (type) {
          case 'years':
          case 'year':
          case 'yrs':
          case 'yr':
          case 'y':
            return n * y;

          case 'days':
          case 'day':
          case 'd':
            return n * d;

          case 'hours':
          case 'hour':
          case 'hrs':
          case 'hr':
          case 'h':
            return n * h;

          case 'minutes':
          case 'minute':
          case 'mins':
          case 'min':
          case 'm':
            return n * m;

          case 'seconds':
          case 'second':
          case 'secs':
          case 'sec':
          case 's':
            return n * s;

          case 'milliseconds':
          case 'millisecond':
          case 'msecs':
          case 'msec':
          case 'ms':
            return n;
        }
      }
      /**
       * Short format for `ms`.
       *
       * @param {Number} ms
       * @return {String}
       * @api private
       */


      function _short(ms) {
        if (ms >= d) return Math.round(ms / d) + 'd';
        if (ms >= h) return Math.round(ms / h) + 'h';
        if (ms >= m) return Math.round(ms / m) + 'm';
        if (ms >= s) return Math.round(ms / s) + 's';
        return ms + 'ms';
      }
      /**
       * Long format for `ms`.
       *
       * @param {Number} ms
       * @return {String}
       * @api private
       */


      function _long(ms) {
        return plural(ms, d, 'day') || plural(ms, h, 'hour') || plural(ms, m, 'minute') || plural(ms, s, 'second') || ms + ' ms';
      }
      /**
       * Pluralization helper.
       */


      function plural(ms, n, name) {
        if (ms < n) return;
        if (ms < n * 1.5) return Math.floor(ms / n) + ' ' + name;
        return Math.ceil(ms / n) + ' ' + name + 's';
      }
    }, {}],
    9: [function (require, module, exports) {
      (function (process, global) {
        /*!
         * @overview es6-promise - a tiny implementation of Promises/A+.
         * @copyright Copyright (c) 2014 Yehuda Katz, Tom Dale, Stefan Penner and contributors (Conversion to ES6 API by Jake Archibald)
         * @license   Licensed under MIT license
         *            See https://raw.githubusercontent.com/jakearchibald/es6-promise/master/LICENSE
         * @version   2.3.0
         */
        (function () {
          "use strict";

          function lib$es6$promise$utils$$objectOrFunction(x) {
            return typeof x === 'function' || _typeof(x) === 'object' && x !== null;
          }

          function lib$es6$promise$utils$$isFunction(x) {
            return typeof x === 'function';
          }

          function lib$es6$promise$utils$$isMaybeThenable(x) {
            return _typeof(x) === 'object' && x !== null;
          }

          var lib$es6$promise$utils$$_isArray;

          if (!Array.isArray) {
            lib$es6$promise$utils$$_isArray = function lib$es6$promise$utils$$_isArray(x) {
              return Object.prototype.toString.call(x) === '[object Array]';
            };
          } else {
            lib$es6$promise$utils$$_isArray = Array.isArray;
          }

          var lib$es6$promise$utils$$isArray = lib$es6$promise$utils$$_isArray;
          var lib$es6$promise$asap$$len = 0;
          var lib$es6$promise$asap$$toString = {}.toString;
          var lib$es6$promise$asap$$vertxNext;
          var lib$es6$promise$asap$$customSchedulerFn;

          var lib$es6$promise$asap$$asap = function asap(callback, arg) {
            lib$es6$promise$asap$$queue[lib$es6$promise$asap$$len] = callback;
            lib$es6$promise$asap$$queue[lib$es6$promise$asap$$len + 1] = arg;
            lib$es6$promise$asap$$len += 2;

            if (lib$es6$promise$asap$$len === 2) {
              // If len is 2, that means that we need to schedule an async flush.
              // If additional callbacks are queued before the queue is flushed, they
              // will be processed by this flush that we are scheduling.
              if (lib$es6$promise$asap$$customSchedulerFn) {
                lib$es6$promise$asap$$customSchedulerFn(lib$es6$promise$asap$$flush);
              } else {
                lib$es6$promise$asap$$scheduleFlush();
              }
            }
          };

          function lib$es6$promise$asap$$setScheduler(scheduleFn) {
            lib$es6$promise$asap$$customSchedulerFn = scheduleFn;
          }

          function lib$es6$promise$asap$$setAsap(asapFn) {
            lib$es6$promise$asap$$asap = asapFn;
          }

          var lib$es6$promise$asap$$browserWindow = typeof window !== 'undefined' ? window : undefined;
          var lib$es6$promise$asap$$browserGlobal = lib$es6$promise$asap$$browserWindow || {};
          var lib$es6$promise$asap$$BrowserMutationObserver = lib$es6$promise$asap$$browserGlobal.MutationObserver || lib$es6$promise$asap$$browserGlobal.WebKitMutationObserver;
          var lib$es6$promise$asap$$isNode = typeof process !== 'undefined' && {}.toString.call(process) === '[object process]'; // test for web worker but not in IE10

          var lib$es6$promise$asap$$isWorker = typeof Uint8ClampedArray !== 'undefined' && typeof importScripts !== 'undefined' && typeof MessageChannel !== 'undefined'; // node

          function lib$es6$promise$asap$$useNextTick() {
            var nextTick = process.nextTick; // node version 0.10.x displays a deprecation warning when nextTick is used recursively
            // setImmediate should be used instead instead

            var version = process.versions.node.match(/^(?:(\d+)\.)?(?:(\d+)\.)?(\*|\d+)$/);

            if (Array.isArray(version) && version[1] === '0' && version[2] === '10') {
              nextTick = setImmediate;
            }

            return function () {
              nextTick(lib$es6$promise$asap$$flush);
            };
          } // vertx


          function lib$es6$promise$asap$$useVertxTimer() {
            return function () {
              lib$es6$promise$asap$$vertxNext(lib$es6$promise$asap$$flush);
            };
          }

          function lib$es6$promise$asap$$useMutationObserver() {
            var iterations = 0;
            var observer = new lib$es6$promise$asap$$BrowserMutationObserver(lib$es6$promise$asap$$flush);
            var node = document.createTextNode('');
            observer.observe(node, {
              characterData: true
            });
            return function () {
              node.data = iterations = ++iterations % 2;
            };
          } // web worker


          function lib$es6$promise$asap$$useMessageChannel() {
            var channel = new MessageChannel();
            channel.port1.onmessage = lib$es6$promise$asap$$flush;
            return function () {
              channel.port2.postMessage(0);
            };
          }

          function lib$es6$promise$asap$$useSetTimeout() {
            return function () {
              setTimeout(lib$es6$promise$asap$$flush, 1);
            };
          }

          var lib$es6$promise$asap$$queue = new Array(1000);

          function lib$es6$promise$asap$$flush() {
            for (var i = 0; i < lib$es6$promise$asap$$len; i += 2) {
              var callback = lib$es6$promise$asap$$queue[i];
              var arg = lib$es6$promise$asap$$queue[i + 1];
              callback(arg);
              lib$es6$promise$asap$$queue[i] = undefined;
              lib$es6$promise$asap$$queue[i + 1] = undefined;
            }

            lib$es6$promise$asap$$len = 0;
          }

          function lib$es6$promise$asap$$attemptVertex() {
            try {
              var r = require;
              var vertx = r('vertx');
              lib$es6$promise$asap$$vertxNext = vertx.runOnLoop || vertx.runOnContext;
              return lib$es6$promise$asap$$useVertxTimer();
            } catch (e) {
              return lib$es6$promise$asap$$useSetTimeout();
            }
          }

          var lib$es6$promise$asap$$scheduleFlush; // Decide what async method to use to triggering processing of queued callbacks:

          if (lib$es6$promise$asap$$isNode) {
            lib$es6$promise$asap$$scheduleFlush = lib$es6$promise$asap$$useNextTick();
          } else if (lib$es6$promise$asap$$BrowserMutationObserver) {
            lib$es6$promise$asap$$scheduleFlush = lib$es6$promise$asap$$useMutationObserver();
          } else if (lib$es6$promise$asap$$isWorker) {
            lib$es6$promise$asap$$scheduleFlush = lib$es6$promise$asap$$useMessageChannel();
          } else if (lib$es6$promise$asap$$browserWindow === undefined && typeof require === 'function') {
            lib$es6$promise$asap$$scheduleFlush = lib$es6$promise$asap$$attemptVertex();
          } else {
            lib$es6$promise$asap$$scheduleFlush = lib$es6$promise$asap$$useSetTimeout();
          }

          function lib$es6$promise$$internal$$noop() {}

          var lib$es6$promise$$internal$$PENDING = void 0;
          var lib$es6$promise$$internal$$FULFILLED = 1;
          var lib$es6$promise$$internal$$REJECTED = 2;
          var lib$es6$promise$$internal$$GET_THEN_ERROR = new lib$es6$promise$$internal$$ErrorObject();

          function lib$es6$promise$$internal$$selfFullfillment() {
            return new TypeError("You cannot resolve a promise with itself");
          }

          function lib$es6$promise$$internal$$cannotReturnOwn() {
            return new TypeError('A promises callback cannot return that same promise.');
          }

          function lib$es6$promise$$internal$$getThen(promise) {
            try {
              return promise.then;
            } catch (error) {
              lib$es6$promise$$internal$$GET_THEN_ERROR.error = error;
              return lib$es6$promise$$internal$$GET_THEN_ERROR;
            }
          }

          function lib$es6$promise$$internal$$tryThen(then, value, fulfillmentHandler, rejectionHandler) {
            try {
              then.call(value, fulfillmentHandler, rejectionHandler);
            } catch (e) {
              return e;
            }
          }

          function lib$es6$promise$$internal$$handleForeignThenable(promise, thenable, then) {
            lib$es6$promise$asap$$asap(function (promise) {
              var sealed = false;
              var error = lib$es6$promise$$internal$$tryThen(then, thenable, function (value) {
                if (sealed) {
                  return;
                }

                sealed = true;

                if (thenable !== value) {
                  lib$es6$promise$$internal$$resolve(promise, value);
                } else {
                  lib$es6$promise$$internal$$fulfill(promise, value);
                }
              }, function (reason) {
                if (sealed) {
                  return;
                }

                sealed = true;
                lib$es6$promise$$internal$$reject(promise, reason);
              }, 'Settle: ' + (promise._label || ' unknown promise'));

              if (!sealed && error) {
                sealed = true;
                lib$es6$promise$$internal$$reject(promise, error);
              }
            }, promise);
          }

          function lib$es6$promise$$internal$$handleOwnThenable(promise, thenable) {
            if (thenable._state === lib$es6$promise$$internal$$FULFILLED) {
              lib$es6$promise$$internal$$fulfill(promise, thenable._result);
            } else if (thenable._state === lib$es6$promise$$internal$$REJECTED) {
              lib$es6$promise$$internal$$reject(promise, thenable._result);
            } else {
              lib$es6$promise$$internal$$subscribe(thenable, undefined, function (value) {
                lib$es6$promise$$internal$$resolve(promise, value);
              }, function (reason) {
                lib$es6$promise$$internal$$reject(promise, reason);
              });
            }
          }

          function lib$es6$promise$$internal$$handleMaybeThenable(promise, maybeThenable) {
            if (maybeThenable.constructor === promise.constructor) {
              lib$es6$promise$$internal$$handleOwnThenable(promise, maybeThenable);
            } else {
              var then = lib$es6$promise$$internal$$getThen(maybeThenable);

              if (then === lib$es6$promise$$internal$$GET_THEN_ERROR) {
                lib$es6$promise$$internal$$reject(promise, lib$es6$promise$$internal$$GET_THEN_ERROR.error);
              } else if (then === undefined) {
                lib$es6$promise$$internal$$fulfill(promise, maybeThenable);
              } else if (lib$es6$promise$utils$$isFunction(then)) {
                lib$es6$promise$$internal$$handleForeignThenable(promise, maybeThenable, then);
              } else {
                lib$es6$promise$$internal$$fulfill(promise, maybeThenable);
              }
            }
          }

          function lib$es6$promise$$internal$$resolve(promise, value) {
            if (promise === value) {
              lib$es6$promise$$internal$$reject(promise, lib$es6$promise$$internal$$selfFullfillment());
            } else if (lib$es6$promise$utils$$objectOrFunction(value)) {
              lib$es6$promise$$internal$$handleMaybeThenable(promise, value);
            } else {
              lib$es6$promise$$internal$$fulfill(promise, value);
            }
          }

          function lib$es6$promise$$internal$$publishRejection(promise) {
            if (promise._onerror) {
              promise._onerror(promise._result);
            }

            lib$es6$promise$$internal$$publish(promise);
          }

          function lib$es6$promise$$internal$$fulfill(promise, value) {
            if (promise._state !== lib$es6$promise$$internal$$PENDING) {
              return;
            }

            promise._result = value;
            promise._state = lib$es6$promise$$internal$$FULFILLED;

            if (promise._subscribers.length !== 0) {
              lib$es6$promise$asap$$asap(lib$es6$promise$$internal$$publish, promise);
            }
          }

          function lib$es6$promise$$internal$$reject(promise, reason) {
            if (promise._state !== lib$es6$promise$$internal$$PENDING) {
              return;
            }

            promise._state = lib$es6$promise$$internal$$REJECTED;
            promise._result = reason;
            lib$es6$promise$asap$$asap(lib$es6$promise$$internal$$publishRejection, promise);
          }

          function lib$es6$promise$$internal$$subscribe(parent, child, onFulfillment, onRejection) {
            var subscribers = parent._subscribers;
            var length = subscribers.length;
            parent._onerror = null;
            subscribers[length] = child;
            subscribers[length + lib$es6$promise$$internal$$FULFILLED] = onFulfillment;
            subscribers[length + lib$es6$promise$$internal$$REJECTED] = onRejection;

            if (length === 0 && parent._state) {
              lib$es6$promise$asap$$asap(lib$es6$promise$$internal$$publish, parent);
            }
          }

          function lib$es6$promise$$internal$$publish(promise) {
            var subscribers = promise._subscribers;
            var settled = promise._state;

            if (subscribers.length === 0) {
              return;
            }

            var child,
                callback,
                detail = promise._result;

            for (var i = 0; i < subscribers.length; i += 3) {
              child = subscribers[i];
              callback = subscribers[i + settled];

              if (child) {
                lib$es6$promise$$internal$$invokeCallback(settled, child, callback, detail);
              } else {
                callback(detail);
              }
            }

            promise._subscribers.length = 0;
          }

          function lib$es6$promise$$internal$$ErrorObject() {
            this.error = null;
          }

          var lib$es6$promise$$internal$$TRY_CATCH_ERROR = new lib$es6$promise$$internal$$ErrorObject();

          function lib$es6$promise$$internal$$tryCatch(callback, detail) {
            try {
              return callback(detail);
            } catch (e) {
              lib$es6$promise$$internal$$TRY_CATCH_ERROR.error = e;
              return lib$es6$promise$$internal$$TRY_CATCH_ERROR;
            }
          }

          function lib$es6$promise$$internal$$invokeCallback(settled, promise, callback, detail) {
            var hasCallback = lib$es6$promise$utils$$isFunction(callback),
                value,
                error,
                succeeded,
                failed;

            if (hasCallback) {
              value = lib$es6$promise$$internal$$tryCatch(callback, detail);

              if (value === lib$es6$promise$$internal$$TRY_CATCH_ERROR) {
                failed = true;
                error = value.error;
                value = null;
              } else {
                succeeded = true;
              }

              if (promise === value) {
                lib$es6$promise$$internal$$reject(promise, lib$es6$promise$$internal$$cannotReturnOwn());
                return;
              }
            } else {
              value = detail;
              succeeded = true;
            }

            if (promise._state !== lib$es6$promise$$internal$$PENDING) {// noop
            } else if (hasCallback && succeeded) {
              lib$es6$promise$$internal$$resolve(promise, value);
            } else if (failed) {
              lib$es6$promise$$internal$$reject(promise, error);
            } else if (settled === lib$es6$promise$$internal$$FULFILLED) {
              lib$es6$promise$$internal$$fulfill(promise, value);
            } else if (settled === lib$es6$promise$$internal$$REJECTED) {
              lib$es6$promise$$internal$$reject(promise, value);
            }
          }

          function lib$es6$promise$$internal$$initializePromise(promise, resolver) {
            try {
              resolver(function resolvePromise(value) {
                lib$es6$promise$$internal$$resolve(promise, value);
              }, function rejectPromise(reason) {
                lib$es6$promise$$internal$$reject(promise, reason);
              });
            } catch (e) {
              lib$es6$promise$$internal$$reject(promise, e);
            }
          }

          function lib$es6$promise$enumerator$$Enumerator(Constructor, input) {
            var enumerator = this;
            enumerator._instanceConstructor = Constructor;
            enumerator.promise = new Constructor(lib$es6$promise$$internal$$noop);

            if (enumerator._validateInput(input)) {
              enumerator._input = input;
              enumerator.length = input.length;
              enumerator._remaining = input.length;

              enumerator._init();

              if (enumerator.length === 0) {
                lib$es6$promise$$internal$$fulfill(enumerator.promise, enumerator._result);
              } else {
                enumerator.length = enumerator.length || 0;

                enumerator._enumerate();

                if (enumerator._remaining === 0) {
                  lib$es6$promise$$internal$$fulfill(enumerator.promise, enumerator._result);
                }
              }
            } else {
              lib$es6$promise$$internal$$reject(enumerator.promise, enumerator._validationError());
            }
          }

          lib$es6$promise$enumerator$$Enumerator.prototype._validateInput = function (input) {
            return lib$es6$promise$utils$$isArray(input);
          };

          lib$es6$promise$enumerator$$Enumerator.prototype._validationError = function () {
            return new Error('Array Methods must be provided an Array');
          };

          lib$es6$promise$enumerator$$Enumerator.prototype._init = function () {
            this._result = new Array(this.length);
          };

          var lib$es6$promise$enumerator$$default = lib$es6$promise$enumerator$$Enumerator;

          lib$es6$promise$enumerator$$Enumerator.prototype._enumerate = function () {
            var enumerator = this;
            var length = enumerator.length;
            var promise = enumerator.promise;
            var input = enumerator._input;

            for (var i = 0; promise._state === lib$es6$promise$$internal$$PENDING && i < length; i++) {
              enumerator._eachEntry(input[i], i);
            }
          };

          lib$es6$promise$enumerator$$Enumerator.prototype._eachEntry = function (entry, i) {
            var enumerator = this;
            var c = enumerator._instanceConstructor;

            if (lib$es6$promise$utils$$isMaybeThenable(entry)) {
              if (entry.constructor === c && entry._state !== lib$es6$promise$$internal$$PENDING) {
                entry._onerror = null;

                enumerator._settledAt(entry._state, i, entry._result);
              } else {
                enumerator._willSettleAt(c.resolve(entry), i);
              }
            } else {
              enumerator._remaining--;
              enumerator._result[i] = entry;
            }
          };

          lib$es6$promise$enumerator$$Enumerator.prototype._settledAt = function (state, i, value) {
            var enumerator = this;
            var promise = enumerator.promise;

            if (promise._state === lib$es6$promise$$internal$$PENDING) {
              enumerator._remaining--;

              if (state === lib$es6$promise$$internal$$REJECTED) {
                lib$es6$promise$$internal$$reject(promise, value);
              } else {
                enumerator._result[i] = value;
              }
            }

            if (enumerator._remaining === 0) {
              lib$es6$promise$$internal$$fulfill(promise, enumerator._result);
            }
          };

          lib$es6$promise$enumerator$$Enumerator.prototype._willSettleAt = function (promise, i) {
            var enumerator = this;
            lib$es6$promise$$internal$$subscribe(promise, undefined, function (value) {
              enumerator._settledAt(lib$es6$promise$$internal$$FULFILLED, i, value);
            }, function (reason) {
              enumerator._settledAt(lib$es6$promise$$internal$$REJECTED, i, reason);
            });
          };

          function lib$es6$promise$promise$all$$all(entries) {
            return new lib$es6$promise$enumerator$$default(this, entries).promise;
          }

          var lib$es6$promise$promise$all$$default = lib$es6$promise$promise$all$$all;

          function lib$es6$promise$promise$race$$race(entries) {
            /*jshint validthis:true */
            var Constructor = this;
            var promise = new Constructor(lib$es6$promise$$internal$$noop);

            if (!lib$es6$promise$utils$$isArray(entries)) {
              lib$es6$promise$$internal$$reject(promise, new TypeError('You must pass an array to race.'));
              return promise;
            }

            var length = entries.length;

            function onFulfillment(value) {
              lib$es6$promise$$internal$$resolve(promise, value);
            }

            function onRejection(reason) {
              lib$es6$promise$$internal$$reject(promise, reason);
            }

            for (var i = 0; promise._state === lib$es6$promise$$internal$$PENDING && i < length; i++) {
              lib$es6$promise$$internal$$subscribe(Constructor.resolve(entries[i]), undefined, onFulfillment, onRejection);
            }

            return promise;
          }

          var lib$es6$promise$promise$race$$default = lib$es6$promise$promise$race$$race;

          function lib$es6$promise$promise$resolve$$resolve(object) {
            /*jshint validthis:true */
            var Constructor = this;

            if (object && _typeof(object) === 'object' && object.constructor === Constructor) {
              return object;
            }

            var promise = new Constructor(lib$es6$promise$$internal$$noop);
            lib$es6$promise$$internal$$resolve(promise, object);
            return promise;
          }

          var lib$es6$promise$promise$resolve$$default = lib$es6$promise$promise$resolve$$resolve;

          function lib$es6$promise$promise$reject$$reject(reason) {
            /*jshint validthis:true */
            var Constructor = this;
            var promise = new Constructor(lib$es6$promise$$internal$$noop);
            lib$es6$promise$$internal$$reject(promise, reason);
            return promise;
          }

          var lib$es6$promise$promise$reject$$default = lib$es6$promise$promise$reject$$reject;
          var lib$es6$promise$promise$$counter = 0;

          function lib$es6$promise$promise$$needsResolver() {
            throw new TypeError('You must pass a resolver function as the first argument to the promise constructor');
          }

          function lib$es6$promise$promise$$needsNew() {
            throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.");
          }

          var lib$es6$promise$promise$$default = lib$es6$promise$promise$$Promise;
          /**
           Promise objects represent the eventual result of an asynchronous operation. The
           primary way of interacting with a promise is through its `then` method, which
           registers callbacks to receive either a promise's eventual value or the reason
           why the promise cannot be fulfilled.
            Terminology
           -----------
            - `promise` is an object or function with a `then` method whose behavior conforms to this specification.
           - `thenable` is an object or function that defines a `then` method.
           - `value` is any legal JavaScript value (including undefined, a thenable, or a promise).
           - `exception` is a value that is thrown using the throw statement.
           - `reason` is a value that indicates why a promise was rejected.
           - `settled` the final resting state of a promise, fulfilled or rejected.
            A promise can be in one of three states: pending, fulfilled, or rejected.
            Promises that are fulfilled have a fulfillment value and are in the fulfilled
           state.  Promises that are rejected have a rejection reason and are in the
           rejected state.  A fulfillment value is never a thenable.
            Promises can also be said to *resolve* a value.  If this value is also a
           promise, then the original promise's settled state will match the value's
           settled state.  So a promise that *resolves* a promise that rejects will
           itself reject, and a promise that *resolves* a promise that fulfills will
           itself fulfill.
             Basic Usage:
           ------------
            ```js
           var promise = new Promise(function(resolve, reject) {
          // on success
          resolve(value);
          // on failure
          reject(reason);
          });
            promise.then(function(value) {
          // on fulfillment
          }, function(reason) {
          // on rejection
          });
           ```
            Advanced Usage:
           ---------------
            Promises shine when abstracting away asynchronous interactions such as
           `XMLHttpRequest`s.
            ```js
           function getJSON(url) {
          return new Promise(function(resolve, reject){
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url);
          xhr.onreadystatechange = handler;
          xhr.responseType = 'json';
          xhr.setRequestHeader('Accept', 'application/json');
          xhr.send();
          function handler() {
          if (this.readyState === this.DONE) {
            if (this.status === 200) {
              resolve(this.response);
            } else {
              reject(new Error('getJSON: `' + url + '` failed with status: [' + this.status + ']'));
            }
          }
          };
          });
          }
            getJSON('/posts.json').then(function(json) {
          // on fulfillment
          }, function(reason) {
          // on rejection
          });
           ```
            Unlike callbacks, promises are great composable primitives.
            ```js
           Promise.all([
           getJSON('/posts'),
           getJSON('/comments')
           ]).then(function(values){
          values[0] // => postsJSON
          values[1] // => commentsJSON
          return values;
          });
           ```
            @class Promise
           @param {function} resolver
           Useful for tooling.
           @constructor
           */

          function lib$es6$promise$promise$$Promise(resolver) {
            this._id = lib$es6$promise$promise$$counter++;
            this._state = undefined;
            this._result = undefined;
            this._subscribers = [];

            if (lib$es6$promise$$internal$$noop !== resolver) {
              if (!lib$es6$promise$utils$$isFunction(resolver)) {
                lib$es6$promise$promise$$needsResolver();
              }

              if (!(this instanceof lib$es6$promise$promise$$Promise)) {
                lib$es6$promise$promise$$needsNew();
              }

              lib$es6$promise$$internal$$initializePromise(this, resolver);
            }
          }

          lib$es6$promise$promise$$Promise.all = lib$es6$promise$promise$all$$default;
          lib$es6$promise$promise$$Promise.race = lib$es6$promise$promise$race$$default;
          lib$es6$promise$promise$$Promise.resolve = lib$es6$promise$promise$resolve$$default;
          lib$es6$promise$promise$$Promise.reject = lib$es6$promise$promise$reject$$default;
          lib$es6$promise$promise$$Promise._setScheduler = lib$es6$promise$asap$$setScheduler;
          lib$es6$promise$promise$$Promise._setAsap = lib$es6$promise$asap$$setAsap;
          lib$es6$promise$promise$$Promise._asap = lib$es6$promise$asap$$asap;
          lib$es6$promise$promise$$Promise.prototype = {
            constructor: lib$es6$promise$promise$$Promise,

            /**
             The primary way of interacting with a promise is through its `then` method,
             which registers callbacks to receive either a promise's eventual value or the
             reason why the promise cannot be fulfilled.
              ```js
             findUser().then(function(user){
            // user is available
            }, function(reason){
            // user is unavailable, and you are given the reason why
            });
             ```
              Chaining
             --------
              The return value of `then` is itself a promise.  This second, 'downstream'
             promise is resolved with the return value of the first promise's fulfillment
             or rejection handler, or rejected if the handler throws an exception.
              ```js
             findUser().then(function (user) {
            return user.name;
            }, function (reason) {
            return 'default name';
            }).then(function (userName) {
            // If `findUser` fulfilled, `userName` will be the user's name, otherwise it
            // will be `'default name'`
            });
              findUser().then(function (user) {
            throw new Error('Found user, but still unhappy');
            }, function (reason) {
            throw new Error('`findUser` rejected and we're unhappy');
            }).then(function (value) {
            // never reached
            }, function (reason) {
            // if `findUser` fulfilled, `reason` will be 'Found user, but still unhappy'.
            // If `findUser` rejected, `reason` will be '`findUser` rejected and we're unhappy'.
            });
             ```
             If the downstream promise does not specify a rejection handler, rejection reasons will be propagated further downstream.
              ```js
             findUser().then(function (user) {
            throw new PedagogicalException('Upstream error');
            }).then(function (value) {
            // never reached
            }).then(function (value) {
            // never reached
            }, function (reason) {
            // The `PedgagocialException` is propagated all the way down to here
            });
             ```
              Assimilation
             ------------
              Sometimes the value you want to propagate to a downstream promise can only be
             retrieved asynchronously. This can be achieved by returning a promise in the
             fulfillment or rejection handler. The downstream promise will then be pending
             until the returned promise is settled. This is called *assimilation*.
              ```js
             findUser().then(function (user) {
            return findCommentsByAuthor(user);
            }).then(function (comments) {
            // The user's comments are now available
            });
             ```
              If the assimliated promise rejects, then the downstream promise will also reject.
              ```js
             findUser().then(function (user) {
            return findCommentsByAuthor(user);
            }).then(function (comments) {
            // If `findCommentsByAuthor` fulfills, we'll have the value here
            }, function (reason) {
            // If `findCommentsByAuthor` rejects, we'll have the reason here
            });
             ```
              Simple Example
             --------------
              Synchronous Example
              ```javascript
             var result;
              try {
            result = findResult();
            // success
            } catch(reason) {
            // failure
            }
             ```
              Errback Example
              ```js
             findResult(function(result, err){
            if (err) {
            // failure
            } else {
            // success
            }
            });
             ```
              Promise Example;
              ```javascript
             findResult().then(function(result){
            // success
            }, function(reason){
            // failure
            });
             ```
              Advanced Example
             --------------
              Synchronous Example
              ```javascript
             var author, books;
              try {
            author = findAuthor();
            books  = findBooksByAuthor(author);
            // success
            } catch(reason) {
            // failure
            }
             ```
              Errback Example
              ```js
              function foundBooks(books) {
            }
              function failure(reason) {
            }
              findAuthor(function(author, err){
            if (err) {
            failure(err);
            // failure
            } else {
            try {
            findBoooksByAuthor(author, function(books, err) {
            if (err) {
            failure(err);
            } else {
            try {
              foundBooks(books);
            } catch(reason) {
              failure(reason);
            }
            }
            });
            } catch(error) {
            failure(err);
            }
            // success
            }
            });
             ```
              Promise Example;
              ```javascript
             findAuthor().
             then(findBooksByAuthor).
             then(function(books){
            // found books
            }).catch(function(reason){
            // something went wrong
            });
             ```
              @method then
             @param {Function} onFulfilled
             @param {Function} onRejected
             Useful for tooling.
             @return {Promise}
             */
            then: function then(onFulfillment, onRejection) {
              var parent = this;
              var state = parent._state;

              if (state === lib$es6$promise$$internal$$FULFILLED && !onFulfillment || state === lib$es6$promise$$internal$$REJECTED && !onRejection) {
                return this;
              }

              var child = new this.constructor(lib$es6$promise$$internal$$noop);
              var result = parent._result;

              if (state) {
                var callback = arguments[state - 1];
                lib$es6$promise$asap$$asap(function () {
                  lib$es6$promise$$internal$$invokeCallback(state, child, callback, result);
                });
              } else {
                lib$es6$promise$$internal$$subscribe(parent, child, onFulfillment, onRejection);
              }

              return child;
            },

            /**
             `catch` is simply sugar for `then(undefined, onRejection)` which makes it the same
             as the catch block of a try/catch statement.
              ```js
             function findAuthor(){
            throw new Error('couldn't find that author');
            }
              // synchronous
             try {
            findAuthor();
            } catch(reason) {
            // something went wrong
            }
              // async with promises
             findAuthor().catch(function(reason){
            // something went wrong
            });
             ```
              @method catch
             @param {Function} onRejection
             Useful for tooling.
             @return {Promise}
             */
            'catch': function _catch(onRejection) {
              return this.then(null, onRejection);
            }
          };

          function lib$es6$promise$polyfill$$polyfill() {
            var local;

            if (typeof global !== 'undefined') {
              local = global;
            } else if (typeof self !== 'undefined') {
              local = self;
            } else {
              try {
                local = Function('return this')();
              } catch (e) {
                throw new Error('polyfill failed because global object is unavailable in this environment');
              }
            }

            var P = local.Promise;

            if (P && Object.prototype.toString.call(P.resolve()) === '[object Promise]' && !P.cast) {
              return;
            }

            local.Promise = lib$es6$promise$promise$$default;
          }

          var lib$es6$promise$polyfill$$default = lib$es6$promise$polyfill$$polyfill;
          var lib$es6$promise$umd$$ES6Promise = {
            'Promise': lib$es6$promise$promise$$default,
            'polyfill': lib$es6$promise$polyfill$$default
          };
          /* global define:true module:true window: true */

          if (typeof define === 'function' && define['amd']) {
            define(function () {
              return lib$es6$promise$umd$$ES6Promise;
            });
          } else if (typeof module !== 'undefined' && module['exports']) {
            module['exports'] = lib$es6$promise$umd$$ES6Promise;
          } else if (typeof this !== 'undefined') {
            this['ES6Promise'] = lib$es6$promise$umd$$ES6Promise;
          }

          lib$es6$promise$polyfill$$default();
        }).call(this);
      }).call(this, require(2), typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {});
    }, {
      "2": 2
    }],
    10: [function (require, module, exports) {
      if (typeof Object.create === 'function') {
        // implementation from standard node.js 'util' module
        module.exports = function inherits(ctor, superCtor) {
          ctor.super_ = superCtor;
          ctor.prototype = Object.create(superCtor.prototype, {
            constructor: {
              value: ctor,
              enumerable: false,
              writable: true,
              configurable: true
            }
          });
        };
      } else {
        // old school shim for old browsers
        module.exports = function inherits(ctor, superCtor) {
          ctor.super_ = superCtor;

          var TempCtor = function TempCtor() {};

          TempCtor.prototype = superCtor.prototype;
          ctor.prototype = new TempCtor();
          ctor.prototype.constructor = ctor;
        };
      }
    }, {}],
    11: [function (require, module, exports) {
      var arrayEach = require(14),
          baseEach = require(18),
          createForEach = require(30);
      /**
       * Iterates over elements of `collection` invoking `iteratee` for each element.
       * The `iteratee` is bound to `thisArg` and invoked with three arguments:
       * (value, index|key, collection). Iteratee functions may exit iteration early
       * by explicitly returning `false`.
       *
       * **Note:** As with other "Collections" methods, objects with a "length" property
       * are iterated like arrays. To avoid this behavior `_.forIn` or `_.forOwn`
       * may be used for object iteration.
       *
       * @static
       * @memberOf _
       * @alias each
       * @category Collection
       * @param {Array|Object|string} collection The collection to iterate over.
       * @param {Function} [iteratee=_.identity] The function invoked per iteration.
       * @param {*} [thisArg] The `this` binding of `iteratee`.
       * @returns {Array|Object|string} Returns `collection`.
       * @example
       *
       * _([1, 2]).forEach(function(n) {
      *   console.log(n);
      * }).value();
       * // => logs each value from left to right and returns the array
       *
       * _.forEach({ 'a': 1, 'b': 2 }, function(n, key) {
      *   console.log(n, key);
      * });
       * // => logs each value-key pair and returns the object (iteration order is not guaranteed)
       */


      var forEach = createForEach(arrayEach, baseEach);
      module.exports = forEach;
    }, {
      "14": 14,
      "18": 18,
      "30": 30
    }],
    12: [function (require, module, exports) {
      /** Used as the `TypeError` message for "Functions" methods. */
      var FUNC_ERROR_TEXT = 'Expected a function';
      /* Native method references for those with the same name as other `lodash` methods. */

      var nativeMax = Math.max;
      /**
       * Creates a function that invokes `func` with the `this` binding of the
       * created function and arguments from `start` and beyond provided as an array.
       *
       * **Note:** This method is based on the [rest parameter](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/rest_parameters).
       *
       * @static
       * @memberOf _
       * @category Function
       * @param {Function} func The function to apply a rest parameter to.
       * @param {number} [start=func.length-1] The start position of the rest parameter.
       * @returns {Function} Returns the new function.
       * @example
       *
       * var say = _.restParam(function(what, names) {
      *   return what + ' ' + _.initial(names).join(', ') +
      *     (_.size(names) > 1 ? ', & ' : '') + _.last(names);
      * });
       *
       * say('hello', 'fred', 'barney', 'pebbles');
       * // => 'hello fred, barney, & pebbles'
       */

      function restParam(func, start) {
        if (typeof func != 'function') {
          throw new TypeError(FUNC_ERROR_TEXT);
        }

        start = nativeMax(start === undefined ? func.length - 1 : +start || 0, 0);
        return function () {
          var args = arguments,
              index = -1,
              length = nativeMax(args.length - start, 0),
              rest = Array(length);

          while (++index < length) {
            rest[index] = args[start + index];
          }

          switch (start) {
            case 0:
              return func.call(this, rest);

            case 1:
              return func.call(this, args[0], rest);

            case 2:
              return func.call(this, args[0], args[1], rest);
          }

          var otherArgs = Array(start + 1);
          index = -1;

          while (++index < start) {
            otherArgs[index] = args[index];
          }

          otherArgs[start] = rest;
          return func.apply(this, otherArgs);
        };
      }

      module.exports = restParam;
    }, {}],
    13: [function (require, module, exports) {
      /**
       * Copies the values of `source` to `array`.
       *
       * @private
       * @param {Array} source The array to copy values from.
       * @param {Array} [array=[]] The array to copy values to.
       * @returns {Array} Returns `array`.
       */
      function arrayCopy(source, array) {
        var index = -1,
            length = source.length;
        array || (array = Array(length));

        while (++index < length) {
          array[index] = source[index];
        }

        return array;
      }

      module.exports = arrayCopy;
    }, {}],
    14: [function (require, module, exports) {
      /**
       * A specialized version of `_.forEach` for arrays without support for callback
       * shorthands and `this` binding.
       *
       * @private
       * @param {Array} array The array to iterate over.
       * @param {Function} iteratee The function invoked per iteration.
       * @returns {Array} Returns `array`.
       */
      function arrayEach(array, iteratee) {
        var index = -1,
            length = array.length;

        while (++index < length) {
          if (iteratee(array[index], index, array) === false) {
            break;
          }
        }

        return array;
      }

      module.exports = arrayEach;
    }, {}],
    15: [function (require, module, exports) {
      var baseCopy = require(17),
          keys = require(55);
      /**
       * The base implementation of `_.assign` without support for argument juggling,
       * multiple sources, and `customizer` functions.
       *
       * @private
       * @param {Object} object The destination object.
       * @param {Object} source The source object.
       * @returns {Object} Returns `object`.
       */


      function baseAssign(object, source) {
        return source == null ? object : baseCopy(source, keys(source), object);
      }

      module.exports = baseAssign;
    }, {
      "17": 17,
      "55": 55
    }],
    16: [function (require, module, exports) {
      var arrayCopy = require(13),
          arrayEach = require(14),
          baseAssign = require(15),
          baseForOwn = require(21),
          initCloneArray = require(33),
          initCloneByTag = require(34),
          initCloneObject = require(35),
          isArray = require(47),
          isHostObject = require(37),
          isObject = require(50);
      /** `Object#toString` result references. */


      var argsTag = '[object Arguments]',
          arrayTag = '[object Array]',
          boolTag = '[object Boolean]',
          dateTag = '[object Date]',
          errorTag = '[object Error]',
          funcTag = '[object Function]',
          mapTag = '[object Map]',
          numberTag = '[object Number]',
          objectTag = '[object Object]',
          regexpTag = '[object RegExp]',
          setTag = '[object Set]',
          stringTag = '[object String]',
          weakMapTag = '[object WeakMap]';
      var arrayBufferTag = '[object ArrayBuffer]',
          float32Tag = '[object Float32Array]',
          float64Tag = '[object Float64Array]',
          int8Tag = '[object Int8Array]',
          int16Tag = '[object Int16Array]',
          int32Tag = '[object Int32Array]',
          uint8Tag = '[object Uint8Array]',
          uint8ClampedTag = '[object Uint8ClampedArray]',
          uint16Tag = '[object Uint16Array]',
          uint32Tag = '[object Uint32Array]';
      /** Used to identify `toStringTag` values supported by `_.clone`. */

      var cloneableTags = {};
      cloneableTags[argsTag] = cloneableTags[arrayTag] = cloneableTags[arrayBufferTag] = cloneableTags[boolTag] = cloneableTags[dateTag] = cloneableTags[float32Tag] = cloneableTags[float64Tag] = cloneableTags[int8Tag] = cloneableTags[int16Tag] = cloneableTags[int32Tag] = cloneableTags[numberTag] = cloneableTags[objectTag] = cloneableTags[regexpTag] = cloneableTags[stringTag] = cloneableTags[uint8Tag] = cloneableTags[uint8ClampedTag] = cloneableTags[uint16Tag] = cloneableTags[uint32Tag] = true;
      cloneableTags[errorTag] = cloneableTags[funcTag] = cloneableTags[mapTag] = cloneableTags[setTag] = cloneableTags[weakMapTag] = false;
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /**
       * The base implementation of `_.clone` without support for argument juggling
       * and `this` binding `customizer` functions.
       *
       * @private
       * @param {*} value The value to clone.
       * @param {boolean} [isDeep] Specify a deep clone.
       * @param {Function} [customizer] The function to customize cloning values.
       * @param {string} [key] The key of `value`.
       * @param {Object} [object] The object `value` belongs to.
       * @param {Array} [stackA=[]] Tracks traversed source objects.
       * @param {Array} [stackB=[]] Associates clones with source counterparts.
       * @returns {*} Returns the cloned value.
       */

      function baseClone(value, isDeep, customizer, key, object, stackA, stackB) {
        var result;

        if (customizer) {
          result = object ? customizer(value, key, object) : customizer(value);
        }

        if (result !== undefined) {
          return result;
        }

        if (!isObject(value)) {
          return value;
        }

        var isArr = isArray(value);

        if (isArr) {
          result = initCloneArray(value);

          if (!isDeep) {
            return arrayCopy(value, result);
          }
        } else {
          var tag = objToString.call(value),
              isFunc = tag == funcTag;

          if (tag == objectTag || tag == argsTag || isFunc && !object) {
            if (isHostObject(value)) {
              return object ? value : {};
            }

            result = initCloneObject(isFunc ? {} : value);

            if (!isDeep) {
              return baseAssign(result, value);
            }
          } else {
            return cloneableTags[tag] ? initCloneByTag(value, tag, isDeep) : object ? value : {};
          }
        } // Check for circular references and return its corresponding clone.


        stackA || (stackA = []);
        stackB || (stackB = []);
        var length = stackA.length;

        while (length--) {
          if (stackA[length] == value) {
            return stackB[length];
          }
        } // Add the source value to the stack of traversed objects and associate it with its clone.


        stackA.push(value);
        stackB.push(result); // Recursively populate clone (susceptible to call stack limits).

        (isArr ? arrayEach : baseForOwn)(value, function (subValue, key) {
          result[key] = baseClone(subValue, isDeep, customizer, key, value, stackA, stackB);
        });
        return result;
      }

      module.exports = baseClone;
    }, {
      "13": 13,
      "14": 14,
      "15": 15,
      "21": 21,
      "33": 33,
      "34": 34,
      "35": 35,
      "37": 37,
      "47": 47,
      "50": 50
    }],
    17: [function (require, module, exports) {
      /**
       * Copies properties of `source` to `object`.
       *
       * @private
       * @param {Object} source The object to copy properties from.
       * @param {Array} props The property names to copy.
       * @param {Object} [object={}] The object to copy properties to.
       * @returns {Object} Returns `object`.
       */
      function baseCopy(source, props, object) {
        object || (object = {});
        var index = -1,
            length = props.length;

        while (++index < length) {
          var key = props[index];
          object[key] = source[key];
        }

        return object;
      }

      module.exports = baseCopy;
    }, {}],
    18: [function (require, module, exports) {
      var baseForOwn = require(21),
          createBaseEach = require(28);
      /**
       * The base implementation of `_.forEach` without support for callback
       * shorthands and `this` binding.
       *
       * @private
       * @param {Array|Object|string} collection The collection to iterate over.
       * @param {Function} iteratee The function invoked per iteration.
       * @returns {Array|Object|string} Returns `collection`.
       */


      var baseEach = createBaseEach(baseForOwn);
      module.exports = baseEach;
    }, {
      "21": 21,
      "28": 28
    }],
    19: [function (require, module, exports) {
      var createBaseFor = require(29);
      /**
       * The base implementation of `baseForIn` and `baseForOwn` which iterates
       * over `object` properties returned by `keysFunc` invoking `iteratee` for
       * each property. Iteratee functions may exit iteration early by explicitly
       * returning `false`.
       *
       * @private
       * @param {Object} object The object to iterate over.
       * @param {Function} iteratee The function invoked per iteration.
       * @param {Function} keysFunc The function to get the keys of `object`.
       * @returns {Object} Returns `object`.
       */


      var baseFor = createBaseFor();
      module.exports = baseFor;
    }, {
      "29": 29
    }],
    20: [function (require, module, exports) {
      var baseFor = require(19),
          keysIn = require(56);
      /**
       * The base implementation of `_.forIn` without support for callback
       * shorthands and `this` binding.
       *
       * @private
       * @param {Object} object The object to iterate over.
       * @param {Function} iteratee The function invoked per iteration.
       * @returns {Object} Returns `object`.
       */


      function baseForIn(object, iteratee) {
        return baseFor(object, iteratee, keysIn);
      }

      module.exports = baseForIn;
    }, {
      "19": 19,
      "56": 56
    }],
    21: [function (require, module, exports) {
      var baseFor = require(19),
          keys = require(55);
      /**
       * The base implementation of `_.forOwn` without support for callback
       * shorthands and `this` binding.
       *
       * @private
       * @param {Object} object The object to iterate over.
       * @param {Function} iteratee The function invoked per iteration.
       * @returns {Object} Returns `object`.
       */


      function baseForOwn(object, iteratee) {
        return baseFor(object, iteratee, keys);
      }

      module.exports = baseForOwn;
    }, {
      "19": 19,
      "55": 55
    }],
    22: [function (require, module, exports) {
      var arrayEach = require(14),
          baseMergeDeep = require(23),
          isArray = require(47),
          isArrayLike = require(36),
          isObject = require(50),
          isObjectLike = require(41),
          isTypedArray = require(53),
          keys = require(55);
      /**
       * The base implementation of `_.merge` without support for argument juggling,
       * multiple sources, and `this` binding `customizer` functions.
       *
       * @private
       * @param {Object} object The destination object.
       * @param {Object} source The source object.
       * @param {Function} [customizer] The function to customize merged values.
       * @param {Array} [stackA=[]] Tracks traversed source objects.
       * @param {Array} [stackB=[]] Associates values with source counterparts.
       * @returns {Object} Returns `object`.
       */


      function baseMerge(object, source, customizer, stackA, stackB) {
        if (!isObject(object)) {
          return object;
        }

        var isSrcArr = isArrayLike(source) && (isArray(source) || isTypedArray(source)),
            props = isSrcArr ? undefined : keys(source);
        arrayEach(props || source, function (srcValue, key) {
          if (props) {
            key = srcValue;
            srcValue = source[key];
          }

          if (isObjectLike(srcValue)) {
            stackA || (stackA = []);
            stackB || (stackB = []);
            baseMergeDeep(object, source, key, baseMerge, customizer, stackA, stackB);
          } else {
            var value = object[key],
                result = customizer ? customizer(value, srcValue, key, object, source) : undefined,
                isCommon = result === undefined;

            if (isCommon) {
              result = srcValue;
            }

            if ((result !== undefined || isSrcArr && !(key in object)) && (isCommon || (result === result ? result !== value : value === value))) {
              object[key] = result;
            }
          }
        });
        return object;
      }

      module.exports = baseMerge;
    }, {
      "14": 14,
      "23": 23,
      "36": 36,
      "41": 41,
      "47": 47,
      "50": 50,
      "53": 53,
      "55": 55
    }],
    23: [function (require, module, exports) {
      var arrayCopy = require(13),
          isArguments = require(46),
          isArray = require(47),
          isArrayLike = require(36),
          isPlainObject = require(51),
          isTypedArray = require(53),
          toPlainObject = require(54);
      /**
       * A specialized version of `baseMerge` for arrays and objects which performs
       * deep merges and tracks traversed objects enabling objects with circular
       * references to be merged.
       *
       * @private
       * @param {Object} object The destination object.
       * @param {Object} source The source object.
       * @param {string} key The key of the value to merge.
       * @param {Function} mergeFunc The function to merge values.
       * @param {Function} [customizer] The function to customize merged values.
       * @param {Array} [stackA=[]] Tracks traversed source objects.
       * @param {Array} [stackB=[]] Associates values with source counterparts.
       * @returns {boolean} Returns `true` if the objects are equivalent, else `false`.
       */


      function baseMergeDeep(object, source, key, mergeFunc, customizer, stackA, stackB) {
        var length = stackA.length,
            srcValue = source[key];

        while (length--) {
          if (stackA[length] == srcValue) {
            object[key] = stackB[length];
            return;
          }
        }

        var value = object[key],
            result = customizer ? customizer(value, srcValue, key, object, source) : undefined,
            isCommon = result === undefined;

        if (isCommon) {
          result = srcValue;

          if (isArrayLike(srcValue) && (isArray(srcValue) || isTypedArray(srcValue))) {
            result = isArray(value) ? value : isArrayLike(value) ? arrayCopy(value) : [];
          } else if (isPlainObject(srcValue) || isArguments(srcValue)) {
            result = isArguments(value) ? toPlainObject(value) : isPlainObject(value) ? value : {};
          } else {
            isCommon = false;
          }
        } // Add the source value to the stack of traversed objects and associate
        // it with its merged value.


        stackA.push(srcValue);
        stackB.push(result);

        if (isCommon) {
          // Recursively merge objects and arrays (susceptible to call stack limits).
          object[key] = mergeFunc(result, srcValue, customizer, stackA, stackB);
        } else if (result === result ? result !== value : value === value) {
          object[key] = result;
        }
      }

      module.exports = baseMergeDeep;
    }, {
      "13": 13,
      "36": 36,
      "46": 46,
      "47": 47,
      "51": 51,
      "53": 53,
      "54": 54
    }],
    24: [function (require, module, exports) {
      var toObject = require(43);
      /**
       * The base implementation of `_.property` without support for deep paths.
       *
       * @private
       * @param {string} key The key of the property to get.
       * @returns {Function} Returns the new function.
       */


      function baseProperty(key) {
        return function (object) {
          return object == null ? undefined : toObject(object)[key];
        };
      }

      module.exports = baseProperty;
    }, {
      "43": 43
    }],
    25: [function (require, module, exports) {
      var identity = require(59);
      /**
       * A specialized version of `baseCallback` which only supports `this` binding
       * and specifying the number of arguments to provide to `func`.
       *
       * @private
       * @param {Function} func The function to bind.
       * @param {*} thisArg The `this` binding of `func`.
       * @param {number} [argCount] The number of arguments to provide to `func`.
       * @returns {Function} Returns the callback.
       */


      function bindCallback(func, thisArg, argCount) {
        if (typeof func != 'function') {
          return identity;
        }

        if (thisArg === undefined) {
          return func;
        }

        switch (argCount) {
          case 1:
            return function (value) {
              return func.call(thisArg, value);
            };

          case 3:
            return function (value, index, collection) {
              return func.call(thisArg, value, index, collection);
            };

          case 4:
            return function (accumulator, value, index, collection) {
              return func.call(thisArg, accumulator, value, index, collection);
            };

          case 5:
            return function (value, other, key, object, source) {
              return func.call(thisArg, value, other, key, object, source);
            };
        }

        return function () {
          return func.apply(thisArg, arguments);
        };
      }

      module.exports = bindCallback;
    }, {
      "59": 59
    }],
    26: [function (require, module, exports) {
      (function (global) {
        /** Native method references. */
        var ArrayBuffer = global.ArrayBuffer,
            Uint8Array = global.Uint8Array;
        /**
         * Creates a clone of the given array buffer.
         *
         * @private
         * @param {ArrayBuffer} buffer The array buffer to clone.
         * @returns {ArrayBuffer} Returns the cloned array buffer.
         */

        function bufferClone(buffer) {
          var result = new ArrayBuffer(buffer.byteLength),
              view = new Uint8Array(result);
          view.set(new Uint8Array(buffer));
          return result;
        }

        module.exports = bufferClone;
      }).call(this, typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {});
    }, {}],
    27: [function (require, module, exports) {
      var bindCallback = require(25),
          isIterateeCall = require(39),
          restParam = require(12);
      /**
       * Creates a `_.assign`, `_.defaults`, or `_.merge` function.
       *
       * @private
       * @param {Function} assigner The function to assign values.
       * @returns {Function} Returns the new assigner function.
       */


      function createAssigner(assigner) {
        return restParam(function (object, sources) {
          var index = -1,
              length = object == null ? 0 : sources.length,
              customizer = length > 2 ? sources[length - 2] : undefined,
              guard = length > 2 ? sources[2] : undefined,
              thisArg = length > 1 ? sources[length - 1] : undefined;

          if (typeof customizer == 'function') {
            customizer = bindCallback(customizer, thisArg, 5);
            length -= 2;
          } else {
            customizer = typeof thisArg == 'function' ? thisArg : undefined;
            length -= customizer ? 1 : 0;
          }

          if (guard && isIterateeCall(sources[0], sources[1], guard)) {
            customizer = length < 3 ? undefined : customizer;
            length = 1;
          }

          while (++index < length) {
            var source = sources[index];

            if (source) {
              assigner(object, source, customizer);
            }
          }

          return object;
        });
      }

      module.exports = createAssigner;
    }, {
      "12": 12,
      "25": 25,
      "39": 39
    }],
    28: [function (require, module, exports) {
      var getLength = require(31),
          isLength = require(40),
          toObject = require(43);
      /**
       * Creates a `baseEach` or `baseEachRight` function.
       *
       * @private
       * @param {Function} eachFunc The function to iterate over a collection.
       * @param {boolean} [fromRight] Specify iterating from right to left.
       * @returns {Function} Returns the new base function.
       */


      function createBaseEach(eachFunc, fromRight) {
        return function (collection, iteratee) {
          var length = collection ? getLength(collection) : 0;

          if (!isLength(length)) {
            return eachFunc(collection, iteratee);
          }

          var index = fromRight ? length : -1,
              iterable = toObject(collection);

          while (fromRight ? index-- : ++index < length) {
            if (iteratee(iterable[index], index, iterable) === false) {
              break;
            }
          }

          return collection;
        };
      }

      module.exports = createBaseEach;
    }, {
      "31": 31,
      "40": 40,
      "43": 43
    }],
    29: [function (require, module, exports) {
      var toObject = require(43);
      /**
       * Creates a base function for `_.forIn` or `_.forInRight`.
       *
       * @private
       * @param {boolean} [fromRight] Specify iterating from right to left.
       * @returns {Function} Returns the new base function.
       */


      function createBaseFor(fromRight) {
        return function (object, iteratee, keysFunc) {
          var iterable = toObject(object),
              props = keysFunc(object),
              length = props.length,
              index = fromRight ? length : -1;

          while (fromRight ? index-- : ++index < length) {
            var key = props[index];

            if (iteratee(iterable[key], key, iterable) === false) {
              break;
            }
          }

          return object;
        };
      }

      module.exports = createBaseFor;
    }, {
      "43": 43
    }],
    30: [function (require, module, exports) {
      var bindCallback = require(25),
          isArray = require(47);
      /**
       * Creates a function for `_.forEach` or `_.forEachRight`.
       *
       * @private
       * @param {Function} arrayFunc The function to iterate over an array.
       * @param {Function} eachFunc The function to iterate over a collection.
       * @returns {Function} Returns the new each function.
       */


      function createForEach(arrayFunc, eachFunc) {
        return function (collection, iteratee, thisArg) {
          return typeof iteratee == 'function' && thisArg === undefined && isArray(collection) ? arrayFunc(collection, iteratee) : eachFunc(collection, bindCallback(iteratee, thisArg, 3));
        };
      }

      module.exports = createForEach;
    }, {
      "25": 25,
      "47": 47
    }],
    31: [function (require, module, exports) {
      var baseProperty = require(24);
      /**
       * Gets the "length" property value of `object`.
       *
       * **Note:** This function is used to avoid a [JIT bug](https://bugs.webkit.org/show_bug.cgi?id=142792)
       * that affects Safari on at least iOS 8.1-8.3 ARM64.
       *
       * @private
       * @param {Object} object The object to query.
       * @returns {*} Returns the "length" value.
       */


      var getLength = baseProperty('length');
      module.exports = getLength;
    }, {
      "24": 24
    }],
    32: [function (require, module, exports) {
      var isNative = require(49);
      /**
       * Gets the native function at `key` of `object`.
       *
       * @private
       * @param {Object} object The object to query.
       * @param {string} key The key of the method to get.
       * @returns {*} Returns the function if it's native, else `undefined`.
       */


      function getNative(object, key) {
        var value = object == null ? undefined : object[key];
        return isNative(value) ? value : undefined;
      }

      module.exports = getNative;
    }, {
      "49": 49
    }],
    33: [function (require, module, exports) {
      /** Used for native method references. */
      var objectProto = Object.prototype;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /**
       * Initializes an array clone.
       *
       * @private
       * @param {Array} array The array to clone.
       * @returns {Array} Returns the initialized clone.
       */

      function initCloneArray(array) {
        var length = array.length,
            result = new array.constructor(length); // Add array properties assigned by `RegExp#exec`.

        if (length && typeof array[0] == 'string' && hasOwnProperty.call(array, 'index')) {
          result.index = array.index;
          result.input = array.input;
        }

        return result;
      }

      module.exports = initCloneArray;
    }, {}],
    34: [function (require, module, exports) {
      (function (global) {
        var bufferClone = require(26);
        /** `Object#toString` result references. */


        var boolTag = '[object Boolean]',
            dateTag = '[object Date]',
            numberTag = '[object Number]',
            regexpTag = '[object RegExp]',
            stringTag = '[object String]';
        var arrayBufferTag = '[object ArrayBuffer]',
            float32Tag = '[object Float32Array]',
            float64Tag = '[object Float64Array]',
            int8Tag = '[object Int8Array]',
            int16Tag = '[object Int16Array]',
            int32Tag = '[object Int32Array]',
            uint8Tag = '[object Uint8Array]',
            uint8ClampedTag = '[object Uint8ClampedArray]',
            uint16Tag = '[object Uint16Array]',
            uint32Tag = '[object Uint32Array]';
        /** Used to match `RegExp` flags from their coerced string values. */

        var reFlags = /\w*$/;
        /** Native method references. */

        var Uint8Array = global.Uint8Array;
        /** Used to lookup a type array constructors by `toStringTag`. */

        var ctorByTag = {};
        ctorByTag[float32Tag] = global.Float32Array;
        ctorByTag[float64Tag] = global.Float64Array;
        ctorByTag[int8Tag] = global.Int8Array;
        ctorByTag[int16Tag] = global.Int16Array;
        ctorByTag[int32Tag] = global.Int32Array;
        ctorByTag[uint8Tag] = Uint8Array;
        ctorByTag[uint8ClampedTag] = global.Uint8ClampedArray;
        ctorByTag[uint16Tag] = global.Uint16Array;
        ctorByTag[uint32Tag] = global.Uint32Array;
        /**
         * Initializes an object clone based on its `toStringTag`.
         *
         * **Note:** This function only supports cloning values with tags of
         * `Boolean`, `Date`, `Error`, `Number`, `RegExp`, or `String`.
         *
         * @private
         * @param {Object} object The object to clone.
         * @param {string} tag The `toStringTag` of the object to clone.
         * @param {boolean} [isDeep] Specify a deep clone.
         * @returns {Object} Returns the initialized clone.
         */

        function initCloneByTag(object, tag, isDeep) {
          var Ctor = object.constructor;

          switch (tag) {
            case arrayBufferTag:
              return bufferClone(object);

            case boolTag:
            case dateTag:
              return new Ctor(+object);

            case float32Tag:
            case float64Tag:
            case int8Tag:
            case int16Tag:
            case int32Tag:
            case uint8Tag:
            case uint8ClampedTag:
            case uint16Tag:
            case uint32Tag:
              // Safari 5 mobile incorrectly has `Object` as the constructor of typed arrays.
              if (Ctor instanceof Ctor) {
                Ctor = ctorByTag[tag];
              }

              var buffer = object.buffer;
              return new Ctor(isDeep ? bufferClone(buffer) : buffer, object.byteOffset, object.length);

            case numberTag:
            case stringTag:
              return new Ctor(object);

            case regexpTag:
              var result = new Ctor(object.source, reFlags.exec(object));
              result.lastIndex = object.lastIndex;
          }

          return result;
        }

        module.exports = initCloneByTag;
      }).call(this, typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {});
    }, {
      "26": 26
    }],
    35: [function (require, module, exports) {
      /**
       * Initializes an object clone.
       *
       * @private
       * @param {Object} object The object to clone.
       * @returns {Object} Returns the initialized clone.
       */
      function initCloneObject(object) {
        var Ctor = object.constructor;

        if (!(typeof Ctor == 'function' && Ctor instanceof Ctor)) {
          Ctor = Object;
        }

        return new Ctor();
      }

      module.exports = initCloneObject;
    }, {}],
    36: [function (require, module, exports) {
      var getLength = require(31),
          isLength = require(40);
      /**
       * Checks if `value` is array-like.
       *
       * @private
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is array-like, else `false`.
       */


      function isArrayLike(value) {
        return value != null && isLength(getLength(value));
      }

      module.exports = isArrayLike;
    }, {
      "31": 31,
      "40": 40
    }],
    37: [function (require, module, exports) {
      /**
       * Checks if `value` is a host object in IE < 9.
       *
       * @private
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is a host object, else `false`.
       */
      var isHostObject = function () {
        try {
          Object({
            'toString': 0
          } + '');
        } catch (e) {
          return function () {
            return false;
          };
        }

        return function (value) {
          // IE < 9 presents many host objects as `Object` objects that can coerce
          // to strings despite having improperly defined `toString` methods.
          return typeof value.toString != 'function' && typeof (value + '') == 'string';
        };
      }();

      module.exports = isHostObject;
    }, {}],
    38: [function (require, module, exports) {
      /** Used to detect unsigned integer values. */
      var reIsUint = /^\d+$/;
      /**
       * Used as the [maximum length](http://ecma-international.org/ecma-262/6.0/#sec-number.max_safe_integer)
       * of an array-like value.
       */

      var MAX_SAFE_INTEGER = 9007199254740991;
      /**
       * Checks if `value` is a valid array-like index.
       *
       * @private
       * @param {*} value The value to check.
       * @param {number} [length=MAX_SAFE_INTEGER] The upper bounds of a valid index.
       * @returns {boolean} Returns `true` if `value` is a valid index, else `false`.
       */

      function isIndex(value, length) {
        value = typeof value == 'number' || reIsUint.test(value) ? +value : -1;
        length = length == null ? MAX_SAFE_INTEGER : length;
        return value > -1 && value % 1 == 0 && value < length;
      }

      module.exports = isIndex;
    }, {}],
    39: [function (require, module, exports) {
      var isArrayLike = require(36),
          isIndex = require(38),
          isObject = require(50);
      /**
       * Checks if the provided arguments are from an iteratee call.
       *
       * @private
       * @param {*} value The potential iteratee value argument.
       * @param {*} index The potential iteratee index or key argument.
       * @param {*} object The potential iteratee object argument.
       * @returns {boolean} Returns `true` if the arguments are from an iteratee call, else `false`.
       */


      function isIterateeCall(value, index, object) {
        if (!isObject(object)) {
          return false;
        }

        var type = _typeof(index);

        if (type == 'number' ? isArrayLike(object) && isIndex(index, object.length) : type == 'string' && index in object) {
          var other = object[index];
          return value === value ? value === other : other !== other;
        }

        return false;
      }

      module.exports = isIterateeCall;
    }, {
      "36": 36,
      "38": 38,
      "50": 50
    }],
    40: [function (require, module, exports) {
      /**
       * Used as the [maximum length](http://ecma-international.org/ecma-262/6.0/#sec-number.max_safe_integer)
       * of an array-like value.
       */
      var MAX_SAFE_INTEGER = 9007199254740991;
      /**
       * Checks if `value` is a valid array-like length.
       *
       * **Note:** This function is based on [`ToLength`](http://ecma-international.org/ecma-262/6.0/#sec-tolength).
       *
       * @private
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is a valid length, else `false`.
       */

      function isLength(value) {
        return typeof value == 'number' && value > -1 && value % 1 == 0 && value <= MAX_SAFE_INTEGER;
      }

      module.exports = isLength;
    }, {}],
    41: [function (require, module, exports) {
      /**
       * Checks if `value` is object-like.
       *
       * @private
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
       */
      function isObjectLike(value) {
        return !!value && _typeof(value) == 'object';
      }

      module.exports = isObjectLike;
    }, {}],
    42: [function (require, module, exports) {
      var isArguments = require(46),
          isArray = require(47),
          isIndex = require(38),
          isLength = require(40),
          isString = require(52),
          keysIn = require(56);
      /** Used for native method references. */


      var objectProto = Object.prototype;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /**
       * A fallback implementation of `Object.keys` which creates an array of the
       * own enumerable property names of `object`.
       *
       * @private
       * @param {Object} object The object to query.
       * @returns {Array} Returns the array of property names.
       */

      function shimKeys(object) {
        var props = keysIn(object),
            propsLength = props.length,
            length = propsLength && object.length;
        var allowIndexes = !!length && isLength(length) && (isArray(object) || isArguments(object) || isString(object));
        var index = -1,
            result = [];

        while (++index < propsLength) {
          var key = props[index];

          if (allowIndexes && isIndex(key, length) || hasOwnProperty.call(object, key)) {
            result.push(key);
          }
        }

        return result;
      }

      module.exports = shimKeys;
    }, {
      "38": 38,
      "40": 40,
      "46": 46,
      "47": 47,
      "52": 52,
      "56": 56
    }],
    43: [function (require, module, exports) {
      var isObject = require(50),
          isString = require(52),
          support = require(58);
      /**
       * Converts `value` to an object if it's not one.
       *
       * @private
       * @param {*} value The value to process.
       * @returns {Object} Returns the object.
       */


      function toObject(value) {
        if (support.unindexedChars && isString(value)) {
          var index = -1,
              length = value.length,
              result = Object(value);

          while (++index < length) {
            result[index] = value.charAt(index);
          }

          return result;
        }

        return isObject(value) ? value : Object(value);
      }

      module.exports = toObject;
    }, {
      "50": 50,
      "52": 52,
      "58": 58
    }],
    44: [function (require, module, exports) {
      var baseClone = require(16),
          bindCallback = require(25),
          isIterateeCall = require(39);
      /**
       * Creates a clone of `value`. If `isDeep` is `true` nested objects are cloned,
       * otherwise they are assigned by reference. If `customizer` is provided it is
       * invoked to produce the cloned values. If `customizer` returns `undefined`
       * cloning is handled by the method instead. The `customizer` is bound to
       * `thisArg` and invoked with two argument; (value [, index|key, object]).
       *
       * **Note:** This method is loosely based on the
       * [structured clone algorithm](http://www.w3.org/TR/html5/infrastructure.html#internal-structured-cloning-algorithm).
       * The enumerable properties of `arguments` objects and objects created by
       * constructors other than `Object` are cloned to plain `Object` objects. An
       * empty object is returned for uncloneable values such as functions, DOM nodes,
       * Maps, Sets, and WeakMaps.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to clone.
       * @param {boolean} [isDeep] Specify a deep clone.
       * @param {Function} [customizer] The function to customize cloning values.
       * @param {*} [thisArg] The `this` binding of `customizer`.
       * @returns {*} Returns the cloned value.
       * @example
       *
       * var users = [
       *   { 'user': 'barney' },
       *   { 'user': 'fred' }
       * ];
       *
       * var shallow = _.clone(users);
       * shallow[0] === users[0];
       * // => true
       *
       * var deep = _.clone(users, true);
       * deep[0] === users[0];
       * // => false
       *
       * // using a customizer callback
       * var el = _.clone(document.body, function(value) {
      *   if (_.isElement(value)) {
      *     return value.cloneNode(false);
      *   }
      * });
       *
       * el === document.body
       * // => false
       * el.nodeName
       * // => BODY
       * el.childNodes.length;
       * // => 0
       */


      function clone(value, isDeep, customizer, thisArg) {
        if (isDeep && typeof isDeep != 'boolean' && isIterateeCall(value, isDeep, customizer)) {
          isDeep = false;
        } else if (typeof isDeep == 'function') {
          thisArg = customizer;
          customizer = isDeep;
          isDeep = false;
        }

        return typeof customizer == 'function' ? baseClone(value, isDeep, bindCallback(customizer, thisArg, 1)) : baseClone(value, isDeep);
      }

      module.exports = clone;
    }, {
      "16": 16,
      "25": 25,
      "39": 39
    }],
    45: [function (require, module, exports) {
      var baseClone = require(16),
          bindCallback = require(25);
      /**
       * Creates a deep clone of `value`. If `customizer` is provided it is invoked
       * to produce the cloned values. If `customizer` returns `undefined` cloning
       * is handled by the method instead. The `customizer` is bound to `thisArg`
       * and invoked with two argument; (value [, index|key, object]).
       *
       * **Note:** This method is loosely based on the
       * [structured clone algorithm](http://www.w3.org/TR/html5/infrastructure.html#internal-structured-cloning-algorithm).
       * The enumerable properties of `arguments` objects and objects created by
       * constructors other than `Object` are cloned to plain `Object` objects. An
       * empty object is returned for uncloneable values such as functions, DOM nodes,
       * Maps, Sets, and WeakMaps.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to deep clone.
       * @param {Function} [customizer] The function to customize cloning values.
       * @param {*} [thisArg] The `this` binding of `customizer`.
       * @returns {*} Returns the deep cloned value.
       * @example
       *
       * var users = [
       *   { 'user': 'barney' },
       *   { 'user': 'fred' }
       * ];
       *
       * var deep = _.cloneDeep(users);
       * deep[0] === users[0];
       * // => false
       *
       * // using a customizer callback
       * var el = _.cloneDeep(document.body, function(value) {
      *   if (_.isElement(value)) {
      *     return value.cloneNode(true);
      *   }
      * });
       *
       * el === document.body
       * // => false
       * el.nodeName
       * // => BODY
       * el.childNodes.length;
       * // => 20
       */


      function cloneDeep(value, customizer, thisArg) {
        return typeof customizer == 'function' ? baseClone(value, true, bindCallback(customizer, thisArg, 1)) : baseClone(value, true);
      }

      module.exports = cloneDeep;
    }, {
      "16": 16,
      "25": 25
    }],
    46: [function (require, module, exports) {
      var isArrayLike = require(36),
          isObjectLike = require(41);
      /** Used for native method references. */


      var objectProto = Object.prototype;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /** Native method references. */

      var propertyIsEnumerable = objectProto.propertyIsEnumerable;
      /**
       * Checks if `value` is classified as an `arguments` object.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is correctly classified, else `false`.
       * @example
       *
       * _.isArguments(function() { return arguments; }());
       * // => true
       *
       * _.isArguments([1, 2, 3]);
       * // => false
       */

      function isArguments(value) {
        return isObjectLike(value) && isArrayLike(value) && hasOwnProperty.call(value, 'callee') && !propertyIsEnumerable.call(value, 'callee');
      }

      module.exports = isArguments;
    }, {
      "36": 36,
      "41": 41
    }],
    47: [function (require, module, exports) {
      var getNative = require(32),
          isLength = require(40),
          isObjectLike = require(41);
      /** `Object#toString` result references. */


      var arrayTag = '[object Array]';
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /* Native method references for those with the same name as other `lodash` methods. */

      var nativeIsArray = getNative(Array, 'isArray');
      /**
       * Checks if `value` is classified as an `Array` object.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is correctly classified, else `false`.
       * @example
       *
       * _.isArray([1, 2, 3]);
       * // => true
       *
       * _.isArray(function() { return arguments; }());
       * // => false
       */

      var isArray = nativeIsArray || function (value) {
        return isObjectLike(value) && isLength(value.length) && objToString.call(value) == arrayTag;
      };

      module.exports = isArray;
    }, {
      "32": 32,
      "40": 40,
      "41": 41
    }],
    48: [function (require, module, exports) {
      var isObject = require(50);
      /** `Object#toString` result references. */


      var funcTag = '[object Function]';
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /**
       * Checks if `value` is classified as a `Function` object.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is correctly classified, else `false`.
       * @example
       *
       * _.isFunction(_);
       * // => true
       *
       * _.isFunction(/abc/);
       * // => false
       */

      function isFunction(value) {
        // The use of `Object#toString` avoids issues with the `typeof` operator
        // in older versions of Chrome and Safari which return 'function' for regexes
        // and Safari 8 equivalents which return 'object' for typed array constructors.
        return isObject(value) && objToString.call(value) == funcTag;
      }

      module.exports = isFunction;
    }, {
      "50": 50
    }],
    49: [function (require, module, exports) {
      var isFunction = require(48),
          isHostObject = require(37),
          isObjectLike = require(41);
      /** Used to detect host constructors (Safari > 5). */


      var reIsHostCtor = /^\[object .+?Constructor\]$/;
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /** Used to resolve the decompiled source of functions. */

      var fnToString = Function.prototype.toString;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /** Used to detect if a method is native. */

      var reIsNative = RegExp('^' + fnToString.call(hasOwnProperty).replace(/[\\^$.*+?()[\]{}|]/g, '\\$&').replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, '$1.*?') + '$');
      /**
       * Checks if `value` is a native function.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is a native function, else `false`.
       * @example
       *
       * _.isNative(Array.prototype.push);
       * // => true
       *
       * _.isNative(_);
       * // => false
       */

      function isNative(value) {
        if (value == null) {
          return false;
        }

        if (isFunction(value)) {
          return reIsNative.test(fnToString.call(value));
        }

        return isObjectLike(value) && (isHostObject(value) ? reIsNative : reIsHostCtor).test(value);
      }

      module.exports = isNative;
    }, {
      "37": 37,
      "41": 41,
      "48": 48
    }],
    50: [function (require, module, exports) {
      /**
       * Checks if `value` is the [language type](https://es5.github.io/#x8) of `Object`.
       * (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is an object, else `false`.
       * @example
       *
       * _.isObject({});
       * // => true
       *
       * _.isObject([1, 2, 3]);
       * // => true
       *
       * _.isObject(1);
       * // => false
       */
      function isObject(value) {
        // Avoid a V8 JIT bug in Chrome 19-20.
        // See https://code.google.com/p/v8/issues/detail?id=2291 for more details.
        var type = _typeof(value);

        return !!value && (type == 'object' || type == 'function');
      }

      module.exports = isObject;
    }, {}],
    51: [function (require, module, exports) {
      var baseForIn = require(20),
          isArguments = require(46),
          isHostObject = require(37),
          isObjectLike = require(41),
          support = require(58);
      /** `Object#toString` result references. */


      var objectTag = '[object Object]';
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /**
       * Checks if `value` is a plain object, that is, an object created by the
       * `Object` constructor or one with a `[[Prototype]]` of `null`.
       *
       * **Note:** This method assumes objects created by the `Object` constructor
       * have no inherited enumerable properties.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is a plain object, else `false`.
       * @example
       *
       * function Foo() {
      *   this.a = 1;
      * }
       *
       * _.isPlainObject(new Foo);
       * // => false
       *
       * _.isPlainObject([1, 2, 3]);
       * // => false
       *
       * _.isPlainObject({ 'x': 0, 'y': 0 });
       * // => true
       *
       * _.isPlainObject(Object.create(null));
       * // => true
       */

      function isPlainObject(value) {
        var Ctor; // Exit early for non `Object` objects.

        if (!(isObjectLike(value) && objToString.call(value) == objectTag && !isHostObject(value) && !isArguments(value)) || !hasOwnProperty.call(value, 'constructor') && (Ctor = value.constructor, typeof Ctor == 'function' && !(Ctor instanceof Ctor))) {
          return false;
        } // IE < 9 iterates inherited properties before own properties. If the first
        // iterated property is an object's own property then there are no inherited
        // enumerable properties.


        var result;

        if (support.ownLast) {
          baseForIn(value, function (subValue, key, object) {
            result = hasOwnProperty.call(object, key);
            return false;
          });
          return result !== false;
        } // In most environments an object's own properties are iterated before
        // its inherited properties. If the last iterated property is an object's
        // own property then there are no inherited enumerable properties.


        baseForIn(value, function (subValue, key) {
          result = key;
        });
        return result === undefined || hasOwnProperty.call(value, result);
      }

      module.exports = isPlainObject;
    }, {
      "20": 20,
      "37": 37,
      "41": 41,
      "46": 46,
      "58": 58
    }],
    52: [function (require, module, exports) {
      var isObjectLike = require(41);
      /** `Object#toString` result references. */


      var stringTag = '[object String]';
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /**
       * Checks if `value` is classified as a `String` primitive or object.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is correctly classified, else `false`.
       * @example
       *
       * _.isString('abc');
       * // => true
       *
       * _.isString(1);
       * // => false
       */

      function isString(value) {
        return typeof value == 'string' || isObjectLike(value) && objToString.call(value) == stringTag;
      }

      module.exports = isString;
    }, {
      "41": 41
    }],
    53: [function (require, module, exports) {
      var isLength = require(40),
          isObjectLike = require(41);
      /** `Object#toString` result references. */


      var argsTag = '[object Arguments]',
          arrayTag = '[object Array]',
          boolTag = '[object Boolean]',
          dateTag = '[object Date]',
          errorTag = '[object Error]',
          funcTag = '[object Function]',
          mapTag = '[object Map]',
          numberTag = '[object Number]',
          objectTag = '[object Object]',
          regexpTag = '[object RegExp]',
          setTag = '[object Set]',
          stringTag = '[object String]',
          weakMapTag = '[object WeakMap]';
      var arrayBufferTag = '[object ArrayBuffer]',
          float32Tag = '[object Float32Array]',
          float64Tag = '[object Float64Array]',
          int8Tag = '[object Int8Array]',
          int16Tag = '[object Int16Array]',
          int32Tag = '[object Int32Array]',
          uint8Tag = '[object Uint8Array]',
          uint8ClampedTag = '[object Uint8ClampedArray]',
          uint16Tag = '[object Uint16Array]',
          uint32Tag = '[object Uint32Array]';
      /** Used to identify `toStringTag` values of typed arrays. */

      var typedArrayTags = {};
      typedArrayTags[float32Tag] = typedArrayTags[float64Tag] = typedArrayTags[int8Tag] = typedArrayTags[int16Tag] = typedArrayTags[int32Tag] = typedArrayTags[uint8Tag] = typedArrayTags[uint8ClampedTag] = typedArrayTags[uint16Tag] = typedArrayTags[uint32Tag] = true;
      typedArrayTags[argsTag] = typedArrayTags[arrayTag] = typedArrayTags[arrayBufferTag] = typedArrayTags[boolTag] = typedArrayTags[dateTag] = typedArrayTags[errorTag] = typedArrayTags[funcTag] = typedArrayTags[mapTag] = typedArrayTags[numberTag] = typedArrayTags[objectTag] = typedArrayTags[regexpTag] = typedArrayTags[setTag] = typedArrayTags[stringTag] = typedArrayTags[weakMapTag] = false;
      /** Used for native method references. */

      var objectProto = Object.prototype;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /**
       * Checks if `value` is classified as a typed array.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to check.
       * @returns {boolean} Returns `true` if `value` is correctly classified, else `false`.
       * @example
       *
       * _.isTypedArray(new Uint8Array);
       * // => true
       *
       * _.isTypedArray([]);
       * // => false
       */

      function isTypedArray(value) {
        return isObjectLike(value) && isLength(value.length) && !!typedArrayTags[objToString.call(value)];
      }

      module.exports = isTypedArray;
    }, {
      "40": 40,
      "41": 41
    }],
    54: [function (require, module, exports) {
      var baseCopy = require(17),
          keysIn = require(56);
      /**
       * Converts `value` to a plain object flattening inherited enumerable
       * properties of `value` to own properties of the plain object.
       *
       * @static
       * @memberOf _
       * @category Lang
       * @param {*} value The value to convert.
       * @returns {Object} Returns the converted plain object.
       * @example
       *
       * function Foo() {
      *   this.b = 2;
      * }
       *
       * Foo.prototype.c = 3;
       *
       * _.assign({ 'a': 1 }, new Foo);
       * // => { 'a': 1, 'b': 2 }
       *
       * _.assign({ 'a': 1 }, _.toPlainObject(new Foo));
       * // => { 'a': 1, 'b': 2, 'c': 3 }
       */


      function toPlainObject(value) {
        return baseCopy(value, keysIn(value));
      }

      module.exports = toPlainObject;
    }, {
      "17": 17,
      "56": 56
    }],
    55: [function (require, module, exports) {
      var getNative = require(32),
          isArrayLike = require(36),
          isObject = require(50),
          shimKeys = require(42),
          support = require(58);
      /* Native method references for those with the same name as other `lodash` methods. */


      var nativeKeys = getNative(Object, 'keys');
      /**
       * Creates an array of the own enumerable property names of `object`.
       *
       * **Note:** Non-object values are coerced to objects. See the
       * [ES spec](http://ecma-international.org/ecma-262/6.0/#sec-object.keys)
       * for more details.
       *
       * @static
       * @memberOf _
       * @category Object
       * @param {Object} object The object to query.
       * @returns {Array} Returns the array of property names.
       * @example
       *
       * function Foo() {
      *   this.a = 1;
      *   this.b = 2;
      * }
       *
       * Foo.prototype.c = 3;
       *
       * _.keys(new Foo);
       * // => ['a', 'b'] (iteration order is not guaranteed)
       *
       * _.keys('hi');
       * // => ['0', '1']
       */

      var keys = !nativeKeys ? shimKeys : function (object) {
        var Ctor = object == null ? undefined : object.constructor;

        if (typeof Ctor == 'function' && Ctor.prototype === object || (typeof object == 'function' ? support.enumPrototypes : isArrayLike(object))) {
          return shimKeys(object);
        }

        return isObject(object) ? nativeKeys(object) : [];
      };
      module.exports = keys;
    }, {
      "32": 32,
      "36": 36,
      "42": 42,
      "50": 50,
      "58": 58
    }],
    56: [function (require, module, exports) {
      var arrayEach = require(14),
          isArguments = require(46),
          isArray = require(47),
          isFunction = require(48),
          isIndex = require(38),
          isLength = require(40),
          isObject = require(50),
          isString = require(52),
          support = require(58);
      /** `Object#toString` result references. */


      var arrayTag = '[object Array]',
          boolTag = '[object Boolean]',
          dateTag = '[object Date]',
          errorTag = '[object Error]',
          funcTag = '[object Function]',
          numberTag = '[object Number]',
          objectTag = '[object Object]',
          regexpTag = '[object RegExp]',
          stringTag = '[object String]';
      /** Used to fix the JScript `[[DontEnum]]` bug. */

      var shadowProps = ['constructor', 'hasOwnProperty', 'isPrototypeOf', 'propertyIsEnumerable', 'toLocaleString', 'toString', 'valueOf'];
      /** Used for native method references. */

      var errorProto = Error.prototype,
          objectProto = Object.prototype,
          stringProto = String.prototype;
      /** Used to check objects for own properties. */

      var hasOwnProperty = objectProto.hasOwnProperty;
      /**
       * Used to resolve the [`toStringTag`](http://ecma-international.org/ecma-262/6.0/#sec-object.prototype.tostring)
       * of values.
       */

      var objToString = objectProto.toString;
      /** Used to avoid iterating over non-enumerable properties in IE < 9. */

      var nonEnumProps = {};
      nonEnumProps[arrayTag] = nonEnumProps[dateTag] = nonEnumProps[numberTag] = {
        'constructor': true,
        'toLocaleString': true,
        'toString': true,
        'valueOf': true
      };
      nonEnumProps[boolTag] = nonEnumProps[stringTag] = {
        'constructor': true,
        'toString': true,
        'valueOf': true
      };
      nonEnumProps[errorTag] = nonEnumProps[funcTag] = nonEnumProps[regexpTag] = {
        'constructor': true,
        'toString': true
      };
      nonEnumProps[objectTag] = {
        'constructor': true
      };
      arrayEach(shadowProps, function (key) {
        for (var tag in nonEnumProps) {
          if (hasOwnProperty.call(nonEnumProps, tag)) {
            var props = nonEnumProps[tag];
            props[key] = hasOwnProperty.call(props, key);
          }
        }
      });
      /**
       * Creates an array of the own and inherited enumerable property names of `object`.
       *
       * **Note:** Non-object values are coerced to objects.
       *
       * @static
       * @memberOf _
       * @category Object
       * @param {Object} object The object to query.
       * @returns {Array} Returns the array of property names.
       * @example
       *
       * function Foo() {
      *   this.a = 1;
      *   this.b = 2;
      * }
       *
       * Foo.prototype.c = 3;
       *
       * _.keysIn(new Foo);
       * // => ['a', 'b', 'c'] (iteration order is not guaranteed)
       */

      function keysIn(object) {
        if (object == null) {
          return [];
        }

        if (!isObject(object)) {
          object = Object(object);
        }

        var length = object.length;
        length = length && isLength(length) && (isArray(object) || isArguments(object) || isString(object)) && length || 0;
        var Ctor = object.constructor,
            index = -1,
            proto = isFunction(Ctor) && Ctor.prototype || objectProto,
            isProto = proto === object,
            result = Array(length),
            skipIndexes = length > 0,
            skipErrorProps = support.enumErrorProps && (object === errorProto || object instanceof Error),
            skipProto = support.enumPrototypes && isFunction(object);

        while (++index < length) {
          result[index] = index + '';
        } // lodash skips the `constructor` property when it infers it is iterating
        // over a `prototype` object because IE < 9 can't set the `[[Enumerable]]`
        // attribute of an existing property and the `constructor` property of a
        // prototype defaults to non-enumerable.


        for (var key in object) {
          if (!(skipProto && key == 'prototype') && !(skipErrorProps && (key == 'message' || key == 'name')) && !(skipIndexes && isIndex(key, length)) && !(key == 'constructor' && (isProto || !hasOwnProperty.call(object, key)))) {
            result.push(key);
          }
        }

        if (support.nonEnumShadows && object !== objectProto) {
          var tag = object === stringProto ? stringTag : object === errorProto ? errorTag : objToString.call(object),
              nonEnums = nonEnumProps[tag] || nonEnumProps[objectTag];

          if (tag == objectTag) {
            proto = objectProto;
          }

          length = shadowProps.length;

          while (length--) {
            key = shadowProps[length];
            var nonEnum = nonEnums[key];

            if (!(isProto && nonEnum) && (nonEnum ? hasOwnProperty.call(object, key) : object[key] !== proto[key])) {
              result.push(key);
            }
          }
        }

        return result;
      }

      module.exports = keysIn;
    }, {
      "14": 14,
      "38": 38,
      "40": 40,
      "46": 46,
      "47": 47,
      "48": 48,
      "50": 50,
      "52": 52,
      "58": 58
    }],
    57: [function (require, module, exports) {
      var baseMerge = require(22),
          createAssigner = require(27);
      /**
       * Recursively merges own enumerable properties of the source object(s), that
       * don't resolve to `undefined` into the destination object. Subsequent sources
       * overwrite property assignments of previous sources. If `customizer` is
       * provided it is invoked to produce the merged values of the destination and
       * source properties. If `customizer` returns `undefined` merging is handled
       * by the method instead. The `customizer` is bound to `thisArg` and invoked
       * with five arguments: (objectValue, sourceValue, key, object, source).
       *
       * @static
       * @memberOf _
       * @category Object
       * @param {Object} object The destination object.
       * @param {...Object} [sources] The source objects.
       * @param {Function} [customizer] The function to customize assigned values.
       * @param {*} [thisArg] The `this` binding of `customizer`.
       * @returns {Object} Returns `object`.
       * @example
       *
       * var users = {
      *   'data': [{ 'user': 'barney' }, { 'user': 'fred' }]
      * };
       *
       * var ages = {
      *   'data': [{ 'age': 36 }, { 'age': 40 }]
      * };
       *
       * _.merge(users, ages);
       * // => { 'data': [{ 'user': 'barney', 'age': 36 }, { 'user': 'fred', 'age': 40 }] }
       *
       * // using a customizer callback
       * var object = {
      *   'fruits': ['apple'],
      *   'vegetables': ['beet']
      * };
       *
       * var other = {
      *   'fruits': ['banana'],
      *   'vegetables': ['carrot']
      * };
       *
       * _.merge(object, other, function(a, b) {
      *   if (_.isArray(a)) {
      *     return a.concat(b);
      *   }
      * });
       * // => { 'fruits': ['apple', 'banana'], 'vegetables': ['beet', 'carrot'] }
       */


      var merge = createAssigner(baseMerge);
      module.exports = merge;
    }, {
      "22": 22,
      "27": 27
    }],
    58: [function (require, module, exports) {
      /** Used for native method references. */
      var arrayProto = Array.prototype,
          errorProto = Error.prototype,
          objectProto = Object.prototype;
      /** Native method references. */

      var propertyIsEnumerable = objectProto.propertyIsEnumerable,
          splice = arrayProto.splice;
      /**
       * An object environment feature flags.
       *
       * @static
       * @memberOf _
       * @type Object
       */

      var support = {};

      (function (x) {
        var Ctor = function Ctor() {
          this.x = x;
        },
            object = {
          '0': x,
          'length': x
        },
            props = [];

        Ctor.prototype = {
          'valueOf': x,
          'y': x
        };

        for (var key in new Ctor()) {
          props.push(key);
        }
        /**
         * Detect if `name` or `message` properties of `Error.prototype` are
         * enumerable by default (IE < 9, Safari < 5.1).
         *
         * @memberOf _.support
         * @type boolean
         */


        support.enumErrorProps = propertyIsEnumerable.call(errorProto, 'message') || propertyIsEnumerable.call(errorProto, 'name');
        /**
         * Detect if `prototype` properties are enumerable by default.
         *
         * Firefox < 3.6, Opera > 9.50 - Opera < 11.60, and Safari < 5.1
         * (if the prototype or a property on the prototype has been set)
         * incorrectly set the `[[Enumerable]]` value of a function's `prototype`
         * property to `true`.
         *
         * @memberOf _.support
         * @type boolean
         */

        support.enumPrototypes = propertyIsEnumerable.call(Ctor, 'prototype');
        /**
         * Detect if properties shadowing those on `Object.prototype` are non-enumerable.
         *
         * In IE < 9 an object's own properties, shadowing non-enumerable ones,
         * are made non-enumerable as well (a.k.a the JScript `[[DontEnum]]` bug).
         *
         * @memberOf _.support
         * @type boolean
         */

        support.nonEnumShadows = !/valueOf/.test(props);
        /**
         * Detect if own properties are iterated after inherited properties (IE < 9).
         *
         * @memberOf _.support
         * @type boolean
         */

        support.ownLast = props[0] != 'x';
        /**
         * Detect if `Array#shift` and `Array#splice` augment array-like objects
         * correctly.
         *
         * Firefox < 10, compatibility modes of IE 8, and IE < 9 have buggy Array
         * `shift()` and `splice()` functions that fail to remove the last element,
         * `value[0]`, of array-like objects even though the "length" property is
         * set to `0`. The `shift()` method is buggy in compatibility modes of IE 8,
         * while `splice()` is buggy regardless of mode in IE < 9.
         *
         * @memberOf _.support
         * @type boolean
         */

        support.spliceObjects = (splice.call(object, 0, 1), !object[0]);
        /**
         * Detect lack of support for accessing string characters by index.
         *
         * IE < 8 can't access characters by index. IE 8 can only access characters
         * by index on string literals, not string objects.
         *
         * @memberOf _.support
         * @type boolean
         */

        support.unindexedChars = 'x'[0] + Object('x')[0] != 'xx';
      })(1, 0);

      module.exports = support;
    }, {}],
    59: [function (require, module, exports) {
      /**
       * This method returns the first argument provided to it.
       *
       * @static
       * @memberOf _
       * @category Utility
       * @param {*} value Any value.
       * @returns {*} Returns `value`.
       * @example
       *
       * var object = { 'user': 'fred' };
       *
       * _.identity(object) === object;
       * // => true
       */
      function identity(value) {
        return value;
      }

      module.exports = identity;
    }, {}],
    60: [function (require, module, exports) {
      (function (process) {
        'use strict';

        module.exports = AlgoliaSearch; // default debug activated in dev environments
        // this is triggered in package.json, using the envify transform

        if (false) {}

        var errors = require(66);
        /*
         * Algolia Search library initialization
         * https://www.algolia.com/
         *
         * @param {string} applicationID - Your applicationID, found in your dashboard
         * @param {string} apiKey - Your API key, found in your dashboard
         * @param {Object} [opts]
         * @param {number} [opts.timeout=2000] - The request timeout set in milliseconds,
         * another request will be issued after this timeout
         * @param {string} [opts.protocol='http:'] - The protocol used to query Algolia Search API.
         *                                        Set to 'https:' to force using https.
         *                                        Default to document.location.protocol in browsers
         * @param {Object|Array} [opts.hosts={
         *           read: [this.applicationID + '-dsn.algolia.net'].concat([
         *             this.applicationID + '-1.algolianet.com',
         *             this.applicationID + '-2.algolianet.com',
         *             this.applicationID + '-3.algolianet.com']
         *           ]),
         *           write: [this.applicationID + '.algolia.net'].concat([
         *             this.applicationID + '-1.algolianet.com',
         *             this.applicationID + '-2.algolianet.com',
         *             this.applicationID + '-3.algolianet.com']
         *           ]) - The hosts to use for Algolia Search API.
         *           If you provide them, you will less benefit from our HA implementation
         */


        function AlgoliaSearch(applicationID, apiKey, opts) {
          var debug = require(6)('algoliasearch');

          var clone = require(44);

          var isArray = require(47);

          var usage = 'Usage: algoliasearch(applicationID, apiKey, opts)';

          if (!applicationID) {
            throw new errors.AlgoliaSearchError('Please provide an application ID. ' + usage);
          }

          if (!apiKey) {
            throw new errors.AlgoliaSearchError('Please provide an API key. ' + usage);
          }

          this.applicationID = applicationID;
          this.apiKey = apiKey;
          var defaultHosts = [this.applicationID + '-1.algolianet.com', this.applicationID + '-2.algolianet.com', this.applicationID + '-3.algolianet.com'];
          this.hosts = {
            read: [],
            write: []
          };
          this.hostIndex = {
            read: 0,
            write: 0
          };
          opts = opts || {};
          var protocol = opts.protocol || 'https:';
          var timeout = opts.timeout === undefined ? 2000 : opts.timeout; // while we advocate for colon-at-the-end values: 'http:' for `opts.protocol`
          // we also accept `http` and `https`. It's a common error.

          if (!/:$/.test(protocol)) {
            protocol = protocol + ':';
          }

          if (opts.protocol !== 'http:' && opts.protocol !== 'https:') {
            throw new errors.AlgoliaSearchError('protocol must be `http:` or `https:` (was `' + opts.protocol + '`)');
          } // no hosts given, add defaults


          if (!opts.hosts) {
            this.hosts.read = [this.applicationID + '-dsn.algolia.net'].concat(defaultHosts);
            this.hosts.write = [this.applicationID + '.algolia.net'].concat(defaultHosts);
          } else if (isArray(opts.hosts)) {
            this.hosts.read = clone(opts.hosts);
            this.hosts.write = clone(opts.hosts);
          } else {
            this.hosts.read = clone(opts.hosts.read);
            this.hosts.write = clone(opts.hosts.write);
          } // add protocol and lowercase hosts


          this.hosts.read = map(this.hosts.read, prepareHost(protocol));
          this.hosts.write = map(this.hosts.write, prepareHost(protocol));
          this.requestTimeout = timeout;
          this.extraHeaders = [];
          this.cache = {};
          this._ua = opts._ua;
          this._useCache = opts._useCache === undefined ? true : opts._useCache;
          this._setTimeout = opts._setTimeout;
          debug('init done, %j', this);
        }

        AlgoliaSearch.prototype = {
          /*
           * Delete an index
           *
           * @param indexName the name of index to delete
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer that contains the task ID
           */
          deleteIndex: function deleteIndex(indexName, callback) {
            return this._jsonRequest({
              method: 'DELETE',
              url: '/1/indexes/' + encodeURIComponent(indexName),
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Move an existing index.
           * @param srcIndexName the name of index to copy.
           * @param dstIndexName the new index name that will contains a copy of
           * srcIndexName (destination will be overriten if it already exist).
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer that contains the task ID
           */
          moveIndex: function moveIndex(srcIndexName, dstIndexName, callback) {
            var postObj = {
              operation: 'move',
              destination: dstIndexName
            };
            return this._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(srcIndexName) + '/operation',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Copy an existing index.
           * @param srcIndexName the name of index to copy.
           * @param dstIndexName the new index name that will contains a copy
           * of srcIndexName (destination will be overriten if it already exist).
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer that contains the task ID
           */
          copyIndex: function copyIndex(srcIndexName, dstIndexName, callback) {
            var postObj = {
              operation: 'copy',
              destination: dstIndexName
            };
            return this._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(srcIndexName) + '/operation',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Return last log entries.
           * @param offset Specify the first entry to retrieve (0-based, 0 is the most recent log entry).
           * @param length Specify the maximum number of entries to retrieve starting
           * at offset. Maximum allowed value: 1000.
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer that contains the task ID
           */
          getLogs: function getLogs(offset, length, callback) {
            if (arguments.length === 0 || typeof offset === 'function') {
              // getLogs([cb])
              callback = offset;
              offset = 0;
              length = 10;
            } else if (arguments.length === 1 || typeof length === 'function') {
              // getLogs(1, [cb)]
              callback = length;
              length = 10;
            }

            return this._jsonRequest({
              method: 'GET',
              url: '/1/logs?offset=' + offset + '&length=' + length,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * List all existing indexes (paginated)
           *
           * @param page The page to retrieve, starting at 0.
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with index list
           */
          listIndexes: function listIndexes(page, callback) {
            var params = '';

            if (page === undefined || typeof page === 'function') {
              callback = page;
            } else {
              params = '?page=' + page;
            }

            return this._jsonRequest({
              method: 'GET',
              url: '/1/indexes' + params,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Get the index object initialized
           *
           * @param indexName the name of index
           * @param callback the result callback with one argument (the Index instance)
           */
          initIndex: function initIndex(indexName) {
            return new this.Index(this, indexName);
          },

          /*
           * List all existing user keys with their associated ACLs
           *
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          listUserKeys: function listUserKeys(callback) {
            return this._jsonRequest({
              method: 'GET',
              url: '/1/keys',
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Get ACL of a user key
           *
           * @param key
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          getUserKeyACL: function getUserKeyACL(key, callback) {
            return this._jsonRequest({
              method: 'GET',
              url: '/1/keys/' + key,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Delete an existing user key
           * @param key
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          deleteUserKey: function deleteUserKey(key, callback) {
            return this._jsonRequest({
              method: 'DELETE',
              url: '/1/keys/' + key,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Add a new global API key
           *
           * @param {string[]} acls - The list of ACL for this key. Defined by an array of strings that
           *   can contains the following values:
           *     - search: allow to search (https and http)
           *     - addObject: allows to add/update an object in the index (https only)
           *     - deleteObject : allows to delete an existing object (https only)
           *     - deleteIndex : allows to delete index content (https only)
           *     - settings : allows to get index settings (https only)
           *     - editSettings : allows to change index settings (https only)
           * @param {Object} [params] - Optionnal parameters to set for the key
           * @param {number} params.validity - Number of seconds after which the key will be automatically removed (0 means no time limit for this key)
           * @param {number} params.maxQueriesPerIPPerHour - Number of API calls allowed from an IP address per hour
           * @param {number} params.maxHitsPerQuery - Number of hits this API key can retrieve in one call
           * @param {string[]} params.indexes - Allowed targeted indexes for this key
           * @param {string} params.description - A description for your key
           * @param {string[]} params.referers - A list of authorized referers
           * @param {Object} params.queryParameters - Force the key to use specific query parameters
           * @param {Function} callback - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with user keys list
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * client.addUserKey(['search'], {
           *   validity: 300,
           *   maxQueriesPerIPPerHour: 2000,
           *   maxHitsPerQuery: 3,
           *   indexes: ['fruits'],
           *   description: 'Eat three fruits',
           *   referers: ['*.algolia.com'],
           *   queryParameters: {
           *     tagFilters: ['public'],
           *   }
           * })
           * @see {@link https://www.algolia.com/doc/rest_api#AddKey|Algolia REST API Documentation}
           */
          addUserKey: function addUserKey(acls, params, callback) {
            if (arguments.length === 1 || typeof params === 'function') {
              callback = params;
              params = null;
            }

            var postObj = {
              acl: acls
            };

            if (params) {
              postObj.validity = params.validity;
              postObj.maxQueriesPerIPPerHour = params.maxQueriesPerIPPerHour;
              postObj.maxHitsPerQuery = params.maxHitsPerQuery;
              postObj.indexes = params.indexes;
              postObj.description = params.description;

              if (params.queryParameters) {
                postObj.queryParameters = this._getSearchParams(params.queryParameters, '');
              }

              postObj.referers = params.referers;
            }

            return this._jsonRequest({
              method: 'POST',
              url: '/1/keys',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Add a new global API key
           * @deprecated Please use client.addUserKey()
           */
          addUserKeyWithValidity: deprecate(function (acls, params, callback) {
            return this.addUserKey(acls, params, callback);
          }, deprecatedMessage('client.addUserKeyWithValidity()', 'client.addUserKey()')),

          /**
           * Update an existing API key
           * @param {string} key - The key to update
           * @param {string[]} acls - The list of ACL for this key. Defined by an array of strings that
           *   can contains the following values:
           *     - search: allow to search (https and http)
           *     - addObject: allows to add/update an object in the index (https only)
           *     - deleteObject : allows to delete an existing object (https only)
           *     - deleteIndex : allows to delete index content (https only)
           *     - settings : allows to get index settings (https only)
           *     - editSettings : allows to change index settings (https only)
           * @param {Object} [params] - Optionnal parameters to set for the key
           * @param {number} params.validity - Number of seconds after which the key will be automatically removed (0 means no time limit for this key)
           * @param {number} params.maxQueriesPerIPPerHour - Number of API calls allowed from an IP address per hour
           * @param {number} params.maxHitsPerQuery - Number of hits this API key can retrieve in one call
           * @param {string[]} params.indexes - Allowed targeted indexes for this key
           * @param {string} params.description - A description for your key
           * @param {string[]} params.referers - A list of authorized referers
           * @param {Object} params.queryParameters - Force the key to use specific query parameters
           * @param {Function} callback - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with user keys list
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * client.updateUserKey('APIKEY', ['search'], {
          *   validity: 300,
          *   maxQueriesPerIPPerHour: 2000,
          *   maxHitsPerQuery: 3,
          *   indexes: ['fruits'],
          *   description: 'Eat three fruits',
          *   referers: ['*.algolia.com'],
          *   queryParameters: {
          *     tagFilters: ['public'],
          *   }
          * })
           * @see {@link https://www.algolia.com/doc/rest_api#UpdateIndexKey|Algolia REST API Documentation}
           */
          updateUserKey: function updateUserKey(key, acls, params, callback) {
            if (arguments.length === 2 || typeof params === 'function') {
              callback = params;
              params = null;
            }

            var putObj = {
              acl: acls
            };

            if (params) {
              putObj.validity = params.validity;
              putObj.maxQueriesPerIPPerHour = params.maxQueriesPerIPPerHour;
              putObj.maxHitsPerQuery = params.maxHitsPerQuery;
              putObj.indexes = params.indexes;
              putObj.description = params.description;

              if (params.queryParameters) {
                putObj.queryParameters = this._getSearchParams(params.queryParameters, '');
              }

              putObj.referers = params.referers;
            }

            return this._jsonRequest({
              method: 'PUT',
              url: '/1/keys/' + key,
              body: putObj,
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Set the extra security tagFilters header
           * @param {string|array} tags The list of tags defining the current security filters
           */
          setSecurityTags: function setSecurityTags(tags) {
            if (Object.prototype.toString.call(tags) === '[object Array]') {
              var strTags = [];

              for (var i = 0; i < tags.length; ++i) {
                if (Object.prototype.toString.call(tags[i]) === '[object Array]') {
                  var oredTags = [];

                  for (var j = 0; j < tags[i].length; ++j) {
                    oredTags.push(tags[i][j]);
                  }

                  strTags.push('(' + oredTags.join(',') + ')');
                } else {
                  strTags.push(tags[i]);
                }
              }

              tags = strTags.join(',');
            }

            this.securityTags = tags;
          },

          /**
           * Set the extra user token header
           * @param {string} userToken The token identifying a uniq user (used to apply rate limits)
           */
          setUserToken: function setUserToken(userToken) {
            this.userToken = userToken;
          },

          /**
           * Initialize a new batch of search queries
           * @deprecated use client.search()
           */
          startQueriesBatch: deprecate(function startQueriesBatchDeprecated() {
            this._batch = [];
          }, deprecatedMessage('client.startQueriesBatch()', 'client.search()')),

          /**
           * Add a search query in the batch
           * @deprecated use client.search()
           */
          addQueryInBatch: deprecate(function addQueryInBatchDeprecated(indexName, query, args) {
            this._batch.push({
              indexName: indexName,
              query: query,
              params: args
            });
          }, deprecatedMessage('client.addQueryInBatch()', 'client.search()')),

          /**
           * Clear all queries in client's cache
           * @return undefined
           */
          clearCache: function clearCache() {
            this.cache = {};
          },

          /**
           * Launch the batch of queries using XMLHttpRequest.
           * @deprecated use client.search()
           */
          sendQueriesBatch: deprecate(function sendQueriesBatchDeprecated(callback) {
            return this.search(this._batch, callback);
          }, deprecatedMessage('client.sendQueriesBatch()', 'client.search()')),

          /**
           * Set the number of milliseconds a request can take before automatically being terminated.
           *
           * @param {Number} milliseconds
           */
          setRequestTimeout: function setRequestTimeout(milliseconds) {
            if (milliseconds) {
              this.requestTimeout = parseInt(milliseconds, 10);
            }
          },

          /**
           * Search through multiple indices at the same time
           * @param  {Object[]}   queries  An array of queries you want to run.
           * @param {string} queries[].indexName The index name you want to target
           * @param {string} [queries[].query] The query to issue on this index. Can also be passed into `params`
           * @param {Object} queries[].params Any search param like hitsPerPage, ..
           * @param  {Function} callback Callback to be called
           * @return {Promise|undefined} Returns a promise if no callback given
           */
          search: function search(queries, callback) {
            var client = this;
            var postObj = {
              requests: map(queries, function prepareRequest(query) {
                var params = ''; // allow query.query
                // so we are mimicing the index.search(query, params) method
                // {indexName:, query:, params:}

                if (query.query !== undefined) {
                  params += 'query=' + encodeURIComponent(query.query);
                }

                return {
                  indexName: query.indexName,
                  params: client._getSearchParams(query.params, params)
                };
              })
            };
            return this._jsonRequest({
              cache: this.cache,
              method: 'POST',
              url: '/1/indexes/*/queries',
              body: postObj,
              hostType: 'read',
              callback: callback
            });
          },

          /**
           * Perform write operations accross multiple indexes.
           *
           * To reduce the amount of time spent on network round trips,
           * you can create, update, or delete several objects in one call,
           * using the batch endpoint (all operations are done in the given order).
           *
           * Available actions:
           *   - addObject
           *   - updateObject
           *   - partialUpdateObject
           *   - partialUpdateObjectNoCreate
           *   - deleteObject
           *
           * https://www.algolia.com/doc/rest_api#Indexes
           * @param  {Object[]} operations An array of operations to perform
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * client.batch([{
          *   action: 'addObject',
          *   indexName: 'clients',
          *   body: {
          *     name: 'Bill'
          *   }
          * }, {
          *   action: 'udpateObject',
          *   indexName: 'fruits',
          *   body: {
          *     objectID: '29138',
          *     name: 'banana'
          *   }
          * }], cb)
           */
          batch: function batch(operations, callback) {
            return this._jsonRequest({
              method: 'POST',
              url: '/1/indexes/*/batch',
              body: {
                requests: operations
              },
              hostType: 'write',
              callback: callback
            });
          },
          // environment specific methods
          destroy: notImplemented,
          enableRateLimitForward: notImplemented,
          disableRateLimitForward: notImplemented,
          useSecuredAPIKey: notImplemented,
          disableSecuredAPIKey: notImplemented,
          generateSecuredApiKey: notImplemented,

          /*
           * Index class constructor.
           * You should not use this method directly but use initIndex() function
           */
          Index: function Index(algoliasearch, indexName) {
            this.indexName = indexName;
            this.as = algoliasearch;
            this.typeAheadArgs = null;
            this.typeAheadValueOption = null; // make sure every index instance has it's own cache

            this.cache = {};
          },

          /**
           * Add an extra field to the HTTP request
           *
           * @param name the header field name
           * @param value the header field value
           */
          setExtraHeader: function setExtraHeader(name, value) {
            this.extraHeaders.push({
              name: name.toLowerCase(),
              value: value
            });
          },
          _sendQueriesBatch: function _sendQueriesBatch(params, callback) {
            function prepareParams() {
              var reqParams = '';

              for (var i = 0; i < params.requests.length; ++i) {
                var q = '/1/indexes/' + encodeURIComponent(params.requests[i].indexName) + '?' + params.requests[i].params;
                reqParams += i + '=' + encodeURIComponent(q) + '&';
              }

              return reqParams;
            }

            return this._jsonRequest({
              cache: this.cache,
              method: 'POST',
              url: '/1/indexes/*/queries',
              body: params,
              hostType: 'read',
              fallback: {
                method: 'GET',
                url: '/1/indexes/*',
                body: {
                  params: prepareParams()
                }
              },
              callback: callback
            });
          },

          /*
           * Wrapper that try all hosts to maximize the quality of service
           */
          _jsonRequest: function _jsonRequest(opts) {
            var requestDebug = require(6)('algoliasearch:' + opts.url);

            var body;
            var cache = opts.cache;
            var client = this;
            var tries = 0;
            var usingFallback = false;

            if (opts.body !== undefined) {
              body = safeJSONStringify(opts.body);
            }

            requestDebug('request start');

            function doRequest(requester, reqOpts) {
              var cacheID;

              if (client._useCache) {
                cacheID = opts.url;
              } // as we sometime use POST requests to pass parameters (like query='aa'),
              // the cacheID must also include the body to be different between calls


              if (client._useCache && body) {
                cacheID += '_body_' + reqOpts.body;
              } // handle cache existence


              if (client._useCache && cache && cache[cacheID] !== undefined) {
                requestDebug('serving response from cache');
                return client._promise.resolve(JSON.parse(safeJSONStringify(cache[cacheID])));
              } // if we reached max tries


              if (tries >= client.hosts[opts.hostType].length || // or we need to switch to fallback
              client.useFallback && !usingFallback) {
                // and there's no fallback or we are already using a fallback
                if (!opts.fallback || !client._request.fallback || usingFallback) {
                  requestDebug('could not get any response'); // then stop

                  return client._promise.reject(new errors.AlgoliaSearchError('Cannot connect to the AlgoliaSearch API.' + ' Send an email to support@algolia.com to report and resolve the issue.' + ' Application id was: ' + client.applicationID));
                }

                requestDebug('switching to fallback'); // let's try the fallback starting from here

                tries = 0; // method, url and body are fallback dependent

                reqOpts.method = opts.fallback.method;
                reqOpts.url = opts.fallback.url;
                reqOpts.jsonBody = opts.fallback.body;

                if (reqOpts.jsonBody) {
                  reqOpts.body = safeJSONStringify(reqOpts.jsonBody);
                }

                reqOpts.timeout = client.requestTimeout * (tries + 1);
                client.hostIndex[opts.hostType] = 0;
                usingFallback = true; // the current request is now using fallback

                return doRequest(client._request.fallback, reqOpts);
              }

              var url = client.hosts[opts.hostType][client.hostIndex[opts.hostType]] + reqOpts.url;
              var options = {
                body: body,
                jsonBody: opts.body,
                method: reqOpts.method,
                headers: client._computeRequestHeaders(),
                timeout: reqOpts.timeout,
                debug: requestDebug
              };
              requestDebug('method: %s, url: %s, headers: %j, timeout: %d', options.method, url, options.headers, options.timeout);

              if (requester === client._request.fallback) {
                requestDebug('using fallback');
              } // `requester` is any of this._request or this._request.fallback
              // thus it needs to be called using the client as context


              return requester.call(client, url, options).then(success, tryFallback);

              function success(httpResponse) {
                // compute the status of the response,
                //
                // When in browser mode, using XDR or JSONP, we have no statusCode available
                // So we rely on our API response `status` property.
                // But `waitTask` can set a `status` property which is not the statusCode (it's the task status)
                // So we check if there's a `message` along `status` and it means it's an error
                //
                // That's the only case where we have a response.status that's not the http statusCode
                var status = httpResponse && httpResponse.body && httpResponse.body.message && httpResponse.body.status || // this is important to check the request statusCode AFTER the body eventual
                // statusCode because some implementations (jQuery XDomainRequest transport) may
                // send statusCode 200 while we had an error
                httpResponse.statusCode || // When in browser mode, using XDR or JSONP
                // we default to success when no error (no response.status && response.message)
                // If there was a JSON.parse() error then body is null and it fails
                httpResponse && httpResponse.body && 200;
                requestDebug('received response: statusCode: %s, computed statusCode: %d, headers: %j', httpResponse.statusCode, status, httpResponse.headers);

                if (process.env.DEBUG && process.env.DEBUG.indexOf('debugBody') !== -1) {
                  requestDebug('body: %j', httpResponse.body);
                }

                var ok = status === 200 || status === 201;
                var retry = !ok && Math.floor(status / 100) !== 4 && Math.floor(status / 100) !== 1;

                if (client._useCache && ok && cache) {
                  cache[cacheID] = httpResponse.body;
                }

                if (ok) {
                  return httpResponse.body;
                }

                if (retry) {
                  tries += 1;
                  return retryRequest();
                }

                var unrecoverableError = new errors.AlgoliaSearchError(httpResponse.body && httpResponse.body.message);
                return client._promise.reject(unrecoverableError);
              }

              function tryFallback(err) {
                // error cases:
                //  While not in fallback mode:
                //    - CORS not supported
                //    - network error
                //  While in fallback mode:
                //    - timeout
                //    - network error
                //    - badly formatted JSONP (script loaded, did not call our callback)
                //  In both cases:
                //    - uncaught exception occurs (TypeError)
                requestDebug('error: %s, stack: %s', err.message, err.stack);

                if (!(err instanceof errors.AlgoliaSearchError)) {
                  err = new errors.Unknown(err && err.message, err);
                }

                tries += 1; // stop the request implementation when:

                if ( // we did not generate this error,
                // it comes from a throw in some other piece of code
                err instanceof errors.Unknown || // server sent unparsable JSON
                err instanceof errors.UnparsableJSON || // no fallback and a network error occured (No CORS, bad APPID)
                !requester.fallback && err instanceof errors.Network || // max tries and already using fallback or no fallback
                tries >= client.hosts[opts.hostType].length && (usingFallback || !opts.fallback || !client._request.fallback)) {
                  // stop request implementation for this command
                  return client._promise.reject(err);
                }

                client.hostIndex[opts.hostType] = ++client.hostIndex[opts.hostType] % client.hosts[opts.hostType].length;

                if (err instanceof errors.RequestTimeout) {
                  return retryRequest();
                } else if (client._request.fallback && !client.useFallback) {
                  // if any error occured but timeout, use fallback for the rest
                  // of the session
                  client.useFallback = true;
                }

                return doRequest(requester, reqOpts);
              }

              function retryRequest() {
                client.hostIndex[opts.hostType] = ++client.hostIndex[opts.hostType] % client.hosts[opts.hostType].length;
                reqOpts.timeout = client.requestTimeout * (tries + 1);
                return doRequest(requester, reqOpts);
              }
            } // we can use a fallback if forced AND fallback parameters are available


            var useFallback = client.useFallback && opts.fallback;
            var requestOptions = useFallback ? opts.fallback : opts;
            var promise = doRequest( // set the requester
            useFallback ? client._request.fallback : client._request, {
              url: requestOptions.url,
              method: requestOptions.method,
              body: body,
              jsonBody: opts.body,
              timeout: client.requestTimeout * (tries + 1)
            }); // either we have a callback
            // either we are using promises

            if (opts.callback) {
              promise.then(function okCb(content) {
                exitPromise(function () {
                  opts.callback(null, content);
                }, client._setTimeout || setTimeout);
              }, function nookCb(err) {
                exitPromise(function () {
                  opts.callback(err);
                }, client._setTimeout || setTimeout);
              });
            } else {
              return promise;
            }
          },

          /*
           * Transform search param object in query string
           */
          _getSearchParams: function _getSearchParams(args, params) {
            if (this._isUndefined(args) || args === null) {
              return params;
            }

            for (var key in args) {
              if (key !== null && args[key] !== undefined && args.hasOwnProperty(key)) {
                params += params === '' ? '' : '&';
                params += key + '=' + encodeURIComponent(Object.prototype.toString.call(args[key]) === '[object Array]' ? safeJSONStringify(args[key]) : args[key]);
              }
            }

            return params;
          },
          _isUndefined: function _isUndefined(obj) {
            return obj === void 0;
          },
          _computeRequestHeaders: function _computeRequestHeaders() {
            var forEach = require(11);

            var requestHeaders = {
              'x-algolia-api-key': this.apiKey,
              'x-algolia-application-id': this.applicationID,
              'x-algolia-agent': this._ua
            };

            if (this.userToken) {
              requestHeaders['x-algolia-usertoken'] = this.userToken;
            }

            if (this.securityTags) {
              requestHeaders['x-algolia-tagfilters'] = this.securityTags;
            }

            if (this.extraHeaders) {
              forEach(this.extraHeaders, function addToRequestHeaders(header) {
                requestHeaders[header.name] = header.value;
              });
            }

            return requestHeaders;
          }
        };
        /*
         * Contains all the functions related to one index
         * You should use AlgoliaSearch.initIndex(indexName) to retrieve this object
         */

        AlgoliaSearch.prototype.Index.prototype = {
          /*
           * Clear all queries in cache
           */
          clearCache: function clearCache() {
            this.cache = {};
          },

          /*
           * Add an object in this index
           *
           * @param content contains the javascript object to add inside the index
           * @param objectID (optional) an objectID you want to attribute to this object
           * (if the attribute already exist the old object will be overwrite)
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that contains 3 elements: createAt, taskId and objectID
           */
          addObject: function addObject(content, objectID, callback) {
            var indexObj = this;

            if (arguments.length === 1 || typeof objectID === 'function') {
              callback = objectID;
              objectID = undefined;
            }

            return this.as._jsonRequest({
              method: objectID !== undefined ? 'PUT' : // update or create
              'POST',
              // create (API generates an objectID)
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + ( // create
              objectID !== undefined ? '/' + encodeURIComponent(objectID) : ''),
              // update or create
              body: content,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Add several objects
           *
           * @param objects contains an array of objects to add
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that updateAt and taskID
           */
          addObjects: function addObjects(objects, callback) {
            var indexObj = this;
            var postObj = {
              requests: []
            };

            for (var i = 0; i < objects.length; ++i) {
              var request = {
                action: 'addObject',
                body: objects[i]
              };
              postObj.requests.push(request);
            }

            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/batch',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Get an object from this index
           *
           * @param objectID the unique identifier of the object to retrieve
           * @param attrs (optional) if set, contains the array of attribute names to retrieve
           * @param callback (optional) the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the object to retrieve or the error message if a failure occured
           */
          getObject: function getObject(objectID, attrs, callback) {
            var indexObj = this;

            if (arguments.length === 1 || typeof attrs === 'function') {
              callback = attrs;
              attrs = undefined;
            }

            var params = '';

            if (attrs !== undefined) {
              params = '?attributes=';

              for (var i = 0; i < attrs.length; ++i) {
                if (i !== 0) {
                  params += ',';
                }

                params += attrs[i];
              }
            }

            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/' + encodeURIComponent(objectID) + params,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Get several objects from this index
           *
           * @param objectIDs the array of unique identifier of objects to retrieve
           */
          getObjects: function getObjects(objectIDs, attributesToRetrieve, callback) {
            var indexObj = this;

            if (arguments.length === 1 || typeof attributesToRetrieve === 'function') {
              callback = attributesToRetrieve;
              attributesToRetrieve = undefined;
            }

            var body = {
              requests: map(objectIDs, function prepareRequest(objectID) {
                var request = {
                  'indexName': indexObj.indexName,
                  'objectID': objectID
                };

                if (attributesToRetrieve) {
                  request.attributesToRetrieve = attributesToRetrieve.join(',');
                }

                return request;
              })
            };
            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/*/objects',
              hostType: 'read',
              body: body,
              callback: callback
            });
          },

          /*
           * Update partially an object (only update attributes passed in argument)
           *
           * @param partialObject contains the javascript attributes to override, the
           *  object must contains an objectID attribute
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that contains 3 elements: createAt, taskId and objectID
           */
          partialUpdateObject: function partialUpdateObject(partialObject, callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/' + encodeURIComponent(partialObject.objectID) + '/partial',
              body: partialObject,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Partially Override the content of several objects
           *
           * @param objects contains an array of objects to update (each object must contains a objectID attribute)
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that updateAt and taskID
           */
          partialUpdateObjects: function partialUpdateObjects(objects, callback) {
            var indexObj = this;
            var postObj = {
              requests: []
            };

            for (var i = 0; i < objects.length; ++i) {
              var request = {
                action: 'partialUpdateObject',
                objectID: objects[i].objectID,
                body: objects[i]
              };
              postObj.requests.push(request);
            }

            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/batch',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Override the content of object
           *
           * @param object contains the javascript object to save, the object must contains an objectID attribute
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that updateAt and taskID
           */
          saveObject: function saveObject(object, callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'PUT',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/' + encodeURIComponent(object.objectID),
              body: object,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Override the content of several objects
           *
           * @param objects contains an array of objects to update (each object must contains a objectID attribute)
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that updateAt and taskID
           */
          saveObjects: function saveObjects(objects, callback) {
            var indexObj = this;
            var postObj = {
              requests: []
            };

            for (var i = 0; i < objects.length; ++i) {
              var request = {
                action: 'updateObject',
                objectID: objects[i].objectID,
                body: objects[i]
              };
              postObj.requests.push(request);
            }

            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/batch',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Delete an object from the index
           *
           * @param objectID the unique identifier of object to delete
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that contains 3 elements: createAt, taskId and objectID
           */
          deleteObject: function deleteObject(objectID, callback) {
            if (typeof objectID === 'function' || typeof objectID !== 'string' && typeof objectID !== 'number') {
              var err = new errors.AlgoliaSearchError('Cannot delete an object without an objectID');
              callback = objectID;

              if (typeof callback === 'function') {
                return callback(err);
              }

              return this.as._promise.reject(err);
            }

            var indexObj = this;
            return this.as._jsonRequest({
              method: 'DELETE',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/' + encodeURIComponent(objectID),
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Delete several objects from an index
           *
           * @param objectIDs contains an array of objectID to delete
           * @param callback (optional) the result callback called with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that contains 3 elements: createAt, taskId and objectID
           */
          deleteObjects: function deleteObjects(objectIDs, callback) {
            var indexObj = this;
            var postObj = {
              requests: map(objectIDs, function prepareRequest(objectID) {
                return {
                  action: 'deleteObject',
                  objectID: objectID,
                  body: {
                    objectID: objectID
                  }
                };
              })
            };
            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/batch',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Delete all objects matching a query
           *
           * @param query the query string
           * @param params the optional query parameters
           * @param callback (optional) the result callback called with one argument
           *  error: null or Error('message')
           */
          deleteByQuery: function deleteByQuery(query, params, callback) {
            var indexObj = this;
            var client = indexObj.as;

            if (arguments.length === 1 || typeof params === 'function') {
              callback = params;
              params = {};
            }

            params.attributesToRetrieve = 'objectID';
            params.hitsPerPage = 1000; // when deleting, we should never use cache to get the
            // search results

            this.clearCache(); // there's a problem in how we use the promise chain,
            // see how waitTask is done

            var promise = this.search(query, params).then(stopOrDelete);

            function stopOrDelete(searchContent) {
              // stop here
              if (searchContent.nbHits === 0) {
                // return indexObj.as._request.resolve();
                return searchContent;
              } // continue and do a recursive call


              var objectIDs = map(searchContent.hits, function getObjectID(object) {
                return object.objectID;
              });
              return indexObj.deleteObjects(objectIDs).then(waitTask).then(doDeleteByQuery);
            }

            function waitTask(deleteObjectsContent) {
              return indexObj.waitTask(deleteObjectsContent.taskID);
            }

            function doDeleteByQuery() {
              return indexObj.deleteByQuery(query, params);
            }

            if (!callback) {
              return promise;
            }

            promise.then(success, failure);

            function success() {
              exitPromise(function exit() {
                callback(null);
              }, client._setTimeout || setTimeout);
            }

            function failure(err) {
              exitPromise(function exit() {
                callback(err);
              }, client._setTimeout || setTimeout);
            }
          },

          /*
           * Search inside the index using XMLHttpRequest request (Using a POST query to
           * minimize number of OPTIONS queries: Cross-Origin Resource Sharing).
           *
           * @param query the full text query
           * @param args (optional) if set, contains an object with query parameters:
           * - page: (integer) Pagination parameter used to select the page to retrieve.
           *                   Page is zero-based and defaults to 0. Thus,
           *                   to retrieve the 10th page you need to set page=9
           * - hitsPerPage: (integer) Pagination parameter used to select the number of hits per page. Defaults to 20.
           * - attributesToRetrieve: a string that contains the list of object attributes
           * you want to retrieve (let you minimize the answer size).
           *   Attributes are separated with a comma (for example "name,address").
           *   You can also use an array (for example ["name","address"]).
           *   By default, all attributes are retrieved. You can also use '*' to retrieve all
           *   values when an attributesToRetrieve setting is specified for your index.
           * - attributesToHighlight: a string that contains the list of attributes you
           *   want to highlight according to the query.
           *   Attributes are separated by a comma. You can also use an array (for example ["name","address"]).
           *   If an attribute has no match for the query, the raw value is returned.
           *   By default all indexed text attributes are highlighted.
           *   You can use `*` if you want to highlight all textual attributes.
           *   Numerical attributes are not highlighted.
           *   A matchLevel is returned for each highlighted attribute and can contain:
           *      - full: if all the query terms were found in the attribute,
           *      - partial: if only some of the query terms were found,
           *      - none: if none of the query terms were found.
           * - attributesToSnippet: a string that contains the list of attributes to snippet alongside
           * the number of words to return (syntax is `attributeName:nbWords`).
           *    Attributes are separated by a comma (Example: attributesToSnippet=name:10,content:10).
           *    You can also use an array (Example: attributesToSnippet: ['name:10','content:10']).
           *    By default no snippet is computed.
           * - minWordSizefor1Typo: the minimum number of characters in a query word to accept one typo in this word.
           *D efaults to 3.
           * - minWordSizefor2Typos: the minimum number of characters in a query word
           * to accept two typos in this word. Defaults to 7.
           * - getRankingInfo: if set to 1, the result hits will contain ranking
           * information in _rankingInfo attribute.
           * - aroundLatLng: search for entries around a given
           * latitude/longitude (specified as two floats separated by a comma).
           *   For example aroundLatLng=47.316669,5.016670).
           *   You can specify the maximum distance in meters with the aroundRadius parameter (in meters)
           *   and the precision for ranking with aroundPrecision
           *   (for example if you set aroundPrecision=100, two objects that are distant of
           *   less than 100m will be considered as identical for "geo" ranking parameter).
           *   At indexing, you should specify geoloc of an object with the _geoloc attribute
           *   (in the form {"_geoloc":{"lat":48.853409, "lng":2.348800}})
           * - insideBoundingBox: search entries inside a given area defined by the two extreme points
           * of a rectangle (defined by 4 floats: p1Lat,p1Lng,p2Lat,p2Lng).
           *   For example insideBoundingBox=47.3165,4.9665,47.3424,5.0201).
           *   At indexing, you should specify geoloc of an object with the _geoloc attribute
           *   (in the form {"_geoloc":{"lat":48.853409, "lng":2.348800}})
           * - numericFilters: a string that contains the list of numeric filters you want to
           * apply separated by a comma.
           *   The syntax of one filter is `attributeName` followed by `operand` followed by `value`.
           *   Supported operands are `<`, `<=`, `=`, `>` and `>=`.
           *   You can have multiple conditions on one attribute like for example numericFilters=price>100,price<1000.
           *   You can also use an array (for example numericFilters: ["price>100","price<1000"]).
           * - tagFilters: filter the query by a set of tags. You can AND tags by separating them by commas.
           *   To OR tags, you must add parentheses. For example, tags=tag1,(tag2,tag3) means tag1 AND (tag2 OR tag3).
           *   You can also use an array, for example tagFilters: ["tag1",["tag2","tag3"]]
           *   means tag1 AND (tag2 OR tag3).
           *   At indexing, tags should be added in the _tags** attribute
           *   of objects (for example {"_tags":["tag1","tag2"]}).
           * - facetFilters: filter the query by a list of facets.
           *   Facets are separated by commas and each facet is encoded as `attributeName:value`.
           *   For example: `facetFilters=category:Book,author:John%20Doe`.
           *   You can also use an array (for example `["category:Book","author:John%20Doe"]`).
           * - facets: List of object attributes that you want to use for faceting.
           *   Comma separated list: `"category,author"` or array `['category','author']`
           *   Only attributes that have been added in **attributesForFaceting** index setting
           *   can be used in this parameter.
           *   You can also use `*` to perform faceting on all attributes specified in **attributesForFaceting**.
           * - queryType: select how the query words are interpreted, it can be one of the following value:
           *    - prefixAll: all query words are interpreted as prefixes,
           *    - prefixLast: only the last word is interpreted as a prefix (default behavior),
           *    - prefixNone: no query word is interpreted as a prefix. This option is not recommended.
           * - optionalWords: a string that contains the list of words that should
           * be considered as optional when found in the query.
           *   Comma separated and array are accepted.
           * - distinct: If set to 1, enable the distinct feature (disabled by default)
           * if the attributeForDistinct index setting is set.
           *   This feature is similar to the SQL "distinct" keyword: when enabled
           *   in a query with the distinct=1 parameter,
           *   all hits containing a duplicate value for the attributeForDistinct attribute are removed from results.
           *   For example, if the chosen attribute is show_name and several hits have
           *   the same value for show_name, then only the best
           *   one is kept and others are removed.
           * - restrictSearchableAttributes: List of attributes you want to use for
           * textual search (must be a subset of the attributesToIndex index setting)
           * either comma separated or as an array
           * @param callback the result callback called with two arguments:
           *  error: null or Error('message'). If false, the content contains the error.
           *  content: the server answer that contains the list of results.
           */
          search: function search(query, args, callback) {
            // warn V2 users on how to search
            if (typeof query === 'function' && _typeof(args) === 'object' || _typeof(callback) === 'object') {
              // .search(query, params, cb)
              // .search(cb, params)
              throw new errors.AlgoliaSearchError('index.search usage is index.search(query, params, cb)');
            }

            if (arguments.length === 0 || typeof query === 'function') {
              // .search(), .search(cb)
              callback = query;
              query = '';
            } else if (arguments.length === 1 || typeof args === 'function') {
              // .search(query/args), .search(query, cb)
              callback = args;
              args = undefined;
            } // .search(args), careful: typeof null === 'object'


            if (_typeof(query) === 'object' && query !== null) {
              args = query;
              query = undefined;
            } else if (query === undefined || query === null) {
              // .search(undefined/null)
              query = '';
            }

            var params = '';

            if (query !== undefined) {
              params += 'query=' + encodeURIComponent(query);
            }

            if (args !== undefined) {
              // `_getSearchParams` will augment params, do not be fooled by the = versus += from previous if
              params = this.as._getSearchParams(args, params);
            }

            return this._search(params, callback);
          },

          /*
           * Browse index content. The response content will have a `cursor` property that you can use
           * to browse subsequent pages for this query. Use `index.browseNext(cursor)` when you want.
           *
           * @param {string} query - The full text query
           * @param {Object} [queryParameters] - Any search query parameter
           * @param {Function} [callback] - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with the browse result
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * index.browse('cool songs', {
           *   tagFilters: 'public,comments',
           *   hitsPerPage: 500
           * }, callback);
           * @see {@link https://www.algolia.com/doc/rest_api#Browse|Algolia REST API Documentation}
           */
          // pre 3.5.0 usage, backward compatible
          // browse: function(page, hitsPerPage, callback) {
          browse: function browse(query, queryParameters, callback) {
            var merge = require(57);

            var indexObj = this;
            var page;
            var hitsPerPage; // we check variadic calls that are not the one defined
            // .browse()/.browse(fn)
            // => page = 0

            if (arguments.length === 0 || arguments.length === 1 && typeof arguments[0] === 'function') {
              page = 0;
              callback = arguments[0];
              query = undefined;
            } else if (typeof arguments[0] === 'number') {
              // .browse(2)/.browse(2, 10)/.browse(2, fn)/.browse(2, 10, fn)
              page = arguments[0];

              if (typeof arguments[1] === 'number') {
                hitsPerPage = arguments[1];
              } else if (typeof arguments[1] === 'function') {
                callback = arguments[1];
                hitsPerPage = undefined;
              }

              query = undefined;
              queryParameters = undefined;
            } else if (_typeof(arguments[0]) === 'object') {
              // .browse(queryParameters)/.browse(queryParameters, cb)
              if (typeof arguments[1] === 'function') {
                callback = arguments[1];
              }

              queryParameters = arguments[0];
              query = undefined;
            } else if (typeof arguments[0] === 'string' && typeof arguments[1] === 'function') {
              // .browse(query, cb)
              callback = arguments[1];
              queryParameters = undefined;
            } // otherwise it's a .browse(query)/.browse(query, queryParameters)/.browse(query, queryParameters, cb)
            // get search query parameters combining various possible calls
            // to .browse();


            queryParameters = merge({}, queryParameters || {}, {
              page: page,
              hitsPerPage: hitsPerPage,
              query: query
            });

            var params = this.as._getSearchParams(queryParameters, '');

            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/browse?' + params,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Continue browsing from a previous position (cursor), obtained via a call to `.browse()`.
           *
           * @param {string} query - The full text query
           * @param {Object} [queryParameters] - Any search query parameter
           * @param {Function} [callback] - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with the browse result
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * index.browseFrom('14lkfsakl32', callback);
           * @see {@link https://www.algolia.com/doc/rest_api#Browse|Algolia REST API Documentation}
           */
          browseFrom: function browseFrom(cursor, callback) {
            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(this.indexName) + '/browse?cursor=' + encodeURIComponent(cursor),
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Browse all content from an index using events. Basically this will do
           * .browse() -> .browseFrom -> .browseFrom -> .. until all the results are returned
           *
           * @param {string} query - The full text query
           * @param {Object} [queryParameters] - Any search query parameter
           * @return {EventEmitter}
           * @example
           * var browser = index.browseAll('cool songs', {
           *   tagFilters: 'public,comments',
           *   hitsPerPage: 500
           * });
           *
           * browser.on('result', function resultCallback(content) {
           *   console.log(content.hits);
           * });
           *
           * // if any error occurs, you get it
           * browser.on('error', function(err) {
           *   throw err;
           * });
           *
           * // when you have browsed the whole index, you get this event
           * browser.on('end', function() {
           *   console.log('finished');
           * });
           *
           * // at any point if you want to stop the browsing process, you can stop it manually
           * // otherwise it will go on and on
           * browser.stop();
           *
           * @see {@link https://www.algolia.com/doc/rest_api#Browse|Algolia REST API Documentation}
           */
          browseAll: function browseAll(query, queryParameters) {
            if (_typeof(query) === 'object') {
              queryParameters = query;
              query = undefined;
            }

            var merge = require(57);

            var IndexBrowser = require(61);

            var browser = new IndexBrowser();
            var client = this.as;
            var index = this;

            var params = client._getSearchParams(merge({}, queryParameters || {}, {
              query: query
            }), ''); // start browsing


            browseLoop();

            function browseLoop(cursor) {
              if (browser._stopped) {
                return;
              }

              var queryString;

              if (cursor !== undefined) {
                queryString = 'cursor=' + encodeURIComponent(cursor);
              } else {
                queryString = params;
              }

              client._jsonRequest({
                method: 'GET',
                url: '/1/indexes/' + encodeURIComponent(index.indexName) + '/browse?' + queryString,
                hostType: 'read',
                callback: browseCallback
              });
            }

            function browseCallback(err, content) {
              if (browser._stopped) {
                return;
              }

              if (err) {
                browser._error(err);

                return;
              }

              browser._result(content); // no cursor means we are finished browsing


              if (content.cursor === undefined) {
                browser._end();

                return;
              }

              browseLoop(content.cursor);
            }

            return browser;
          },

          /*
           * Get a Typeahead.js adapter
           * @param searchParams contains an object with query parameters (see search for details)
           */
          ttAdapter: function ttAdapter(params) {
            var self = this;
            return function ttAdapter(query, syncCb, asyncCb) {
              var cb;

              if (typeof asyncCb === 'function') {
                // typeahead 0.11
                cb = asyncCb;
              } else {
                // pre typeahead 0.11
                cb = syncCb;
              }

              self.search(query, params, function searchDone(err, content) {
                if (err) {
                  cb(err);
                  return;
                }

                cb(content.hits);
              });
            };
          },

          /*
           * Wait the publication of a task on the server.
           * All server task are asynchronous and you can check with this method that the task is published.
           *
           * @param taskID the id of the task returned by server
           * @param callback the result callback with with two arguments:
           *  error: null or Error('message')
           *  content: the server answer that contains the list of results
           */
          waitTask: function waitTask(taskID, callback) {
            // wait minimum 100ms before retrying
            var baseDelay = 100; // wait maximum 5s before retrying

            var maxDelay = 5000;
            var loop = 0; // waitTask() must be handled differently from other methods,
            // it's a recursive method using a timeout

            var indexObj = this;
            var client = indexObj.as;
            var promise = retryLoop();

            function retryLoop() {
              return client._jsonRequest({
                method: 'GET',
                hostType: 'read',
                url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/task/' + taskID
              }).then(function success(content) {
                loop++;
                var delay = baseDelay * loop * loop;

                if (delay > maxDelay) {
                  delay = maxDelay;
                }

                if (content.status !== 'published') {
                  return client._promise.delay(delay).then(retryLoop);
                }

                return content;
              });
            }

            if (!callback) {
              return promise;
            }

            promise.then(successCb, failureCb);

            function successCb(content) {
              exitPromise(function exit() {
                callback(null, content);
              }, client._setTimeout || setTimeout);
            }

            function failureCb(err) {
              exitPromise(function exit() {
                callback(err);
              }, client._setTimeout || setTimeout);
            }
          },

          /*
           * This function deletes the index content. Settings and index specific API keys are kept untouched.
           *
           * @param callback (optional) the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the settings object or the error message if a failure occured
           */
          clearIndex: function clearIndex(callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/clear',
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Get settings of this index
           *
           * @param callback (optional) the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the settings object or the error message if a failure occured
           */
          getSettings: function getSettings(callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/settings',
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Set settings for this index
           *
           * @param settigns the settings object that can contains :
           * - minWordSizefor1Typo: (integer) the minimum number of characters to accept one typo (default = 3).
           * - minWordSizefor2Typos: (integer) the minimum number of characters to accept two typos (default = 7).
           * - hitsPerPage: (integer) the number of hits per page (default = 10).
           * - attributesToRetrieve: (array of strings) default list of attributes to retrieve in objects.
           *   If set to null, all attributes are retrieved.
           * - attributesToHighlight: (array of strings) default list of attributes to highlight.
           *   If set to null, all indexed attributes are highlighted.
           * - attributesToSnippet**: (array of strings) default list of attributes to snippet alongside the number
           * of words to return (syntax is attributeName:nbWords).
           *   By default no snippet is computed. If set to null, no snippet is computed.
           * - attributesToIndex: (array of strings) the list of fields you want to index.
           *   If set to null, all textual and numerical attributes of your objects are indexed,
           *   but you should update it to get optimal results.
           *   This parameter has two important uses:
           *     - Limit the attributes to index: For example if you store a binary image in base64,
           *     you want to store it and be able to
           *       retrieve it but you don't want to search in the base64 string.
           *     - Control part of the ranking*: (see the ranking parameter for full explanation)
           *     Matches in attributes at the beginning of
           *       the list will be considered more important than matches in attributes further down the list.
           *       In one attribute, matching text at the beginning of the attribute will be
           *       considered more important than text after, you can disable
           *       this behavior if you add your attribute inside `unordered(AttributeName)`,
           *       for example attributesToIndex: ["title", "unordered(text)"].
           * - attributesForFaceting: (array of strings) The list of fields you want to use for faceting.
           *   All strings in the attribute selected for faceting are extracted and added as a facet.
           *   If set to null, no attribute is used for faceting.
           * - attributeForDistinct: (string) The attribute name used for the Distinct feature.
           * This feature is similar to the SQL "distinct" keyword: when enabled
           *   in query with the distinct=1 parameter, all hits containing a duplicate
           *   value for this attribute are removed from results.
           *   For example, if the chosen attribute is show_name and several hits have
           *   the same value for show_name, then only the best one is kept and others are removed.
           * - ranking: (array of strings) controls the way results are sorted.
           *   We have six available criteria:
           *    - typo: sort according to number of typos,
           *    - geo: sort according to decreassing distance when performing a geo-location based search,
           *    - proximity: sort according to the proximity of query words in hits,
           *    - attribute: sort according to the order of attributes defined by attributesToIndex,
           *    - exact:
           *        - if the user query contains one word: sort objects having an attribute
           *        that is exactly the query word before others.
           *          For example if you search for the "V" TV show, you want to find it
           *          with the "V" query and avoid to have all popular TV
           *          show starting by the v letter before it.
           *        - if the user query contains multiple words: sort according to the
           *        number of words that matched exactly (and not as a prefix).
           *    - custom: sort according to a user defined formula set in **customRanking** attribute.
           *   The standard order is ["typo", "geo", "proximity", "attribute", "exact", "custom"]
           * - customRanking: (array of strings) lets you specify part of the ranking.
           *   The syntax of this condition is an array of strings containing attributes
           *   prefixed by asc (ascending order) or desc (descending order) operator.
           *   For example `"customRanking" => ["desc(population)", "asc(name)"]`
           * - queryType: Select how the query words are interpreted, it can be one of the following value:
           *   - prefixAll: all query words are interpreted as prefixes,
           *   - prefixLast: only the last word is interpreted as a prefix (default behavior),
           *   - prefixNone: no query word is interpreted as a prefix. This option is not recommended.
           * - highlightPreTag: (string) Specify the string that is inserted before
           * the highlighted parts in the query result (default to "<em>").
           * - highlightPostTag: (string) Specify the string that is inserted after
           * the highlighted parts in the query result (default to "</em>").
           * - optionalWords: (array of strings) Specify a list of words that should
           * be considered as optional when found in the query.
           * @param callback (optional) the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer or the error message if a failure occured
           */
          setSettings: function setSettings(settings, callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'PUT',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/settings',
              hostType: 'write',
              body: settings,
              callback: callback
            });
          },

          /*
           * List all existing user keys associated to this index
           *
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          listUserKeys: function listUserKeys(callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/keys',
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Get ACL of a user key associated to this index
           *
           * @param key
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          getUserKeyACL: function getUserKeyACL(key, callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'GET',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/keys/' + key,
              hostType: 'read',
              callback: callback
            });
          },

          /*
           * Delete an existing user key associated to this index
           *
           * @param key
           * @param callback the result callback called with two arguments
           *  error: null or Error('message')
           *  content: the server answer with user keys list
           */
          deleteUserKey: function deleteUserKey(key, callback) {
            var indexObj = this;
            return this.as._jsonRequest({
              method: 'DELETE',
              url: '/1/indexes/' + encodeURIComponent(indexObj.indexName) + '/keys/' + key,
              hostType: 'write',
              callback: callback
            });
          },

          /*
           * Add a new API key to this index
           *
           * @param {string[]} acls - The list of ACL for this key. Defined by an array of strings that
           *   can contains the following values:
           *     - search: allow to search (https and http)
           *     - addObject: allows to add/update an object in the index (https only)
           *     - deleteObject : allows to delete an existing object (https only)
           *     - deleteIndex : allows to delete index content (https only)
           *     - settings : allows to get index settings (https only)
           *     - editSettings : allows to change index settings (https only)
           * @param {Object} [params] - Optionnal parameters to set for the key
           * @param {number} params.validity - Number of seconds after which the key will
           * be automatically removed (0 means no time limit for this key)
           * @param {number} params.maxQueriesPerIPPerHour - Number of API calls allowed from an IP address per hour
           * @param {number} params.maxHitsPerQuery - Number of hits this API key can retrieve in one call
           * @param {string} params.description - A description for your key
           * @param {string[]} params.referers - A list of authorized referers
           * @param {Object} params.queryParameters - Force the key to use specific query parameters
           * @param {Function} callback - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with user keys list
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * index.addUserKey(['search'], {
           *   validity: 300,
           *   maxQueriesPerIPPerHour: 2000,
           *   maxHitsPerQuery: 3,
           *   description: 'Eat three fruits',
           *   referers: ['*.algolia.com'],
           *   queryParameters: {
           *     tagFilters: ['public'],
           *   }
           * })
           * @see {@link https://www.algolia.com/doc/rest_api#AddIndexKey|Algolia REST API Documentation}
           */
          addUserKey: function addUserKey(acls, params, callback) {
            if (arguments.length === 1 || typeof params === 'function') {
              callback = params;
              params = null;
            }

            var postObj = {
              acl: acls
            };

            if (params) {
              postObj.validity = params.validity;
              postObj.maxQueriesPerIPPerHour = params.maxQueriesPerIPPerHour;
              postObj.maxHitsPerQuery = params.maxHitsPerQuery;
              postObj.description = params.description;

              if (params.queryParameters) {
                postObj.queryParameters = this.as._getSearchParams(params.queryParameters, '');
              }

              postObj.referers = params.referers;
            }

            return this.as._jsonRequest({
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(this.indexName) + '/keys',
              body: postObj,
              hostType: 'write',
              callback: callback
            });
          },

          /**
           * Add an existing user key associated to this index
           * @deprecated use index.addUserKey()
           */
          addUserKeyWithValidity: deprecate(function deprecatedAddUserKeyWithValidity(acls, params, callback) {
            return this.addUserKey(acls, params, callback);
          }, deprecatedMessage('index.addUserKeyWithValidity()', 'index.addUserKey()')),

          /**
           * Update an existing API key of this index
           * @param {string} key - The key to update
           * @param {string[]} acls - The list of ACL for this key. Defined by an array of strings that
           *   can contains the following values:
           *     - search: allow to search (https and http)
           *     - addObject: allows to add/update an object in the index (https only)
           *     - deleteObject : allows to delete an existing object (https only)
           *     - deleteIndex : allows to delete index content (https only)
           *     - settings : allows to get index settings (https only)
           *     - editSettings : allows to change index settings (https only)
           * @param {Object} [params] - Optionnal parameters to set for the key
           * @param {number} params.validity - Number of seconds after which the key will
           * be automatically removed (0 means no time limit for this key)
           * @param {number} params.maxQueriesPerIPPerHour - Number of API calls allowed from an IP address per hour
           * @param {number} params.maxHitsPerQuery - Number of hits this API key can retrieve in one call
           * @param {string} params.description - A description for your key
           * @param {string[]} params.referers - A list of authorized referers
           * @param {Object} params.queryParameters - Force the key to use specific query parameters
           * @param {Function} callback - The result callback called with two arguments
           *   error: null or Error('message')
           *   content: the server answer with user keys list
           * @return {Promise|undefined} Returns a promise if no callback given
           * @example
           * index.updateUserKey('APIKEY', ['search'], {
          *   validity: 300,
          *   maxQueriesPerIPPerHour: 2000,
          *   maxHitsPerQuery: 3,
          *   description: 'Eat three fruits',
          *   referers: ['*.algolia.com'],
          *   queryParameters: {
          *     tagFilters: ['public'],
          *   }
          * })
           * @see {@link https://www.algolia.com/doc/rest_api#UpdateIndexKey|Algolia REST API Documentation}
           */
          updateUserKey: function updateUserKey(key, acls, params, callback) {
            if (arguments.length === 2 || typeof params === 'function') {
              callback = params;
              params = null;
            }

            var putObj = {
              acl: acls
            };

            if (params) {
              putObj.validity = params.validity;
              putObj.maxQueriesPerIPPerHour = params.maxQueriesPerIPPerHour;
              putObj.maxHitsPerQuery = params.maxHitsPerQuery;
              putObj.description = params.description;

              if (params.queryParameters) {
                putObj.queryParameters = this.as._getSearchParams(params.queryParameters, '');
              }

              putObj.referers = params.referers;
            }

            return this.as._jsonRequest({
              method: 'PUT',
              url: '/1/indexes/' + encodeURIComponent(this.indexName) + '/keys/' + key,
              body: putObj,
              hostType: 'write',
              callback: callback
            });
          },
          _search: function _search(params, callback) {
            return this.as._jsonRequest({
              cache: this.cache,
              method: 'POST',
              url: '/1/indexes/' + encodeURIComponent(this.indexName) + '/query',
              body: {
                params: params
              },
              hostType: 'read',
              fallback: {
                method: 'GET',
                url: '/1/indexes/' + encodeURIComponent(this.indexName),
                body: {
                  params: params
                }
              },
              callback: callback
            });
          },
          as: null,
          indexName: null,
          typeAheadArgs: null,
          typeAheadValueOption: null
        }; // extracted from https://github.com/component/map/blob/master/index.js
        // without the crazy toFunction thing

        function map(arr, fn) {
          var ret = [];

          for (var i = 0; i < arr.length; ++i) {
            ret.push(fn(arr[i], i));
          }

          return ret;
        }

        function prepareHost(protocol) {
          return function prepare(host) {
            return protocol + '//' + host.toLowerCase();
          };
        }

        function notImplemented() {
          var message = 'Not implemented in this environment.\n' + 'If you feel this is a mistake, write to support@algolia.com';
          throw new errors.AlgoliaSearchError(message);
        }

        function deprecatedMessage(previousUsage, newUsage) {
          var githubAnchorLink = previousUsage.toLowerCase().replace('.', '').replace('()', '');
          return 'algoliasearch: `' + previousUsage + '` was replaced by `' + newUsage + '`. Please see https://github.com/algolia/algoliasearch-client-js/wiki/Deprecated#' + githubAnchorLink;
        } // Parse cloud does not supports setTimeout
        // We do not store a setTimeout reference in the client everytime
        // We only fallback to a fake setTimeout when not available
        // setTimeout cannot be override globally sadly


        function exitPromise(fn, _setTimeout) {
          _setTimeout(fn, 0);
        }

        function deprecate(fn, message) {
          var warned = false;

          function deprecated() {
            if (!warned) {
              /* eslint no-console:0 */
              console.log(message);
              warned = true;
            }

            return fn.apply(this, arguments);
          }

          return deprecated;
        } // Prototype.js < 1.7, a widely used library, defines a weird
        // Array.prototype.toJSON function that will fail to stringify our content
        // appropriately
        // refs:
        //   - https://groups.google.com/forum/#!topic/prototype-core/E-SAVvV_V9Q
        //   - https://github.com/sstephenson/prototype/commit/038a2985a70593c1a86c230fadbdfe2e4898a48c
        //   - http://stackoverflow.com/a/3148441/147079


        function safeJSONStringify(obj) {
          /* eslint no-extend-native:0 */
          if (Array.prototype.toJSON === undefined) {
            return JSON.stringify(obj);
          }

          var toJSON = Array.prototype.toJSON;
          delete Array.prototype.toJSON;
          var out = JSON.stringify(obj);
          Array.prototype.toJSON = toJSON;
          return out;
        }
      }).call(this, require(2));
    }, {
      "11": 11,
      "2": 2,
      "44": 44,
      "47": 47,
      "57": 57,
      "6": 6,
      "61": 61,
      "66": 66
    }],
    61: [function (require, module, exports) {
      'use strict'; // This is the object returned by the `index.browseAll()` method

      module.exports = IndexBrowser;

      var inherits = require(10);

      var EventEmitter = require(1).EventEmitter;

      function IndexBrowser() {}

      inherits(IndexBrowser, EventEmitter);

      IndexBrowser.prototype.stop = function () {
        this._stopped = true;

        this._clean();
      };

      IndexBrowser.prototype._end = function () {
        this.emit('end');

        this._clean();
      };

      IndexBrowser.prototype._error = function (err) {
        this.emit('error', err);

        this._clean();
      };

      IndexBrowser.prototype._result = function (content) {
        this.emit('result', content);
      };

      IndexBrowser.prototype._clean = function () {
        this.removeAllListeners('stop');
        this.removeAllListeners('end');
        this.removeAllListeners('error');
        this.removeAllListeners('result');
      };
    }, {
      "1": 1,
      "10": 10
    }],
    62: [function (require, module, exports) {
      'use strict'; // This is the standalone browser build entry point
      // Browser implementation of the Algolia Search JavaScript client,
      // using XMLHttpRequest, XDomainRequest and JSONP as fallback

      module.exports = algoliasearch;

      var inherits = require(10);

      var Promise = window.Promise || require(9).Promise;

      var AlgoliaSearch = require(60);

      var errors = require(66);

      var inlineHeaders = require(64);

      var jsonpRequest = require(65);

      function algoliasearch(applicationID, apiKey, opts) {
        var cloneDeep = require(45);

        var getDocumentProtocol = require(63);

        opts = cloneDeep(opts || {});

        if (opts.protocol === undefined) {
          opts.protocol = getDocumentProtocol();
        }

        opts._ua = opts._ua || algoliasearch.ua;
        return new AlgoliaSearchBrowser(applicationID, apiKey, opts);
      }

      algoliasearch.version = require(67);
      algoliasearch.ua = 'Algolia for vanilla JavaScript ' + algoliasearch.version; // we expose into window no matter how we are used, this will allow
      // us to easily debug any website running algolia

      window.__algolia = {
        debug: require(6),
        algoliasearch: algoliasearch
      };
      var support = {
        hasXMLHttpRequest: 'XMLHttpRequest' in window,
        hasXDomainRequest: 'XDomainRequest' in window,
        cors: 'withCredentials' in new XMLHttpRequest(),
        timeout: 'timeout' in new XMLHttpRequest()
      };

      function AlgoliaSearchBrowser() {
        // call AlgoliaSearch constructor
        AlgoliaSearch.apply(this, arguments);
      }

      inherits(AlgoliaSearchBrowser, AlgoliaSearch);

      AlgoliaSearchBrowser.prototype._request = function request(url, opts) {
        return new Promise(function wrapRequest(resolve, reject) {
          // no cors or XDomainRequest, no request
          if (!support.cors && !support.hasXDomainRequest) {
            // very old browser, not supported
            reject(new errors.Network('CORS not supported'));
            return;
          }

          url = inlineHeaders(url, opts.headers);
          var body = opts.body;
          var req = support.cors ? new XMLHttpRequest() : new XDomainRequest();
          var ontimeout;
          var timedOut; // do not rely on default XHR async flag, as some analytics code like hotjar
          // breaks it and set it to false by default

          if (req instanceof XMLHttpRequest) {
            req.open(opts.method, url, true);
          } else {
            req.open(opts.method, url);
          }

          if (support.cors) {
            if (body) {
              if (opts.method === 'POST') {
                // https://developer.mozilla.org/en-US/docs/Web/HTTP/Access_control_CORS#Simple_requests
                req.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
              } else {
                req.setRequestHeader('content-type', 'application/json');
              }
            }

            req.setRequestHeader('accept', 'application/json');
          } // we set an empty onprogress listener
          // so that XDomainRequest on IE9 is not aborted
          // refs:
          //  - https://github.com/algolia/algoliasearch-client-js/issues/76
          //  - https://social.msdn.microsoft.com/Forums/ie/en-US/30ef3add-767c-4436-b8a9-f1ca19b4812e/ie9-rtm-xdomainrequest-issued-requests-may-abort-if-all-event-handlers-not-specified?forum=iewebdevelopment


          req.onprogress = function noop() {};

          req.onload = load;
          req.onerror = error;

          if (support.timeout) {
            // .timeout supported by both XHR and XDR,
            // we do receive timeout event, tested
            req.timeout = opts.timeout;
            req.ontimeout = timeout;
          } else {
            ontimeout = setTimeout(timeout, opts.timeout);
          }

          req.send(body); // event object not received in IE8, at least
          // but we do not use it, still important to note

          function load()
          /*event*/
          {
            // When browser does not supports req.timeout, we can
            // have both a load and timeout event, since handled by a dumb setTimeout
            if (timedOut) {
              return;
            }

            if (!support.timeout) {
              clearTimeout(ontimeout);
            }

            var out;

            try {
              out = {
                body: JSON.parse(req.responseText),
                statusCode: req.status,
                // XDomainRequest does not have any response headers
                headers: req.getAllResponseHeaders && req.getAllResponseHeaders() || {}
              };
            } catch (e) {
              out = new errors.UnparsableJSON({
                more: req.responseText
              });
            }

            if (out instanceof errors.UnparsableJSON) {
              reject(out);
            } else {
              resolve(out);
            }
          }

          function error(event) {
            if (timedOut) {
              return;
            }

            if (!support.timeout) {
              clearTimeout(ontimeout);
            } // error event is trigerred both with XDR/XHR on:
            //   - DNS error
            //   - unallowed cross domain request


            reject(new errors.Network({
              more: event
            }));
          }

          function timeout() {
            if (!support.timeout) {
              timedOut = true;
              req.abort();
            }

            reject(new errors.RequestTimeout());
          }
        });
      };

      AlgoliaSearchBrowser.prototype._request.fallback = function requestFallback(url, opts) {
        url = inlineHeaders(url, opts.headers);
        return new Promise(function wrapJsonpRequest(resolve, reject) {
          jsonpRequest(url, opts, function jsonpRequestDone(err, content) {
            if (err) {
              reject(err);
              return;
            }

            resolve(content);
          });
        });
      };

      AlgoliaSearchBrowser.prototype._promise = {
        reject: function rejectPromise(val) {
          return Promise.reject(val);
        },
        resolve: function resolvePromise(val) {
          return Promise.resolve(val);
        },
        delay: function delayPromise(ms) {
          return new Promise(function resolveOnTimeout(resolve
          /*, reject*/
          ) {
            setTimeout(resolve, ms);
          });
        }
      };
    }, {
      "10": 10,
      "45": 45,
      "6": 6,
      "60": 60,
      "63": 63,
      "64": 64,
      "65": 65,
      "66": 66,
      "67": 67,
      "9": 9
    }],
    63: [function (require, module, exports) {
      'use strict';

      module.exports = getDocumentProtocol;

      function getDocumentProtocol() {
        var protocol = window.document.location.protocol; // when in `file:` mode (local html file), default to `http:`

        if (protocol !== 'http:' && protocol !== 'https:') {
          protocol = 'http:';
        }

        return protocol;
      }
    }, {}],
    64: [function (require, module, exports) {
      'use strict';

      module.exports = inlineHeaders;

      var querystring = require(5);

      function inlineHeaders(url, headers) {
        if (/\?/.test(url)) {
          url += '&';
        } else {
          url += '?';
        }

        return url + querystring.encode(headers);
      }
    }, {
      "5": 5
    }],
    65: [function (require, module, exports) {
      'use strict';

      module.exports = jsonpRequest;

      var errors = require(66);

      var JSONPCounter = 0;

      function jsonpRequest(url, opts, cb) {
        if (opts.method !== 'GET') {
          cb(new Error('Method ' + opts.method + ' ' + url + ' is not supported by JSONP.'));
          return;
        }

        opts.debug('JSONP: start');
        var cbCalled = false;
        var timedOut = false;
        JSONPCounter += 1;
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        var cbName = 'algoliaJSONP_' + JSONPCounter;
        var done = false;

        window[cbName] = function (data) {
          try {
            delete window[cbName];
          } catch (e) {
            window[cbName] = undefined;
          }

          if (timedOut) {
            return;
          }

          cbCalled = true;
          clean();
          cb(null, {
            body: data
            /*,
            // We do not send the statusCode, there's no statusCode in JSONP, it will be
            // computed using data.status && data.message like with XDR
            statusCode*/

          });
        }; // add callback by hand


        url += '&callback=' + cbName; // add body params manually

        if (opts.jsonBody && opts.jsonBody.params) {
          url += '&' + opts.jsonBody.params;
        }

        var ontimeout = setTimeout(timeout, opts.timeout); // script onreadystatechange needed only for
        // <= IE8
        // https://github.com/angular/angular.js/issues/4523

        script.onreadystatechange = readystatechange;
        script.onload = success;
        script.onerror = error;
        script.async = true;
        script.defer = true;
        script.src = url;
        head.appendChild(script);

        function success() {
          opts.debug('JSONP: success');

          if (done || timedOut) {
            return;
          }

          done = true; // script loaded but did not call the fn => script loading error

          if (!cbCalled) {
            opts.debug('JSONP: Fail. Script loaded but did not call the callback');
            clean();
            cb(new errors.JSONPScriptFail());
          }
        }

        function readystatechange() {
          if (this.readyState === 'loaded' || this.readyState === 'complete') {
            success();
          }
        }

        function clean() {
          clearTimeout(ontimeout);
          script.onload = null;
          script.onreadystatechange = null;
          script.onerror = null;
          head.removeChild(script);

          try {
            delete window[cbName];
            delete window[cbName + '_loaded'];
          } catch (e) {
            window[cbName] = null;
            window[cbName + '_loaded'] = null;
          }
        }

        function timeout() {
          opts.debug('JSONP: Script timeout');
          timedOut = true;
          clean();
          cb(new errors.RequestTimeout());
        }

        function error() {
          opts.debug('JSONP: Script error');

          if (done || timedOut) {
            return;
          }

          clean();
          cb(new errors.JSONPScriptError());
        }
      }
    }, {
      "66": 66
    }],
    66: [function (require, module, exports) {
      'use strict'; // This file hosts our error definitions
      // We use custom error "types" so that we can act on them when we need it
      // e.g.: if error instanceof errors.UnparsableJSON then..

      var inherits = require(10);

      function AlgoliaSearchError(message, extraProperties) {
        var forEach = require(11);

        var error = this; // try to get a stacktrace

        if (typeof Error.captureStackTrace === 'function') {
          Error.captureStackTrace(this, this.constructor);
        } else {
          error.stack = new Error().stack || 'Cannot get a stacktrace, browser is too old';
        }

        this.name = this.constructor.name;
        this.message = message || 'Unknown error';

        if (extraProperties) {
          forEach(extraProperties, function addToErrorObject(value, key) {
            error[key] = value;
          });
        }
      }

      inherits(AlgoliaSearchError, Error);

      function createCustomError(name, message) {
        function AlgoliaSearchCustomError() {
          var args = Array.prototype.slice.call(arguments, 0); // custom message not set, use default

          if (typeof args[0] !== 'string') {
            args.unshift(message);
          }

          AlgoliaSearchError.apply(this, args);
          this.name = 'AlgoliaSearch' + name + 'Error';
        }

        inherits(AlgoliaSearchCustomError, AlgoliaSearchError);
        return AlgoliaSearchCustomError;
      } // late exports to let various fn defs and inherits take place


      module.exports = {
        AlgoliaSearchError: AlgoliaSearchError,
        UnparsableJSON: createCustomError('UnparsableJSON', 'Could not parse the incoming response as JSON, see err.more for details'),
        RequestTimeout: createCustomError('RequestTimeout', 'Request timedout before getting a response'),
        Network: createCustomError('Network', 'Network issue, see err.more for details'),
        JSONPScriptFail: createCustomError('JSONPScriptFail', '<script> was loaded but did not call our provided callback'),
        JSONPScriptError: createCustomError('JSONPScriptError', '<script> unable to load due to an `error` event on it'),
        Unknown: createCustomError('Unknown', 'Unknown error occured')
      };
    }, {
      "10": 10,
      "11": 11
    }],
    67: [function (require, module, exports) {
      module.exports = "3.7.7";
    }, {}]
  }, {}, [62])(62);
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! ./../../../node_modules/timers-browserify/main.js */ "./node_modules/timers-browserify/main.js").setImmediate))

/***/ }),

/***/ "./resources/js/vendor/hogan.js":
/*!**************************************!*\
  !*** ./resources/js/vendor/hogan.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
 *  Copyright 2011 Twitter, Inc.
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
var Hogan = {};

(function (Hogan) {
  Hogan.Template = function (codeObj, text, compiler, options) {
    codeObj = codeObj || {};
    this.r = codeObj.code || this.r;
    this.c = compiler;
    this.options = options || {};
    this.text = text || '';
    this.partials = codeObj.partials || {};
    this.subs = codeObj.subs || {};
    this.buf = '';
  };

  Hogan.Template.prototype = {
    // render: replaced by generated code.
    r: function r(context, partials, indent) {
      return '';
    },
    // variable escaping
    v: hoganEscape,
    // triple stache
    t: coerceToString,
    render: function render(context, partials, indent) {
      return this.ri([context], partials || {}, indent);
    },
    // render internal -- a hook for overrides that catches partials too
    ri: function ri(context, partials, indent) {
      return this.r(context, partials, indent);
    },
    // ensurePartial
    ep: function ep(symbol, partials) {
      var partial = this.partials[symbol]; // check to see that if we've instantiated this partial before

      var template = partials[partial.name];

      if (partial.instance && partial.base == template) {
        return partial.instance;
      }

      if (typeof template == 'string') {
        if (!this.c) {
          throw new Error("No compiler available.");
        }

        template = this.c.compile(template, this.options);
      }

      if (!template) {
        return null;
      } // We use this to check whether the partials dictionary has changed


      this.partials[symbol].base = template;

      if (partial.subs) {
        // Make sure we consider parent template now
        if (!partials.stackText) partials.stackText = {};

        for (key in partial.subs) {
          if (!partials.stackText[key]) {
            partials.stackText[key] = this.activeSub !== undefined && partials.stackText[this.activeSub] ? partials.stackText[this.activeSub] : this.text;
          }
        }

        template = createSpecializedPartial(template, partial.subs, partial.partials, this.stackSubs, this.stackPartials, partials.stackText);
      }

      this.partials[symbol].instance = template;
      return template;
    },
    // tries to find a partial in the current scope and render it
    rp: function rp(symbol, context, partials, indent) {
      var partial = this.ep(symbol, partials);

      if (!partial) {
        return '';
      }

      return partial.ri(context, partials, indent);
    },
    // render a section
    rs: function rs(context, partials, section) {
      var tail = context[context.length - 1];

      if (!isArray(tail)) {
        section(context, partials, this);
        return;
      }

      for (var i = 0; i < tail.length; i++) {
        context.push(tail[i]);
        section(context, partials, this);
        context.pop();
      }
    },
    // maybe start a section
    s: function s(val, ctx, partials, inverted, start, end, tags) {
      var pass;

      if (isArray(val) && val.length === 0) {
        return false;
      }

      if (typeof val == 'function') {
        val = this.ms(val, ctx, partials, inverted, start, end, tags);
      }

      pass = !!val;

      if (!inverted && pass && ctx) {
        ctx.push(_typeof(val) == 'object' ? val : ctx[ctx.length - 1]);
      }

      return pass;
    },
    // find values with dotted names
    d: function d(key, ctx, partials, returnFound) {
      var found,
          names = key.split('.'),
          val = this.f(names[0], ctx, partials, returnFound),
          doModelGet = this.options.modelGet,
          cx = null;

      if (key === '.' && isArray(ctx[ctx.length - 2])) {
        val = ctx[ctx.length - 1];
      } else {
        for (var i = 1; i < names.length; i++) {
          found = findInScope(names[i], val, doModelGet);

          if (found !== undefined) {
            cx = val;
            val = found;
          } else {
            val = '';
          }
        }
      }

      if (returnFound && !val) {
        return false;
      }

      if (!returnFound && typeof val == 'function') {
        ctx.push(cx);
        val = this.mv(val, ctx, partials);
        ctx.pop();
      }

      return val;
    },
    // find values with normal names
    f: function f(key, ctx, partials, returnFound) {
      var val = false,
          v = null,
          found = false,
          doModelGet = this.options.modelGet;

      for (var i = ctx.length - 1; i >= 0; i--) {
        v = ctx[i];
        val = findInScope(key, v, doModelGet);

        if (val !== undefined) {
          found = true;
          break;
        }
      }

      if (!found) {
        return returnFound ? false : "";
      }

      if (!returnFound && typeof val == 'function') {
        val = this.mv(val, ctx, partials);
      }

      return val;
    },
    // higher order templates
    ls: function ls(func, cx, partials, text, tags) {
      var oldTags = this.options.delimiters;
      this.options.delimiters = tags;
      this.b(this.ct(coerceToString(func.call(cx, text)), cx, partials));
      this.options.delimiters = oldTags;
      return false;
    },
    // compile text
    ct: function ct(text, cx, partials) {
      if (this.options.disableLambda) {
        throw new Error('Lambda features disabled.');
      }

      return this.c.compile(text, this.options).render(cx, partials);
    },
    // template result buffering
    b: function b(s) {
      this.buf += s;
    },
    fl: function fl() {
      var r = this.buf;
      this.buf = '';
      return r;
    },
    // method replace section
    ms: function ms(func, ctx, partials, inverted, start, end, tags) {
      var textSource,
          cx = ctx[ctx.length - 1],
          result = func.call(cx);

      if (typeof result == 'function') {
        if (inverted) {
          return true;
        } else {
          textSource = this.activeSub && this.subsText && this.subsText[this.activeSub] ? this.subsText[this.activeSub] : this.text;
          return this.ls(result, cx, partials, textSource.substring(start, end), tags);
        }
      }

      return result;
    },
    // method replace variable
    mv: function mv(func, ctx, partials) {
      var cx = ctx[ctx.length - 1];
      var result = func.call(cx);

      if (typeof result == 'function') {
        return this.ct(coerceToString(result.call(cx)), cx, partials);
      }

      return result;
    },
    sub: function sub(name, context, partials, indent) {
      var f = this.subs[name];

      if (f) {
        this.activeSub = name;
        f(context, partials, this, indent);
        this.activeSub = false;
      }
    }
  }; //Find a key in an object

  function findInScope(key, scope, doModelGet) {
    var val;

    if (scope && _typeof(scope) == 'object') {
      if (scope[key] !== undefined) {
        val = scope[key]; // try lookup with get for backbone or similar model data
      } else if (doModelGet && scope.get && typeof scope.get == 'function') {
        val = scope.get(key);
      }
    }

    return val;
  }

  function createSpecializedPartial(instance, subs, partials, stackSubs, stackPartials, stackText) {
    function PartialTemplate() {}

    ;
    PartialTemplate.prototype = instance;

    function Substitutions() {}

    ;
    Substitutions.prototype = instance.subs;
    var key;
    var partial = new PartialTemplate();
    partial.subs = new Substitutions();
    partial.subsText = {}; //hehe. substext.

    partial.buf = '';
    stackSubs = stackSubs || {};
    partial.stackSubs = stackSubs;
    partial.subsText = stackText;

    for (key in subs) {
      if (!stackSubs[key]) stackSubs[key] = subs[key];
    }

    for (key in stackSubs) {
      partial.subs[key] = stackSubs[key];
    }

    stackPartials = stackPartials || {};
    partial.stackPartials = stackPartials;

    for (key in partials) {
      if (!stackPartials[key]) stackPartials[key] = partials[key];
    }

    for (key in stackPartials) {
      partial.partials[key] = stackPartials[key];
    }

    return partial;
  }

  var rAmp = /&/g,
      rLt = /</g,
      rGt = />/g,
      rApos = /\'/g,
      rQuot = /\"/g,
      hChars = /[&<>\"\']/;

  function coerceToString(val) {
    return String(val === null || val === undefined ? '' : val);
  }

  function hoganEscape(str) {
    str = coerceToString(str);
    return hChars.test(str) ? str.replace(rAmp, '&amp;').replace(rLt, '&lt;').replace(rGt, '&gt;').replace(rApos, '&#39;').replace(rQuot, '&quot;') : str;
  }

  var isArray = Array.isArray || function (a) {
    return Object.prototype.toString.call(a) === '[object Array]';
  };
})( true ? exports : undefined);

(function (Hogan) {
  // Setup regex  assignments
  // remove whitespace according to Mustache spec
  var rIsWhitespace = /\S/,
      rQuot = /\"/g,
      rNewline = /\n/g,
      rCr = /\r/g,
      rSlash = /\\/g,
      rLineSep = /\u2028/,
      rParagraphSep = /\u2029/;
  Hogan.tags = {
    '#': 1,
    '^': 2,
    '<': 3,
    '$': 4,
    '/': 5,
    '!': 6,
    '>': 7,
    '=': 8,
    '_v': 9,
    '{': 10,
    '&': 11,
    '_t': 12
  };

  Hogan.scan = function scan(text, delimiters) {
    var len = text.length,
        IN_TEXT = 0,
        IN_TAG_TYPE = 1,
        IN_TAG = 2,
        state = IN_TEXT,
        tagType = null,
        tag = null,
        buf = '',
        tokens = [],
        seenTag = false,
        i = 0,
        lineStart = 0,
        otag = '{{',
        ctag = '}}';

    function addBuf() {
      if (buf.length > 0) {
        tokens.push({
          tag: '_t',
          text: new String(buf)
        });
        buf = '';
      }
    }

    function lineIsWhitespace() {
      var isAllWhitespace = true;

      for (var j = lineStart; j < tokens.length; j++) {
        isAllWhitespace = Hogan.tags[tokens[j].tag] < Hogan.tags['_v'] || tokens[j].tag == '_t' && tokens[j].text.match(rIsWhitespace) === null;

        if (!isAllWhitespace) {
          return false;
        }
      }

      return isAllWhitespace;
    }

    function filterLine(haveSeenTag, noNewLine) {
      addBuf();

      if (haveSeenTag && lineIsWhitespace()) {
        for (var j = lineStart, next; j < tokens.length; j++) {
          if (tokens[j].text) {
            if ((next = tokens[j + 1]) && next.tag == '>') {
              // set indent to token value
              next.indent = tokens[j].text.toString();
            }

            tokens.splice(j, 1);
          }
        }
      } else if (!noNewLine) {
        tokens.push({
          tag: '\n'
        });
      }

      seenTag = false;
      lineStart = tokens.length;
    }

    function changeDelimiters(text, index) {
      var close = '=' + ctag,
          closeIndex = text.indexOf(close, index),
          delimiters = trim(text.substring(text.indexOf('=', index) + 1, closeIndex)).split(' ');
      otag = delimiters[0];
      ctag = delimiters[delimiters.length - 1];
      return closeIndex + close.length - 1;
    }

    if (delimiters) {
      delimiters = delimiters.split(' ');
      otag = delimiters[0];
      ctag = delimiters[1];
    }

    for (i = 0; i < len; i++) {
      if (state == IN_TEXT) {
        if (tagChange(otag, text, i)) {
          --i;
          addBuf();
          state = IN_TAG_TYPE;
        } else {
          if (text.charAt(i) == '\n') {
            filterLine(seenTag);
          } else {
            buf += text.charAt(i);
          }
        }
      } else if (state == IN_TAG_TYPE) {
        i += otag.length - 1;
        tag = Hogan.tags[text.charAt(i + 1)];
        tagType = tag ? text.charAt(i + 1) : '_v';

        if (tagType == '=') {
          i = changeDelimiters(text, i);
          state = IN_TEXT;
        } else {
          if (tag) {
            i++;
          }

          state = IN_TAG;
        }

        seenTag = i;
      } else {
        if (tagChange(ctag, text, i)) {
          tokens.push({
            tag: tagType,
            n: trim(buf),
            otag: otag,
            ctag: ctag,
            i: tagType == '/' ? seenTag - otag.length : i + ctag.length
          });
          buf = '';
          i += ctag.length - 1;
          state = IN_TEXT;

          if (tagType == '{') {
            if (ctag == '}}') {
              i++;
            } else {
              cleanTripleStache(tokens[tokens.length - 1]);
            }
          }
        } else {
          buf += text.charAt(i);
        }
      }
    }

    filterLine(seenTag, true);
    return tokens;
  };

  function cleanTripleStache(token) {
    if (token.n.substr(token.n.length - 1) === '}') {
      token.n = token.n.substring(0, token.n.length - 1);
    }
  }

  function trim(s) {
    if (s.trim) {
      return s.trim();
    }

    return s.replace(/^\s*|\s*$/g, '');
  }

  function tagChange(tag, text, index) {
    if (text.charAt(index) != tag.charAt(0)) {
      return false;
    }

    for (var i = 1, l = tag.length; i < l; i++) {
      if (text.charAt(index + i) != tag.charAt(i)) {
        return false;
      }
    }

    return true;
  } // the tags allowed inside super templates


  var allowedInSuper = {
    '_t': true,
    '\n': true,
    '$': true,
    '/': true
  };

  function buildTree(tokens, kind, stack, customTags) {
    var instructions = [],
        opener = null,
        tail = null,
        token = null;
    tail = stack[stack.length - 1];

    while (tokens.length > 0) {
      token = tokens.shift();

      if (tail && tail.tag == '<' && !(token.tag in allowedInSuper)) {
        throw new Error('Illegal content in < super tag.');
      }

      if (Hogan.tags[token.tag] <= Hogan.tags['$'] || isOpener(token, customTags)) {
        stack.push(token);
        token.nodes = buildTree(tokens, token.tag, stack, customTags);
      } else if (token.tag == '/') {
        if (stack.length === 0) {
          throw new Error('Closing tag without opener: /' + token.n);
        }

        opener = stack.pop();

        if (token.n != opener.n && !isCloser(token.n, opener.n, customTags)) {
          throw new Error('Nesting error: ' + opener.n + ' vs. ' + token.n);
        }

        opener.end = token.i;
        return instructions;
      } else if (token.tag == '\n') {
        token.last = tokens.length == 0 || tokens[0].tag == '\n';
      }

      instructions.push(token);
    }

    if (stack.length > 0) {
      throw new Error('missing closing tag: ' + stack.pop().n);
    }

    return instructions;
  }

  function isOpener(token, tags) {
    for (var i = 0, l = tags.length; i < l; i++) {
      if (tags[i].o == token.n) {
        token.tag = '#';
        return true;
      }
    }
  }

  function isCloser(close, open, tags) {
    for (var i = 0, l = tags.length; i < l; i++) {
      if (tags[i].c == close && tags[i].o == open) {
        return true;
      }
    }
  }

  function stringifySubstitutions(obj) {
    var items = [];

    for (var key in obj) {
      items.push('"' + esc(key) + '": function(c,p,t,i) {' + obj[key] + '}');
    }

    return "{ " + items.join(",") + " }";
  }

  function stringifyPartials(codeObj) {
    var partials = [];

    for (var key in codeObj.partials) {
      partials.push('"' + esc(key) + '":{name:"' + esc(codeObj.partials[key].name) + '", ' + stringifyPartials(codeObj.partials[key]) + "}");
    }

    return "partials: {" + partials.join(",") + "}, subs: " + stringifySubstitutions(codeObj.subs);
  }

  Hogan.stringify = function (codeObj, text, options) {
    return "{code: function (c,p,i) { " + Hogan.wrapMain(codeObj.code) + " }," + stringifyPartials(codeObj) + "}";
  };

  var serialNo = 0;

  Hogan.generate = function (tree, text, options) {
    serialNo = 0;
    var context = {
      code: '',
      subs: {},
      partials: {}
    };
    Hogan.walk(tree, context);

    if (options.asString) {
      return this.stringify(context, text, options);
    }

    return this.makeTemplate(context, text, options);
  };

  Hogan.wrapMain = function (code) {
    return 'var t=this;t.b(i=i||"");' + code + 'return t.fl();';
  };

  Hogan.template = Hogan.Template;

  Hogan.makeTemplate = function (codeObj, text, options) {
    var template = this.makePartials(codeObj);
    template.code = new Function('c', 'p', 'i', this.wrapMain(codeObj.code));
    return new this.template(template, text, this, options);
  };

  Hogan.makePartials = function (codeObj) {
    var key,
        template = {
      subs: {},
      partials: codeObj.partials,
      name: codeObj.name
    };

    for (key in template.partials) {
      template.partials[key] = this.makePartials(template.partials[key]);
    }

    for (key in codeObj.subs) {
      template.subs[key] = new Function('c', 'p', 't', 'i', codeObj.subs[key]);
    }

    return template;
  };

  function esc(s) {
    return s.replace(rSlash, '\\\\').replace(rQuot, '\\\"').replace(rNewline, '\\n').replace(rCr, '\\r').replace(rLineSep, "\\u2028").replace(rParagraphSep, "\\u2029");
  }

  function chooseMethod(s) {
    return ~s.indexOf('.') ? 'd' : 'f';
  }

  function createPartial(node, context) {
    var prefix = "<" + (context.prefix || "");
    var sym = prefix + node.n + serialNo++;
    context.partials[sym] = {
      name: node.n,
      partials: {}
    };
    context.code += 't.b(t.rp("' + esc(sym) + '",c,p,"' + (node.indent || '') + '"));';
    return sym;
  }

  Hogan.codegen = {
    '#': function _(node, context) {
      context.code += 'if(t.s(t.' + chooseMethod(node.n) + '("' + esc(node.n) + '",c,p,1),' + 'c,p,0,' + node.i + ',' + node.end + ',"' + node.otag + " " + node.ctag + '")){' + 't.rs(c,p,' + 'function(c,p,t){';
      Hogan.walk(node.nodes, context);
      context.code += '});c.pop();}';
    },
    '^': function _(node, context) {
      context.code += 'if(!t.s(t.' + chooseMethod(node.n) + '("' + esc(node.n) + '",c,p,1),c,p,1,0,0,"")){';
      Hogan.walk(node.nodes, context);
      context.code += '};';
    },
    '>': createPartial,
    '<': function _(node, context) {
      var ctx = {
        partials: {},
        code: '',
        subs: {},
        inPartial: true
      };
      Hogan.walk(node.nodes, ctx);
      var template = context.partials[createPartial(node, context)];
      template.subs = ctx.subs;
      template.partials = ctx.partials;
    },
    '$': function $(node, context) {
      var ctx = {
        subs: {},
        code: '',
        partials: context.partials,
        prefix: node.n
      };
      Hogan.walk(node.nodes, ctx);
      context.subs[node.n] = ctx.code;

      if (!context.inPartial) {
        context.code += 't.sub("' + esc(node.n) + '",c,p,i);';
      }
    },
    '\n': function _(node, context) {
      context.code += write('"\\n"' + (node.last ? '' : ' + i'));
    },
    '_v': function _v(node, context) {
      context.code += 't.b(t.v(t.' + chooseMethod(node.n) + '("' + esc(node.n) + '",c,p,0)));';
    },
    '_t': function _t(node, context) {
      context.code += write('"' + esc(node.text) + '"');
    },
    '{': tripleStache,
    '&': tripleStache
  };

  function tripleStache(node, context) {
    context.code += 't.b(t.t(t.' + chooseMethod(node.n) + '("' + esc(node.n) + '",c,p,0)));';
  }

  function write(s) {
    return 't.b(' + s + ');';
  }

  Hogan.walk = function (nodelist, context) {
    var func;

    for (var i = 0, l = nodelist.length; i < l; i++) {
      func = Hogan.codegen[nodelist[i].tag];
      func && func(nodelist[i], context);
    }

    return context;
  };

  Hogan.parse = function (tokens, text, options) {
    options = options || {};
    return buildTree(tokens, '', [], options.sectionTags || []);
  };

  Hogan.cache = {};

  Hogan.cacheKey = function (text, options) {
    return [text, !!options.asString, !!options.disableLambda, options.delimiters, !!options.modelGet].join('||');
  };

  Hogan.compile = function (text, options) {
    options = options || {};
    var key = Hogan.cacheKey(text, options);
    var template = this.cache[key];

    if (template) {
      var partials = template.partials;

      for (var name in partials) {
        delete partials[name].instance;
      }

      return template;
    }

    template = this.generate(this.parse(this.scan(text, options.delimiters), text, options), text, options);
    return this.cache[key] = template;
  };
})( true ? exports : undefined);

/***/ }),

/***/ "./resources/js/vendor/prism.js":
/*!**************************************!*\
  !*** ./resources/js/vendor/prism.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {/* PrismJS 1.15.0
https://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript+markup-templating+php&plugins=line-numbers */
var _self = "undefined" != typeof window ? window : "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? self : {},
    Prism = function () {
  var e = /\blang(?:uage)?-([\w-]+)\b/i,
      t = 0,
      n = _self.Prism = {
    manual: _self.Prism && _self.Prism.manual,
    disableWorkerMessageHandler: _self.Prism && _self.Prism.disableWorkerMessageHandler,
    util: {
      encode: function encode(e) {
        return e instanceof a ? new a(e.type, n.util.encode(e.content), e.alias) : "Array" === n.util.type(e) ? e.map(n.util.encode) : e.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/\u00a0/g, " ");
      },
      type: function type(e) {
        return Object.prototype.toString.call(e).slice(8, -1);
      },
      objId: function objId(e) {
        return e.__id || Object.defineProperty(e, "__id", {
          value: ++t
        }), e.__id;
      },
      clone: function clone(e, t) {
        var a = n.util.type(e);

        switch (t = t || {}, a) {
          case "Object":
            if (t[n.util.objId(e)]) return t[n.util.objId(e)];
            var r = {};
            t[n.util.objId(e)] = r;

            for (var l in e) {
              e.hasOwnProperty(l) && (r[l] = n.util.clone(e[l], t));
            }

            return r;

          case "Array":
            if (t[n.util.objId(e)]) return t[n.util.objId(e)];
            var r = [];
            return t[n.util.objId(e)] = r, e.forEach(function (e, a) {
              r[a] = n.util.clone(e, t);
            }), r;
        }

        return e;
      }
    },
    languages: {
      extend: function extend(e, t) {
        var a = n.util.clone(n.languages[e]);

        for (var r in t) {
          a[r] = t[r];
        }

        return a;
      },
      insertBefore: function insertBefore(e, t, a, r) {
        r = r || n.languages;
        var l = r[e],
            i = {};

        for (var o in l) {
          if (l.hasOwnProperty(o)) {
            if (o == t) for (var s in a) {
              a.hasOwnProperty(s) && (i[s] = a[s]);
            }
            a.hasOwnProperty(o) || (i[o] = l[o]);
          }
        }

        var u = r[e];
        return r[e] = i, n.languages.DFS(n.languages, function (t, n) {
          n === u && t != e && (this[t] = i);
        }), i;
      },
      DFS: function DFS(e, t, a, r) {
        r = r || {};

        for (var l in e) {
          e.hasOwnProperty(l) && (t.call(e, l, e[l], a || l), "Object" !== n.util.type(e[l]) || r[n.util.objId(e[l])] ? "Array" !== n.util.type(e[l]) || r[n.util.objId(e[l])] || (r[n.util.objId(e[l])] = !0, n.languages.DFS(e[l], t, l, r)) : (r[n.util.objId(e[l])] = !0, n.languages.DFS(e[l], t, null, r)));
        }
      }
    },
    plugins: {},
    highlightAll: function highlightAll(e, t) {
      n.highlightAllUnder(document, e, t);
    },
    highlightAllUnder: function highlightAllUnder(e, t, a) {
      var r = {
        callback: a,
        selector: 'code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'
      };
      n.hooks.run("before-highlightall", r);

      for (var l, i = r.elements || e.querySelectorAll(r.selector), o = 0; l = i[o++];) {
        n.highlightElement(l, t === !0, r.callback);
      }
    },
    highlightElement: function highlightElement(t, a, r) {
      for (var l, i, o = t; o && !e.test(o.className);) {
        o = o.parentNode;
      }

      o && (l = (o.className.match(e) || [, ""])[1].toLowerCase(), i = n.languages[l]), t.className = t.className.replace(e, "").replace(/\s+/g, " ") + " language-" + l, t.parentNode && (o = t.parentNode, /pre/i.test(o.nodeName) && (o.className = o.className.replace(e, "").replace(/\s+/g, " ") + " language-" + l));

      var s = t.textContent,
          u = {
        element: t,
        language: l,
        grammar: i,
        code: s
      },
          g = function g(e) {
        u.highlightedCode = e, n.hooks.run("before-insert", u), u.element.innerHTML = u.highlightedCode, n.hooks.run("after-highlight", u), n.hooks.run("complete", u), r && r.call(u.element);
      };

      if (n.hooks.run("before-sanity-check", u), !u.code) return n.hooks.run("complete", u), void 0;
      if (n.hooks.run("before-highlight", u), !u.grammar) return g(n.util.encode(u.code)), void 0;

      if (a && _self.Worker) {
        var c = new Worker(n.filename);
        c.onmessage = function (e) {
          g(e.data);
        }, c.postMessage(JSON.stringify({
          language: u.language,
          code: u.code,
          immediateClose: !0
        }));
      } else g(n.highlight(u.code, u.grammar, u.language));
    },
    highlight: function highlight(e, t, r) {
      var l = {
        code: e,
        grammar: t,
        language: r
      };
      return n.hooks.run("before-tokenize", l), l.tokens = n.tokenize(l.code, l.grammar), n.hooks.run("after-tokenize", l), a.stringify(n.util.encode(l.tokens), l.language);
    },
    matchGrammar: function matchGrammar(e, t, a, r, l, i, o) {
      var s = n.Token;

      for (var u in a) {
        if (a.hasOwnProperty(u) && a[u]) {
          if (u == o) return;
          var g = a[u];
          g = "Array" === n.util.type(g) ? g : [g];

          for (var c = 0; c < g.length; ++c) {
            var f = g[c],
                h = f.inside,
                d = !!f.lookbehind,
                m = !!f.greedy,
                p = 0,
                y = f.alias;

            if (m && !f.pattern.global) {
              var v = f.pattern.toString().match(/[imuy]*$/)[0];
              f.pattern = RegExp(f.pattern.source, v + "g");
            }

            f = f.pattern || f;

            for (var b = r, k = l; b < t.length; k += t[b].length, ++b) {
              var w = t[b];
              if (t.length > e.length) return;

              if (!(w instanceof s)) {
                if (m && b != t.length - 1) {
                  f.lastIndex = k;

                  var _ = f.exec(e);

                  if (!_) break;

                  for (var j = _.index + (d ? _[1].length : 0), P = _.index + _[0].length, A = b, O = k, x = t.length; x > A && (P > O || !t[A].type && !t[A - 1].greedy); ++A) {
                    O += t[A].length, j >= O && (++b, k = O);
                  }

                  if (t[b] instanceof s) continue;
                  I = A - b, w = e.slice(k, O), _.index -= k;
                } else {
                  f.lastIndex = 0;

                  var _ = f.exec(w),
                      I = 1;
                }

                if (_) {
                  d && (p = _[1] ? _[1].length : 0);

                  var j = _.index + p,
                      _ = _[0].slice(p),
                      P = j + _.length,
                      N = w.slice(0, j),
                      S = w.slice(P),
                      E = [b, I];

                  N && (++b, k += N.length, E.push(N));
                  var C = new s(u, h ? n.tokenize(_, h) : _, y, _, m);
                  if (E.push(C), S && E.push(S), Array.prototype.splice.apply(t, E), 1 != I && n.matchGrammar(e, t, a, b, k, !0, u), i) break;
                } else if (i) break;
              }
            }
          }
        }
      }
    },
    tokenize: function tokenize(e, t) {
      var a = [e],
          r = t.rest;

      if (r) {
        for (var l in r) {
          t[l] = r[l];
        }

        delete t.rest;
      }

      return n.matchGrammar(e, a, t, 0, 0, !1), a;
    },
    hooks: {
      all: {},
      add: function add(e, t) {
        var a = n.hooks.all;
        a[e] = a[e] || [], a[e].push(t);
      },
      run: function run(e, t) {
        var a = n.hooks.all[e];
        if (a && a.length) for (var r, l = 0; r = a[l++];) {
          r(t);
        }
      }
    }
  },
      a = n.Token = function (e, t, n, a, r) {
    this.type = e, this.content = t, this.alias = n, this.length = 0 | (a || "").length, this.greedy = !!r;
  };

  if (a.stringify = function (e, t, r) {
    if ("string" == typeof e) return e;
    if ("Array" === n.util.type(e)) return e.map(function (n) {
      return a.stringify(n, t, e);
    }).join("");
    var l = {
      type: e.type,
      content: a.stringify(e.content, t, r),
      tag: "span",
      classes: ["token", e.type],
      attributes: {},
      language: t,
      parent: r
    };

    if (e.alias) {
      var i = "Array" === n.util.type(e.alias) ? e.alias : [e.alias];
      Array.prototype.push.apply(l.classes, i);
    }

    n.hooks.run("wrap", l);
    var o = Object.keys(l.attributes).map(function (e) {
      return e + '="' + (l.attributes[e] || "").replace(/"/g, "&quot;") + '"';
    }).join(" ");
    return "<" + l.tag + ' class="' + l.classes.join(" ") + '"' + (o ? " " + o : "") + ">" + l.content + "</" + l.tag + ">";
  }, !_self.document) return _self.addEventListener ? (n.disableWorkerMessageHandler || _self.addEventListener("message", function (e) {
    var t = JSON.parse(e.data),
        a = t.language,
        r = t.code,
        l = t.immediateClose;
    _self.postMessage(n.highlight(r, n.languages[a], a)), l && _self.close();
  }, !1), _self.Prism) : _self.Prism;
  var r = document.currentScript || [].slice.call(document.getElementsByTagName("script")).pop();
  return r && (n.filename = r.src, n.manual || r.hasAttribute("data-manual") || ("loading" !== document.readyState ? window.requestAnimationFrame ? window.requestAnimationFrame(n.highlightAll) : window.setTimeout(n.highlightAll, 16) : document.addEventListener("DOMContentLoaded", n.highlightAll))), _self.Prism;
}();

 true && module.exports && (module.exports = Prism), "undefined" != typeof global && (global.Prism = Prism);
Prism.languages.markup = {
  comment: /<!--[\s\S]*?-->/,
  prolog: /<\?[\s\S]+?\?>/,
  doctype: /<!DOCTYPE[\s\S]+?>/i,
  cdata: /<!\[CDATA\[[\s\S]*?]]>/i,
  tag: {
    pattern: /<\/?(?!\d)[^\s>\/=$<%]+(?:\s+[^\s>\/=]+(?:=(?:("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|[^\s'">=]+))?)*\s*\/?>/i,
    greedy: !0,
    inside: {
      tag: {
        pattern: /^<\/?[^\s>\/]+/i,
        inside: {
          punctuation: /^<\/?/,
          namespace: /^[^\s>\/:]+:/
        }
      },
      "attr-value": {
        pattern: /=(?:("|')(?:\\[\s\S]|(?!\1)[^\\])*\1|[^\s'">=]+)/i,
        inside: {
          punctuation: [/^=/, {
            pattern: /(^|[^\\])["']/,
            lookbehind: !0
          }]
        }
      },
      punctuation: /\/?>/,
      "attr-name": {
        pattern: /[^\s>\/]+/,
        inside: {
          namespace: /^[^\s>\/:]+:/
        }
      }
    }
  },
  entity: /&#?[\da-z]{1,8};/i
}, Prism.languages.markup.tag.inside["attr-value"].inside.entity = Prism.languages.markup.entity, Prism.hooks.add("wrap", function (a) {
  "entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"));
}), Prism.languages.xml = Prism.languages.extend("markup", {}), Prism.languages.html = Prism.languages.markup, Prism.languages.mathml = Prism.languages.markup, Prism.languages.svg = Prism.languages.markup;
Prism.languages.css = {
  comment: /\/\*[\s\S]*?\*\//,
  atrule: {
    pattern: /@[\w-]+?[\s\S]*?(?:;|(?=\s*\{))/i,
    inside: {
      rule: /@[\w-]+/
    }
  },
  url: /url\((?:(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1|.*?)\)/i,
  selector: /[^{}\s][^{};]*?(?=\s*\{)/,
  string: {
    pattern: /("|')(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,
    greedy: !0
  },
  property: /[-_a-z\xA0-\uFFFF][-\w\xA0-\uFFFF]*(?=\s*:)/i,
  important: /!important\b/i,
  "function": /[-a-z0-9]+(?=\()/i,
  punctuation: /[(){};:,]/
}, Prism.languages.css.atrule.inside.rest = Prism.languages.css, Prism.languages.markup && (Prism.languages.insertBefore("markup", "tag", {
  style: {
    pattern: /(<style[\s\S]*?>)[\s\S]*?(?=<\/style>)/i,
    lookbehind: !0,
    inside: Prism.languages.css,
    alias: "language-css",
    greedy: !0
  }
}), Prism.languages.insertBefore("inside", "attr-value", {
  "style-attr": {
    pattern: /\s*style=("|')(?:\\[\s\S]|(?!\1)[^\\])*\1/i,
    inside: {
      "attr-name": {
        pattern: /^\s*style/i,
        inside: Prism.languages.markup.tag.inside
      },
      punctuation: /^\s*=\s*['"]|['"]\s*$/,
      "attr-value": {
        pattern: /.+/i,
        inside: Prism.languages.css
      }
    },
    alias: "language-css"
  }
}, Prism.languages.markup.tag));
Prism.languages.clike = {
  comment: [{
    pattern: /(^|[^\\])\/\*[\s\S]*?(?:\*\/|$)/,
    lookbehind: !0
  }, {
    pattern: /(^|[^\\:])\/\/.*/,
    lookbehind: !0,
    greedy: !0
  }],
  string: {
    pattern: /(["'])(?:\\(?:\r\n|[\s\S])|(?!\1)[^\\\r\n])*\1/,
    greedy: !0
  },
  "class-name": {
    pattern: /((?:\b(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[\w.\\]+/i,
    lookbehind: !0,
    inside: {
      punctuation: /[.\\]/
    }
  },
  keyword: /\b(?:if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/,
  "boolean": /\b(?:true|false)\b/,
  "function": /\w+(?=\()/,
  number: /\b0x[\da-f]+\b|(?:\b\d+\.?\d*|\B\.\d+)(?:e[+-]?\d+)?/i,
  operator: /--?|\+\+?|!=?=?|<=?|>=?|==?=?|&&?|\|\|?|\?|\*|\/|~|\^|%/,
  punctuation: /[{}[\];(),.:]/
};
Prism.languages.javascript = Prism.languages.extend("clike", {
  "class-name": [Prism.languages.clike["class-name"], {
    pattern: /(^|[^$\w\xA0-\uFFFF])[_$A-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\.(?:prototype|constructor))/,
    lookbehind: !0
  }],
  keyword: [{
    pattern: /((?:^|})\s*)(?:catch|finally)\b/,
    lookbehind: !0
  }, /\b(?:as|async|await|break|case|class|const|continue|debugger|default|delete|do|else|enum|export|extends|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|var|void|while|with|yield)\b/],
  number: /\b(?:(?:0[xX][\dA-Fa-f]+|0[bB][01]+|0[oO][0-7]+)n?|\d+n|NaN|Infinity)\b|(?:\b\d+\.?\d*|\B\.\d+)(?:[Ee][+-]?\d+)?/,
  "function": /[_$a-zA-Z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*\(|\.(?:apply|bind|call)\()/,
  operator: /-[-=]?|\+[+=]?|!=?=?|<<?=?|>>?>?=?|=(?:==?|>)?|&[&=]?|\|[|=]?|\*\*?=?|\/=?|~|\^=?|%=?|\?|\.{3}/
}), Prism.languages.javascript["class-name"][0].pattern = /(\b(?:class|interface|extends|implements|instanceof|new)\s+)[\w.\\]+/, Prism.languages.insertBefore("javascript", "keyword", {
  regex: {
    pattern: /((?:^|[^$\w\xA0-\uFFFF."'\])\s])\s*)\/(\[(?:[^\]\\\r\n]|\\.)*]|\\.|[^\/\\\[\r\n])+\/[gimyu]{0,5}(?=\s*($|[\r\n,.;})\]]))/,
    lookbehind: !0,
    greedy: !0
  },
  "function-variable": {
    pattern: /[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*[=:]\s*(?:async\s*)?(?:\bfunction\b|(?:\([^()]*\)|[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*)\s*=>))/i,
    alias: "function"
  },
  parameter: [{
    pattern: /(function(?:\s+[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*)?\s*\(\s*)[^\s()][^()]*?(?=\s*\))/,
    lookbehind: !0,
    inside: Prism.languages.javascript
  }, {
    pattern: /[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*(?=\s*=>)/,
    inside: Prism.languages.javascript
  }, {
    pattern: /(\(\s*)[^\s()][^()]*?(?=\s*\)\s*=>)/,
    lookbehind: !0,
    inside: Prism.languages.javascript
  }, {
    pattern: /((?:\b|\s|^)(?!(?:as|async|await|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|finally|for|from|function|get|if|implements|import|in|instanceof|interface|let|new|null|of|package|private|protected|public|return|set|static|super|switch|this|throw|try|typeof|var|void|while|with|yield)(?![$\w\xA0-\uFFFF]))(?:[_$a-z\xA0-\uFFFF][$\w\xA0-\uFFFF]*\s*)\(\s*)[^\s()][^()]*?(?=\s*\)\s*\{)/,
    lookbehind: !0,
    inside: Prism.languages.javascript
  }],
  constant: /\b[A-Z][A-Z\d_]*\b/
}), Prism.languages.insertBefore("javascript", "string", {
  "template-string": {
    pattern: /`(?:\\[\s\S]|\${[^}]+}|[^\\`])*`/,
    greedy: !0,
    inside: {
      interpolation: {
        pattern: /\${[^}]+}/,
        inside: {
          "interpolation-punctuation": {
            pattern: /^\${|}$/,
            alias: "punctuation"
          },
          rest: Prism.languages.javascript
        }
      },
      string: /[\s\S]+/
    }
  }
}), Prism.languages.markup && Prism.languages.insertBefore("markup", "tag", {
  script: {
    pattern: /(<script[\s\S]*?>)[\s\S]*?(?=<\/script>)/i,
    lookbehind: !0,
    inside: Prism.languages.javascript,
    alias: "language-javascript",
    greedy: !0
  }
}), Prism.languages.js = Prism.languages.javascript;
Prism.languages["markup-templating"] = {}, Object.defineProperties(Prism.languages["markup-templating"], {
  buildPlaceholders: {
    value: function value(e, t, n, a) {
      e.language === t && (e.tokenStack = [], e.code = e.code.replace(n, function (n) {
        if ("function" == typeof a && !a(n)) return n;

        for (var r = e.tokenStack.length; -1 !== e.code.indexOf("___" + t.toUpperCase() + r + "___");) {
          ++r;
        }

        return e.tokenStack[r] = n, "___" + t.toUpperCase() + r + "___";
      }), e.grammar = Prism.languages.markup);
    }
  },
  tokenizePlaceholders: {
    value: function value(e, t) {
      if (e.language === t && e.tokenStack) {
        e.grammar = Prism.languages[t];

        var n = 0,
            a = Object.keys(e.tokenStack),
            r = function r(o) {
          if (!(n >= a.length)) for (var i = 0; i < o.length; i++) {
            var g = o[i];

            if ("string" == typeof g || g.content && "string" == typeof g.content) {
              var c = a[n],
                  s = e.tokenStack[c],
                  l = "string" == typeof g ? g : g.content,
                  p = l.indexOf("___" + t.toUpperCase() + c + "___");

              if (p > -1) {
                ++n;

                var f,
                    u = l.substring(0, p),
                    _ = new Prism.Token(t, Prism.tokenize(s, e.grammar, t), "language-" + t, s),
                    k = l.substring(p + ("___" + t.toUpperCase() + c + "___").length);

                if (u || k ? (f = [u, _, k].filter(function (e) {
                  return !!e;
                }), r(f)) : f = _, "string" == typeof g ? Array.prototype.splice.apply(o, [i, 1].concat(f)) : g.content = f, n >= a.length) break;
              }
            } else g.content && "string" != typeof g.content && r(g.content);
          }
        };

        r(e.tokens);
      }
    }
  }
});
!function (e) {
  e.languages.php = e.languages.extend("clike", {
    keyword: /\b(?:__halt_compiler|abstract|and|array|as|break|callable|case|catch|class|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|eval|exit|extends|final|finally|for|foreach|function|global|goto|if|implements|include|include_once|instanceof|insteadof|interface|isset|list|namespace|new|or|parent|print|private|protected|public|require|require_once|return|static|switch|throw|trait|try|unset|use|var|while|xor|yield)\b/i,
    "boolean": {
      pattern: /\b(?:false|true)\b/i,
      alias: "constant"
    },
    constant: [/\b[A-Z_][A-Z0-9_]*\b/, /\b(?:null)\b/i],
    comment: {
      pattern: /(^|[^\\])(?:\/\*[\s\S]*?\*\/|\/\/.*)/,
      lookbehind: !0
    }
  }), e.languages.insertBefore("php", "string", {
    "shell-comment": {
      pattern: /(^|[^\\])#.*/,
      lookbehind: !0,
      alias: "comment"
    }
  }), e.languages.insertBefore("php", "keyword", {
    delimiter: {
      pattern: /\?>|<\?(?:php|=)?/i,
      alias: "important"
    },
    variable: /\$+(?:\w+\b|(?={))/i,
    "package": {
      pattern: /(\\|namespace\s+|use\s+)[\w\\]+/,
      lookbehind: !0,
      inside: {
        punctuation: /\\/
      }
    }
  }), e.languages.insertBefore("php", "operator", {
    property: {
      pattern: /(->)[\w]+/,
      lookbehind: !0
    }
  });
  var n = {
    pattern: /{\$(?:{(?:{[^{}]+}|[^{}]+)}|[^{}])+}|(^|[^\\{])\$+(?:\w+(?:\[.+?]|->\w+)*)/,
    lookbehind: !0,
    inside: {
      rest: e.languages.php
    }
  };
  e.languages.insertBefore("php", "string", {
    "nowdoc-string": {
      pattern: /<<<'([^']+)'(?:\r\n?|\n)(?:.*(?:\r\n?|\n))*?\1;/,
      greedy: !0,
      alias: "string",
      inside: {
        delimiter: {
          pattern: /^<<<'[^']+'|[a-z_]\w*;$/i,
          alias: "symbol",
          inside: {
            punctuation: /^<<<'?|[';]$/
          }
        }
      }
    },
    "heredoc-string": {
      pattern: /<<<(?:"([^"]+)"(?:\r\n?|\n)(?:.*(?:\r\n?|\n))*?\1;|([a-z_]\w*)(?:\r\n?|\n)(?:.*(?:\r\n?|\n))*?\2;)/i,
      greedy: !0,
      alias: "string",
      inside: {
        delimiter: {
          pattern: /^<<<(?:"[^"]+"|[a-z_]\w*)|[a-z_]\w*;$/i,
          alias: "symbol",
          inside: {
            punctuation: /^<<<"?|[";]$/
          }
        },
        interpolation: n
      }
    },
    "single-quoted-string": {
      pattern: /'(?:\\[\s\S]|[^\\'])*'/,
      greedy: !0,
      alias: "string"
    },
    "double-quoted-string": {
      pattern: /"(?:\\[\s\S]|[^\\"])*"/,
      greedy: !0,
      alias: "string",
      inside: {
        interpolation: n
      }
    }
  }), delete e.languages.php.string, e.hooks.add("before-tokenize", function (n) {
    if (/(?:<\?php|<\?)/gi.test(n.code)) {
      var t = /(?:<\?php|<\?)[\s\S]*?(?:\?>|$)/gi;
      e.languages["markup-templating"].buildPlaceholders(n, "php", t);
    }
  }), e.hooks.add("after-tokenize", function (n) {
    e.languages["markup-templating"].tokenizePlaceholders(n, "php");
  });
}(Prism);
!function () {
  if ("undefined" != typeof self && self.Prism && self.document) {
    var e = "line-numbers",
        t = /\n(?!$)/g,
        n = function n(e) {
      var n = r(e),
          s = n["white-space"];

      if ("pre-wrap" === s || "pre-line" === s) {
        var l = e.querySelector("code"),
            i = e.querySelector(".line-numbers-rows"),
            a = e.querySelector(".line-numbers-sizer"),
            o = l.textContent.split(t);
        a || (a = document.createElement("span"), a.className = "line-numbers-sizer", l.appendChild(a)), a.style.display = "block", o.forEach(function (e, t) {
          a.textContent = e || "\n";
          var n = a.getBoundingClientRect().height;
          i.children[t].style.height = n + "px";
        }), a.textContent = "", a.style.display = "none";
      }
    },
        r = function r(e) {
      return e ? window.getComputedStyle ? getComputedStyle(e) : e.currentStyle || null : null;
    };

    window.addEventListener("resize", function () {
      Array.prototype.forEach.call(document.querySelectorAll("pre." + e), n);
    }), Prism.hooks.add("complete", function (e) {
      if (e.code) {
        var r = e.element.parentNode,
            s = /\s*\bline-numbers\b\s*/;

        if (r && /pre/i.test(r.nodeName) && (s.test(r.className) || s.test(e.element.className)) && !e.element.querySelector(".line-numbers-rows")) {
          s.test(e.element.className) && (e.element.className = e.element.className.replace(s, " ")), s.test(r.className) || (r.className += " line-numbers");
          var l,
              i = e.code.match(t),
              a = i ? i.length + 1 : 1,
              o = new Array(a + 1);
          o = o.join("<span></span>"), l = document.createElement("span"), l.setAttribute("aria-hidden", "true"), l.className = "line-numbers-rows", l.innerHTML = o, r.hasAttribute("data-start") && (r.style.counterReset = "linenumber " + (parseInt(r.getAttribute("data-start"), 10) - 1)), e.element.appendChild(l), n(r), Prism.hooks.run("line-numbers", e);
        }
      }
    }), Prism.hooks.add("line-numbers", function (e) {
      e.plugins = e.plugins || {}, e.plugins.lineNumbers = !0;
    }), Prism.plugins.lineNumbers = {
      getLine: function getLine(t, n) {
        if ("PRE" === t.tagName && t.classList.contains(e)) {
          var r = t.querySelector(".line-numbers-rows"),
              s = parseInt(t.getAttribute("data-start"), 10) || 1,
              l = s + (r.children.length - 1);
          s > n && (n = s), n > l && (n = l);
          var i = n - s;
          return r.children[i];
        }
      }
    };
  }
}();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./resources/js/vendor/typeahead.js":
/*!******************************************!*\
  !*** ./resources/js/vendor/typeahead.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(setImmediate) {/*!
 * typeahead.js 0.10.5
 * https://github.com/twitter/typeahead.js
 * Copyright 2013-2014 Twitter, Inc. and other contributors; Licensed MIT
 */
(function ($) {
  var _ = function () {
    "use strict";

    return {
      isMsie: function isMsie() {
        return /(msie|trident)/i.test(navigator.userAgent) ? navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2] : false;
      },
      isBlankString: function isBlankString(str) {
        return !str || /^\s*$/.test(str);
      },
      escapeRegExChars: function escapeRegExChars(str) {
        return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
      },
      isString: function isString(obj) {
        return typeof obj === "string";
      },
      isNumber: function isNumber(obj) {
        return typeof obj === "number";
      },
      isArray: $.isArray,
      isFunction: $.isFunction,
      isObject: $.isPlainObject,
      isUndefined: function isUndefined(obj) {
        return typeof obj === "undefined";
      },
      toStr: function toStr(s) {
        return _.isUndefined(s) || s === null ? "" : s + "";
      },
      bind: $.proxy,
      each: function each(collection, cb) {
        $.each(collection, reverseArgs);

        function reverseArgs(index, value) {
          return cb(value, index);
        }
      },
      map: $.map,
      filter: $.grep,
      every: function every(obj, test) {
        var result = true;

        if (!obj) {
          return result;
        }

        $.each(obj, function (key, val) {
          if (!(result = test.call(null, val, key, obj))) {
            return false;
          }
        });
        return !!result;
      },
      some: function some(obj, test) {
        var result = false;

        if (!obj) {
          return result;
        }

        $.each(obj, function (key, val) {
          if (result = test.call(null, val, key, obj)) {
            return false;
          }
        });
        return !!result;
      },
      mixin: $.extend,
      getUniqueId: function () {
        var counter = 0;
        return function () {
          return counter++;
        };
      }(),
      templatify: function templatify(obj) {
        return $.isFunction(obj) ? obj : template;

        function template() {
          return String(obj);
        }
      },
      defer: function defer(fn) {
        setTimeout(fn, 0);
      },
      debounce: function debounce(func, wait, immediate) {
        var timeout, result;
        return function () {
          var context = this,
              args = arguments,
              later,
              callNow;

          later = function later() {
            timeout = null;

            if (!immediate) {
              result = func.apply(context, args);
            }
          };

          callNow = immediate && !timeout;
          clearTimeout(timeout);
          timeout = setTimeout(later, wait);

          if (callNow) {
            result = func.apply(context, args);
          }

          return result;
        };
      },
      throttle: function throttle(func, wait) {
        var context, args, timeout, result, previous, later;
        previous = 0;

        later = function later() {
          previous = new Date();
          timeout = null;
          result = func.apply(context, args);
        };

        return function () {
          var now = new Date(),
              remaining = wait - (now - previous);
          context = this;
          args = arguments;

          if (remaining <= 0) {
            clearTimeout(timeout);
            timeout = null;
            previous = now;
            result = func.apply(context, args);
          } else if (!timeout) {
            timeout = setTimeout(later, remaining);
          }

          return result;
        };
      },
      noop: function noop() {}
    };
  }();

  var VERSION = "0.10.5";

  var tokenizers = function () {
    "use strict";

    return {
      nonword: nonword,
      whitespace: whitespace,
      obj: {
        nonword: getObjTokenizer(nonword),
        whitespace: getObjTokenizer(whitespace)
      }
    };

    function whitespace(str) {
      str = _.toStr(str);
      return str ? str.split(/\s+/) : [];
    }

    function nonword(str) {
      str = _.toStr(str);
      return str ? str.split(/\W+/) : [];
    }

    function getObjTokenizer(tokenizer) {
      return function setKey() {
        var args = [].slice.call(arguments, 0);
        return function tokenize(o) {
          var tokens = [];

          _.each(args, function (k) {
            tokens = tokens.concat(tokenizer(_.toStr(o[k])));
          });

          return tokens;
        };
      };
    }
  }();

  var LruCache = function () {
    "use strict";

    function LruCache(maxSize) {
      this.maxSize = _.isNumber(maxSize) ? maxSize : 100;
      this.reset();

      if (this.maxSize <= 0) {
        this.set = this.get = $.noop;
      }
    }

    _.mixin(LruCache.prototype, {
      set: function set(key, val) {
        var tailItem = this.list.tail,
            node;

        if (this.size >= this.maxSize) {
          this.list.remove(tailItem);
          delete this.hash[tailItem.key];
        }

        if (node = this.hash[key]) {
          node.val = val;
          this.list.moveToFront(node);
        } else {
          node = new Node(key, val);
          this.list.add(node);
          this.hash[key] = node;
          this.size++;
        }
      },
      get: function get(key) {
        var node = this.hash[key];

        if (node) {
          this.list.moveToFront(node);
          return node.val;
        }
      },
      reset: function reset() {
        this.size = 0;
        this.hash = {};
        this.list = new List();
      }
    });

    function List() {
      this.head = this.tail = null;
    }

    _.mixin(List.prototype, {
      add: function add(node) {
        if (this.head) {
          node.next = this.head;
          this.head.prev = node;
        }

        this.head = node;
        this.tail = this.tail || node;
      },
      remove: function remove(node) {
        node.prev ? node.prev.next = node.next : this.head = node.next;
        node.next ? node.next.prev = node.prev : this.tail = node.prev;
      },
      moveToFront: function moveToFront(node) {
        this.remove(node);
        this.add(node);
      }
    });

    function Node(key, val) {
      this.key = key;
      this.val = val;
      this.prev = this.next = null;
    }

    return LruCache;
  }();

  var PersistentStorage = function () {
    "use strict";

    var ls, methods;

    try {
      ls = window.localStorage;
      ls.setItem("~~~", "!");
      ls.removeItem("~~~");
    } catch (err) {
      ls = null;
    }

    function PersistentStorage(namespace) {
      this.prefix = ["__", namespace, "__"].join("");
      this.ttlKey = "__ttl__";
      this.keyMatcher = new RegExp("^" + _.escapeRegExChars(this.prefix));
    }

    if (ls && window.JSON) {
      methods = {
        _prefix: function _prefix(key) {
          return this.prefix + key;
        },
        _ttlKey: function _ttlKey(key) {
          return this._prefix(key) + this.ttlKey;
        },
        get: function get(key) {
          if (this.isExpired(key)) {
            this.remove(key);
          }

          return decode(ls.getItem(this._prefix(key)));
        },
        set: function set(key, val, ttl) {
          if (_.isNumber(ttl)) {
            ls.setItem(this._ttlKey(key), encode(now() + ttl));
          } else {
            ls.removeItem(this._ttlKey(key));
          }

          return ls.setItem(this._prefix(key), encode(val));
        },
        remove: function remove(key) {
          ls.removeItem(this._ttlKey(key));
          ls.removeItem(this._prefix(key));
          return this;
        },
        clear: function clear() {
          var i,
              key,
              keys = [],
              len = ls.length;

          for (i = 0; i < len; i++) {
            if ((key = ls.key(i)).match(this.keyMatcher)) {
              keys.push(key.replace(this.keyMatcher, ""));
            }
          }

          for (i = keys.length; i--;) {
            this.remove(keys[i]);
          }

          return this;
        },
        isExpired: function isExpired(key) {
          var ttl = decode(ls.getItem(this._ttlKey(key)));
          return _.isNumber(ttl) && now() > ttl ? true : false;
        }
      };
    } else {
      methods = {
        get: _.noop,
        set: _.noop,
        remove: _.noop,
        clear: _.noop,
        isExpired: _.noop
      };
    }

    _.mixin(PersistentStorage.prototype, methods);

    return PersistentStorage;

    function now() {
      return new Date().getTime();
    }

    function encode(val) {
      return JSON.stringify(_.isUndefined(val) ? null : val);
    }

    function decode(val) {
      return JSON.parse(val);
    }
  }();

  var Transport = function () {
    "use strict";

    var pendingRequestsCount = 0,
        pendingRequests = {},
        maxPendingRequests = 6,
        sharedCache = new LruCache(10);

    function Transport(o) {
      o = o || {};
      this.cancelled = false;
      this.lastUrl = null;
      this._send = o.transport ? callbackToDeferred(o.transport) : $.ajax;
      this._get = o.rateLimiter ? o.rateLimiter(this._get) : this._get;
      this._cache = o.cache === false ? new LruCache(0) : sharedCache;
    }

    Transport.setMaxPendingRequests = function setMaxPendingRequests(num) {
      maxPendingRequests = num;
    };

    Transport.resetCache = function resetCache() {
      sharedCache.reset();
    };

    _.mixin(Transport.prototype, {
      _get: function _get(url, o, cb) {
        var that = this,
            jqXhr;

        if (this.cancelled || url !== this.lastUrl) {
          return;
        }

        if (jqXhr = pendingRequests[url]) {
          jqXhr.done(done).fail(fail);
        } else if (pendingRequestsCount < maxPendingRequests) {
          pendingRequestsCount++;
          pendingRequests[url] = this._send(url, o).done(done).fail(fail).always(always);
        } else {
          this.onDeckRequestArgs = [].slice.call(arguments, 0);
        }

        function done(resp) {
          cb && cb(null, resp);

          that._cache.set(url, resp);
        }

        function fail() {
          cb && cb(true);
        }

        function always() {
          pendingRequestsCount--;
          delete pendingRequests[url];

          if (that.onDeckRequestArgs) {
            that._get.apply(that, that.onDeckRequestArgs);

            that.onDeckRequestArgs = null;
          }
        }
      },
      get: function get(url, o, cb) {
        var resp;

        if (_.isFunction(o)) {
          cb = o;
          o = {};
        }

        this.cancelled = false;
        this.lastUrl = url;

        if (resp = this._cache.get(url)) {
          _.defer(function () {
            cb && cb(null, resp);
          });
        } else {
          this._get(url, o, cb);
        }

        return !!resp;
      },
      cancel: function cancel() {
        this.cancelled = true;
      }
    });

    return Transport;

    function callbackToDeferred(fn) {
      return function customSendWrapper(url, o) {
        var deferred = $.Deferred();
        fn(url, o, onSuccess, onError);
        return deferred;

        function onSuccess(resp) {
          _.defer(function () {
            deferred.resolve(resp);
          });
        }

        function onError(err) {
          _.defer(function () {
            deferred.reject(err);
          });
        }
      };
    }
  }();

  var SearchIndex = function () {
    "use strict";

    function SearchIndex(o) {
      o = o || {};

      if (!o.datumTokenizer || !o.queryTokenizer) {
        $.error("datumTokenizer and queryTokenizer are both required");
      }

      this.datumTokenizer = o.datumTokenizer;
      this.queryTokenizer = o.queryTokenizer;
      this.reset();
    }

    _.mixin(SearchIndex.prototype, {
      bootstrap: function bootstrap(o) {
        this.datums = o.datums;
        this.trie = o.trie;
      },
      add: function add(data) {
        var that = this;
        data = _.isArray(data) ? data : [data];

        _.each(data, function (datum) {
          var id, tokens;
          id = that.datums.push(datum) - 1;
          tokens = normalizeTokens(that.datumTokenizer(datum));

          _.each(tokens, function (token) {
            var node, chars, ch;
            node = that.trie;
            chars = token.split("");

            while (ch = chars.shift()) {
              node = node.children[ch] || (node.children[ch] = newNode());
              node.ids.push(id);
            }
          });
        });
      },
      get: function get(query) {
        var that = this,
            tokens,
            matches;
        tokens = normalizeTokens(this.queryTokenizer(query));

        _.each(tokens, function (token) {
          var node, chars, ch, ids;

          if (matches && matches.length === 0) {
            return false;
          }

          node = that.trie;
          chars = token.split("");

          while (node && (ch = chars.shift())) {
            node = node.children[ch];
          }

          if (node && chars.length === 0) {
            ids = node.ids.slice(0);
            matches = matches ? getIntersection(matches, ids) : ids;
          } else {
            matches = [];
            return false;
          }
        });

        return matches ? _.map(unique(matches), function (id) {
          return that.datums[id];
        }) : [];
      },
      reset: function reset() {
        this.datums = [];
        this.trie = newNode();
      },
      serialize: function serialize() {
        return {
          datums: this.datums,
          trie: this.trie
        };
      }
    });

    return SearchIndex;

    function normalizeTokens(tokens) {
      tokens = _.filter(tokens, function (token) {
        return !!token;
      });
      tokens = _.map(tokens, function (token) {
        return token.toLowerCase();
      });
      return tokens;
    }

    function newNode() {
      return {
        ids: [],
        children: {}
      };
    }

    function unique(array) {
      var seen = {},
          uniques = [];

      for (var i = 0, len = array.length; i < len; i++) {
        if (!seen[array[i]]) {
          seen[array[i]] = true;
          uniques.push(array[i]);
        }
      }

      return uniques;
    }

    function getIntersection(arrayA, arrayB) {
      var ai = 0,
          bi = 0,
          intersection = [];
      arrayA = arrayA.sort(compare);
      arrayB = arrayB.sort(compare);
      var lenArrayA = arrayA.length,
          lenArrayB = arrayB.length;

      while (ai < lenArrayA && bi < lenArrayB) {
        if (arrayA[ai] < arrayB[bi]) {
          ai++;
        } else if (arrayA[ai] > arrayB[bi]) {
          bi++;
        } else {
          intersection.push(arrayA[ai]);
          ai++;
          bi++;
        }
      }

      return intersection;

      function compare(a, b) {
        return a - b;
      }
    }
  }();

  var oParser = function () {
    "use strict";

    return {
      local: getLocal,
      prefetch: getPrefetch,
      remote: getRemote
    };

    function getLocal(o) {
      return o.local || null;
    }

    function getPrefetch(o) {
      var prefetch, defaults;
      defaults = {
        url: null,
        thumbprint: "",
        ttl: 24 * 60 * 60 * 1e3,
        filter: null,
        ajax: {}
      };

      if (prefetch = o.prefetch || null) {
        prefetch = _.isString(prefetch) ? {
          url: prefetch
        } : prefetch;
        prefetch = _.mixin(defaults, prefetch);
        prefetch.thumbprint = VERSION + prefetch.thumbprint;
        prefetch.ajax.type = prefetch.ajax.type || "GET";
        prefetch.ajax.dataType = prefetch.ajax.dataType || "json";
        !prefetch.url && $.error("prefetch requires url to be set");
      }

      return prefetch;
    }

    function getRemote(o) {
      var remote, defaults;
      defaults = {
        url: null,
        cache: true,
        wildcard: "%QUERY",
        replace: null,
        rateLimitBy: "debounce",
        rateLimitWait: 300,
        send: null,
        filter: null,
        ajax: {}
      };

      if (remote = o.remote || null) {
        remote = _.isString(remote) ? {
          url: remote
        } : remote;
        remote = _.mixin(defaults, remote);
        remote.rateLimiter = /^throttle$/i.test(remote.rateLimitBy) ? byThrottle(remote.rateLimitWait) : byDebounce(remote.rateLimitWait);
        remote.ajax.type = remote.ajax.type || "GET";
        remote.ajax.dataType = remote.ajax.dataType || "json";
        delete remote.rateLimitBy;
        delete remote.rateLimitWait;
        !remote.url && $.error("remote requires url to be set");
      }

      return remote;

      function byDebounce(wait) {
        return function (fn) {
          return _.debounce(fn, wait);
        };
      }

      function byThrottle(wait) {
        return function (fn) {
          return _.throttle(fn, wait);
        };
      }
    }
  }();

  (function (root) {
    "use strict";

    var old, keys;
    old = root.Bloodhound;
    keys = {
      data: "data",
      protocol: "protocol",
      thumbprint: "thumbprint"
    };
    root.Bloodhound = Bloodhound;

    function Bloodhound(o) {
      if (!o || !o.local && !o.prefetch && !o.remote) {
        $.error("one of local, prefetch, or remote is required");
      }

      this.limit = o.limit || 5;
      this.sorter = getSorter(o.sorter);
      this.dupDetector = o.dupDetector || ignoreDuplicates;
      this.local = oParser.local(o);
      this.prefetch = oParser.prefetch(o);
      this.remote = oParser.remote(o);
      this.cacheKey = this.prefetch ? this.prefetch.cacheKey || this.prefetch.url : null;
      this.index = new SearchIndex({
        datumTokenizer: o.datumTokenizer,
        queryTokenizer: o.queryTokenizer
      });
      this.storage = this.cacheKey ? new PersistentStorage(this.cacheKey) : null;
    }

    Bloodhound.noConflict = function noConflict() {
      root.Bloodhound = old;
      return Bloodhound;
    };

    Bloodhound.tokenizers = tokenizers;

    _.mixin(Bloodhound.prototype, {
      _loadPrefetch: function loadPrefetch(o) {
        var that = this,
            serialized,
            deferred;

        if (serialized = this._readFromStorage(o.thumbprint)) {
          this.index.bootstrap(serialized);
          deferred = $.Deferred().resolve();
        } else {
          deferred = $.ajax(o.url, o.ajax).done(handlePrefetchResponse);
        }

        return deferred;

        function handlePrefetchResponse(resp) {
          that.clear();
          that.add(o.filter ? o.filter(resp) : resp);

          that._saveToStorage(that.index.serialize(), o.thumbprint, o.ttl);
        }
      },
      _getFromRemote: function getFromRemote(query, cb) {
        var that = this,
            url,
            uriEncodedQuery;

        if (!this.transport) {
          return;
        }

        query = query || "";
        uriEncodedQuery = encodeURIComponent(query);
        url = this.remote.replace ? this.remote.replace(this.remote.url, query) : this.remote.url.replace(this.remote.wildcard, uriEncodedQuery);
        return this.transport.get(url, this.remote.ajax, handleRemoteResponse);

        function handleRemoteResponse(err, resp) {
          err ? cb([]) : cb(that.remote.filter ? that.remote.filter(resp) : resp);
        }
      },
      _cancelLastRemoteRequest: function cancelLastRemoteRequest() {
        this.transport && this.transport.cancel();
      },
      _saveToStorage: function saveToStorage(data, thumbprint, ttl) {
        if (this.storage) {
          this.storage.set(keys.data, data, ttl);
          this.storage.set(keys.protocol, location.protocol, ttl);
          this.storage.set(keys.thumbprint, thumbprint, ttl);
        }
      },
      _readFromStorage: function readFromStorage(thumbprint) {
        var stored = {},
            isExpired;

        if (this.storage) {
          stored.data = this.storage.get(keys.data);
          stored.protocol = this.storage.get(keys.protocol);
          stored.thumbprint = this.storage.get(keys.thumbprint);
        }

        isExpired = stored.thumbprint !== thumbprint || stored.protocol !== location.protocol;
        return stored.data && !isExpired ? stored.data : null;
      },
      _initialize: function initialize() {
        var that = this,
            local = this.local,
            deferred;
        deferred = this.prefetch ? this._loadPrefetch(this.prefetch) : $.Deferred().resolve();
        local && deferred.done(addLocalToIndex);
        this.transport = this.remote ? new Transport(this.remote) : null;
        return this.initPromise = deferred.promise();

        function addLocalToIndex() {
          that.add(_.isFunction(local) ? local() : local);
        }
      },
      initialize: function initialize(force) {
        return !this.initPromise || force ? this._initialize() : this.initPromise;
      },
      add: function add(data) {
        this.index.add(data);
      },
      get: function get(query, cb) {
        var that = this,
            matches = [],
            cacheHit = false;
        matches = this.index.get(query);
        matches = this.sorter(matches).slice(0, this.limit);
        matches.length < this.limit ? cacheHit = this._getFromRemote(query, returnRemoteMatches) : this._cancelLastRemoteRequest();

        if (!cacheHit) {
          (matches.length > 0 || !this.transport) && cb && cb(matches);
        }

        function returnRemoteMatches(remoteMatches) {
          var matchesWithBackfill = matches.slice(0);

          _.each(remoteMatches, function (remoteMatch) {
            var isDuplicate;
            isDuplicate = _.some(matchesWithBackfill, function (match) {
              return that.dupDetector(remoteMatch, match);
            });
            !isDuplicate && matchesWithBackfill.push(remoteMatch);
            return matchesWithBackfill.length < that.limit;
          });

          cb && cb(that.sorter(matchesWithBackfill));
        }
      },
      clear: function clear() {
        this.index.reset();
      },
      clearPrefetchCache: function clearPrefetchCache() {
        this.storage && this.storage.clear();
      },
      clearRemoteCache: function clearRemoteCache() {
        this.transport && Transport.resetCache();
      },
      ttAdapter: function ttAdapter() {
        return _.bind(this.get, this);
      }
    });

    return Bloodhound;

    function getSorter(sortFn) {
      return _.isFunction(sortFn) ? sort : noSort;

      function sort(array) {
        return array.sort(sortFn);
      }

      function noSort(array) {
        return array;
      }
    }

    function ignoreDuplicates() {
      return false;
    }
  })(this);

  var html = function () {
    return {
      wrapper: '<span class="twitter-typeahead"></span>',
      dropdown: '<span class="tt-dropdown-menu"></span>',
      dataset: '<div class="tt-dataset-%CLASS%"></div>',
      suggestions: '<span class="tt-suggestions"></span>',
      suggestion: '<div class="tt-suggestion"></div>'
    };
  }();

  var css = function () {
    "use strict";

    var css = {
      wrapper: {
        position: "relative",
        display: "inline-block"
      },
      hint: {
        position: "absolute",
        top: "0",
        left: "0",
        borderColor: "transparent",
        boxShadow: "none",
        opacity: "1"
      },
      input: {
        position: "relative",
        verticalAlign: "top",
        backgroundColor: "transparent"
      },
      inputWithNoHint: {
        position: "relative",
        verticalAlign: "top"
      },
      dropdown: {
        position: "absolute",
        top: "100%",
        left: "0",
        zIndex: "100",
        display: "none"
      },
      suggestions: {
        display: "block"
      },
      suggestion: {
        whiteSpace: "nowrap",
        cursor: "pointer"
      },
      suggestionChild: {
        whiteSpace: "normal"
      },
      ltr: {
        left: "0",
        right: "auto"
      },
      rtl: {
        left: "auto",
        right: " 0"
      }
    };

    if (_.isMsie()) {
      _.mixin(css.input, {
        backgroundImage: "url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)"
      });
    }

    if (_.isMsie() && _.isMsie() <= 7) {
      _.mixin(css.input, {
        marginTop: "-1px"
      });
    }

    return css;
  }();

  var EventBus = function () {
    "use strict";

    var namespace = "typeahead:";

    function EventBus(o) {
      if (!o || !o.el) {
        $.error("EventBus initialized without el");
      }

      this.$el = $(o.el);
    }

    _.mixin(EventBus.prototype, {
      trigger: function trigger(type) {
        var args = [].slice.call(arguments, 1);
        this.$el.trigger(namespace + type, args);
      }
    });

    return EventBus;
  }();

  var EventEmitter = function () {
    "use strict";

    var splitter = /\s+/,
        nextTick = getNextTick();
    return {
      onSync: onSync,
      onAsync: onAsync,
      off: off,
      trigger: trigger
    };

    function on(method, types, cb, context) {
      var type;

      if (!cb) {
        return this;
      }

      types = types.split(splitter);
      cb = context ? bindContext(cb, context) : cb;
      this._callbacks = this._callbacks || {};

      while (type = types.shift()) {
        this._callbacks[type] = this._callbacks[type] || {
          sync: [],
          async: []
        };

        this._callbacks[type][method].push(cb);
      }

      return this;
    }

    function onAsync(types, cb, context) {
      return on.call(this, "async", types, cb, context);
    }

    function onSync(types, cb, context) {
      return on.call(this, "sync", types, cb, context);
    }

    function off(types) {
      var type;

      if (!this._callbacks) {
        return this;
      }

      types = types.split(splitter);

      while (type = types.shift()) {
        delete this._callbacks[type];
      }

      return this;
    }

    function trigger(types) {
      var type, callbacks, args, syncFlush, asyncFlush;

      if (!this._callbacks) {
        return this;
      }

      types = types.split(splitter);
      args = [].slice.call(arguments, 1);

      while ((type = types.shift()) && (callbacks = this._callbacks[type])) {
        syncFlush = getFlush(callbacks.sync, this, [type].concat(args));
        asyncFlush = getFlush(callbacks.async, this, [type].concat(args));
        syncFlush() && nextTick(asyncFlush);
      }

      return this;
    }

    function getFlush(callbacks, context, args) {
      return flush;

      function flush() {
        var cancelled;

        for (var i = 0, len = callbacks.length; !cancelled && i < len; i += 1) {
          cancelled = callbacks[i].apply(context, args) === false;
        }

        return !cancelled;
      }
    }

    function getNextTick() {
      var nextTickFn;

      if (window.setImmediate) {
        nextTickFn = function nextTickSetImmediate(fn) {
          setImmediate(function () {
            fn();
          });
        };
      } else {
        nextTickFn = function nextTickSetTimeout(fn) {
          setTimeout(function () {
            fn();
          }, 0);
        };
      }

      return nextTickFn;
    }

    function bindContext(fn, context) {
      return fn.bind ? fn.bind(context) : function () {
        fn.apply(context, [].slice.call(arguments, 0));
      };
    }
  }();

  var highlight = function (doc) {
    "use strict";

    var defaults = {
      node: null,
      pattern: null,
      tagName: "strong",
      className: null,
      wordsOnly: false,
      caseSensitive: false
    };
    return function hightlight(o) {
      var regex;
      o = _.mixin({}, defaults, o);

      if (!o.node || !o.pattern) {
        return;
      }

      o.pattern = _.isArray(o.pattern) ? o.pattern : [o.pattern];
      regex = getRegex(o.pattern, o.caseSensitive, o.wordsOnly);
      traverse(o.node, hightlightTextNode);

      function hightlightTextNode(textNode) {
        var match, patternNode, wrapperNode;

        if (match = regex.exec(textNode.data)) {
          wrapperNode = doc.createElement(o.tagName);
          o.className && (wrapperNode.className = o.className);
          patternNode = textNode.splitText(match.index);
          patternNode.splitText(match[0].length);
          wrapperNode.appendChild(patternNode.cloneNode(true));
          textNode.parentNode.replaceChild(wrapperNode, patternNode);
        }

        return !!match;
      }

      function traverse(el, hightlightTextNode) {
        var childNode,
            TEXT_NODE_TYPE = 3;

        for (var i = 0; i < el.childNodes.length; i++) {
          childNode = el.childNodes[i];

          if (childNode.nodeType === TEXT_NODE_TYPE) {
            i += hightlightTextNode(childNode) ? 1 : 0;
          } else {
            traverse(childNode, hightlightTextNode);
          }
        }
      }
    };

    function getRegex(patterns, caseSensitive, wordsOnly) {
      var escapedPatterns = [],
          regexStr;

      for (var i = 0, len = patterns.length; i < len; i++) {
        escapedPatterns.push(_.escapeRegExChars(patterns[i]));
      }

      regexStr = wordsOnly ? "\\b(" + escapedPatterns.join("|") + ")\\b" : "(" + escapedPatterns.join("|") + ")";
      return caseSensitive ? new RegExp(regexStr) : new RegExp(regexStr, "i");
    }
  }(window.document);

  var Input = function () {
    "use strict";

    var specialKeyCodeMap;
    specialKeyCodeMap = {
      9: "tab",
      27: "esc",
      37: "left",
      39: "right",
      13: "enter",
      38: "up",
      40: "down"
    };

    function Input(o) {
      var that = this,
          onBlur,
          onFocus,
          onKeydown,
          onInput;
      o = o || {};

      if (!o.input) {
        $.error("input is missing");
      }

      onBlur = _.bind(this._onBlur, this);
      onFocus = _.bind(this._onFocus, this);
      onKeydown = _.bind(this._onKeydown, this);
      onInput = _.bind(this._onInput, this);
      this.$hint = $(o.hint);
      this.$input = $(o.input).on("blur.tt", onBlur).on("focus.tt", onFocus).on("keydown.tt", onKeydown);

      if (this.$hint.length === 0) {
        this.setHint = this.getHint = this.clearHint = this.clearHintIfInvalid = _.noop;
      }

      if (!_.isMsie()) {
        this.$input.on("input.tt", onInput);
      } else {
        this.$input.on("keydown.tt keypress.tt cut.tt paste.tt", function ($e) {
          if (specialKeyCodeMap[$e.which || $e.keyCode]) {
            return;
          }

          _.defer(_.bind(that._onInput, that, $e));
        });
      }

      this.query = this.$input.val();
      this.$overflowHelper = buildOverflowHelper(this.$input);
    }

    Input.normalizeQuery = function (str) {
      return (str || "").replace(/^\s*/g, "").replace(/\s{2,}/g, " ");
    };

    _.mixin(Input.prototype, EventEmitter, {
      _onBlur: function onBlur() {
        this.resetInputValue();
        this.trigger("blurred");
      },
      _onFocus: function onFocus() {
        this.trigger("focused");
      },
      _onKeydown: function onKeydown($e) {
        var keyName = specialKeyCodeMap[$e.which || $e.keyCode];

        this._managePreventDefault(keyName, $e);

        if (keyName && this._shouldTrigger(keyName, $e)) {
          this.trigger(keyName + "Keyed", $e);
        }
      },
      _onInput: function onInput() {
        this._checkInputValue();
      },
      _managePreventDefault: function managePreventDefault(keyName, $e) {
        var preventDefault, hintValue, inputValue;

        switch (keyName) {
          case "tab":
            hintValue = this.getHint();
            inputValue = this.getInputValue();
            preventDefault = hintValue && hintValue !== inputValue && !withModifier($e);
            break;

          case "up":
          case "down":
            preventDefault = !withModifier($e);
            break;

          default:
            preventDefault = false;
        }

        preventDefault && $e.preventDefault();
      },
      _shouldTrigger: function shouldTrigger(keyName, $e) {
        var trigger;

        switch (keyName) {
          case "tab":
            trigger = !withModifier($e);
            break;

          default:
            trigger = true;
        }

        return trigger;
      },
      _checkInputValue: function checkInputValue() {
        var inputValue, areEquivalent, hasDifferentWhitespace;
        inputValue = this.getInputValue();
        areEquivalent = areQueriesEquivalent(inputValue, this.query);
        hasDifferentWhitespace = areEquivalent ? this.query.length !== inputValue.length : false;
        this.query = inputValue;

        if (!areEquivalent) {
          this.trigger("queryChanged", this.query);
        } else if (hasDifferentWhitespace) {
          this.trigger("whitespaceChanged", this.query);
        }
      },
      focus: function focus() {
        this.$input.focus();
      },
      blur: function blur() {
        this.$input.blur();
      },
      getQuery: function getQuery() {
        return this.query;
      },
      setQuery: function setQuery(query) {
        this.query = query;
      },
      getInputValue: function getInputValue() {
        return this.$input.val();
      },
      setInputValue: function setInputValue(value, silent) {
        this.$input.val(value);
        silent ? this.clearHint() : this._checkInputValue();
      },
      resetInputValue: function resetInputValue() {
        this.setInputValue(this.query, true);
      },
      getHint: function getHint() {
        return this.$hint.val();
      },
      setHint: function setHint(value) {
        this.$hint.val(value);
      },
      clearHint: function clearHint() {
        this.setHint("");
      },
      clearHintIfInvalid: function clearHintIfInvalid() {
        var val, hint, valIsPrefixOfHint, isValid;
        val = this.getInputValue();
        hint = this.getHint();
        valIsPrefixOfHint = val !== hint && hint.indexOf(val) === 0;
        isValid = val !== "" && valIsPrefixOfHint && !this.hasOverflow();
        !isValid && this.clearHint();
      },
      getLanguageDirection: function getLanguageDirection() {
        return (this.$input.css("direction") || "ltr").toLowerCase();
      },
      hasOverflow: function hasOverflow() {
        var constraint = this.$input.width() - 2;
        this.$overflowHelper.text(this.getInputValue());
        return this.$overflowHelper.width() >= constraint;
      },
      isCursorAtEnd: function isCursorAtEnd() {
        var valueLength, selectionStart, range;
        valueLength = this.$input.val().length;
        selectionStart = this.$input[0].selectionStart;

        if (_.isNumber(selectionStart)) {
          return selectionStart === valueLength;
        } else if (document.selection) {
          range = document.selection.createRange();
          range.moveStart("character", -valueLength);
          return valueLength === range.text.length;
        }

        return true;
      },
      destroy: function destroy() {
        this.$hint.off(".tt");
        this.$input.off(".tt");
        this.$hint = this.$input = this.$overflowHelper = null;
      }
    });

    return Input;

    function buildOverflowHelper($input) {
      return $('<pre aria-hidden="true"></pre>').css({
        position: "absolute",
        visibility: "hidden",
        whiteSpace: "pre",
        fontFamily: $input.css("font-family"),
        fontSize: $input.css("font-size"),
        fontStyle: $input.css("font-style"),
        fontVariant: $input.css("font-variant"),
        fontWeight: $input.css("font-weight"),
        wordSpacing: $input.css("word-spacing"),
        letterSpacing: $input.css("letter-spacing"),
        textIndent: $input.css("text-indent"),
        textRendering: $input.css("text-rendering"),
        textTransform: $input.css("text-transform")
      }).insertAfter($input);
    }

    function areQueriesEquivalent(a, b) {
      return Input.normalizeQuery(a) === Input.normalizeQuery(b);
    }

    function withModifier($e) {
      return $e.altKey || $e.ctrlKey || $e.metaKey || $e.shiftKey;
    }
  }();

  var Dataset = function () {
    "use strict";

    var datasetKey = "ttDataset",
        valueKey = "ttValue",
        datumKey = "ttDatum";

    function Dataset(o) {
      o = o || {};
      o.templates = o.templates || {};

      if (!o.source) {
        $.error("missing source");
      }

      if (o.name && !isValidName(o.name)) {
        $.error("invalid dataset name: " + o.name);
      }

      this.query = null;
      this.highlight = !!o.highlight;
      this.name = o.name || _.getUniqueId();
      this.source = o.source;
      this.displayFn = getDisplayFn(o.display || o.displayKey);
      this.templates = getTemplates(o.templates, this.displayFn);
      this.$el = $(html.dataset.replace("%CLASS%", this.name));
    }

    Dataset.extractDatasetName = function extractDatasetName(el) {
      return $(el).data(datasetKey);
    };

    Dataset.extractValue = function extractDatum(el) {
      return $(el).data(valueKey);
    };

    Dataset.extractDatum = function extractDatum(el) {
      return $(el).data(datumKey);
    };

    _.mixin(Dataset.prototype, EventEmitter, {
      _render: function render(query, suggestions) {
        if (!this.$el) {
          return;
        }

        var that = this,
            hasSuggestions;
        this.$el.empty();
        hasSuggestions = suggestions && suggestions.length;

        if (!hasSuggestions && this.templates.empty) {
          this.$el.html(getEmptyHtml()).prepend(that.templates.header ? getHeaderHtml() : null).append(that.templates.footer ? getFooterHtml() : null);
        } else if (hasSuggestions) {
          this.$el.html(getSuggestionsHtml()).prepend(that.templates.header ? getHeaderHtml() : null).append(that.templates.footer ? getFooterHtml() : null);
        }

        this.trigger("rendered");

        function getEmptyHtml() {
          return that.templates.empty({
            query: query,
            isEmpty: true
          });
        }

        function getSuggestionsHtml() {
          var $suggestions, nodes;
          $suggestions = $(html.suggestions).css(css.suggestions);
          nodes = _.map(suggestions, getSuggestionNode);
          $suggestions.append.apply($suggestions, nodes);
          that.highlight && highlight({
            className: "tt-highlight",
            node: $suggestions[0],
            pattern: query
          });
          return $suggestions;

          function getSuggestionNode(suggestion) {
            var $el;
            $el = $(html.suggestion).append(that.templates.suggestion(suggestion)).data(datasetKey, that.name).data(valueKey, that.displayFn(suggestion)).data(datumKey, suggestion);
            $el.children().each(function () {
              $(this).css(css.suggestionChild);
            });
            return $el;
          }
        }

        function getHeaderHtml() {
          return that.templates.header({
            query: query,
            isEmpty: !hasSuggestions
          });
        }

        function getFooterHtml() {
          return that.templates.footer({
            query: query,
            isEmpty: !hasSuggestions
          });
        }
      },
      getRoot: function getRoot() {
        return this.$el;
      },
      update: function update(query) {
        var that = this;
        this.query = query;
        this.canceled = false;
        this.source(query, render);

        function render(suggestions) {
          if (!that.canceled && query === that.query) {
            that._render(query, suggestions);
          }
        }
      },
      cancel: function cancel() {
        this.canceled = true;
      },
      clear: function clear() {
        this.cancel();
        this.$el.empty();
        this.trigger("rendered");
      },
      isEmpty: function isEmpty() {
        return this.$el.is(":empty");
      },
      destroy: function destroy() {
        this.$el = null;
      }
    });

    return Dataset;

    function getDisplayFn(display) {
      display = display || "value";
      return _.isFunction(display) ? display : displayFn;

      function displayFn(obj) {
        return obj[display];
      }
    }

    function getTemplates(templates, displayFn) {
      return {
        empty: templates.empty && _.templatify(templates.empty),
        header: templates.header && _.templatify(templates.header),
        footer: templates.footer && _.templatify(templates.footer),
        suggestion: templates.suggestion || suggestionTemplate
      };

      function suggestionTemplate(context) {
        return "<p>" + displayFn(context) + "</p>";
      }
    }

    function isValidName(str) {
      return /^[_a-zA-Z0-9-]+$/.test(str);
    }
  }();

  var Dropdown = function () {
    "use strict";

    function Dropdown(o) {
      var that = this,
          onSuggestionClick,
          onSuggestionMouseEnter,
          onSuggestionMouseLeave;
      o = o || {};

      if (!o.menu) {
        $.error("menu is required");
      }

      this.isOpen = false;
      this.isEmpty = true;
      this.datasets = _.map(o.datasets, initializeDataset);
      onSuggestionClick = _.bind(this._onSuggestionClick, this);
      onSuggestionMouseEnter = _.bind(this._onSuggestionMouseEnter, this);
      onSuggestionMouseLeave = _.bind(this._onSuggestionMouseLeave, this);
      this.$menu = $(o.menu).on("click.tt", ".tt-suggestion", onSuggestionClick).on("mouseenter.tt", ".tt-suggestion", onSuggestionMouseEnter).on("mouseleave.tt", ".tt-suggestion", onSuggestionMouseLeave);

      _.each(this.datasets, function (dataset) {
        that.$menu.append(dataset.getRoot());
        dataset.onSync("rendered", that._onRendered, that);
      });
    }

    _.mixin(Dropdown.prototype, EventEmitter, {
      _onSuggestionClick: function onSuggestionClick($e) {
        this.trigger("suggestionClicked", $($e.currentTarget));
      },
      _onSuggestionMouseEnter: function onSuggestionMouseEnter($e) {
        this._removeCursor();

        this._setCursor($($e.currentTarget), true);
      },
      _onSuggestionMouseLeave: function onSuggestionMouseLeave() {
        this._removeCursor();
      },
      _onRendered: function onRendered() {
        this.isEmpty = _.every(this.datasets, isDatasetEmpty);
        this.isEmpty ? this._hide() : this.isOpen && this._show();
        this.trigger("datasetRendered");

        function isDatasetEmpty(dataset) {
          return dataset.isEmpty();
        }
      },
      _hide: function _hide() {
        this.$menu.hide();
      },
      _show: function _show() {
        this.$menu.css("display", "block");
      },
      _getSuggestions: function getSuggestions() {
        return this.$menu.find(".tt-suggestion");
      },
      _getCursor: function getCursor() {
        return this.$menu.find(".tt-cursor").first();
      },
      _setCursor: function setCursor($el, silent) {
        $el.first().addClass("tt-cursor");
        !silent && this.trigger("cursorMoved");
      },
      _removeCursor: function removeCursor() {
        this._getCursor().removeClass("tt-cursor");
      },
      _moveCursor: function moveCursor(increment) {
        var $suggestions, $oldCursor, newCursorIndex, $newCursor;

        if (!this.isOpen) {
          return;
        }

        $oldCursor = this._getCursor();
        $suggestions = this._getSuggestions();

        this._removeCursor();

        newCursorIndex = $suggestions.index($oldCursor) + increment;
        newCursorIndex = (newCursorIndex + 1) % ($suggestions.length + 1) - 1;

        if (newCursorIndex === -1) {
          this.trigger("cursorRemoved");
          return;
        } else if (newCursorIndex < -1) {
          newCursorIndex = $suggestions.length - 1;
        }

        this._setCursor($newCursor = $suggestions.eq(newCursorIndex));

        this._ensureVisible($newCursor);
      },
      _ensureVisible: function ensureVisible($el) {
        var elTop, elBottom, menuScrollTop, menuHeight;
        elTop = $el.position().top;
        elBottom = elTop + $el.outerHeight(true);
        menuScrollTop = this.$menu.scrollTop();
        menuHeight = this.$menu.height() + parseInt(this.$menu.css("paddingTop"), 10) + parseInt(this.$menu.css("paddingBottom"), 10);

        if (elTop < 0) {
          this.$menu.scrollTop(menuScrollTop + elTop);
        } else if (menuHeight < elBottom) {
          this.$menu.scrollTop(menuScrollTop + (elBottom - menuHeight));
        }
      },
      close: function close() {
        if (this.isOpen) {
          this.isOpen = false;

          this._removeCursor();

          this._hide();

          this.trigger("closed");
        }
      },
      open: function open() {
        if (!this.isOpen) {
          this.isOpen = true;
          !this.isEmpty && this._show();
          this.trigger("opened");
        }
      },
      setLanguageDirection: function setLanguageDirection(dir) {
        this.$menu.css(dir === "ltr" ? css.ltr : css.rtl);
      },
      moveCursorUp: function moveCursorUp() {
        this._moveCursor(-1);
      },
      moveCursorDown: function moveCursorDown() {
        this._moveCursor(+1);
      },
      getDatumForSuggestion: function getDatumForSuggestion($el) {
        var datum = null;

        if ($el.length) {
          datum = {
            raw: Dataset.extractDatum($el),
            value: Dataset.extractValue($el),
            datasetName: Dataset.extractDatasetName($el)
          };
        }

        return datum;
      },
      getDatumForCursor: function getDatumForCursor() {
        return this.getDatumForSuggestion(this._getCursor().first());
      },
      getDatumForTopSuggestion: function getDatumForTopSuggestion() {
        return this.getDatumForSuggestion(this._getSuggestions().first());
      },
      update: function update(query) {
        _.each(this.datasets, updateDataset);

        function updateDataset(dataset) {
          dataset.update(query);
        }
      },
      empty: function empty() {
        _.each(this.datasets, clearDataset);

        this.isEmpty = true;

        function clearDataset(dataset) {
          dataset.clear();
        }
      },
      isVisible: function isVisible() {
        return this.isOpen && !this.isEmpty;
      },
      destroy: function destroy() {
        this.$menu.off(".tt");
        this.$menu = null;

        _.each(this.datasets, destroyDataset);

        function destroyDataset(dataset) {
          dataset.destroy();
        }
      }
    });

    return Dropdown;

    function initializeDataset(oDataset) {
      return new Dataset(oDataset);
    }
  }();

  var Typeahead = function () {
    "use strict";

    var attrsKey = "ttAttrs";

    function Typeahead(o) {
      var $menu, $input, $hint;
      o = o || {};

      if (!o.input) {
        $.error("missing input");
      }

      this.isActivated = false;
      this.autoselect = !!o.autoselect;
      this.minLength = _.isNumber(o.minLength) ? o.minLength : 1;
      this.$node = buildDom(o.input, o.withHint);
      $menu = this.$node.find(".tt-dropdown-menu");
      $input = this.$node.find(".tt-input");
      $hint = this.$node.find(".tt-hint");
      $input.on("blur.tt", function ($e) {
        var active, isActive, hasActive;
        active = document.activeElement;
        isActive = $menu.is(active);
        hasActive = $menu.has(active).length > 0;

        if (_.isMsie() && (isActive || hasActive)) {
          $e.preventDefault();
          $e.stopImmediatePropagation();

          _.defer(function () {
            $input.focus();
          });
        }
      });
      $menu.on("mousedown.tt", function ($e) {
        $e.preventDefault();
      });
      this.eventBus = o.eventBus || new EventBus({
        el: $input
      });
      this.dropdown = new Dropdown({
        menu: $menu,
        datasets: o.datasets
      }).onSync("suggestionClicked", this._onSuggestionClicked, this).onSync("cursorMoved", this._onCursorMoved, this).onSync("cursorRemoved", this._onCursorRemoved, this).onSync("opened", this._onOpened, this).onSync("closed", this._onClosed, this).onAsync("datasetRendered", this._onDatasetRendered, this);
      this.input = new Input({
        input: $input,
        hint: $hint
      }).onSync("focused", this._onFocused, this).onSync("blurred", this._onBlurred, this).onSync("enterKeyed", this._onEnterKeyed, this).onSync("tabKeyed", this._onTabKeyed, this).onSync("escKeyed", this._onEscKeyed, this).onSync("upKeyed", this._onUpKeyed, this).onSync("downKeyed", this._onDownKeyed, this).onSync("leftKeyed", this._onLeftKeyed, this).onSync("rightKeyed", this._onRightKeyed, this).onSync("queryChanged", this._onQueryChanged, this).onSync("whitespaceChanged", this._onWhitespaceChanged, this);

      this._setLanguageDirection();
    }

    _.mixin(Typeahead.prototype, {
      _onSuggestionClicked: function onSuggestionClicked(type, $el) {
        var datum;

        if (datum = this.dropdown.getDatumForSuggestion($el)) {
          this._select(datum);
        }
      },
      _onCursorMoved: function onCursorMoved() {
        var datum = this.dropdown.getDatumForCursor();
        this.input.setInputValue(datum.value, true);
        this.eventBus.trigger("cursorchanged", datum.raw, datum.datasetName);
      },
      _onCursorRemoved: function onCursorRemoved() {
        this.input.resetInputValue();

        this._updateHint();
      },
      _onDatasetRendered: function onDatasetRendered() {
        this._updateHint();
      },
      _onOpened: function onOpened() {
        this._updateHint();

        this.eventBus.trigger("opened");
      },
      _onClosed: function onClosed() {
        this.input.clearHint();
        this.eventBus.trigger("closed");
      },
      _onFocused: function onFocused() {
        this.isActivated = true;
        this.dropdown.open();
      },
      _onBlurred: function onBlurred() {
        this.isActivated = false;
        this.dropdown.empty();
        this.dropdown.close();
      },
      _onEnterKeyed: function onEnterKeyed(type, $e) {
        var cursorDatum, topSuggestionDatum;
        cursorDatum = this.dropdown.getDatumForCursor();
        topSuggestionDatum = this.dropdown.getDatumForTopSuggestion();

        if (cursorDatum) {
          this._select(cursorDatum);

          $e.preventDefault();
        } else if (this.autoselect && topSuggestionDatum) {
          this._select(topSuggestionDatum);

          $e.preventDefault();
        }
      },
      _onTabKeyed: function onTabKeyed(type, $e) {
        var datum;

        if (datum = this.dropdown.getDatumForCursor()) {
          this._select(datum);

          $e.preventDefault();
        } else {
          this._autocomplete(true);
        }
      },
      _onEscKeyed: function onEscKeyed() {
        this.dropdown.close();
        this.input.resetInputValue();
      },
      _onUpKeyed: function onUpKeyed() {
        var query = this.input.getQuery();
        this.dropdown.isEmpty && query.length >= this.minLength ? this.dropdown.update(query) : this.dropdown.moveCursorUp();
        this.dropdown.open();
      },
      _onDownKeyed: function onDownKeyed() {
        var query = this.input.getQuery();
        this.dropdown.isEmpty && query.length >= this.minLength ? this.dropdown.update(query) : this.dropdown.moveCursorDown();
        this.dropdown.open();
      },
      _onLeftKeyed: function onLeftKeyed() {
        this.dir === "rtl" && this._autocomplete();
      },
      _onRightKeyed: function onRightKeyed() {
        this.dir === "ltr" && this._autocomplete();
      },
      _onQueryChanged: function onQueryChanged(e, query) {
        this.input.clearHintIfInvalid();
        query.length >= this.minLength ? this.dropdown.update(query) : this.dropdown.empty();
        this.dropdown.open();

        this._setLanguageDirection();
      },
      _onWhitespaceChanged: function onWhitespaceChanged() {
        this._updateHint();

        this.dropdown.open();
      },
      _setLanguageDirection: function setLanguageDirection() {
        var dir;

        if (this.dir !== (dir = this.input.getLanguageDirection())) {
          this.dir = dir;
          this.$node.css("direction", dir);
          this.dropdown.setLanguageDirection(dir);
        }
      },
      _updateHint: function updateHint() {
        var datum, val, query, escapedQuery, frontMatchRegEx, match;
        datum = this.dropdown.getDatumForTopSuggestion();

        if (datum && this.dropdown.isVisible() && !this.input.hasOverflow()) {
          val = this.input.getInputValue();
          query = Input.normalizeQuery(val);
          escapedQuery = _.escapeRegExChars(query);
          frontMatchRegEx = new RegExp("^(?:" + escapedQuery + ")(.+$)", "i");
          match = frontMatchRegEx.exec(datum.value);
          match ? this.input.setHint(val + match[1]) : this.input.clearHint();
        } else {
          this.input.clearHint();
        }
      },
      _autocomplete: function autocomplete(laxCursor) {
        var hint, query, isCursorAtEnd, datum;
        hint = this.input.getHint();
        query = this.input.getQuery();
        isCursorAtEnd = laxCursor || this.input.isCursorAtEnd();

        if (hint && query !== hint && isCursorAtEnd) {
          datum = this.dropdown.getDatumForTopSuggestion();
          datum && this.input.setInputValue(datum.value);
          this.eventBus.trigger("autocompleted", datum.raw, datum.datasetName);
        }
      },
      _select: function select(datum) {
        this.input.setQuery(datum.value);
        this.input.setInputValue(datum.value, true);

        this._setLanguageDirection();

        this.eventBus.trigger("selected", datum.raw, datum.datasetName);
        this.dropdown.close();

        _.defer(_.bind(this.dropdown.empty, this.dropdown));
      },
      open: function open() {
        this.dropdown.open();
      },
      close: function close() {
        this.dropdown.close();
      },
      setVal: function setVal(val) {
        val = _.toStr(val);

        if (this.isActivated) {
          this.input.setInputValue(val);
        } else {
          this.input.setQuery(val);
          this.input.setInputValue(val, true);
        }

        this._setLanguageDirection();
      },
      getVal: function getVal() {
        return this.input.getQuery();
      },
      destroy: function destroy() {
        this.input.destroy();
        this.dropdown.destroy();
        destroyDomStructure(this.$node);
        this.$node = null;
      }
    });

    return Typeahead;

    function buildDom(input, withHint) {
      var $input, $wrapper, $dropdown, $hint;
      $input = $(input);
      $wrapper = $(html.wrapper).css(css.wrapper);
      $dropdown = $(html.dropdown).css(css.dropdown);
      $hint = $input.clone().css(css.hint).css(getBackgroundStyles($input));
      $hint.val("").removeData().addClass("tt-hint").removeAttr("id name placeholder required").prop("readonly", true).attr({
        autocomplete: "off",
        spellcheck: "false",
        tabindex: -1
      });
      $input.data(attrsKey, {
        dir: $input.attr("dir"),
        autocomplete: $input.attr("autocomplete"),
        spellcheck: $input.attr("spellcheck"),
        style: $input.attr("style")
      });
      $input.addClass("tt-input").attr({
        autocomplete: "off",
        spellcheck: false
      }).css(withHint ? css.input : css.inputWithNoHint);

      try {
        !$input.attr("dir") && $input.attr("dir", "auto");
      } catch (e) {}

      return $input.wrap($wrapper).parent().prepend(withHint ? $hint : null).append($dropdown);
    }

    function getBackgroundStyles($el) {
      return {
        backgroundAttachment: $el.css("background-attachment"),
        backgroundClip: $el.css("background-clip"),
        backgroundColor: $el.css("background-color"),
        backgroundImage: $el.css("background-image"),
        backgroundOrigin: $el.css("background-origin"),
        backgroundPosition: $el.css("background-position"),
        backgroundRepeat: $el.css("background-repeat"),
        backgroundSize: $el.css("background-size")
      };
    }

    function destroyDomStructure($node) {
      var $input = $node.find(".tt-input");

      _.each($input.data(attrsKey), function (val, key) {
        _.isUndefined(val) ? $input.removeAttr(key) : $input.attr(key, val);
      });

      $input.detach().removeData(attrsKey).removeClass("tt-input").insertAfter($node);
      $node.remove();
    }
  }();

  (function () {
    "use strict";

    var old, typeaheadKey, methods;
    old = $.fn.typeahead;
    typeaheadKey = "ttTypeahead";
    methods = {
      initialize: function initialize(o, datasets) {
        datasets = _.isArray(datasets) ? datasets : [].slice.call(arguments, 1);
        o = o || {};
        return this.each(attach);

        function attach() {
          var $input = $(this),
              eventBus,
              typeahead;

          _.each(datasets, function (d) {
            d.highlight = !!o.highlight;
          });

          typeahead = new Typeahead({
            input: $input,
            eventBus: eventBus = new EventBus({
              el: $input
            }),
            withHint: _.isUndefined(o.hint) ? true : !!o.hint,
            minLength: o.minLength,
            autoselect: o.autoselect,
            datasets: datasets
          });
          $input.data(typeaheadKey, typeahead);
        }
      },
      open: function open() {
        return this.each(openTypeahead);

        function openTypeahead() {
          var $input = $(this),
              typeahead;

          if (typeahead = $input.data(typeaheadKey)) {
            typeahead.open();
          }
        }
      },
      close: function close() {
        return this.each(closeTypeahead);

        function closeTypeahead() {
          var $input = $(this),
              typeahead;

          if (typeahead = $input.data(typeaheadKey)) {
            typeahead.close();
          }
        }
      },
      val: function val(newVal) {
        return !arguments.length ? getVal(this.first()) : this.each(setVal);

        function setVal() {
          var $input = $(this),
              typeahead;

          if (typeahead = $input.data(typeaheadKey)) {
            typeahead.setVal(newVal);
          }
        }

        function getVal($input) {
          var typeahead, query;

          if (typeahead = $input.data(typeaheadKey)) {
            query = typeahead.getVal();
          }

          return query;
        }
      },
      destroy: function destroy() {
        return this.each(unattach);

        function unattach() {
          var $input = $(this),
              typeahead;

          if (typeahead = $input.data(typeaheadKey)) {
            typeahead.destroy();
            $input.removeData(typeaheadKey);
          }
        }
      }
    };

    $.fn.typeahead = function (method) {
      var tts;

      if (methods[method] && method !== "initialize") {
        tts = this.filter(function () {
          return !!$(this).data(typeaheadKey);
        });
        return methods[method].apply(tts, [].slice.call(arguments, 1));
      } else {
        return methods.initialize.apply(this, arguments);
      }
    };

    $.fn.typeahead.noConflict = function noConflict() {
      $.fn.typeahead = old;
      return this;
    };
  })();
})(window.jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../node_modules/timers-browserify/main.js */ "./node_modules/timers-browserify/main.js").setImmediate))

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/taylor/Documents/Code/Repositories/laravel-website-next/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/taylor/Documents/Code/Repositories/laravel-website-next/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });