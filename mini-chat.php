


<div class="side-last-winner">
  <div class="chat-scroll"></div>
<!--  <div class="chat-title">
    Мини чат
    <div class="chat-o">
      Онлайн:
      <span class="online-num" id="inf1">0</span>
    </div> 
  </div>-->
  <div id="mcaht" class="left-chat"></div>
  <script>
load_messes();
setInterval(load_messes,1000);

function sendGo(e) {
    if (e.keyCode == 13) {
    $("#send_massage").click();
    }
    }
    
</script>
