/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/side-bar.js":
/*!**********************************!*\
  !*** ./resources/js/side-bar.js ***!
  \**********************************/
/***/ (() => {

eval("var sidebar = document.querySelector(\".sidebar\");\nvar closeBtn = document.querySelector(\"#btn\");\nvar searchBtn = document.querySelector(\".bx-search\");\ncloseBtn.addEventListener(\"click\", function () {\n  sidebar.classList.toggle(\"open\");\n  menuBtnChange(); //calling the function(optional)\n});\nsearchBtn.addEventListener(\"click\", function () {\n  // Sidebar open when you click on the search iocn\n  sidebar.classList.toggle(\"open\");\n  menuBtnChange(); //calling the function(optional)\n}); // following are the code to change sidebar button(optional)\n\nfunction menuBtnChange() {\n  if (sidebar.classList.contains(\"open\")) {\n    closeBtn.classList.replace(\"bx-menu\", \"bx-menu-alt-right\"); //replacing the iocns class\n\n    $('.content-container').css('margin', '30px 20px 20px 280px');\n  } else {\n    closeBtn.classList.replace(\"bx-menu-alt-right\", \"bx-menu\"); //replacing the iocns class\n\n    $('.content-container').css('margin', '30px 20px 20px 100px');\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2lkZS1iYXIuanM/YTk0YiJdLCJuYW1lcyI6WyJzaWRlYmFyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY2xvc2VCdG4iLCJzZWFyY2hCdG4iLCJhZGRFdmVudExpc3RlbmVyIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwibWVudUJ0bkNoYW5nZSIsImNvbnRhaW5zIiwicmVwbGFjZSIsIiQiLCJjc3MiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLE9BQU8sR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLFVBQXZCLENBQWQ7QUFDQSxJQUFJQyxRQUFRLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixNQUF2QixDQUFmO0FBQ0EsSUFBSUUsU0FBUyxHQUFHSCxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsQ0FBaEI7QUFFQUMsUUFBUSxDQUFDRSxnQkFBVCxDQUEwQixPQUExQixFQUFtQyxZQUFJO0FBQ3JDTCxFQUFBQSxPQUFPLENBQUNNLFNBQVIsQ0FBa0JDLE1BQWxCLENBQXlCLE1BQXpCO0FBQ0FDLEVBQUFBLGFBQWEsR0FGd0IsQ0FFckI7QUFDakIsQ0FIRDtBQUtBSixTQUFTLENBQUNDLGdCQUFWLENBQTJCLE9BQTNCLEVBQW9DLFlBQUk7QUFBRTtBQUN4Q0wsRUFBQUEsT0FBTyxDQUFDTSxTQUFSLENBQWtCQyxNQUFsQixDQUF5QixNQUF6QjtBQUNBQyxFQUFBQSxhQUFhLEdBRnlCLENBRXJCO0FBQ2xCLENBSEQsRSxDQUtBOztBQUNBLFNBQVNBLGFBQVQsR0FBeUI7QUFDeEIsTUFBR1IsT0FBTyxDQUFDTSxTQUFSLENBQWtCRyxRQUFsQixDQUEyQixNQUEzQixDQUFILEVBQXNDO0FBQ3BDTixJQUFBQSxRQUFRLENBQUNHLFNBQVQsQ0FBbUJJLE9BQW5CLENBQTJCLFNBQTNCLEVBQXNDLG1CQUF0QyxFQURvQyxDQUN1Qjs7QUFDM0RDLElBQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxHQUF4QixDQUE0QixRQUE1QixFQUFzQyxzQkFBdEM7QUFDRCxHQUhELE1BR007QUFDSlQsSUFBQUEsUUFBUSxDQUFDRyxTQUFULENBQW1CSSxPQUFuQixDQUEyQixtQkFBM0IsRUFBK0MsU0FBL0MsRUFESSxDQUNzRDs7QUFDMURDLElBQUFBLENBQUMsQ0FBQyxvQkFBRCxDQUFELENBQXdCQyxHQUF4QixDQUE0QixRQUE1QixFQUFzQyxzQkFBdEM7QUFDRDtBQUNEIiwic291cmNlc0NvbnRlbnQiOlsibGV0IHNpZGViYXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnNpZGViYXJcIik7XHJcbmxldCBjbG9zZUJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjYnRuXCIpO1xyXG5sZXQgc2VhcmNoQnRuID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5ieC1zZWFyY2hcIik7XHJcblxyXG5jbG9zZUJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCk9PntcclxuICBzaWRlYmFyLmNsYXNzTGlzdC50b2dnbGUoXCJvcGVuXCIpO1xyXG4gIG1lbnVCdG5DaGFuZ2UoKTsvL2NhbGxpbmcgdGhlIGZ1bmN0aW9uKG9wdGlvbmFsKVxyXG59KTtcclxuXHJcbnNlYXJjaEJ0bi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCk9PnsgLy8gU2lkZWJhciBvcGVuIHdoZW4geW91IGNsaWNrIG9uIHRoZSBzZWFyY2ggaW9jblxyXG4gIHNpZGViYXIuY2xhc3NMaXN0LnRvZ2dsZShcIm9wZW5cIik7XHJcbiAgbWVudUJ0bkNoYW5nZSgpOyAvL2NhbGxpbmcgdGhlIGZ1bmN0aW9uKG9wdGlvbmFsKVxyXG59KTtcclxuXHJcbi8vIGZvbGxvd2luZyBhcmUgdGhlIGNvZGUgdG8gY2hhbmdlIHNpZGViYXIgYnV0dG9uKG9wdGlvbmFsKVxyXG5mdW5jdGlvbiBtZW51QnRuQ2hhbmdlKCkge1xyXG4gaWYoc2lkZWJhci5jbGFzc0xpc3QuY29udGFpbnMoXCJvcGVuXCIpKXtcclxuICAgY2xvc2VCdG4uY2xhc3NMaXN0LnJlcGxhY2UoXCJieC1tZW51XCIsIFwiYngtbWVudS1hbHQtcmlnaHRcIik7Ly9yZXBsYWNpbmcgdGhlIGlvY25zIGNsYXNzXHJcbiAgICQoJy5jb250ZW50LWNvbnRhaW5lcicpLmNzcygnbWFyZ2luJywgJzMwcHggMjBweCAyMHB4IDI4MHB4JylcclxuIH1lbHNlIHtcclxuICAgY2xvc2VCdG4uY2xhc3NMaXN0LnJlcGxhY2UoXCJieC1tZW51LWFsdC1yaWdodFwiLFwiYngtbWVudVwiKTsvL3JlcGxhY2luZyB0aGUgaW9jbnMgY2xhc3NcclxuICAgJCgnLmNvbnRlbnQtY29udGFpbmVyJykuY3NzKCdtYXJnaW4nLCAnMzBweCAyMHB4IDIwcHggMTAwcHgnKVxyXG4gfVxyXG59XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2lkZS1iYXIuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/side-bar.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/side-bar.js"]();
/******/ 	
/******/ })()
;