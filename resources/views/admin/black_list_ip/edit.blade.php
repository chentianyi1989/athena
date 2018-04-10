@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">编辑黑名单IP</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="form" action="{{ route('black_list_ip.update', ['id' => $data->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="ip" class="col-sm-2 control-label">ip地址</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="ip" name="ip" placeholder="127.0.0.1" value="{{ $data->ip }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remark" class="col-sm-2 control-label">备注</label>
                            <div class="col-sm-7">
                                <textarea name="remark" id="remark" rows="3" class="form-control">{{ $data->remark }}</textarea>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-7">
                                <button type="button" class="btn btn-primary submit-form-sync">提交</button>
                                &nbsp;<a href="{{ route('black_list_ip.index') }}" class="btn btn-info">返回</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </section><!-- /.content -->
@endsection