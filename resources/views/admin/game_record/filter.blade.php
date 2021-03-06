<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">平台类型</span>
                    <select name="api_type" id="api_type" class="form-control">
                        <option value="">--请选择--</option>
                        @foreach($_api_list as $k => $v)
                            <option value="{{ $k }}" @if($api_type == $k) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">游戏账户</span>
                    <input type="text" class="form-control" name="playerName" value="{{ $playerName }}">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">派彩开始时间</span>
                    <input type="text" class="form-control" name="start_at_recalcuTime" id="start_at_recalcuTime" value="{{ $start_at_recalcuTime }}" readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">派彩结束时间</span>
                    <input type="text" class="form-control" name="end_at_recalcuTime" id="end_at_recalcuTime" value="{{ $end_at_recalcuTime }}" readonly>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">下注开始时间</span>
                    <input type="text" class="form-control" name="start_at_betTime" id="start_at_betTime" value="{{ $start_at_betTime }}" readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">下注结束时间</span>
                    <input type="text" class="form-control" name="end_at_betTime" id="end_at_betTime" value="{{ $end_at_betTime }}" readonly>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">搜索</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">重置</button>&nbsp;
<!--                     <a href="{{-- route('admin.syncGameRecord') --}}" class="btn btn-primary btn-xs">同步游戏记录</a> -->
                </div>
            </div>
        </div>
    </form>
</div>
