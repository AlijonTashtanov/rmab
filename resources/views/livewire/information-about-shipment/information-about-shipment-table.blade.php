@php

    use App\Traits\Status;
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
                    <th>Jo’natma raqami</th>
                    <th>Jo’natma kuni</th>
                    <th>Javobni qabul qilish turi</th>
                    {{--                    <th>Yuboruv geografiyasi</th>--}}
                    <th>Holati</th>
                    <th>Yaratilgan vaqti</th>
                    <th>Actions</th>
                </tr>
                @forelse($items as $item)
                    <tr>
                        <td>{{ (($items->currentpage()-1)*$items->perpage()+($loop->index+1)) }}</td>
                        <td>{{$item->user?->name}}</td>
                        <td>{{$item->shipment_number}}</td>
                        <td>{{$item->shipping_date}}</td>
                        <td>{{$item->getWantTakeName()}}</td>
                        {{--                        <td>{{$item->dispatchGeography?->getTranslation('name','uz')}}</td>--}}
                        <td>{!! $item->getStatusBadgeName() !!}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a href="{{route('admin.'.$this->route.'.show', $item->id)}}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-eye"></i> Batafsil</a>
                            @if($item->status == Status::$status_inactive)
                                <a href="{{route('admin.'.$this->route.'.cancel', $item->id)}}"
                                   class="btn btn-secondary btn-sm"><i
                                        class="fas fa-times"></i> Bekor qilish</a>
                                <a href="{{route('admin.'.$this->route.'.edit', $item->id)}}" class="btn btn-success btn-sm"><i
                                        class="fas fa-check-circle"></i> Javob berish</a>
                            @endif
                            <form action="{{route('admin.'.$this->route.'.destroy', $item->id)}}" method="POST"
                                  class="d-inline-block mt-1">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure?')">
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
