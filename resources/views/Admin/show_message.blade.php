@extends('layouts.admin_header')
@section('title')
    message
@endsection
@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('./css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('./css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('./css/message.css')}}" />
        <link rel="stylesheet" href="{{asset('./css/style.css')}}" />
    </head>
    <body>
        <a href=""><i class="fa-solid fa-house text-success fs-1 m-5"></i></a>
        <style>
            .action-cell {
                word-break: break-all;
            }
        </style>
        
        <table class="w-75 m-auto table-bordered ">
            <thead class="bg-info text-white">
                <th>Email</th>
                <th>Title</th>
                <th>Message</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($message as $item)
                <!-- بداية صف -->
                    <tr> 
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->title }}</td>
                        <td class="action-cell">{{$item->message}}</td>
                        <td class="text-center"><a href="{{route('delete.message',$item->id)}}"><i class="fa-solid fa-circle-minus text-danger"></a></i></td>

                    </tr> 
                    <!-- نهاية صف -->
                @endforeach
                
            </tbody>
        </table>
        <br><br><br><br><br><br>
    </body>
    </html>
@endsection