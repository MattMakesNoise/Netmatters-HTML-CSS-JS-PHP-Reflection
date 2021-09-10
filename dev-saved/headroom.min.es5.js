"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
 * headroom.js v0.12.0 - Give your page some headroom. Hide your header until you need it
 * Copyright (c) 2020 Nick Williams - http://wicky.nillia.ms/headroom.js
 * License: MIT
 */
!function (t, n) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = n() : "function" == typeof define && define.amd ? define(n) : (t = t || self).Headroom = n();
}(void 0, function () {
  "use strict";

  function t() {
    return "undefined" != typeof window;
  }

  function d(t) {
    return function (t) {
      return t && t.document && function (t) {
        return 9 === t.nodeType;
      }(t.document);
    }(t) ? function (t) {
      var n = t.document,
          o = n.body,
          s = n.documentElement;
      return {
        scrollHeight: function scrollHeight() {
          return Math.max(o.scrollHeight, s.scrollHeight, o.offsetHeight, s.offsetHeight, o.clientHeight, s.clientHeight);
        },
        height: function height() {
          return t.innerHeight || s.clientHeight || o.clientHeight;
        },
        scrollY: function scrollY() {
          return void 0 !== t.pageYOffset ? t.pageYOffset : (s || o.parentNode || o).scrollTop;
        }
      };
    }(t) : function (t) {
      return {
        scrollHeight: function scrollHeight() {
          return Math.max(t.scrollHeight, t.offsetHeight, t.clientHeight);
        },
        height: function height() {
          return Math.max(t.offsetHeight, t.clientHeight);
        },
        scrollY: function scrollY() {
          return t.scrollTop;
        }
      };
    }(t);
  }

  function n(t, s, e) {
    var n,
        o = function () {
      var n = !1;

      try {
        var t = {
          get passive() {
            n = !0;
          }

        };
        window.addEventListener("test", t, t), window.removeEventListener("test", t, t);
      } catch (t) {
        n = !1;
      }

      return n;
    }(),
        i = !1,
        r = d(t),
        l = r.scrollY(),
        a = {};

    function c() {
      var t = Math.round(r.scrollY()),
          n = r.height(),
          o = r.scrollHeight();
      a.scrollY = t, a.lastScrollY = l, a.direction = l < t ? "down" : "up", a.distance = Math.abs(t - l), a.isOutOfBounds = t < 0 || o < t + n, a.top = t <= s.offset[a.direction], a.bottom = o <= t + n, a.toleranceExceeded = a.distance > s.tolerance[a.direction], e(a), l = t, i = !1;
    }

    function h() {
      i || (i = !0, n = requestAnimationFrame(c));
    }

    var u = !!o && {
      passive: !0,
      capture: !1
    };
    return t.addEventListener("scroll", h, u), c(), {
      destroy: function destroy() {
        cancelAnimationFrame(n), t.removeEventListener("scroll", h, u);
      }
    };
  }

  function o(t) {
    return t === Object(t) ? t : {
      down: t,
      up: t
    };
  }

  function s(t, n) {
    n = n || {}, Object.assign(this, s.options, n), this.classes = Object.assign({}, s.options.classes, n.classes), this.elem = t, this.tolerance = o(this.tolerance), this.offset = o(this.offset), this.initialised = !1, this.frozen = !1;
  }

  return s.prototype = {
    constructor: s,
    init: function init() {
      return s.cutsTheMustard && !this.initialised && (this.addClass("initial"), this.initialised = !0, setTimeout(function (t) {
        t.scrollTracker = n(t.scroller, {
          offset: t.offset,
          tolerance: t.tolerance
        }, t.update.bind(t));
      }, 100, this)), this;
    },
    destroy: function destroy() {
      this.initialised = !1, Object.keys(this.classes).forEach(this.removeClass, this), this.scrollTracker.destroy();
    },
    unpin: function unpin() {
      !this.hasClass("pinned") && this.hasClass("unpinned") || (this.addClass("unpinned"), this.removeClass("pinned"), this.onUnpin && this.onUnpin.call(this));
    },
    pin: function pin() {
      this.hasClass("unpinned") && (this.addClass("pinned"), this.removeClass("unpinned"), this.onPin && this.onPin.call(this));
    },
    freeze: function freeze() {
      this.frozen = !0, this.addClass("frozen");
    },
    unfreeze: function unfreeze() {
      this.frozen = !1, this.removeClass("frozen");
    },
    top: function top() {
      this.hasClass("top") || (this.addClass("top"), this.removeClass("notTop"), this.onTop && this.onTop.call(this));
    },
    notTop: function notTop() {
      this.hasClass("notTop") || (this.addClass("notTop"), this.removeClass("top"), this.onNotTop && this.onNotTop.call(this));
    },
    bottom: function bottom() {
      this.hasClass("bottom") || (this.addClass("bottom"), this.removeClass("notBottom"), this.onBottom && this.onBottom.call(this));
    },
    notBottom: function notBottom() {
      this.hasClass("notBottom") || (this.addClass("notBottom"), this.removeClass("bottom"), this.onNotBottom && this.onNotBottom.call(this));
    },
    shouldUnpin: function shouldUnpin(t) {
      return "down" === t.direction && !t.top && t.toleranceExceeded;
    },
    shouldPin: function shouldPin(t) {
      return "up" === t.direction && t.toleranceExceeded || t.top;
    },
    addClass: function addClass(t) {
      this.elem.classList.add.apply(this.elem.classList, this.classes[t].split(" "));
    },
    removeClass: function removeClass(t) {
      this.elem.classList.remove.apply(this.elem.classList, this.classes[t].split(" "));
    },
    hasClass: function hasClass(t) {
      return this.classes[t].split(" ").every(function (t) {
        return this.classList.contains(t);
      }, this.elem);
    },
    update: function update(t) {
      t.isOutOfBounds || !0 !== this.frozen && (t.top ? this.top() : this.notTop(), t.bottom ? this.bottom() : this.notBottom(), this.shouldUnpin(t) ? this.unpin() : this.shouldPin(t) && this.pin());
    }
  }, s.options = {
    tolerance: {
      up: 0,
      down: 0
    },
    offset: 0,
    scroller: t() ? window : null,
    classes: {
      frozen: "headroom--frozen",
      pinned: "headroom--pinned",
      unpinned: "headroom--unpinned",
      top: "headroom--top",
      notTop: "headroom--not-top",
      bottom: "headroom--bottom",
      notBottom: "headroom--not-bottom",
      initial: "headroom"
    }
  }, s.cutsTheMustard = !!(t() && function () {}.bind && "classList" in document.documentElement && Object.assign && Object.keys && requestAnimationFrame), s;
});