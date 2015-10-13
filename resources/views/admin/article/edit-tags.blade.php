@extends('admin.master')

@section('content')
	
	<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Data Tables</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Tables</a>
            </li>
            <li class="active">
                <strong>Data Tables</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>




        
            <div class="row">
                <div class="col-lg-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>添加新分类目录 </h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form method="post" action="/admin/article/add" class="form-horizontal">
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <div class="form-group"><label class="col-sm-2 control-label">名称</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="name"></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">别名</label>
                                    <div class="col-sm-10"><input type="text" class="form-control"> <span class="help-block m-b-none">“别名”是在URL中使用的别称，它可以令URL更美观。通常使用小写，只能包含字母，数字和连字符（-）。</span>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                <div class="form-group"><label class="col-sm-2 control-label">选择节点</label>
                                    <div class="col-md-10"><select class="form-control m-b" name="pid">
                                        <option value="0">无父节点</option>
										@foreach ($categorys as $category)
										<option value="{{$category->id}}"> {{$category->name}} </option>
										@endforeach
                                    </select>
                                    </div>
                                </div>
                                
  
                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary" type="submit">保存改变</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                	<div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>全部文章</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

        <div class="table-responsive" >
        <table class="table table-striped table-bordered table-hover dataTables-example" id="category-table">
        <thead>
        <tr>
        	<th>操作</th>
            <th>名称</th>
            <th>描述</th>
            <th>别名</th>
            <th>总数</th>
        </tr>
        </thead>
        <tbody>
       
        </tbody>
        <tfoot>
        <tr>
        	<th>操作</th>
            <th>名称</th>
            <th>描述</th>
            <th>别名</th>
            <th>总数</th>
        </tr>
        </tfoot>
        </table>
            </div>
        </div>
                </div>
            </div>
<script src="/admin/js/article/categoryList.js"></script>
@stop