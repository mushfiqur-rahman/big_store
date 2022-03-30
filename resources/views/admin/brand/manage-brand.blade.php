@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">{{ Session::get('message') }}</h3>
                    <table class="table table-bordered">
                        <thead class="bg-primary">
                        <tr>
                            <th scope="col">Si No</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Brand Description</th>
                            <th scope="col">Publication Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        @php($i =1)

                        @foreach($brands as $brand)

                            <tbody>
                            <tr>
                                <td scope="row">{{ $i++ }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{ $brand->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>

                                    @if($brand->publication_status == 1)

                                        <a href="{{ route('unpublished-brand', ['id'=>$brand->id]) }}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>

                                    @else

                                        <a href="{{ route('published-brand', ['id'=>$brand->id]) }}" class="btn btn-warning btn-xs">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>

                                    @endif

                                    <a href="{{ route('edit-brand', ['id'=>$brand->id]) }}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>

                                    <a href="{{ route('delete-brand', ['id'=>$brand->id]) }}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection