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
/******/ 	return __webpack_require__(__webpack_require__.s = 15);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/dashboard-2.init.js":
/*!************************************************!*\
  !*** ./resources/js/pages/dashboard-2.init.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/*\r\nTemplate Name: Ubold - Responsive Bootstrap 4 Admin Dashboard\r\nAuthor: CoderThemes\r\nWebsite: https://coderthemes.com/\r\nContact: support@coderthemes.com\r\nFile: Dashboard 2 init\r\n*/\n$(document).ready(function () {\n  var DrawSparkline = function DrawSparkline() {\n    // Line Chart\n    var colors = ['#00acc1', '#f1556c'];\n    var dataColors = $(\"#lifetime-sales\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#lifetime-sales').sparkline([0, 23, 43, 35, 44, 45, 56, 37, 40], {\n      type: 'line',\n      width: \"100%\",\n      height: '220',\n      chartRangeMax: 50,\n      lineColor: colors[0],\n      fillColor: hexToRGB(colors[0], 0.3),\n      highlightLineColor: 'rgba(0,0,0,.1)',\n      highlightSpotColor: 'rgba(0,0,0,.2)',\n      maxSpotColor: false,\n      minSpotColor: false,\n      spotColor: false,\n      lineWidth: 1\n    });\n    $('#lifetime-sales').sparkline([25, 23, 26, 24, 25, 32, 30, 24, 19], {\n      type: 'line',\n      width: \"100%\",\n      height: '220',\n      chartRangeMax: 40,\n      lineColor: colors[1],\n      fillColor: hexToRGB(colors[1], 0.3),\n      composite: true,\n      highlightLineColor: 'rgba(0,0,0,.1)',\n      highlightSpotColor: 'rgba(0,0,0,.2)',\n      maxSpotColor: false,\n      minSpotColor: false,\n      spotColor: false,\n      lineWidth: 1\n    }); // Bar Chart\n\n    var colors = ['#00acc1'];\n    var dataColors = $(\"#income-amounts\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#income-amounts').sparkline([3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {\n      type: 'bar',\n      height: '220',\n      barWidth: '10',\n      barSpacing: '3',\n      barColor: colors\n    }); // Pie Chart\n\n    var colors = ['#00acc1', '#4b88e4', '#e3eaef', '#fd7e14'];\n    var dataColors = $(\"#total-users\").data('colors');\n\n    if (dataColors) {\n      colors = dataColors.split(\",\");\n    }\n\n    $('#total-users').sparkline([20, 40, 30, 10], {\n      type: 'pie',\n      width: '220',\n      height: '220',\n      sliceColors: colors\n    });\n  };\n\n  DrawSparkline();\n  var resizeChart;\n  $(window).resize(function (e) {\n    clearTimeout(resizeChart);\n    resizeChart = setTimeout(function () {\n      DrawSparkline();\n    }, 300);\n  });\n}); // Vector map\n//various examples\n\nvar colors = ['#6658dd'];\nvar dataColors = $(\"#world-map-markers\").data('colors');\n\nif (dataColors) {\n  colors = dataColors.split(\",\");\n}\n\n$('#world-map-markers').vectorMap({\n  map: 'world_mill_en',\n  normalizeFunction: 'polynomial',\n  hoverOpacity: 0.7,\n  hoverColor: false,\n  regionStyle: {\n    initial: {\n      fill: '#ced4da'\n    }\n  },\n  markerStyle: {\n    initial: {\n      r: 9,\n      'fill': colors[0],\n      'fill-opacity': 0.9,\n      'stroke': '#fff',\n      'stroke-width': 7,\n      'stroke-opacity': 0.4\n    },\n    hover: {\n      'stroke': '#fff',\n      'fill-opacity': 1,\n      'stroke-width': 1.5\n    }\n  },\n  backgroundColor: 'transparent',\n  markers: [{\n    latLng: [41.90, 12.45],\n    name: 'Vatican City'\n  }, {\n    latLng: [43.73, 7.41],\n    name: 'Monaco'\n  }, {\n    latLng: [-0.52, 166.93],\n    name: 'Nauru'\n  }, {\n    latLng: [-8.51, 179.21],\n    name: 'Tuvalu'\n  }, {\n    latLng: [43.93, 12.46],\n    name: 'San Marino'\n  }, {\n    latLng: [47.14, 9.52],\n    name: 'Liechtenstein'\n  }, {\n    latLng: [7.11, 171.06],\n    name: 'Marshall Islands'\n  }, {\n    latLng: [17.3, -62.73],\n    name: 'Saint Kitts and Nevis'\n  }, {\n    latLng: [3.2, 73.22],\n    name: 'Maldives'\n  }, {\n    latLng: [35.88, 14.5],\n    name: 'Malta'\n  }, {\n    latLng: [12.05, -61.75],\n    name: 'Grenada'\n  }, {\n    latLng: [13.16, -61.23],\n    name: 'Saint Vincent and the Grenadines'\n  }, {\n    latLng: [13.16, -59.55],\n    name: 'Barbados'\n  }, {\n    latLng: [17.11, -61.85],\n    name: 'Antigua and Barbuda'\n  }, {\n    latLng: [-4.61, 55.45],\n    name: 'Seychelles'\n  }, {\n    latLng: [7.35, 134.46],\n    name: 'Palau'\n  }, {\n    latLng: [42.5, 1.51],\n    name: 'Andorra'\n  }, {\n    latLng: [14.01, -60.98],\n    name: 'Saint Lucia'\n  }, {\n    latLng: [6.91, 158.18],\n    name: 'Federated States of Micronesia'\n  }, {\n    latLng: [1.3, 103.8],\n    name: 'Singapore'\n  }, {\n    latLng: [0.33, 6.73],\n    name: 'SÃ£o TomÃ© and PrÃ­ncipe'\n  }]\n});\n/* utility function */\n\nfunction hexToRGB(hex, alpha) {\n  var r = parseInt(hex.slice(1, 3), 16),\n      g = parseInt(hex.slice(3, 5), 16),\n      b = parseInt(hex.slice(5, 7), 16);\n\n  if (alpha) {\n    return \"rgba(\" + r + \", \" + g + \", \" + b + \", \" + alpha + \")\";\n  } else {\n    return \"rgb(\" + r + \", \" + g + \", \" + b + \")\";\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkLTIuaW5pdC5qcz9jOTY0Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwiRHJhd1NwYXJrbGluZSIsImNvbG9ycyIsImRhdGFDb2xvcnMiLCJkYXRhIiwic3BsaXQiLCJzcGFya2xpbmUiLCJ0eXBlIiwid2lkdGgiLCJoZWlnaHQiLCJjaGFydFJhbmdlTWF4IiwibGluZUNvbG9yIiwiZmlsbENvbG9yIiwiaGV4VG9SR0IiLCJoaWdobGlnaHRMaW5lQ29sb3IiLCJoaWdobGlnaHRTcG90Q29sb3IiLCJtYXhTcG90Q29sb3IiLCJtaW5TcG90Q29sb3IiLCJzcG90Q29sb3IiLCJsaW5lV2lkdGgiLCJjb21wb3NpdGUiLCJiYXJXaWR0aCIsImJhclNwYWNpbmciLCJiYXJDb2xvciIsInNsaWNlQ29sb3JzIiwicmVzaXplQ2hhcnQiLCJ3aW5kb3ciLCJyZXNpemUiLCJlIiwiY2xlYXJUaW1lb3V0Iiwic2V0VGltZW91dCIsInZlY3Rvck1hcCIsIm1hcCIsIm5vcm1hbGl6ZUZ1bmN0aW9uIiwiaG92ZXJPcGFjaXR5IiwiaG92ZXJDb2xvciIsInJlZ2lvblN0eWxlIiwiaW5pdGlhbCIsImZpbGwiLCJtYXJrZXJTdHlsZSIsInIiLCJob3ZlciIsImJhY2tncm91bmRDb2xvciIsIm1hcmtlcnMiLCJsYXRMbmciLCJuYW1lIiwiaGV4IiwiYWxwaGEiLCJwYXJzZUludCIsInNsaWNlIiwiZyIsImIiXSwibWFwcGluZ3MiOiJBQUFBOzs7Ozs7O0FBUUFBLENBQUMsQ0FBRUMsUUFBRixDQUFELENBQWNDLEtBQWQsQ0FBb0IsWUFBVztBQUUzQixNQUFJQyxhQUFhLEdBQUcsU0FBaEJBLGFBQWdCLEdBQVc7QUFDM0I7QUFDQSxRQUFJQyxNQUFNLEdBQUcsQ0FBQyxTQUFELEVBQVksU0FBWixDQUFiO0FBQ0EsUUFBSUMsVUFBVSxHQUFHTCxDQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQk0sSUFBckIsQ0FBMEIsUUFBMUIsQ0FBakI7O0FBQ0EsUUFBSUQsVUFBSixFQUFnQjtBQUNaRCxZQUFNLEdBQUdDLFVBQVUsQ0FBQ0UsS0FBWCxDQUFpQixHQUFqQixDQUFUO0FBQ0g7O0FBQ0RQLEtBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCUSxTQUFyQixDQUErQixDQUFDLENBQUQsRUFBSSxFQUFKLEVBQVEsRUFBUixFQUFZLEVBQVosRUFBZ0IsRUFBaEIsRUFBb0IsRUFBcEIsRUFBd0IsRUFBeEIsRUFBNEIsRUFBNUIsRUFBZ0MsRUFBaEMsQ0FBL0IsRUFBb0U7QUFDaEVDLFVBQUksRUFBRSxNQUQwRDtBQUVoRUMsV0FBSyxFQUFFLE1BRnlEO0FBR2hFQyxZQUFNLEVBQUUsS0FId0Q7QUFJaEVDLG1CQUFhLEVBQUUsRUFKaUQ7QUFLaEVDLGVBQVMsRUFBRVQsTUFBTSxDQUFDLENBQUQsQ0FMK0M7QUFNaEVVLGVBQVMsRUFBRUMsUUFBUSxDQUFDWCxNQUFNLENBQUMsQ0FBRCxDQUFQLEVBQVksR0FBWixDQU42QztBQU9oRVksd0JBQWtCLEVBQUUsZ0JBUDRDO0FBUWhFQyx3QkFBa0IsRUFBRSxnQkFSNEM7QUFTaEVDLGtCQUFZLEVBQUUsS0FUa0Q7QUFVaEVDLGtCQUFZLEVBQUUsS0FWa0Q7QUFXaEVDLGVBQVMsRUFBRSxLQVhxRDtBQVloRUMsZUFBUyxFQUFFO0FBWnFELEtBQXBFO0FBZUFyQixLQUFDLENBQUMsaUJBQUQsQ0FBRCxDQUFxQlEsU0FBckIsQ0FBK0IsQ0FBQyxFQUFELEVBQUssRUFBTCxFQUFTLEVBQVQsRUFBYSxFQUFiLEVBQWlCLEVBQWpCLEVBQXFCLEVBQXJCLEVBQXlCLEVBQXpCLEVBQTZCLEVBQTdCLEVBQWlDLEVBQWpDLENBQS9CLEVBQXFFO0FBQ2pFQyxVQUFJLEVBQUUsTUFEMkQ7QUFFakVDLFdBQUssRUFBRSxNQUYwRDtBQUdqRUMsWUFBTSxFQUFFLEtBSHlEO0FBSWpFQyxtQkFBYSxFQUFFLEVBSmtEO0FBS2pFQyxlQUFTLEVBQUVULE1BQU0sQ0FBQyxDQUFELENBTGdEO0FBTWpFVSxlQUFTLEVBQUVDLFFBQVEsQ0FBQ1gsTUFBTSxDQUFDLENBQUQsQ0FBUCxFQUFZLEdBQVosQ0FOOEM7QUFPakVrQixlQUFTLEVBQUUsSUFQc0Q7QUFRakVOLHdCQUFrQixFQUFFLGdCQVI2QztBQVNqRUMsd0JBQWtCLEVBQUUsZ0JBVDZDO0FBVWpFQyxrQkFBWSxFQUFFLEtBVm1EO0FBV2pFQyxrQkFBWSxFQUFFLEtBWG1EO0FBWWpFQyxlQUFTLEVBQUUsS0Fac0Q7QUFhakVDLGVBQVMsRUFBRTtBQWJzRCxLQUFyRSxFQXRCMkIsQ0FzQzNCOztBQUNBLFFBQUlqQixNQUFNLEdBQUcsQ0FBQyxTQUFELENBQWI7QUFDQSxRQUFJQyxVQUFVLEdBQUdMLENBQUMsQ0FBQyxpQkFBRCxDQUFELENBQXFCTSxJQUFyQixDQUEwQixRQUExQixDQUFqQjs7QUFDQSxRQUFJRCxVQUFKLEVBQWdCO0FBQ1pELFlBQU0sR0FBR0MsVUFBVSxDQUFDRSxLQUFYLENBQWlCLEdBQWpCLENBQVQ7QUFDSDs7QUFDRFAsS0FBQyxDQUFDLGlCQUFELENBQUQsQ0FBcUJRLFNBQXJCLENBQStCLENBQUMsQ0FBRCxFQUFJLENBQUosRUFBTyxDQUFQLEVBQVUsQ0FBVixFQUFhLENBQWIsRUFBZ0IsQ0FBaEIsRUFBbUIsQ0FBbkIsRUFBc0IsRUFBdEIsRUFBMEIsRUFBMUIsRUFBOEIsQ0FBOUIsRUFBaUMsQ0FBakMsRUFBb0MsQ0FBcEMsRUFBdUMsRUFBdkMsRUFBMkMsRUFBM0MsRUFBK0MsRUFBL0MsRUFBbUQsRUFBbkQsQ0FBL0IsRUFBdUY7QUFDbkZDLFVBQUksRUFBRSxLQUQ2RTtBQUVuRkUsWUFBTSxFQUFFLEtBRjJFO0FBR25GWSxjQUFRLEVBQUUsSUFIeUU7QUFJbkZDLGdCQUFVLEVBQUUsR0FKdUU7QUFLbkZDLGNBQVEsRUFBRXJCO0FBTHlFLEtBQXZGLEVBNUMyQixDQW9EM0I7O0FBQ0EsUUFBSUEsTUFBTSxHQUFHLENBQUMsU0FBRCxFQUFXLFNBQVgsRUFBcUIsU0FBckIsRUFBK0IsU0FBL0IsQ0FBYjtBQUNBLFFBQUlDLFVBQVUsR0FBR0wsQ0FBQyxDQUFDLGNBQUQsQ0FBRCxDQUFrQk0sSUFBbEIsQ0FBdUIsUUFBdkIsQ0FBakI7O0FBQ0EsUUFBSUQsVUFBSixFQUFnQjtBQUNaRCxZQUFNLEdBQUdDLFVBQVUsQ0FBQ0UsS0FBWCxDQUFpQixHQUFqQixDQUFUO0FBQ0g7O0FBQ0RQLEtBQUMsQ0FBQyxjQUFELENBQUQsQ0FBa0JRLFNBQWxCLENBQTRCLENBQUMsRUFBRCxFQUFLLEVBQUwsRUFBUyxFQUFULEVBQWEsRUFBYixDQUE1QixFQUE4QztBQUMxQ0MsVUFBSSxFQUFFLEtBRG9DO0FBRTFDQyxXQUFLLEVBQUUsS0FGbUM7QUFHMUNDLFlBQU0sRUFBRSxLQUhrQztBQUkxQ2UsaUJBQVcsRUFBRXRCO0FBSjZCLEtBQTlDO0FBTUgsR0FoRUQ7O0FBa0VBRCxlQUFhO0FBRWIsTUFBSXdCLFdBQUo7QUFFQTNCLEdBQUMsQ0FBQzRCLE1BQUQsQ0FBRCxDQUFVQyxNQUFWLENBQWlCLFVBQVNDLENBQVQsRUFBWTtBQUN6QkMsZ0JBQVksQ0FBQ0osV0FBRCxDQUFaO0FBQ0FBLGVBQVcsR0FBR0ssVUFBVSxDQUFDLFlBQVc7QUFDaEM3QixtQkFBYTtBQUNoQixLQUZ1QixFQUVyQixHQUZxQixDQUF4QjtBQUdILEdBTEQ7QUFNSCxDQTlFRCxFLENBZ0ZBO0FBQ0E7O0FBQ0EsSUFBSUMsTUFBTSxHQUFHLENBQUMsU0FBRCxDQUFiO0FBQ0EsSUFBSUMsVUFBVSxHQUFHTCxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3Qk0sSUFBeEIsQ0FBNkIsUUFBN0IsQ0FBakI7O0FBQ0EsSUFBSUQsVUFBSixFQUFnQjtBQUNaRCxRQUFNLEdBQUdDLFVBQVUsQ0FBQ0UsS0FBWCxDQUFpQixHQUFqQixDQUFUO0FBQ0g7O0FBQ0RQLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCaUMsU0FBeEIsQ0FBa0M7QUFDOUJDLEtBQUcsRUFBRyxlQUR3QjtBQUU5QkMsbUJBQWlCLEVBQUcsWUFGVTtBQUc5QkMsY0FBWSxFQUFHLEdBSGU7QUFJOUJDLFlBQVUsRUFBRyxLQUppQjtBQUs5QkMsYUFBVyxFQUFHO0FBQ1ZDLFdBQU8sRUFBRztBQUNOQyxVQUFJLEVBQUc7QUFERDtBQURBLEdBTGdCO0FBVTdCQyxhQUFXLEVBQUU7QUFDVkYsV0FBTyxFQUFFO0FBQ0xHLE9BQUMsRUFBRSxDQURFO0FBRUwsY0FBUXRDLE1BQU0sQ0FBQyxDQUFELENBRlQ7QUFHTCxzQkFBZ0IsR0FIWDtBQUlMLGdCQUFVLE1BSkw7QUFLTCxzQkFBaUIsQ0FMWjtBQU1MLHdCQUFrQjtBQU5iLEtBREM7QUFVVnVDLFNBQUssRUFBRTtBQUNILGdCQUFVLE1BRFA7QUFFSCxzQkFBZ0IsQ0FGYjtBQUdILHNCQUFnQjtBQUhiO0FBVkcsR0FWZ0I7QUEwQjlCQyxpQkFBZSxFQUFHLGFBMUJZO0FBMkI5QkMsU0FBTyxFQUFHLENBQUM7QUFDUEMsVUFBTSxFQUFHLENBQUMsS0FBRCxFQUFRLEtBQVIsQ0FERjtBQUVQQyxRQUFJLEVBQUc7QUFGQSxHQUFELEVBR1A7QUFDQ0QsVUFBTSxFQUFHLENBQUMsS0FBRCxFQUFRLElBQVIsQ0FEVjtBQUVDQyxRQUFJLEVBQUc7QUFGUixHQUhPLEVBTVA7QUFDQ0QsVUFBTSxFQUFHLENBQUMsQ0FBQyxJQUFGLEVBQVEsTUFBUixDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBTk8sRUFTUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxDQUFDLElBQUYsRUFBUSxNQUFSLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0FUTyxFQVlQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLEtBQUQsRUFBUSxLQUFSLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0FaTyxFQWVQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLEtBQUQsRUFBUSxJQUFSLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0FmTyxFQWtCUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxJQUFELEVBQU8sTUFBUCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBbEJPLEVBcUJQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLElBQUQsRUFBTyxDQUFDLEtBQVIsQ0FEVjtBQUVDQyxRQUFJLEVBQUc7QUFGUixHQXJCTyxFQXdCUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxHQUFELEVBQU0sS0FBTixDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBeEJPLEVBMkJQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLEtBQUQsRUFBUSxJQUFSLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0EzQk8sRUE4QlA7QUFDQ0QsVUFBTSxFQUFHLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBOUJPLEVBaUNQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLEtBQUQsRUFBUSxDQUFDLEtBQVQsQ0FEVjtBQUVDQyxRQUFJLEVBQUc7QUFGUixHQWpDTyxFQW9DUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxLQUFELEVBQVEsQ0FBQyxLQUFULENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0FwQ08sRUF1Q1A7QUFDQ0QsVUFBTSxFQUFHLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBdkNPLEVBMENQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLENBQUMsSUFBRixFQUFRLEtBQVIsQ0FEVjtBQUVDQyxRQUFJLEVBQUc7QUFGUixHQTFDTyxFQTZDUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxJQUFELEVBQU8sTUFBUCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBN0NPLEVBZ0RQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLElBQUQsRUFBTyxJQUFQLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0FoRE8sRUFtRFA7QUFDQ0QsVUFBTSxFQUFHLENBQUMsS0FBRCxFQUFRLENBQUMsS0FBVCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBbkRPLEVBc0RQO0FBQ0NELFVBQU0sRUFBRyxDQUFDLElBQUQsRUFBTyxNQUFQLENBRFY7QUFFQ0MsUUFBSSxFQUFHO0FBRlIsR0F0RE8sRUF5RFA7QUFDQ0QsVUFBTSxFQUFHLENBQUMsR0FBRCxFQUFNLEtBQU4sQ0FEVjtBQUVDQyxRQUFJLEVBQUc7QUFGUixHQXpETyxFQTREUDtBQUNDRCxVQUFNLEVBQUcsQ0FBQyxJQUFELEVBQU8sSUFBUCxDQURWO0FBRUNDLFFBQUksRUFBRztBQUZSLEdBNURPO0FBM0JvQixDQUFsQztBQTZGQTs7QUFFQSxTQUFTaEMsUUFBVCxDQUFrQmlDLEdBQWxCLEVBQXVCQyxLQUF2QixFQUE4QjtBQUMxQixNQUFJUCxDQUFDLEdBQUdRLFFBQVEsQ0FBQ0YsR0FBRyxDQUFDRyxLQUFKLENBQVUsQ0FBVixFQUFhLENBQWIsQ0FBRCxFQUFrQixFQUFsQixDQUFoQjtBQUFBLE1BQ0lDLENBQUMsR0FBR0YsUUFBUSxDQUFDRixHQUFHLENBQUNHLEtBQUosQ0FBVSxDQUFWLEVBQWEsQ0FBYixDQUFELEVBQWtCLEVBQWxCLENBRGhCO0FBQUEsTUFFSUUsQ0FBQyxHQUFHSCxRQUFRLENBQUNGLEdBQUcsQ0FBQ0csS0FBSixDQUFVLENBQVYsRUFBYSxDQUFiLENBQUQsRUFBa0IsRUFBbEIsQ0FGaEI7O0FBSUEsTUFBSUYsS0FBSixFQUFXO0FBQ1AsV0FBTyxVQUFVUCxDQUFWLEdBQWMsSUFBZCxHQUFxQlUsQ0FBckIsR0FBeUIsSUFBekIsR0FBZ0NDLENBQWhDLEdBQW9DLElBQXBDLEdBQTJDSixLQUEzQyxHQUFtRCxHQUExRDtBQUNILEdBRkQsTUFFTztBQUNILFdBQU8sU0FBU1AsQ0FBVCxHQUFhLElBQWIsR0FBb0JVLENBQXBCLEdBQXdCLElBQXhCLEdBQStCQyxDQUEvQixHQUFtQyxHQUExQztBQUNIO0FBQ0oiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkLTIuaW5pdC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qXHJcblRlbXBsYXRlIE5hbWU6IFVib2xkIC0gUmVzcG9uc2l2ZSBCb290c3RyYXAgNCBBZG1pbiBEYXNoYm9hcmRcclxuQXV0aG9yOiBDb2RlclRoZW1lc1xyXG5XZWJzaXRlOiBodHRwczovL2NvZGVydGhlbWVzLmNvbS9cclxuQ29udGFjdDogc3VwcG9ydEBjb2RlcnRoZW1lcy5jb21cclxuRmlsZTogRGFzaGJvYXJkIDIgaW5pdFxyXG4qL1xyXG5cclxuJCggZG9jdW1lbnQgKS5yZWFkeShmdW5jdGlvbigpIHtcclxuICAgIFxyXG4gICAgdmFyIERyYXdTcGFya2xpbmUgPSBmdW5jdGlvbigpIHtcclxuICAgICAgICAvLyBMaW5lIENoYXJ0XHJcbiAgICAgICAgdmFyIGNvbG9ycyA9IFsnIzAwYWNjMScsICcjZjE1NTZjJ107XHJcbiAgICAgICAgdmFyIGRhdGFDb2xvcnMgPSAkKFwiI2xpZmV0aW1lLXNhbGVzXCIpLmRhdGEoJ2NvbG9ycycpO1xyXG4gICAgICAgIGlmIChkYXRhQ29sb3JzKSB7XHJcbiAgICAgICAgICAgIGNvbG9ycyA9IGRhdGFDb2xvcnMuc3BsaXQoXCIsXCIpO1xyXG4gICAgICAgIH1cclxuICAgICAgICAkKCcjbGlmZXRpbWUtc2FsZXMnKS5zcGFya2xpbmUoWzAsIDIzLCA0MywgMzUsIDQ0LCA0NSwgNTYsIDM3LCA0MF0sIHtcclxuICAgICAgICAgICAgdHlwZTogJ2xpbmUnLFxyXG4gICAgICAgICAgICB3aWR0aDogXCIxMDAlXCIsXHJcbiAgICAgICAgICAgIGhlaWdodDogJzIyMCcsXHJcbiAgICAgICAgICAgIGNoYXJ0UmFuZ2VNYXg6IDUwLFxyXG4gICAgICAgICAgICBsaW5lQ29sb3I6IGNvbG9yc1swXSxcclxuICAgICAgICAgICAgZmlsbENvbG9yOiBoZXhUb1JHQihjb2xvcnNbMF0sIDAuMyksXHJcbiAgICAgICAgICAgIGhpZ2hsaWdodExpbmVDb2xvcjogJ3JnYmEoMCwwLDAsLjEpJyxcclxuICAgICAgICAgICAgaGlnaGxpZ2h0U3BvdENvbG9yOiAncmdiYSgwLDAsMCwuMiknLFxyXG4gICAgICAgICAgICBtYXhTcG90Q29sb3I6IGZhbHNlLFxyXG4gICAgICAgICAgICBtaW5TcG90Q29sb3I6IGZhbHNlLFxyXG4gICAgICAgICAgICBzcG90Q29sb3I6IGZhbHNlLFxyXG4gICAgICAgICAgICBsaW5lV2lkdGg6IDFcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgJCgnI2xpZmV0aW1lLXNhbGVzJykuc3BhcmtsaW5lKFsyNSwgMjMsIDI2LCAyNCwgMjUsIDMyLCAzMCwgMjQsIDE5XSwge1xyXG4gICAgICAgICAgICB0eXBlOiAnbGluZScsXHJcbiAgICAgICAgICAgIHdpZHRoOiBcIjEwMCVcIixcclxuICAgICAgICAgICAgaGVpZ2h0OiAnMjIwJyxcclxuICAgICAgICAgICAgY2hhcnRSYW5nZU1heDogNDAsXHJcbiAgICAgICAgICAgIGxpbmVDb2xvcjogY29sb3JzWzFdLFxyXG4gICAgICAgICAgICBmaWxsQ29sb3I6IGhleFRvUkdCKGNvbG9yc1sxXSwgMC4zKSxcclxuICAgICAgICAgICAgY29tcG9zaXRlOiB0cnVlLFxyXG4gICAgICAgICAgICBoaWdobGlnaHRMaW5lQ29sb3I6ICdyZ2JhKDAsMCwwLC4xKScsXHJcbiAgICAgICAgICAgIGhpZ2hsaWdodFNwb3RDb2xvcjogJ3JnYmEoMCwwLDAsLjIpJyxcclxuICAgICAgICAgICAgbWF4U3BvdENvbG9yOiBmYWxzZSxcclxuICAgICAgICAgICAgbWluU3BvdENvbG9yOiBmYWxzZSxcclxuICAgICAgICAgICAgc3BvdENvbG9yOiBmYWxzZSxcclxuICAgICAgICAgICAgbGluZVdpZHRoOiAxXHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIC8vIEJhciBDaGFydFxyXG4gICAgICAgIHZhciBjb2xvcnMgPSBbJyMwMGFjYzEnXTtcclxuICAgICAgICB2YXIgZGF0YUNvbG9ycyA9ICQoXCIjaW5jb21lLWFtb3VudHNcIikuZGF0YSgnY29sb3JzJyk7XHJcbiAgICAgICAgaWYgKGRhdGFDb2xvcnMpIHtcclxuICAgICAgICAgICAgY29sb3JzID0gZGF0YUNvbG9ycy5zcGxpdChcIixcIik7XHJcbiAgICAgICAgfVxyXG4gICAgICAgICQoJyNpbmNvbWUtYW1vdW50cycpLnNwYXJrbGluZShbMywgNiwgNywgOCwgNiwgNCwgNywgMTAsIDEyLCA3LCA0LCA5LCAxMiwgMTMsIDExLCAxMl0sIHtcclxuICAgICAgICAgICAgdHlwZTogJ2JhcicsXHJcbiAgICAgICAgICAgIGhlaWdodDogJzIyMCcsXHJcbiAgICAgICAgICAgIGJhcldpZHRoOiAnMTAnLFxyXG4gICAgICAgICAgICBiYXJTcGFjaW5nOiAnMycsXHJcbiAgICAgICAgICAgIGJhckNvbG9yOiBjb2xvcnNcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgLy8gUGllIENoYXJ0XHJcbiAgICAgICAgdmFyIGNvbG9ycyA9IFsnIzAwYWNjMScsJyM0Yjg4ZTQnLCcjZTNlYWVmJywnI2ZkN2UxNCddO1xyXG4gICAgICAgIHZhciBkYXRhQ29sb3JzID0gJChcIiN0b3RhbC11c2Vyc1wiKS5kYXRhKCdjb2xvcnMnKTtcclxuICAgICAgICBpZiAoZGF0YUNvbG9ycykge1xyXG4gICAgICAgICAgICBjb2xvcnMgPSBkYXRhQ29sb3JzLnNwbGl0KFwiLFwiKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgJCgnI3RvdGFsLXVzZXJzJykuc3BhcmtsaW5lKFsyMCwgNDAsIDMwLCAxMF0sIHtcclxuICAgICAgICAgICAgdHlwZTogJ3BpZScsXHJcbiAgICAgICAgICAgIHdpZHRoOiAnMjIwJyxcclxuICAgICAgICAgICAgaGVpZ2h0OiAnMjIwJyxcclxuICAgICAgICAgICAgc2xpY2VDb2xvcnM6IGNvbG9yc1xyXG4gICAgICAgIH0pO1xyXG4gICAgfTtcclxuICAgIFxyXG4gICAgRHJhd1NwYXJrbGluZSgpO1xyXG4gICAgXHJcbiAgICB2YXIgcmVzaXplQ2hhcnQ7XHJcblxyXG4gICAgJCh3aW5kb3cpLnJlc2l6ZShmdW5jdGlvbihlKSB7XHJcbiAgICAgICAgY2xlYXJUaW1lb3V0KHJlc2l6ZUNoYXJ0KTtcclxuICAgICAgICByZXNpemVDaGFydCA9IHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XHJcbiAgICAgICAgICAgIERyYXdTcGFya2xpbmUoKTtcclxuICAgICAgICB9LCAzMDApO1xyXG4gICAgfSk7XHJcbn0pO1xyXG5cclxuLy8gVmVjdG9yIG1hcFxyXG4vL3ZhcmlvdXMgZXhhbXBsZXNcclxudmFyIGNvbG9ycyA9IFsnIzY2NThkZCddO1xyXG52YXIgZGF0YUNvbG9ycyA9ICQoXCIjd29ybGQtbWFwLW1hcmtlcnNcIikuZGF0YSgnY29sb3JzJyk7XHJcbmlmIChkYXRhQ29sb3JzKSB7XHJcbiAgICBjb2xvcnMgPSBkYXRhQ29sb3JzLnNwbGl0KFwiLFwiKTtcclxufVxyXG4kKCcjd29ybGQtbWFwLW1hcmtlcnMnKS52ZWN0b3JNYXAoe1xyXG4gICAgbWFwIDogJ3dvcmxkX21pbGxfZW4nLFxyXG4gICAgbm9ybWFsaXplRnVuY3Rpb24gOiAncG9seW5vbWlhbCcsXHJcbiAgICBob3Zlck9wYWNpdHkgOiAwLjcsXHJcbiAgICBob3ZlckNvbG9yIDogZmFsc2UsXHJcbiAgICByZWdpb25TdHlsZSA6IHtcclxuICAgICAgICBpbml0aWFsIDoge1xyXG4gICAgICAgICAgICBmaWxsIDogJyNjZWQ0ZGEnXHJcbiAgICAgICAgfVxyXG4gICAgfSxcclxuICAgICBtYXJrZXJTdHlsZToge1xyXG4gICAgICAgIGluaXRpYWw6IHtcclxuICAgICAgICAgICAgcjogOSxcclxuICAgICAgICAgICAgJ2ZpbGwnOiBjb2xvcnNbMF0sXHJcbiAgICAgICAgICAgICdmaWxsLW9wYWNpdHknOiAwLjksXHJcbiAgICAgICAgICAgICdzdHJva2UnOiAnI2ZmZicsXHJcbiAgICAgICAgICAgICdzdHJva2Utd2lkdGgnIDogNyxcclxuICAgICAgICAgICAgJ3N0cm9rZS1vcGFjaXR5JzogMC40XHJcbiAgICAgICAgfSxcclxuXHJcbiAgICAgICAgaG92ZXI6IHtcclxuICAgICAgICAgICAgJ3N0cm9rZSc6ICcjZmZmJyxcclxuICAgICAgICAgICAgJ2ZpbGwtb3BhY2l0eSc6IDEsXHJcbiAgICAgICAgICAgICdzdHJva2Utd2lkdGgnOiAxLjVcclxuICAgICAgICB9XHJcbiAgICB9LFxyXG4gICAgYmFja2dyb3VuZENvbG9yIDogJ3RyYW5zcGFyZW50JyxcclxuICAgIG1hcmtlcnMgOiBbe1xyXG4gICAgICAgIGxhdExuZyA6IFs0MS45MCwgMTIuNDVdLFxyXG4gICAgICAgIG5hbWUgOiAnVmF0aWNhbiBDaXR5J1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFs0My43MywgNy40MV0sXHJcbiAgICAgICAgbmFtZSA6ICdNb25hY28nXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWy0wLjUyLCAxNjYuOTNdLFxyXG4gICAgICAgIG5hbWUgOiAnTmF1cnUnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWy04LjUxLCAxNzkuMjFdLFxyXG4gICAgICAgIG5hbWUgOiAnVHV2YWx1J1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFs0My45MywgMTIuNDZdLFxyXG4gICAgICAgIG5hbWUgOiAnU2FuIE1hcmlubydcclxuICAgIH0sIHtcclxuICAgICAgICBsYXRMbmcgOiBbNDcuMTQsIDkuNTJdLFxyXG4gICAgICAgIG5hbWUgOiAnTGllY2h0ZW5zdGVpbidcclxuICAgIH0sIHtcclxuICAgICAgICBsYXRMbmcgOiBbNy4xMSwgMTcxLjA2XSxcclxuICAgICAgICBuYW1lIDogJ01hcnNoYWxsIElzbGFuZHMnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzE3LjMsIC02Mi43M10sXHJcbiAgICAgICAgbmFtZSA6ICdTYWludCBLaXR0cyBhbmQgTmV2aXMnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzMuMiwgNzMuMjJdLFxyXG4gICAgICAgIG5hbWUgOiAnTWFsZGl2ZXMnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzM1Ljg4LCAxNC41XSxcclxuICAgICAgICBuYW1lIDogJ01hbHRhJ1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFsxMi4wNSwgLTYxLjc1XSxcclxuICAgICAgICBuYW1lIDogJ0dyZW5hZGEnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzEzLjE2LCAtNjEuMjNdLFxyXG4gICAgICAgIG5hbWUgOiAnU2FpbnQgVmluY2VudCBhbmQgdGhlIEdyZW5hZGluZXMnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzEzLjE2LCAtNTkuNTVdLFxyXG4gICAgICAgIG5hbWUgOiAnQmFyYmFkb3MnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzE3LjExLCAtNjEuODVdLFxyXG4gICAgICAgIG5hbWUgOiAnQW50aWd1YSBhbmQgQmFyYnVkYSdcclxuICAgIH0sIHtcclxuICAgICAgICBsYXRMbmcgOiBbLTQuNjEsIDU1LjQ1XSxcclxuICAgICAgICBuYW1lIDogJ1NleWNoZWxsZXMnXHJcbiAgICB9LCB7XHJcbiAgICAgICAgbGF0TG5nIDogWzcuMzUsIDEzNC40Nl0sXHJcbiAgICAgICAgbmFtZSA6ICdQYWxhdSdcclxuICAgIH0sIHtcclxuICAgICAgICBsYXRMbmcgOiBbNDIuNSwgMS41MV0sXHJcbiAgICAgICAgbmFtZSA6ICdBbmRvcnJhJ1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFsxNC4wMSwgLTYwLjk4XSxcclxuICAgICAgICBuYW1lIDogJ1NhaW50IEx1Y2lhJ1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFs2LjkxLCAxNTguMThdLFxyXG4gICAgICAgIG5hbWUgOiAnRmVkZXJhdGVkIFN0YXRlcyBvZiBNaWNyb25lc2lhJ1xyXG4gICAgfSwge1xyXG4gICAgICAgIGxhdExuZyA6IFsxLjMsIDEwMy44XSxcclxuICAgICAgICBuYW1lIDogJ1NpbmdhcG9yZSdcclxuICAgIH0sIHtcclxuICAgICAgICBsYXRMbmcgOiBbMC4zMywgNi43M10sXHJcbiAgICAgICAgbmFtZSA6ICdTw4PCo28gVG9tw4PCqSBhbmQgUHLDg8KtbmNpcGUnXHJcbiAgICB9XVxyXG59KTtcclxuXHJcbi8qIHV0aWxpdHkgZnVuY3Rpb24gKi9cclxuXHJcbmZ1bmN0aW9uIGhleFRvUkdCKGhleCwgYWxwaGEpIHtcclxuICAgIHZhciByID0gcGFyc2VJbnQoaGV4LnNsaWNlKDEsIDMpLCAxNiksXHJcbiAgICAgICAgZyA9IHBhcnNlSW50KGhleC5zbGljZSgzLCA1KSwgMTYpLFxyXG4gICAgICAgIGIgPSBwYXJzZUludChoZXguc2xpY2UoNSwgNyksIDE2KTtcclxuXHJcbiAgICBpZiAoYWxwaGEpIHtcclxuICAgICAgICByZXR1cm4gXCJyZ2JhKFwiICsgciArIFwiLCBcIiArIGcgKyBcIiwgXCIgKyBiICsgXCIsIFwiICsgYWxwaGEgKyBcIilcIjtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgcmV0dXJuIFwicmdiKFwiICsgciArIFwiLCBcIiArIGcgKyBcIiwgXCIgKyBiICsgXCIpXCI7XHJcbiAgICB9XHJcbn0iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/dashboard-2.init.js\n");

/***/ }),

/***/ 15:
/*!******************************************************!*\
  !*** multi ./resources/js/pages/dashboard-2.init.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Mohammed\Desktop\ai-attend\resources\js\pages\dashboard-2.init.js */"./resources/js/pages/dashboard-2.init.js");


/***/ })

/******/ });