<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss');
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar');
        <div style="position: relative; top: 60px; right: -150px">

            <form action="{{url('/update',$data->id)}}" method="post" onsubmit="return validation()" enctype="multipart/form-data" >
                @csrf
        
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" value={{$data->title}} required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Price</label>
                    <input style="color:blue" type="num" name="price" value={{$data->price}} required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Desciption</label>
                    <input style="color:blue" type="text" name="description" value={{$data->description}} required/>
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>Old Image</label>
                    <img height="200" width="200" src="/foodimage/{{$data->image}}" />
                </div>
                <div style="display: grid; grid-template-columns: 1fr 2fr ; margin: 2rem">
                    <label>New Image</label>
                    <input style="color:blue" type="file" name="image"  required/>
                </div>
                <div style="display: flex; justify-content: center; margin: 2rem">
                    <button style="background: gray; border: 1px solid white; border-radius: 2px" type="submit"> Add Food </button>
                </div>
            </form>
            </div>
    </div>
    @include('admin.adminscript');
</body>

</html>
