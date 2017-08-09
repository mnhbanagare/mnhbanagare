  // Generate the user private channel
  var channel = generateUserChannel();

  $(document).ready(function() {

    // we're ready ...
    // check if current browser is Chrome
    var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
    if(!is_chrome) {
      alert("Your browser doesn't support this demo. Please Use Chrome 42+");
    }


      
    // start Chrome Push Manager to obtain device id and register it with Realtime
    // a service worker will be launched in background to receive the incoming push notifications
    var chromePushManager = new ChromePushManager('./service-worker.js', function(error, registrationId){
    console.log(chromePushManager);  
      if (error) {
        alert(error);
        $("#curl").text("Oops! Something went wrong. It seems your browser does not support Chrome Push Notification. Please try using Chrome 42+");
        $("#sendButton").text("No can do ... this browser doesn't support push notifications");
        $("#sendButton").css("background-color","red");
      };

      // connect to Realtime server
	  
	  //$('#channel').text(channel);
	  console.log(registrationId);
	  console.log(channel);
    console.log(error);
	  $('#myid').text(registrationId);
	  //$.post("http://54.209.186.10/send.php", {rcd: registrationId, name: channel}, function(result){
        //alert(channel);
	  //});
	  $.post("https://ec2-54-147-27-10.compute-1.amazonaws.com/push.php", {rcd: registrationId, name: channel}, function(result){
        console.log(result);
    }); 
	  var url = "http://domain/rcd.php?rcd="+registrationId+"&channel="+channel
	  $('#mylink').text(url);
	  //window.open(url, '_blank');
	  
	  $( "#send" ).click(function() {
		//$.post("http://54.209.186.10/rcd.php", {rcd: registrationId}, function(result){
        //alert(channel);
		//});
		var url = "http://54.209.186.10/rcd.php?rcd="+registrationId;
		//window.open(url, '_blank');
		
	  });
	  
    });    
});

// generate a GUID
function S4() {
  return (((1+Math.random())*0x10000)|0).toString(16).substring(1); 
}

// generate the user private channel and save it at the local storage
// so we always use the same channel for each user
function generateUserChannel(){
  userChannel = localStorage.getItem("channel");
  if (userChannel == null || userChannel == "null"){ 
      guid = (S4() + S4() + "-" + S4() + "-4" + S4().substr(0,3) + "-" + S4() + "-" + S4() + S4() + S4()).toLowerCase();               
      userChannel = 'channel-' + guid;
      localStorage.setItem("channel", userChannel);
  }
  return userChannel;
}

// send a message to the user private channel to trigger a push notification
function send(){
  if (client) {
    client.send(channel, "This will trigger a push notification");
  };
}
