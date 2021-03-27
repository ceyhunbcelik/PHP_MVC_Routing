<?php

# Routers
foreach(glob(__DIR__ . '/Routers/*.php') as $routerFile)
  require_once($routerFile);
