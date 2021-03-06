/*!
 * 
 * Super simple WYSIWYG editor v0.8.20
 * https://summernote.org
 *
 *
 * Copyright 2013- Alan Hong and contributors
 * Summernote may be freely distributed under the MIT license.
 *
 * Date: 2021-10-14T21:15Z
 *
 */
(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory(require("jQuery"));
	else if(typeof define === 'function' && define.amd)
		define(["jQuery"], factory);
	else {
		var a = typeof exports === 'object' ? factory(require("jQuery")) : factory(root["jQuery"]);
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(self, function(__WEBPACK_EXTERNAL_MODULE__1145__) {
return /******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ 1145:
/***/ ((module) => {

module.exports = __WEBPACK_EXTERNAL_MODULE__1145__;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1145);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

(jquery__WEBPACK_IMPORTED_MODULE_0___default().summernote) = (jquery__WEBPACK_IMPORTED_MODULE_0___default().summernote) || {
  lang: {}
};
jquery__WEBPACK_IMPORTED_MODULE_0___default().extend((jquery__WEBPACK_IMPORTED_MODULE_0___default().summernote.lang), {
  'fr-FR': {
      font: {
        bold: 'Gras',
        italic: 'Italique',
        underline: 'Soulign??',
        clear: 'Effacer la mise en forme',
        height: 'Interligne',
        name: 'Famille de police',
        strikethrough: 'Barr??',
        superscript: 'Exposant',
        subscript: 'Indice',
        size: 'Taille de police'
      },
      image: {
        image: 'Image',
        insert: 'Ins??rer une image',
        resizeFull: 'Taille originale',
        resizeHalf: 'Redimensionner ?? 50 %',
        resizeQuarter: 'Redimensionner ?? 25 %',
        floatLeft: 'Align?? ?? gauche',
        floatRight: 'Align?? ?? droite',
        floatNone: 'Pas d\'alignement',
        shapeRounded: 'Forme: Rectangle arrondi',
        shapeCircle: 'Forme: Cercle',
        shapeThumbnail: 'Forme: Vignette',
        shapeNone: 'Forme: Aucune',
        dragImageHere: 'Faites glisser une image ou un texte dans ce cadre',
        dropImage: 'Lachez l\'image ou le texte',
        selectFromFiles: 'Choisir un fichier',
        maximumFileSize: 'Taille de fichier maximale',
        maximumFileSizeError: 'Taille maximale du fichier d??pass??e',
        url: 'URL de l\'image',
        remove: 'Supprimer l\'image',
        original: 'Original'
      },
      video: {
        video: 'Vid??o',
        videoLink: 'Lien vid??o',
        insert: 'Ins??rer une vid??o',
        url: 'URL de la vid??o',
        providers: '(YouTube, Google Drive, Vimeo, Vine, Instagram, DailyMotion or Youku)'
      },
      link: {
        link: 'Lien',
        insert: 'Ins??rer un lien',
        unlink: 'Supprimer un lien',
        edit: 'Modifier',
        textToDisplay: 'Texte ?? afficher',
        url: 'URL du lien',
        openInNewWindow: 'Ouvrir dans une nouvelle fen??tre',
        useProtocol: 'Utiliser le protocole par d??faut'
      },
      table: {
        table: 'Tableau',
        addRowAbove: 'Ajouter une ligne au-dessus',
        addRowBelow: 'Ajouter une ligne en dessous',
        addColLeft: 'Ajouter une colonne ?? gauche',
        addColRight: 'Ajouter une colonne ?? droite',
        delRow: 'Supprimer la ligne',
        delCol: 'Supprimer la colonne',
        delTable: 'Supprimer le tableau'
      },
      hr: {
        insert: 'Ins??rer une ligne horizontale'
      },
      style: {
        style: 'Style',
        p: 'Normal',
        blockquote: 'Citation',
        pre: 'Code source',
        h1: 'Titre 1',
        h2: 'Titre 2',
        h3: 'Titre 3',
        h4: 'Titre 4',
        h5: 'Titre 5',
        h6: 'Titre 6'
      },
      lists: {
        unordered: 'Liste ?? puces',
        ordered: 'Liste num??rot??e'
      },
      options: {
        help: 'Aide',
        fullscreen: 'Plein ??cran',
        codeview: 'Afficher le code HTML'
      },
      paragraph: {
        paragraph: 'Paragraphe',
        outdent: 'Diminuer le retrait',
        indent: 'Augmenter le retrait',
        left: 'Aligner ?? gauche',
        center: 'Centrer',
        right: 'Aligner ?? droite',
        justify: 'Justifier'
      },
      color: {
        recent: 'Derni??re couleur s??lectionn??e',
        more: 'Plus de couleurs',
        background: 'Couleur de fond',
        foreground: 'Couleur de police',
        transparent: 'Transparent',
        setTransparent: 'D??finir la transparence',
        reset: 'Restaurer',
        resetToDefault: 'Restaurer la couleur par d??faut'
      },
      shortcut: {
        shortcuts: 'Raccourcis',
        close: 'Fermer',
        textFormatting: 'Mise en forme du texte',
        action: 'Action',
        paragraphFormatting: 'Mise en forme des paragraphes',
        documentStyle: 'Style du document',
        extraKeys: 'Touches suppl??mentaires'
      },
      help: {
        'insertParagraph': 'Ins??rer paragraphe',
        'undo': 'D??faire la derni??re commande',
        'redo': 'Refaire la derni??re commande',
        'tab': 'Tabulation',
        'untab': 'Tabulation arri??re',
        'bold': 'Mettre en caract??re gras',
        'italic': 'Mettre en italique',
        'underline': 'Mettre en soulign??',
        'strikethrough': 'Mettre en texte barr??',
        'removeFormat': 'Nettoyer les styles',
        'justifyLeft': 'Aligner ?? gauche',
        'justifyCenter': 'Centrer',
        'justifyRight': 'Aligner ?? droite',
        'justifyFull': 'Justifier ?? gauche et ?? droite',
        'insertUnorderedList': 'Basculer liste ?? puces',
        'insertOrderedList': 'Basculer liste ordonn??e',
        'outdent': 'Diminuer le retrait du paragraphe',
        'indent': 'Augmenter le retrait du paragraphe',
        'formatPara': 'Changer le paragraphe en cours en normal (P)',
        'formatH1': 'Changer le paragraphe en cours en ent??te H1',
        'formatH2': 'Changer le paragraphe en cours en ent??te H2',
        'formatH3': 'Changer le paragraphe en cours en ent??te H3',
        'formatH4': 'Changer le paragraphe en cours en ent??te H4',
        'formatH5': 'Changer le paragraphe en cours en ent??te H5',
        'formatH6': 'Changer le paragraphe en cours en ent??te H6',
        'insertHorizontalRule': 'Ins??rer s??paration horizontale',
        'linkDialog.show': 'Afficher fen??tre d\'hyperlien'
      },
      history: {
        undo: 'Annuler la derni??re action',
        redo: 'Restaurer la derni??re action annul??e'
      },
      specialChar: {
        specialChar: 'Caract??res sp??ciaux',
        select: 'Choisir des caract??res sp??ciaux'
      }
    }
});
})();

/******/ 	return __webpack_exports__;
/******/ })()
;
});