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

eval("var sidebar = document.querySelector(\".sidebar\");\nvar closeBtn = document.querySelector(\"#btn\");\nvar searchBtn = document.querySelector(\".bx-search\");\n\nif (closeBtn) {\n  closeBtn.addEventListener(\"click\", function () {\n    sidebar.classList.toggle(\"open\");\n    menuBtnChange(); //calling the function(optional)\n  });\n}\n\nif (searchBtn) {\n  searchBtn.addEventListener(\"click\", function () {\n    // Sidebar open when you click on the search iocn\n    sidebar.classList.toggle(\"open\");\n    menuBtnChange(); //calling the function(optional)\n  });\n} // following are the code to change sidebar button(optional)\n\n\nfunction menuBtnChange() {\n  if (sidebar.classList.contains(\"open\")) {\n    closeBtn.classList.replace(\"bx-menu\", \"bx-menu-alt-right\"); //replacing the iocns class\n\n    $('.content-container').css('margin', '30px 20px 20px 280px');\n  } else {\n    closeBtn.classList.replace(\"bx-menu-alt-right\", \"bx-menu\"); //replacing the iocns class\n\n    $('.content-container').css('margin', '30px 20px 20px 100px');\n  }\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvc2lkZS1iYXIuanM/YTk0YiJdLCJuYW1lcyI6WyJzaWRlYmFyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiY2xvc2VCdG4iLCJzZWFyY2hCdG4iLCJhZGRFdmVudExpc3RlbmVyIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwibWVudUJ0bkNoYW5nZSIsImNvbnRhaW5zIiwicmVwbGFjZSIsIiQiLCJjc3MiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLE9BQU8sR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLFVBQXZCLENBQWQ7QUFDQSxJQUFJQyxRQUFRLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixNQUF2QixDQUFmO0FBQ0EsSUFBSUUsU0FBUyxHQUFHSCxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsWUFBdkIsQ0FBaEI7O0FBRUEsSUFBR0MsUUFBSCxFQUFZO0FBQ1ZBLEVBQUFBLFFBQVEsQ0FBQ0UsZ0JBQVQsQ0FBMEIsT0FBMUIsRUFBbUMsWUFBSTtBQUNyQ0wsSUFBQUEsT0FBTyxDQUFDTSxTQUFSLENBQWtCQyxNQUFsQixDQUF5QixNQUF6QjtBQUNBQyxJQUFBQSxhQUFhLEdBRndCLENBRXJCO0FBQ2pCLEdBSEQ7QUFJRDs7QUFDRCxJQUFHSixTQUFILEVBQWE7QUFDWEEsRUFBQUEsU0FBUyxDQUFDQyxnQkFBVixDQUEyQixPQUEzQixFQUFvQyxZQUFJO0FBQUU7QUFDeENMLElBQUFBLE9BQU8sQ0FBQ00sU0FBUixDQUFrQkMsTUFBbEIsQ0FBeUIsTUFBekI7QUFDQUMsSUFBQUEsYUFBYSxHQUZ5QixDQUVyQjtBQUNsQixHQUhEO0FBSUQsQyxDQUNEOzs7QUFDQSxTQUFTQSxhQUFULEdBQXlCO0FBQ3hCLE1BQUdSLE9BQU8sQ0FBQ00sU0FBUixDQUFrQkcsUUFBbEIsQ0FBMkIsTUFBM0IsQ0FBSCxFQUFzQztBQUNwQ04sSUFBQUEsUUFBUSxDQUFDRyxTQUFULENBQW1CSSxPQUFuQixDQUEyQixTQUEzQixFQUFzQyxtQkFBdEMsRUFEb0MsQ0FDdUI7O0FBQzNEQyxJQUFBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsR0FBeEIsQ0FBNEIsUUFBNUIsRUFBc0Msc0JBQXRDO0FBQ0QsR0FIRCxNQUdNO0FBQ0pULElBQUFBLFFBQVEsQ0FBQ0csU0FBVCxDQUFtQkksT0FBbkIsQ0FBMkIsbUJBQTNCLEVBQStDLFNBQS9DLEVBREksQ0FDc0Q7O0FBQzFEQyxJQUFBQSxDQUFDLENBQUMsb0JBQUQsQ0FBRCxDQUF3QkMsR0FBeEIsQ0FBNEIsUUFBNUIsRUFBc0Msc0JBQXRDO0FBQ0Q7QUFDRCIsInNvdXJjZXNDb250ZW50IjpbImxldCBzaWRlYmFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5zaWRlYmFyXCIpO1xyXG5sZXQgY2xvc2VCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2J0blwiKTtcclxubGV0IHNlYXJjaEJ0biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYngtc2VhcmNoXCIpO1xyXG5cclxuaWYoY2xvc2VCdG4pe1xyXG4gIGNsb3NlQnRuLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKT0+e1xyXG4gICAgc2lkZWJhci5jbGFzc0xpc3QudG9nZ2xlKFwib3BlblwiKTtcclxuICAgIG1lbnVCdG5DaGFuZ2UoKTsvL2NhbGxpbmcgdGhlIGZ1bmN0aW9uKG9wdGlvbmFsKVxyXG4gIH0pO1xyXG59XHJcbmlmKHNlYXJjaEJ0bil7XHJcbiAgc2VhcmNoQnRuLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKT0+eyAvLyBTaWRlYmFyIG9wZW4gd2hlbiB5b3UgY2xpY2sgb24gdGhlIHNlYXJjaCBpb2NuXHJcbiAgICBzaWRlYmFyLmNsYXNzTGlzdC50b2dnbGUoXCJvcGVuXCIpO1xyXG4gICAgbWVudUJ0bkNoYW5nZSgpOyAvL2NhbGxpbmcgdGhlIGZ1bmN0aW9uKG9wdGlvbmFsKVxyXG4gIH0pO1xyXG59XHJcbi8vIGZvbGxvd2luZyBhcmUgdGhlIGNvZGUgdG8gY2hhbmdlIHNpZGViYXIgYnV0dG9uKG9wdGlvbmFsKVxyXG5mdW5jdGlvbiBtZW51QnRuQ2hhbmdlKCkge1xyXG4gaWYoc2lkZWJhci5jbGFzc0xpc3QuY29udGFpbnMoXCJvcGVuXCIpKXtcclxuICAgY2xvc2VCdG4uY2xhc3NMaXN0LnJlcGxhY2UoXCJieC1tZW51XCIsIFwiYngtbWVudS1hbHQtcmlnaHRcIik7Ly9yZXBsYWNpbmcgdGhlIGlvY25zIGNsYXNzXHJcbiAgICQoJy5jb250ZW50LWNvbnRhaW5lcicpLmNzcygnbWFyZ2luJywgJzMwcHggMjBweCAyMHB4IDI4MHB4JylcclxuIH1lbHNlIHtcclxuICAgY2xvc2VCdG4uY2xhc3NMaXN0LnJlcGxhY2UoXCJieC1tZW51LWFsdC1yaWdodFwiLFwiYngtbWVudVwiKTsvL3JlcGxhY2luZyB0aGUgaW9jbnMgY2xhc3NcclxuICAgJCgnLmNvbnRlbnQtY29udGFpbmVyJykuY3NzKCdtYXJnaW4nLCAnMzBweCAyMHB4IDIwcHggMTAwcHgnKVxyXG4gfVxyXG59XHJcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvc2lkZS1iYXIuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/side-bar.js\n");

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