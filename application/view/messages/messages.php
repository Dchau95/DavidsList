<div class="container main">

	<div class="row user-messages">

		<div class="col-md-1"></div>
		<div class="col-md-10 messages-content">

		<!-- Main chat message window -->

			<div class="row">
				<h3 class="messages-header centered-header" id="conversation-title">Message the owner!</h3>

				<div class="col-md-1"></div>
				<div class="col-md-10  user-message-history" id="all-conversation">

				</div>
				<div class="col-md-1"></div>

			</div>

			<div class="row user-message-to-send">

			<div class=" col-md-12 input-group">
			    <textarea class="form-control messages-send-box" id="message-box" rows="3"></textarea>     
			    <span class="input-group-addon btn btn-primary" onclick="onClickSend()" id="chat-btn-send-reply">Send</span>
			</div>


			</div>

		</div>
		<div class="col-md-1"></div>

	</div>

</div>

<script type="text/javascript" src="<?php echo URL; ?>js/messages.js"></script>

<script type="text/javascript">
	var userID = <?php echo $_SESSION['userid'] ?>;
	<?php echo 'var webClientUserID = ' . json_encode($_SESSION['userid'])?>;
</script>