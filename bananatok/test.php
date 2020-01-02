<?
?>
<html>
	<head></head>
	<body>
		<div style="height:390px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 99.5%;"><div style="height:390px;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=5&pref_coin_id=1520&graph=yes" width="100%" height="390" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none;font-size:11px">Coinlib</a></div></div>	
	<style>			
            #coinreaders_iframe { 
                height:100vh; 
                width:99.5%; 
				max-height: 413px;
            } 
            h1 { 
                color:green; 
            } 
        </style>

		<iframe id="coinreaders_iframe" scrolling="no" src="bananatalk.php"></iframe>
		<script type="text/javascript">
		////////////////////////////////////////////////////////////////////////////////

		// Determine how the browser should listen for messages from other windows. If
		// `addEventListener` exists, then use that. Otherwise, use `attachEvent`
		// because an older browser is probably being used. Also, use a callback to
		// handle messages so that both methods of "message listening" can be routed to
		// the same function. The callback in this example is `handleMessage` and it
		// will take one argument (the `MessageEvent` object).
		if (window.addEventListener) {
			window.addEventListener("message", handleMessage);
		} else {
			window.attachEvent("onmessage", handleMessage);
		}

		/**
		 * Handle a message that was sent from some window.
		 *
		 * @param {MessageEvent} event The MessageEvent object holding the message/data.
		 */
		function handleMessage(event) {
			console.log("Received a message from " + event.origin + ".");

			// When one window sends a message, or data, to another window via
			// `parent.postMessage()`, the message (the first argument) in the
			// `parent.postMessage()` call is accessible via `event.data` here.
			var messageFromSender = event.data;
			// Do something with the data.
			console.log(messageFromSender);
			if(event.data.indexOf('html') > -1)
				location.href = 'http://m.coinreaders.com' + event.data;
		}
		</script>
	</body>
</html>

<? die ?>
