<div style="background:black;">
 
  <div class="bigScreen">
        <div class="leftScreen"></div>
        <div class="rightScreen">
        <div class="chat-header">
          <!-- back button -->
          <a href="/dashboard">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="back-btn">
              <path class="back-icon" d="M9.41 11H17a1 1 0 0 1 0 2H9.41l2.3 2.3a1 1 0 1 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 0 1 1.42 1.4L9.4 11z" />
            </svg>
          </a>
          <div class="user-name">{{ $user->name }}</div>
          <!-- 3 dots -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="menu-dots">
            <path class="dots-icon" fill-rule="evenodd" d="M12 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 7a2 2 0 1 1 0-4 2 2 0 0 1 0 4z" />
          </svg>
        </div>

        <div class="chat-messages">
        @foreach($messages as $message)
          @if($message['sender'] != auth()->user()->name)
            <div class="message clearfix">
              <div class="message-left">
                <p><b>{{ $message['sender'] }}: </b>{{ $message['message'] }}</p>
                <p class="send_time">{{ \Carbon\Carbon::parse($message['created_at'])->format('h:iA') }}</p>
              </div>
            </div>
          @else
            <div class="message clearfix">
              <div class="message-right">
                <p>{{ $message['message'] }} <b>: You</b></p>
                <p class="send_time">{{ \Carbon\Carbon::parse($message['created_at'])->format('h:iA') }}</p>
              </div>
            </div>
          @endif
        @endforeach
      </div>


      <form wire:submit="sendMessage()">
        <div class="message-input">
          <textarea
            class="message-textarea"
            rows="1"
            wire:model="message"
            placeholder="Message..."
          ></textarea>
          <button class="send-btn" type="submit">
            <svg class="send-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z" />
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
 <script>
  window.onload = function() {
    var chatMessages = document.querySelector('.chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
  };
</script>

</div>
