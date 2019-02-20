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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(/*! ../js/cart */ "./resources/js/cart.js");

__webpack_require__(/*! ../js/number_format */ "./resources/js/number_format.js");

/***/ }),

/***/ "./resources/js/cart.js":
/*!******************************!*\
  !*** ./resources/js/cart.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
    docs
    1. initiate cart js:
        var cart = window.cart; 
    2. define the callback
        define your success & error callback by using cart.defineOnSuccess( yourFunctions(_payload){} ) and cart.defineOnError( yourFunctions(_error){} ). example :
    3. calling cart.add( PRODUCT_DETAIL_DATA, URL, TOKEN )
        -> PRODUCT_DETAIL_DATA : on object json format
        -> URL : url to whom data submitted with method post to be handled by backend process. format : string
        -> TOKEN: csrf token. format : string.
*/
window.cart = new function () {
  this.on_success = null, this.on_error = null, // interface ajax actions
  this.defineOnSuccess = function (syntax) {
    on_success = syntax;
  }, this.defineOnError = function (syntax) {
    on_error = syntax;
  }, this.add = function (_dt, _url, _token) {
    $.ajax({
      url: _url,
      type: "POST",
      data: _dt,
      timeout: 10000,
      accept: 'application/json',
      contentType: "application/json",
      processData: false,
      dataType: 'json',
      success: on_success,
      error: on_error,
      headers: {
        "X-CSRF-TOKEN": _token
      }
    });
  };

  this.remove = function (_id, _url, _token) {
    $.ajax({
      url: _url,
      type: "DELETE",
      data: _id,
      timeout: 10000,
      accept: 'application/json',
      contentType: "application/json",
      processData: false,
      dataType: 'json',
      success: on_success,
      error: on_error,
      headers: {
        "X-CSRF-TOKEN": _token
      }
    });
  };
}();

/***/ }),

/***/ "./resources/js/number_format.js":
/*!***************************************!*\
  !*** ./resources/js/number_format.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.numberFormat = new function () {
  this.set = function (number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');

    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === 'undefined' ? '.' : thousands_sep,
        dec = typeof dec_point === 'undefined' ? ',' : dec_point,
        s = '',
        toFixedFix = function toFixedFix(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k).toFixed(prec);
    }; // Fix for IE parseFloat(0.55).toFixed(0) = 0;


    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');

    if (s[0].length > 3) {
      s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }

    if ((s[1] || '').length < prec) {
      s[1] = s[1] || '';
      s[1] += new Array(prec - s[1].length + 1).join('0');
    }

    return s.join(dec);
  };
}();

/***/ }),

/***/ "./resources/sass/custom.scss":
/*!************************************!*\
  !*** ./resources/sass/custom.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/custom.scss ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! E:\Laravel\POS-SHOWCASE\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! E:\Laravel\POS-SHOWCASE\resources\sass\custom.scss */"./resources/sass/custom.scss");


/***/ })

/******/ });