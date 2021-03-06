@extends('layout.master')
@section('content')
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span><span class="crumb-step">&gt;</span><span class="crumb-name">评估政策</span></div>
        </div>
        
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    {{--<div class="result-list">--}}
                        {{--<a href="insert"><i class="icon-font"></i>新增作品</a>--}}
                        {{--<a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>--}}
                        {{--<a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>--}}
                    {{--</div>--}}
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            {{--<th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>--}}
                            {{--<th>排序</th>--}}
                            <th>ID</th>
                            <th>标题</th>
                            {{--<th>审核状态</th>--}}
                            {{--<th>点击</th>--}}
                            <th>发布人</th>
                            <th>更新时间</th>
                            {{--<th>评论</th>--}}
                            <th>操作</th>
                        </tr>
                        @foreach($data as $inputs)
                            <tr>
                                {{--<td class="tc"><input name="id[]" value="59" type="checkbox"></td>--}}
                                {{--<td>--}}
                                    {{--<input name="ids[]" value="59" type="hidden">--}}
                                    {{--<input class="common-input sort-input" name="ord[]" value="0" type="text">--}}
                                {{--</td>--}}
                                <td>{{$inputs->id}}</td>
                                <td>{{$inputs->title}}</td>
                                {{--<td title="发哥经典"><a target="_blank" href="#" title="发哥经典">{{$inputs->title}}</a> …--}}
                                {{--</td>--}}
                                {{--<td>0</td>--}}
                                {{--<td>2</td>--}}
                                <td>{{$inputs->author}}</td>
                                <td>{{$inputs->created_at}}</td>
                                {{--<td></td>--}}
                                <td>
                                    {{--<a class="link-update" href="#">修改</a>--}}
                                    <a class="link-del" href="destroy?table=evapoly&id={{$inputs->id}}">删除</a>
                                </td>
                            </tr>
                        @endforeach
                        {{--<tr>--}}
                            {{--<td class="tc"><input name="id[]" value="58" type="checkbox"></td>--}}
                            {{--<td>--}}
                                {{--<input name="ids[]" value="58" type="hidden">--}}
                                {{--<input class="common-input sort-input" name="ord[]" value="0" type="text">--}}
                            {{--</td>--}}
                            {{--<td>58</td>--}}
                            {{--<td title="黑色经典"><a target="_blank" href="#" title="黑色经典">黑色经典</a> …--}}
                            {{--</td>--}}
                            {{--<td>0</td>--}}
                            {{--<td>35</td>--}}
                            {{--<td>admin</td>--}}
                            {{--<td>2013-12-30 22:34:00</td>--}}
                            {{--<td></td>--}}
                            {{--<td>--}}
                                {{--<a class="link-update" href="#">修改</a>--}}
                                {{--<a class="link-del" href="#">删除</a>--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                    </table>
                    {{--<div class="list-page"> 2 条 1/1 页</div>--}}
                </div>
            </form>
        </div>
@stop