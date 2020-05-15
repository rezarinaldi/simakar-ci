/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

var $layoutSkinChangerId = $("#layout-skins-changer");
var $layoutSkinChangerContainer = $layoutSkinChangerId.find(
  ".skin-btn[data-value]"
);

$layoutSkinChangerContainer.on("click", function (eve) {
  eve.preventDefault();

  var $thisSkinBtn = $(this);
  var targetData = "value";
  var selectedLayoutColor = $thisSkinBtn.data(targetData);
  var layoutPrefixClass = "layout-skin skin-";
  var $targetLayoutEl = $("body");
  var selectedSkinIconClass = "fas fa-check";
  var iconSelector = "> i";

  $.each($layoutSkinChangerContainer, function (indexInput, elementInput) {
    var $targetSkin = $(elementInput);
    var skinName = $targetSkin.data(targetData);

    $targetSkin.find(iconSelector).removeClass(selectedSkinIconClass);
    $targetLayoutEl.removeClass(`${layoutPrefixClass}${skinName}`);
  });

  // Set layout skin
  $thisSkinBtn.find(iconSelector).addClass(selectedSkinIconClass);
  $targetLayoutEl.addClass(`${layoutPrefixClass}${selectedLayoutColor}`);
});
