<?php
function index(){
    return view("index");
}
function getIPinfo(){
    $ipInfo = runCommand("ip a");
    return respond($ipInfo,200);
}
function getCPUinfo(){
    $cpuInfo = runCommand("cat /proc/cpuinfo");
    $cpuLine = explode("\n", $cpuInfo);
    return respond($cpuLine,200);
}
function getHOSTinfo(){
    $hostInfo = runCommand("hostname");
    return respond($hostInfo,200);
}
function getDockerinfo(){
    $dockerInfo = runCommand("docker version");
    $output = explode("\n", $dockerInfo);
    return respond($output,200);
}
?>