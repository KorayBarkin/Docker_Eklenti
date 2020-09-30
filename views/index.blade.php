<ul class="nav nav-tabs" role="tablist" style="margin-bottom: 15px;">
  <li class="nav-item">
    <a class="nav-link active" onclick="getIP()" href="#ipTab" data-toggle="tab">IP Bilgileri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="getCPU()" href="#cpuTab" data-toggle="tab">CPU Bilgileri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="getHost()" href="#hostTab" data-toggle="tab">Host Bilgileri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" onclick="getDocker()" href="#dockerTab" data-toggle="tab">Docker Versiyon Bilgileri</a>
  </li>
</ul>

<div class="tab-content">
    <div id="ipTab" class="tab-pane active">
    <pre id="ipPre"></pre>
    </div>

    <div id="cpuTab" class="tab-pane">
    <table id="cpuTable"></table>
    </div>

    <div id="hostTab" class="tab-pane">
    <pre id="hostPre"></pre>
    </div>

    <div id="dockerTab" class="tab-pane">
    <pre id="dockerPre"></pre>
    </div>
</div>

<script>
function getIP(){
  request(API("getIPinfo"), new FormData(), function(response){
    msg = JSON.parse(response).message
    $('#ipPre').html(msg);
  }, function(response){
    console.log("Error!");
  })
}
function getHost(){
  request(API("getHOSTinfo"), new FormData(), function(response){
    msg = JSON.parse(response).message
    $('#hostPre').html(msg);
  }, function(response){
    console.log("Error!");
  })
}
function getCPU(){
  request(API("getCPUinfo"), new FormData(), function(response){
    msg = JSON.parse(response).message
    msg.forEach(function myFunction(item, index) {
  document.getElementById("cpuTable").innerHTML += "<tr><td>"+ item + "</td></tr>";
})
  }, function(response){
    console.log("Error!");
  })
}
function getDocker(){
  request(API("getDockerinfo"), new FormData(), function(response){
    msg = JSON.parse(response).message
    $('#dockerPre').html(msg[1]);
  }, function(response){
    console.log("Error!");
  })
}
if(location.hash === ""){
    getIP();
}
</script>

<style>
td{
  border: 2px solid black;
}
</style>