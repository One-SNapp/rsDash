<link rel="stylesheet" type="text/css" href="css/settings.css"/>
<!-- The following jQuery is non functional -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script>
function return() {
    $("#logo").css("display", "visible");
    $("#searchRes").css("display", "visible");
    $(".results").show();
    $("#nav").show();
    $("#searchbar").show();
    $("#red").hide();
}
function loadSkill() {
  $("#mainSettingsContent").load("settingsSkils.php");
  $("#nav").hide();
}
</script>
<div id="red">
<ul>
  <li><a href="#main">Main - <span class="light">  Usercount, stats and other information </span></a></li>
  <li><a href="#" onclick="loadSkill(); return false;">Skills - <span class="light"> Add or remove more user skills </span></a></li>
  <li><a href="settings/settings.php">Settings - <span class="light"> rsChat settings </span></a></li>
  <li><a href="about.html">About - <span class="light"> About rsDash </span></a></li>
  <br />
  <li><a href="" onclick="return(); return false;">Exit</a></li>
</ul>
<div id="mainSettingsContent">  <iframe id="frame" src="settings/mainSettingsSandbox.php" width="100%" height="100%"  frameBorder="0" class="frame"></iframe></div>
</div>
