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
                Title
            </th>
            <th> File </th>
            <th style="width:100px; min-width:100px;"> &nbsp; </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($cvs as $key=>$cv)
            <tr>
                <td class="align-middle col-checker">
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                            id="p{{$key}}"> <label class="custom-control-label" for="p{{$key}}"></label>
                    </div>
                </td>
                <td>
                    <a href="#" class="tile tile-img mr-1"><img class="img-fluid"
                            src="{{asset($cv->pic_address)}}" alt="Card image cap"></a> <a
                    href="#">{{$cv->title}}</a>
                </td>
                <td class="align-middle">
                    <a href="{{route('admin.cv.show',['cv' => $cv->id])}}" target="_blank">View: {{$cv->title}}'s Resume</a>
                     </td>
                <td class="align-middle text-right">
                    <a href={{route('admin.cv.edit',[$cv->id])}} title="Edit" class="btn btn-sm btn-icon btn-secondary"><i
                            class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                    <form action={{route('admin.cv.destroy',[$cv->id])}} title="Delete" method="post" class="btn btn-sm btn-icon btn-secondary">
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