<?php
// Temporary maintenance helper: reset OPcache + strip BOM from key files, then self-delete if asked.
// Usage: /opcache-reset.php?fix=1&self=1
header('Content-Type: text/plain');

$fixed = [];

function strip_bom($path){
  if(!is_file($path)) return false;
  $s = file_get_contents($path);
  if($s === false) return false;
  if (substr($s,0,3) === "\xEF\xBB\xBF"){
    file_put_contents($path, substr($s,3));
    return true;
  }
  return false;
}

if (isset($_GET['fix'])){
  $targets = [
    __DIR__ . '/../app/Http/Controllers/FrontendController.php',
    __DIR__ . '/../routes/web.php',
    __DIR__ . '/../resources/views/layouts/master.blade.php',
  ];
  foreach ($targets as $f){
    if (strip_bom($f)) $fixed[] = $f;
  }
  // Optional: scan a few directories shallowly
  $dirs = [__DIR__ . '/../app/Http/Controllers'];
  foreach ($dirs as $d){
    foreach (glob($d.'/*.php') as $p){ if(strip_bom($p)) $fixed[]=$p; }
  }
}

echo "Stripped BOM from: \n" . (empty($fixed)?"(none)":implode("\n", $fixed)) . "\n\n";

if (function_exists('opcache_reset')){
  echo opcache_reset() ? "OPcache reset: OK\n" : "OPcache reset: FAILED/disabled\n";
} else {
  echo "OPcache reset: function not available\n";
}

if (isset($_GET['self'])){
  @unlink(__FILE__);
  echo "Self-deleted: yes\n";
}
?>