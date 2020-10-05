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
            <th> Mobile </th>
            <th style="width:100px; min-width:100px;"> &nbsp; </th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $key=>$user)
            <tr>
                <td class="align-middle col-checker">
                    <div class="custom-control custom-control-nolabel custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="selectedRow[]"
                            id="p{{$key}}"> <label class="custom-control-label" for="p{{$key}}"></label>
                    </div>
                </td>
                <td>
                    <a href="#" class="tile tile-img mr-1"><img class="img-fluid"
                            src="{{asset($user->pic_addr)}}" alt="Card image cap"></a> <a
                    href="#">{{$user->f_name}} {{$user->l_name}}</a>
                </td>
                <td class="align-middle"> {{$user->email}} </td>
                <td class="align-middle"> {{$user->mobile}} </td>
                <td class="align-middle text-right">
                    <a href={{route('admin.user.edit',[$user->id])}} title="Edit" class="btn btn-sm btn-icon btn-secondary"><i
                            class="fa fa-pencil-alt"></i> <span class="sr-only">Edit</span></a>
                    @if ($status !== 1)
                        <form action={{route('admin.user.restore',[$user->id])}} title="Restore" method="post" class="btn btn-sm btn-icon btn-secondary">
                            @csrf
                            <a href="javascript:;" onclick="parentNode.submit();" class="btn btn-sm btn-icon btn-secondary"><i
                                class="fas fa-undo"></i> <span
                                class="sr-only">Restore</span></a>
                        </form>
                    @endif
                    @if ($status == 1)
                        <form action={{route('admin.user.block',[$user->id])}} title="Block" method="post" class="btn btn-sm btn-icon btn-secondary">
                            @csrf
                            <a href="javascript:;" onclick="parentNode.submit();" class="btn btn-sm btn-icon btn-secondary"><i
                                class="fas fa-ban"></i> <span
                                class="sr-only">Ban</span></a>
                        </form>
                        <form action={{route('admin.user.suspend',[$user->id])}} title="Suspend" method="post" class="btn btn-sm btn-icon btn-secondary">
                            @csrf
                            <a href="javascript:;" onclick="parentNode.submit();" class="btn btn-sm btn-icon btn-secondary"><i
                                class="fas fa-pause"></i> <span
                                class="sr-only">Suspend</span></a>
                        </form>
                    @endif      
                    <form action={{route(($status == 4)?'admin.user.destroy':'admin.user.softdestroy',[$user->id])}} title="Delete" method="post" class="btn btn-sm btn-icon btn-secondary">
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