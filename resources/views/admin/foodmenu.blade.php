<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss');
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar');
        <div style="position: relative; top: 60px; right: -150px">
            <form action="{{url('/uploadfood')}}" method="post" onsubmit="return validation()" enctype="multipart/form-data" >
                @csrf

                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" placeholder="Write a title" required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Price</label>
                    <input style="color:blue" type="num" name="price" placeholder="Write a price" required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Image</label>
                    <input style="color:blue" type="file" name="image" required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Desciption</label>
                    <input style="color:blue" type="text" name="description" placeholder="Write a description" required/>
                </div>
                <div style="display: flex; justify-content: center; margin: 2rem">
                    <button style="background: gray; border: 1px solid white; border-radius: 2px" type="submit"> Add Food </button>
                </div>
            </form>

            <div>
                <table bgcolor= "black">
                    <tr>
                        <th style="padding: 60px">Food Name</th>
                        <th style="padding: 60px">Price</th>
                        <th style="padding: 60px">Description</th>
                        <th style="padding: 60px">Image</th>
                        <th style="padding: 60px">Action</th>
                        <th style="padding: 60px">Action2</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center"> 
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>
                        <td><img height="150px" width="200px" src="/foodimage/{{$data->image}}"></td>
                        <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                        <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
            <script>
                @if(session('success'))
                    toastr.success("{{ session('success') }}");
                @endif
            </script>
    @include('admin.adminscript');
</body>

</html>
