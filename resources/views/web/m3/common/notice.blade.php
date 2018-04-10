<div class="notice-row">
    <div class="noticeBox">
      <div class="w">
        <div class="title">
          最新公告：
        </div>
        <div class="bd2">
          <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
            <marquee id="mar0" scrollamount="3" scrolldelay="100" direction="left"
                     onmouseover="this.stop();" onmouseout="this.start();">
                     
                     @foreach($system_notices as $v)
                        <span>
                           <b>{{ $v->title }}</b>
                           {{ $v->content }}
                        </span>
                     @endforeach
                              
                          </marquee>
          </div>
        </div>
      </div>
    </div>
  </div>