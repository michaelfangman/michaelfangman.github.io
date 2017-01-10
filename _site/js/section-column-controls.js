(function() {
  window.leadpagesUX || (window.leadpagesUX = {});

  leadpagesUX.sectionColumnControls = {
    init: function() {
      this.builderScreen = document.querySelector('.builderScreen');
      return this.bindings();
    },
    bindings: function() {
      var _t, alignmentOptions, bkgSettingsBtns, closeSettingsPanes, colorPickerBubbles, imageSelectors, option__rotators, sidebarToggles, widgets;
      _t = this;
      document.querySelector('.startBuildingButton').addEventListener('click', function() {
        var state;
        return _t.toggleHelpModal(state = 'closed');
      });
      document.querySelector('.closeHelpModal').addEventListener('click', function() {
        var state;
        return _t.toggleHelpModal(state = 'closed');
      });
      document.querySelector('.helpButton').addEventListener('click', function() {
        var state;
        return _t.toggleHelpModal(state = 'open');
      });
      sidebarToggles = this.builderScreen.querySelectorAll('.builderSidebar .builderSidebar__toggle');
      [].forEach.call(sidebarToggles, function(sidebarToggle) {
        return sidebarToggle.addEventListener('click', function() {
          var pane;
          pane = sidebarToggle.dataset.pane;
          return _t.paneToggle(pane);
        });
      });
      widgets = this.builderScreen.querySelectorAll('.widget');
      [].forEach.call(widgets, function(widget) {
        widget.querySelector('.widget__divider').addEventListener('mouseover', function(e) {
          return _t.activateWidgetResize(widget);
        });
        return widget.querySelector('.widget__divider').addEventListener('mouseleave', function(e) {
          return _t.deactivateWidgetResize(widget);
        });
      });
      this.builderScreen.querySelector('.builderSidebar__toggle--pageStyles').addEventListener('click', function(e) {
        var pageArea, paneData;
        pageArea = document.querySelector('.builderBody');
        paneData = pageArea.dataset;
        return _t.paneSwapArea = pageArea;
      });
      this.sectionStyles = this.builderScreen.querySelectorAll('.sectionStyle');
      [].forEach.call(this.sectionStyles, function(sectionStyle) {
        var rowsContainer, section, sectionData, sectionName;
        sectionName = sectionStyle.dataset.section;
        section = document.querySelector("#builderSection__" + sectionName);
        sectionData = section.dataset;
        rowsContainer = sectionStyle.querySelector('.sectionStyle--rowsContainer');
        sectionStyle.querySelector('.sectionStyleHead').addEventListener('click', function(e) {
          var pane, paneData, state;
          if (e.srcElement.classList.contains('deleteSection')) {
            if (window.confirm('Are you sure you want to delete this section?')) {
              section.parentNode.removeChild(section);
              sectionStyle.parentNode.removeChild(sectionStyle);
              return _t.builderScreen.querySelector('.sectionStylesContainer').classList.remove('section-isOpen');
            }
          } else if (e.srcElement.classList.contains('openSectionSettings')) {
            _t.paneSwapArea = section;
            return _t.paneSwap(state = 'on', pane = 'section', paneData = sectionData);
          } else if (e.srcElement.classList.contains('hideSection')) {
            if (section.classList.contains("sectionHidden")) {
              section.classList.remove("sectionHidden");
              return sectionStyle.classList.remove("sectionHidden");
            } else {
              section.classList.add("sectionHidden");
              return sectionStyle.classList.add("sectionHidden");
            }
          } else {
            return _t.toggleSectionStyles(sectionStyle);
          }
        });
        sectionStyle.querySelector('.sectionStyleHead').addEventListener('mouseover', function(e) {
          var state;
          return _t.highlightSectionFromSidebar(section, state = 'on');
        });
        sectionStyle.querySelector('.sectionStyleHead').addEventListener('mouseleave', function(e) {
          var state;
          return _t.highlightSectionFromSidebar(section, state = 'off');
        });
        return sectionStyle.querySelector('.addColumn').addEventListener('click', function(e) {
          return _t.addColumn(section, rowsContainer);
        });
      });
      this.builderScreen.querySelector('.addSection').addEventListener('click', function(e) {
        return _t.addSection();
      });
      _t.bindColumnStyleFunk();
      this.sectionTriggers = this.builderScreen.querySelectorAll('.sectionTrigger');
      [].forEach.call(this.sectionTriggers, function(sectionTrigger) {
        var sectionName;
        sectionName = sectionTrigger.parentElement.id.split('builderSection__')[1];
        return sectionTrigger.addEventListener('click', function(e) {
          return _t.toggleSectionFromTrigger(sectionName);
        });
      });
      closeSettingsPanes = this.builderScreen.querySelectorAll('.closeSettingsPane');
      [].forEach.call(closeSettingsPanes, function(closeSettingsPane) {
        return closeSettingsPane.addEventListener('click', function(e) {
          var state;
          return _t.paneSwap(state = 'off');
        });
      });
      colorPickerBubbles = this.builderScreen.querySelectorAll('.colorOption');
      [].forEach.call(colorPickerBubbles, function(colorPickerBubble) {
        return colorPickerBubble.addEventListener('click', function(e) {
          var bubble;
          return _t.changeAreaColor(bubble = this);
        });
      });
      alignmentOptions = this.builderScreen.querySelectorAll('.stylesPane__option--align .stylesPane__option__choice');
      [].forEach.call(alignmentOptions, function(alignmentOption) {
        return alignmentOption.addEventListener('click', function(e) {
          return _t.changeAlignment(alignmentOption);
        });
      });
      imageSelectors = this.builderScreen.querySelectorAll('.setting__bgimage');
      [].forEach.call(imageSelectors, function(imageSelector) {
        return imageSelector.addEventListener('click', function(e) {
          var removeClick;
          removeClick = e.srcElement.classList.contains('removeimage');
          return _t.changeAreaBackgroundImage(imageSelector = this, removeClick);
        });
      });
      option__rotators = this.builderScreen.querySelectorAll('.option__rotator');
      [].forEach.call(option__rotators, function(option__rotator) {
        return option__rotator.addEventListener('click', function(e) {
          var clickedElement, clickedParent, rotator;
          rotator = this;
          clickedElement = e.srcElement;
          clickedParent = clickedElement.parentElement;
          if (clickedElement.classList.contains('option__rotator--decrease') || clickedParent.classList.contains('option__rotator--decrease')) {
            return _t.decreaseRotator(rotator);
          } else if (clickedElement.classList.contains('option__rotator--increase') || clickedParent.classList.contains('option__rotator--increase')) {
            return _t.increaseRotator(rotator);
          }
        });
      });
      bkgSettingsBtns = this.builderScreen.querySelectorAll('.bkgSettings');
      return [].forEach.call(bkgSettingsBtns, function(bkgSetting) {
        return bkgSetting.addEventListener('click', function(e) {
          var pane, paneData, section, sectionData, sectionName, state;
          sectionName = this.dataset.sectionname;
          section = document.querySelector("#builderSection__" + sectionName);
          sectionData = section.dataset;
          _t.paneSwapArea = section;
          return _t.paneSwap(state = 'on', pane = 'section', paneData = sectionData);
        });
      });
    },
    toggleHelpModal: function(state) {
      console.debug("toggling " + state);
      if (state === 'open') {
        return this.builderScreen.classList.add('helpModal-open');
      } else {
        return this.builderScreen.classList.remove('helpModal-open');
      }
    },
    bindColumnStyleFunk: function() {
      var _t, columnStyles;
      _t = this;
      columnStyles = this.builderScreen.querySelectorAll('.columnStyle');
      return [].forEach.call(columnStyles, function(columnStyle) {
        var colNum, column, columnCore, columnData, rowsContainer, section, sectionName;
        sectionName = columnStyle.parentElement.parentElement.parentElement.parentElement.parentElement.dataset.section;
        section = document.querySelector("#builderSection__" + sectionName);
        rowsContainer = columnStyle.parentElement.parentElement.parentElement.parentElement;
        colNum = columnStyle.dataset.column;
        column = section.querySelector(".builderColumn:nth-child(" + colNum + ")");
        columnData = column.dataset;
        columnCore = column.querySelector('.builderColumn__core');
        columnData.innerPt = columnCore.dataset.pt;
        columnData.innerPr = columnCore.dataset.pr;
        columnData.innerPb = columnCore.dataset.pb;
        columnData.innerPl = columnCore.dataset.pl;
        columnStyle.addEventListener('click', function(e) {
          var numColumns, pane, paneData, remainingColumns, state;
          if (e.srcElement.classList.contains('deleteColumn')) {
            if (window.confirm('Are you sure you want to delete this column?')) {
              column.parentNode.removeChild(column);
              rowsContainer = columnStyle.parentElement.parentElement.parentElement;
              columnStyle.parentNode.removeChild(columnStyle);
              remainingColumns = section.querySelectorAll('.builderColumn');
              numColumns = remainingColumns.length;
              if (numColumns <= 0) {
                _t.addColumn(section, rowsContainer);
              }
              return _t.resetColumns(section, rowsContainer);
            }
          } else {
            _t.paneSwapArea = column;
            return _t.paneSwap(state = 'on', pane = 'column', paneData = columnData);
          }
        });
        columnStyle.addEventListener('mouseover', function(e) {
          var state;
          return _t.highlightColumnFromSidebar(column, state = 'on');
        });
        return columnStyle.addEventListener('mouseleave', function(e) {
          var state;
          return _t.highlightColumnFromSidebar(column, state = 'off');
        });
      });
    },
    addSection: function() {
      return alert('Adding sections has been disabled in this prototype.');
    },
    addColumn: function(section, rowsContainer) {
      var core, currentCols, currentStyles;
      currentCols = section.querySelector('.builderRow').innerHTML;
      currentCols += '<div class="builderColumn" data-align="center" data-bgcolor="null" data-bgimage="null" data-pt="0" data-pr="1" data-pb="0" data-pl="1" > <div class="builderColumn__divider"><i class="divider__handle">drag_handle</i></div> <div class="builderColumn__core" data-pt="0" data-pr="0" data-pb="0" data-pl="0" > <div class="widgetRow"> <div class="widget"> <div class="widgetControls"> <div class="widgetControls__buttons"> <div class="widgetControl widgetControl__move"><i>move</i></div> <div class="widgetControl widgetControl__delete"><i>delete</i></div> </div> </div> <div class="widget__divider"><i class="divider__handle">drag_handle</i></div> NEW! </div> </div> </div> </div>';
      section.querySelector('.builderRow').innerHTML = currentCols;
      core = rowsContainer.querySelector('.columnStyle__core');
      currentStyles = core.innerHTML;
      currentStyles += '<div class="columnStyle fg"> <div class="moveSection"> <i>drag_handle</i> </div> <h3>Column X</h3> <div class="columnStyle__controls"> <i class="openColumnSettings">styles</i> <i class="duplicateColumn">duplicate</i> <i class="deleteColumn">delete</i> <i class="menuIndicator">more</i> </div> </div>';
      core.innerHTML = currentStyles;
      this.resetColumns(section, rowsContainer);
      return this.bindColumnStyleFunk();
    },
    resetColumns: function(section, rowsContainer) {
      var numColumns, numStyles, remainingColumns, remainingStyles;
      remainingColumns = section.querySelectorAll('.builderColumn');
      numColumns = remainingColumns.length;
      [].forEach.call(remainingColumns, function(col, i) {
        return col.dataset.column = i + 1;
      });
      remainingStyles = rowsContainer.querySelectorAll('.columnStyle');
      numStyles = remainingStyles.length;
      rowsContainer.classList.remove('col1');
      rowsContainer.classList.remove('col6');
      if (numStyles <= 1) {
        rowsContainer.classList.add('col1');
      } else if (numStyles >= 6) {
        rowsContainer.classList.add('col6');
      }
      return [].forEach.call(remainingStyles, function(style, i) {
        style.dataset.column = i + 1;
        return style.querySelector('h3').innerHTML = "Column " + (i + 1);
      });
    },
    toggleSectionFromTrigger: function(sectionName) {
      var thisSectionStyle;
      if (!this.builderScreen.classList.contains('layoutPane-isOpen')) {
        this.paneToggle('layout');
      }
      thisSectionStyle = document.querySelector(".sectionStyle[data-section='" + sectionName + "']");
      this.rowContainers = this.builderScreen.querySelectorAll('.sectionStyle--row');
      [].forEach.call(this.sectionStyles, function(sectionStyle) {
        return sectionStyle.classList.remove('isOpen');
      });
      [].forEach.call(this.rowContainers, function(rowContainer) {
        return rowContainer.classList.remove('isOpen');
      });
      if (!thisSectionStyle.classList.contains('isOpen')) {
        return thisSectionStyle.querySelector('.sectionStyleHead').click();
      }
    },
    toggleSectionStyles: function(sectionStyle) {
      if (sectionStyle.classList.contains('isOpen')) {
        return sectionStyle.classList.remove('isOpen');
      } else {
        return sectionStyle.classList.add('isOpen');
      }
    },
    highlightSectionFromSidebar: function(section, state) {
      if (state === 'on') {
        return section.classList.add('highlighted');
      } else {
        return section.classList.remove('highlighted');
      }
    },
    highlightColumnFromSidebar: function(column, state) {
      if (state === 'on') {
        return column.classList.add('highlighted');
      } else {
        return column.classList.remove('highlighted');
      }
    },
    activateWidgetResize: function(widget) {
      widget.classList.add('widgetResizeActive--right');
      return widget.previousSibling.previousSibling.classList.add('widgetResizeActive--left');
    },
    deactivateWidgetResize: function(widget) {
      widget.classList.remove('widgetResizeActive--right');
      return widget.previousSibling.previousSibling.classList.remove('widgetResizeActive--left');
    },
    paneToggle: function(pane) {
      var _t, state;
      _t = this;
      if (_t.openPane) {
        if (pane === "menuIcon") {
          _t.lastOpenPane = _t.openPane;
          _t.builderScreen.classList.remove('widgetsPane-isOpen', 'layoutPane-isOpen', 'pageStylesPane-isOpen', 'seoPane-isOpen');
          _t.openPane = null;
        } else if (pane === _t.openPane) {
          _t.lastOpenPane = _t.openPane;
          _t.builderScreen.classList.remove('widgetsPane-isOpen', 'layoutPane-isOpen', 'pageStylesPane-isOpen', 'seoPane-isOpen');
          _t.openPane = null;
        } else {
          _t.lastOpenPane = pane;
          _t.builderScreen.classList.remove('widgetsPane-isOpen', 'layoutPane-isOpen', 'pageStylesPane-isOpen', 'seoPane-isOpen');
          _t.builderScreen.classList.add(pane + "Pane-isOpen");
          _t.openPane = pane;
        }
        return _t.paneSwap(state = 'off');
      } else {
        if (pane === "menuIcon") {
          _t.builderScreen.classList.add(_t.lastOpenPane + "Pane-isOpen");
          return _t.openPane = _t.lastOpenPane;
        } else {
          _t.builderScreen.classList.add(pane + "Pane-isOpen");
          return _t.openPane = pane;
        }
      }
    },
    paneSwap: function(state, pane, paneData) {
      if (state === 'off') {
        this.paneSwapArea = null;
        return document.querySelector('.builderPane__layoutPane').classList.remove('settings-isOpen', 'settings-isOpen--page', 'settings-isOpen--section', 'settings-isOpen--column');
      } else {
        this.populateSettingsPane[pane](paneData);
        return document.querySelector('.builderPane__layoutPane').classList.add("settings-isOpen", "settings-isOpen--" + pane);
      }
    },
    populateSettingsPane: {
      'page': function(paneData) {
        var _t, bgColorArea, bgImageArea, color, image, pagePane;
        _t = leadpagesUX.sectionColumnControls;
        pagePane = document.querySelector('.stylesPane__page');
        bgColorArea = pagePane.querySelector('.option--bgcolor');
        _t.toggleBgColor(bgColorArea, color = paneData.bgcolor);
        bgImageArea = pagePane.querySelector('.setting__bgimage');
        return _t.toggleBgImage(bgImageArea, image = paneData.bgimage);
      },
      'section': function(paneData) {
        var _t, bgColorArea, bgImageArea, color, header, image, sectionsPane, spacingArea, spacingData;
        _t = leadpagesUX.sectionColumnControls;
        sectionsPane = document.querySelector('.stylesPane__section');
        header = sectionsPane.querySelector('.stylesPane__head');
        header.querySelector('h1').innerHTML = "\"" + paneData.name + "\" Settings";
        bgColorArea = sectionsPane.querySelector('.option--bgcolor');
        _t.toggleBgColor(bgColorArea, color = paneData.bgcolor);
        bgImageArea = sectionsPane.querySelector('.setting__bgimage');
        _t.toggleBgImage(bgImageArea, image = paneData.bgimage);
        spacingArea = sectionsPane.querySelector('.stylesPane__option--spacing');
        spacingData = {
          pt: paneData.pt,
          pr: paneData.pr,
          pb: paneData.pb,
          pl: paneData.pl
        };
        return _t.toggleSpacing(spacingArea, spacingData);
      },
      'column': function(paneData) {
        var _t, alignment, alignmentArea, bgColorArea, bgImageArea, color, columnsPane, header, image, innerSpacingArea, innerSpacingData, spacingArea, spacingData;
        _t = leadpagesUX.sectionColumnControls;
        columnsPane = document.querySelector('.stylesPane__column');
        header = columnsPane.querySelector('.stylesPane__head');
        header.querySelector('h1').innerHTML = "Column " + paneData.column + " Settings";
        bgColorArea = columnsPane.querySelector('.option--bgcolor');
        _t.toggleBgColor(bgColorArea, color = paneData.bgcolor);
        bgImageArea = columnsPane.querySelector('.setting__bgimage');
        _t.toggleBgImage(bgImageArea, image = paneData.bgimage);
        spacingArea = columnsPane.querySelector('.stylesPane__option--spacing');
        spacingData = {
          pt: paneData.pt,
          pr: paneData.pr,
          pb: paneData.pb,
          pl: paneData.pl
        };
        _t.toggleSpacing(spacingArea, spacingData);
        innerSpacingArea = columnsPane.querySelector('.stylesPane__option--innerSpacing');
        innerSpacingData = {
          pt: paneData.innerPt,
          pr: paneData.innerPr,
          pb: paneData.innerPb,
          pl: paneData.innerPl
        };
        _t.toggleSpacing(innerSpacingArea, innerSpacingData);
        alignmentArea = columnsPane.querySelector('.stylesPane__option--align');
        return _t.toggleAlignment(alignmentArea, alignment = paneData.align);
      }
    },
    toggleBgImage: function(bgImageArea, image) {
      if (image !== "null" && image !== null) {
        bgImageArea.querySelector('span').innerHTML = image;
        return bgImageArea.classList.remove('noimage');
      } else {
        bgImageArea.querySelector('span').innerHTML = 'Choose Image';
        return bgImageArea.classList.add('noimage');
      }
    },
    toggleBgColor: function(bgColorArea, color) {
      if (bgColorArea.querySelector('.colorOption.active')) {
        bgColorArea.querySelector('.colorOption.active').classList.remove('active');
      }
      if (color !== "null" && color !== null) {
        bgColorArea.querySelector(".colorOption--" + color).classList.add('active');
        return bgColorArea.classList.remove('nocolor');
      } else {
        return bgColorArea.classList.add('nocolor');
      }
    },
    toggleSpacing: function(spacingArea, spacingData) {
      var bottomRotator, leftRotator, rightRotator, topRotator;
      topRotator = spacingArea.querySelector('.option--topSpacing .option__rotator');
      rightRotator = spacingArea.querySelector('.option--rightSpacing .option__rotator');
      bottomRotator = spacingArea.querySelector('.option--bottomSpacing .option__rotator');
      leftRotator = spacingArea.querySelector('.option--leftSpacing .option__rotator');
      this.setSpacingValue(topRotator, spacingData.pt);
      this.setSpacingValue(rightRotator, spacingData.pr);
      this.setSpacingValue(bottomRotator, spacingData.pb);
      return this.setSpacingValue(leftRotator, spacingData.pl);
    },
    toggleAlignment: function(alignmentArea, alignment) {
      if (alignmentArea.querySelector('.stylesPane__option__choice.isActive')) {
        alignmentArea.querySelector('.stylesPane__option__choice.isActive').classList.remove('isActive');
      }
      return alignmentArea.querySelector(".stylesPane__option__choice--" + alignment).classList.add('isActive');
    },
    setSpacingValue: function(rotator, val) {
      rotator.dataset.val = val;
      return rotator.querySelector('.option__rotator--value').innerHTML = val;
    },
    changeAreaBackgroundImage: function(bgImageArea, removeClick) {
      var newImage;
      if (bgImageArea.classList.contains('noimage')) {
        newImage = 'bkg.jpg';
        this.paneSwapArea.dataset.bgimage = newImage;
        this.paneSwapArea.style.backgroundImage = "url('../images/" + newImage + "')";
        return this.toggleBgImage(bgImageArea, newImage);
      } else if (removeClick && window.confirm('Are you sure you want to remove this background image?')) {
        newImage = 'null';
        this.paneSwapArea.dataset.bgimage = null;
        this.paneSwapArea.style.backgroundImage = "none";
        return this.toggleBgImage(bgImageArea, newImage);
      }
    },
    changeAreaColor: function(bubble) {
      var bgColorArea, insideTheLines, newColor;
      bgColorArea = bubble.parentElement.parentElement;
      newColor = bubble.dataset.color;
      this.toggleBgColor(bgColorArea, newColor);
      this.paneSwapArea.dataset.bgcolor = newColor;
      insideTheLines = this.paneSwapArea;
      if (this.paneSwapArea.classList.contains('builderColumn')) {
        insideTheLines = this.paneSwapArea.querySelector('.builderColumn__core');
      }
      if (bubble.classList.contains('removeColor')) {
        return insideTheLines.style.backgroundColor = "transparent";
      } else {
        return insideTheLines.style.backgroundColor = "#" + newColor;
      }
    },
    changeAlignment: function(alignmentOption) {
      var alignmentArea, newAlignment;
      alignmentArea = alignmentOption.parentElement.parentElement;
      newAlignment = alignmentOption.dataset.align;
      this.toggleAlignment(alignmentArea, newAlignment);
      return this.paneSwapArea.dataset.align = newAlignment;
    },
    setSpacingVisuals: function(field, val, optionalTarget) {
      if (optionalTarget) {
        return this.paneSwapArea.querySelector(optionalTarget).dataset[field] = val;
      } else {
        return this.paneSwapArea.dataset[field] = val;
      }
    },
    decreaseRotator: function(rotator) {
      var field, newVal, optionalTarget, value;
      value = rotator.dataset.val;
      if (!(value <= 0)) {
        newVal = parseInt(rotator.dataset.val, 10) - 1;
        this.setSpacingValue(rotator, newVal);
        field = rotator.dataset.field;
        optionalTarget = rotator.dataset.target;
        return this.setSpacingVisuals(field, newVal, optionalTarget);
      }
    },
    increaseRotator: function(rotator) {
      var field, newVal, optionalTarget, value;
      value = rotator.dataset.val;
      if (!(value >= 10)) {
        newVal = parseInt(rotator.dataset.val, 10) + 1;
        this.setSpacingValue(rotator, newVal);
        field = rotator.dataset.field;
        optionalTarget = rotator.dataset.target;
        return this.setSpacingVisuals(field, newVal, optionalTarget);
      }
    }
  };

}).call(this);
