<?php 
$vr = explode("\n", $docker_info);

?>
<table style="width:100%">

  <tr>
    <td><div class="card" style="width: 45rem;">
  <h2>Docker Versiyon</h2>
  <b><div class="card-body">
  <pre class="card-text"><?php echo $vr[1]; ?></pre>
  </div>
</div></td>
    <td><div class="card2" style="width: 45rem;">
  <h2>Servis</h2>
  <b><div class="card-body">
    <pre class="card-text"><?php echo $container_info; ?></pre>
  </div>
</div></td>
  </tr>
</table>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Konteynır Listesi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Çalışan Konteynırlar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Docker Kurulum</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><pre id="tab1"><?php echo $container_info; ?></pre></div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><pre id="tab2"><?php echo $runContainer_info; ?></pre></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">http://www.inancdelibalta.com.tr/2018/10/16/pardus-sunucu-uzerine-docker-kurulumu/</div>
</div>




<style>
table, tr, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 3px;
  border-spacing: 5px;
  text-align: center;
}

.card-text{
  height: 100px;
}
.nav{
  display: flex;
  justify-content: center;
}
</style>