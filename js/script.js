$(function(){
	
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
	
	var ts = (new Date()).getTime() + tempTimer*1000; //tempTimer = minutes * seconds
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(minutes, seconds){
			
			/*var message = "";
			
			message += days + " day" + ( days==1 ? '':'s' ) + ", ";
			message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
			message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
			message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
			
			if(newYear){
				message += "left until the new year!";
			}
			else {
				message += "left to 10 days from now!";
			}
			
			note.html(message);*/
		}
	});
	
});
