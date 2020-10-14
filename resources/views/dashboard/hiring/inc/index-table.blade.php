<table class="table">
    <thead>
        <tr>
            <th colspan="2" style="min-width:320px">
                <div class="thead-dd dropdown">
                    <span
                        class="custom-control custom-control-nolabel custom-checkbox"><input
                            type="checkbox" class="custom-control-input" id="check-handle">
                        <label class="custom-control-label"
                            for="check-handle"></label></span>
                    <div class="thead-btn" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-caret-down"></span>
                    </div>
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div><a class="dropdown-item"
                            href="#">Select all</a> <a class="dropdown-item"
                            href="#">Unselect all</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="#">Bulk remove</a> <a class="dropdown-item" href="#">Bulk
                            edit</a> <a class="dropdown-item" href="#">Separate actions</a>
                    </div>
                </div>
                Name
            </th>
            <th> Email </th>
            <th>Project Name</th>
            <th>Complete Date</th>
            <th>Budget</th>
            <th style="width:100px; min-width:100px;"> &nbsp; </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($projects as $key=>$project)
            <tr>
                <td class="align-middle col-checker">
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                            id="p{{$key}}"> <label class="custom-control-label" for="p{{$key}}"></label>
                    </div>
                </td>
                <td>
                    <a href="#" class="tile tile-img mr-1"><img class="img-fluid"
                            src="#" alt="Card image cap"></a> <a
                    href="{{route('admin.hiring.show',$project->id)}}">{{$project->name}}</a>
                </td>
                <td class="align-middle">
                    {{$project->email}}    
                </td>
                <td>{{$project->project_name}}</td>
                <td>{{$project->complete_date}}</td>
                <td>{{$project->budget}}</td>
                <td class="align-middle text-right">
                    <form action={{route('admin.hiring.destroy',[$project->id])}} title="Delete" method="post" class="btn btn-sm btn-icon btn-secondary">
                        @csrf
                        @method('delete')
                        <a href="javascript:;" onclick="parentNode.submit();" class="btn btn-sm btn-icon btn-secondary"><i
                            class="far fa-trash-alt"></i> <span
                            class="sr-only">Delete</span></a>
                    </form>
                </td>
            </tr>
        @endforeach   
    </tbody>
</table>