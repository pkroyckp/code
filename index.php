<html>
<head>
<title>
simple
</title>
</head>
<body>
  <?php
echo"Pradip VideoChat App";
?>
<script>
var vidyoConnector;
function onVidyoClientLoaded(status){
console.log("VidyoClient load state-"+ status.state);
if(status.state=="READY")
{
VC.CreateVidyoConnector({
viewId:"renderer",
viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
remoteParticipants:4,
logFileFilter:"error",
logFileName:"",
userData:""
}).then(function (vc)
{
console.log("Create success");
vidyoConnector=vc;
}).catch(function(error){


});
/* Local camera change initiated by user. Note: this is an arbitrary function name. */
function handleCameraChange() {
  /* Hide view of previously selected camera. */
  vidyoConnector.HideView({
    viewId: "Div where camera is rendered"
  });
  /* Select new camera */
  vidyoConnector.SelectLocalCamera({
    localCamera: camera
  });
}

}
}
function joinCall(){
vidyoConnector.Connect({
host:"prod.vidyo.io",
token:"cHJvdmlzaW9uAHByYWRpcEA3NzI0MmEudmlkeW8uaW8ANjM3NTQ1MTQ2MTYAAGU5MTllNmQyMGQ3ZTZhYTAyMWUxYWI5MGVkZjg2NjMxZjkxOTgwNzY4ZGVlYTc3M2VmZWZjMmRlM2QwNTQzYzQwZGIwYTA2MTRmZjM4YzkxYWM4MjE5NWE2YTg0MjM4YQ==",
displayName:"pradip",
resourceId:"Class X",
onSuccess: function()
{
console.log("Connected");
},
onFailure: function(reason){ 
console.log("Connection failed");
},
onDisconnected: function(reason)
{
console.log("disconnected-" +reason);
}
 })
}
</script>
<script src="https://static.vidyo.io/4.1.8.1/javascript/VidyoClient/VidyoClient.js?onload=onVidyoClientLoaded"></script>
<h3>
video</h3>
<button onClick="joinCall()">Connect</button>
<div id="renderer"> </div>
</body>
</html>
