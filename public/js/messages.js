$(document).ready(function () {
	var str = (window.location + '').split("/");
	var userId = str[str.length - 1];
	var listingId = str[str.length - 2];
	$.ajax({
		type:'GET',
		url: url+"messages/getconversation/"+listingId+"/"+userId,
		dataType: "json",
		success: formatConversation,
		error: function(xhr, err, errThrown) {
			console.log("I failed");
			console.log(err);
			console.log(errThrown);
		}
	});

});

function formatConversation(event) {
	console.log(event);

	$(document).ready(function() {

		var messages = event.messages;
		var users = event.users;

		$("#conversation-title").text("Chatting about listing #" + messages[0].listingId); // TODO: Add check for undefined listing id.

		for (var i = 0; i < messages.length; i++) {
			var row0 = $("<div></div>").addClass("row messages-single").appendTo($("#all-conversation"));

			$(row0).attr("id", "message-thread-" + i);

			var p0 = $("<p></p>").addClass("message").appendTo($(row0));

			//Determine the correct username from senderUserId to display.
			var senderUserId = messages[i].senderUserId;
			var senderUsername;

			for (var j = 0; j < users.length; j++) {


				if (senderUserId == webClientUserID) {
					senderUsername = "You";
					break;
				}

				if (senderUserId == users[j][0].userid) {
					senderUsername = users[j][0].username;
				}
			}

			$(p0).text(senderUsername + ": " + messages[i].message);

		}

	});
}

function onClickSend() {
	var str = (window.location + '').split("/");
	//userID is now defined in the view messages.php!
	var receiverUserID = str[str.length - 1]; //userID of OTHER person!
	var listingID = str[str.length - 2];

	let message = {
		message: $("#message-box").val(),
		listingId: listingID,
		userId: receiverUserID
	};

	$.ajax({
		type:'POST',
		url: url+"messages/createmessage/",
		data: message,
		success: function(event) {
			$.notify(event, "success");

			//Display sent message in chatbox.
			var sentMessageRow = $("<div></div>").addClass("row messages-single").appendTo($("#all-conversation"));
			//$(sentMessageRow).attr("id", "message-thread-" + );
			var sentMsg = $("<p></p>").addClass("message").appendTo($(sentMessageRow));

			$(sentMsg).text("You: " + $("#message-box").val());

			//Clear input textarea after clicking send.
			$("#message-box").val('');

		},
		error: function(xhr, err, errThrown) {
			console.log("I failed");
			console.log(err);
			console.log(errThrown);
		}
	});
}