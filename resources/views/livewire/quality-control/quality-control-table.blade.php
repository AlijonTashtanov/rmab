@php
    use App\Traits\Status;
    use App\Models\QualityControl;
@endphp
<div>
    <div class="card">
        <div class="card-header">
            <x-search/>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>№</th>
                    <th>F.I.SH</th>
                    <th>Izoh</th>
                    <th>Manzili</th>
                    <th>Yaratilgan vaqti</th>
                    <th>Holati</th>
                    <th>Baho</th>
                    <th>Actions</th>
                </tr>
                @forelse($items as $item)
                    <tr>
                        <td>{{ (($items->currentpage()-1)*$items->perpage()+($loop->index+1)) }}</td>
                        <td>{{$item->user?->name}}</td>
                        <td>{{$item->comment}}</td>
                        <td>{{$item->user?->address}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{!! $item->getStatusBadgeName() !!}</td>
                        <td>
                            @for($i=1; $i <= $item->grade; $i++)
                                <i class="fas fa-star" style="color: #e7e75e"></i>
                            @endfor
                            @for($i=1;$i<=QualityControl::$max_grade-$item->grade;$i++)
                                <i class="far fa-star"></i>
                            @endfor
                        </td>
                        <td>
                            <a href="{{route('admin.'.$this->route.'.show', $item->id)}}" class="btn btn-primary"><i
                                        class="fas fa-eye"></i> Batafsil</a>
                            @if($item->status == Status::$status_inactive)
                                <a href="{{route('admin.'.$this->route.'.edit', $item->id)}}" class="btn btn-success"><i
                                            class="fas fa-check-circle"></i> O'qildi</a>
                            @endif
                            <form action="{{route('admin.'.$this->route.'.destroy', $item->id)}}" method="POST"
                                  class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i> O'chirish
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">No data found :(</td>
                    </tr>
                @endforelse
            </table>
            <div class="d-flex justify-content-between py-3">
                <div>
                    <select class="form-control form-select" id="pagination" wire:model="perPage">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                {{$items->links()}}
            </div>
        </div>
    </div>
</div>
