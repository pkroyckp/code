<html>
<head>
<title>
simple
</title>
</head>
<body>
<script>
var vidyoConnector;
function onVidyoClientLoaded(status){
console.log("VidyoClient load state-"+ status.state);
if(status.state=="READY")
{
VC.CreateVidyoConnector({
viewId:"renderer",
viewStyle:"VIDYO_CONNECTORVIEWSTYLE_Default",
remoteParticipants:80,
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
host:"77242a.vidyo.io",
token:"cHJvdmlzaW9uAFByYWRpcEA3NzI0MmEudmlkeW8uaW8ANjM3NTQ1MjU5MzMAADUwZjUyMzY0ZmQ0YzUzNDgxM2FjMTcyNGVmMTA4Mzc1OTIwM2Q5YTEyZGM5MTFkMzM5YmE2MjY0MjUxYTc5ODMzNzliMTg5MWViYWUxNTdmN2Q4NThlMmMxMGIzY2NiOA==",
displayName:"Pradip",
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
