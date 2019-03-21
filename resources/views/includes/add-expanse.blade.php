@extends('master')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="panel panel-footer">
                <form action="{{url('data-insert')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Product Name</th>
                                        <th>Product In</th>
                                        <th>Product Out</th>
                                        <th>
                                            <a href="#" class="addRow"><span class="glyphicon glyphicon-plus"></span></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($welcome as $data)
                                    <tr>
                                        <td>{!! $data->date !!}</td>
                                        <td>{!! $data->product_name !!}</td>
                                        <td>{!! $data->in_time !!}</td>
                                        <td>{!! $data->out_time !!}</td>
                                        <td>
                                            <a href="#" class="addRow"><span class="glyphicon glyphicon-plus"></span></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
        <!-- /.row -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript">
        $('.addRow').on('click',function(){
            addRow();
        });

        var idCond = 0;
        function addRow() {
            var addRow='<tr class="roundRow" id="rowId'+idCond+'" >\n'+
                            '<td><input type="date" name="date[]" class="form-control idCond" data-idCond="'+idCond+'" id="input1'+idCond+'"></td>\n'+
                            ' <td><input type="text" name="product_name[]" class="form-control idCond" data-idCond="'+idCond+'" id="input2'+idCond+'"></td>\n'+
                            '<td><input type="text" name="in_time[]" class="form-control idCond" data-idCond="'+idCond+'"  id="input3'+idCond+'"></td>\n'+
                            '<td><input type="text" name="out_time[]" class="form-control idCond" data-idCond="'+idCond+'" id="input4'+idCond+'"></td>\n'+
                            '<td><button type="button" class="btn btn-danger removeRoundRow"  data-idCond="'+idCond+'">X</button> </td>\n'+
                        '</tr>';

            $('tbody').append(addRow);
            idCond ++;
        }

        $(document).ready(function() {
            $('.removeRoundRow').live( "click", function() {
                $(this).parent().parent().remove();
            });
        });
    </script>
@endsection
