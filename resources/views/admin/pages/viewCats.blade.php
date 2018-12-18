@extends('layouts.admin_layout')
@section('content')


    <div id="page-wrapper" style="margin-top: 20px; padding: 10px; height: 1300px;">
        <h2 align="center" style="margin-bottom: 20px; font-family: cursive;">View All Categorie
        </h2>
<br>
        <table class="table table-borderd table-hover">
                    <thead>
                    <tr>
                        <td> Category Id </td>
                        <td> Category Title </td>
                        <td> Delete </td>
                        <td> Update </td>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cats as $cat)
                     <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->name}}</td>

                         <td> <a href="{{url('delCat/'.$cat->id)}}"> Delete </a> </td>
                         <td> <a href="{{url('upCat/'.$cat->id)}}">  Edit  </a></td>                     </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection








