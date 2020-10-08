<?php
              function GenText($text, $color, $font, $size, $space,$style) {


        $text = $text;

        $svg = new EasySVG();
        $svg->setFontSVG("wp-content/themes/Logo/SVGFonts/". $style . $font);
        $svg->setFontSize($size);
        $svg->setFontColor($color);
        $svg->setLineHeight(1);
        $svg->setLetterSpacing($space);
        $svg->setUseKerning(false);
        $svg->addText($text);
        // set width/height according to text
        list($textWidth, $textHeight) = $svg->textDimensions($text);
        $svg->addAttribute("width", 3+$textWidth."px");
        $svg->addAttribute("height", 20+$textHeight."px");
        echo $svg->asXML();
};

?>
              <div class="LogoBox" style="background-color: <?php echo $PaletteOrder[1][0] ?>;">
              <div class="LogoContainer">

                <div id="svgText"><?php GenText(ucwords(strtolower($nm)), $PaletteOrder[1][1], $ModernNormal[0], 54-4,-0.07,'Modern/Normal/');  ?></div>
                <div id="svgDecor"><?php GenText('.', '#FB4E58', $ModernNormal[0], 54-4,-0.07,'Modern/Normal/');  ?></div>
                <div id="svgTrademarkExtra"><?php GenText('®', $PaletteOrder[1][1], 'AxiataBold.svg', 17,-0.05,'Modern/Normal/');  ?></div>

              </div>
                <div id="FancyText"><?php GenText('Clean. Modern. Confident.', $PaletteOrder[1][1], 'AxiataBold.svg', 8,-0.09,'Modern/Normal/')?></div>

              </div>
