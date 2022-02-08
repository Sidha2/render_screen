<?php
namespace Bedri\RenderScreen;

class RenderScreen {

    private function replaceCommandOutput(array $output) {
        static $oldLines = 0;
        $numNewLines = count($output) - 1;
       
        if ($oldLines == 0) {
          $oldLines = $numNewLines;
        }
       
        echo implode(PHP_EOL, $output);
        echo chr(27) . "[0G";
        echo chr(27) . "[" . $oldLines . "A";
        $numNewLines = $oldLines;
      }
      
    public function renderOutput($input) {
        $arr = explode(PHP_EOL, $input);
      
        $this->replaceCommandOutput($arr);
      } 

}