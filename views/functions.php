<?php
function index(){
    $dockerInfo = runCommand("docker version");
    $container = runCommand("sudo docker container ls -a");
    $runContainer = runCommand("sudo docker ps -a");
    return view("index",["docker_info" => $dockerInfo,
     "container_info" => $container,
     "runContainer_info" => $runContainer]);
 }