<?php

# Routers
foreach(glob(__DIR__ . '/Routes/*.php') as $routerFile){
  require_once($routerFile);
}
